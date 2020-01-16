<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\News;
use Illuminate\Support\Facades\Redis;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $word =request()->n_title??'';
        $n_content =request()->n_content??'';
        $page =request()->page;
        $data =redis::get('data_'.$page.'_'. $word.'_'.$n_content);
        if(!$data){
            echo "走DB";
                $where= [];
                if($word){
                    $where[]=['n_title','like',"%$word%"];
                }
                if($n_content){
                    $where[]=['n_content','like',"%$n_content%"];
                }
                $pageSize =config('app.pageSize');
                // $data = DB::table('news')->where($where)->orderBy('n_id', 'desc')->paginate( $pageSize);
                $data =News::select('news.*','cate.c_name')
                    ->leftjoin('cate','news.c_id','=','cate.c_id')
                    ->where($where)
                    ->orderBy('n_id', 'desc')
                    ->paginate( $pageSize);
                 $data = serialize($data);
              Redis::setex('data_'.$page.'_'. $word.'_'.$n_content,20,$data);

        }
        $data =unserialize($data);

        $query=request()->all();
        if(request()->ajax()){
            return view('admin.news.ajaxindex',['data'=>$data,'query'=>$query]);
        }
        return view('admin.news.index',['data'=>$data,'query'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = DB::table('cate')->get();
//      dd($category);
        return view('admin.news.create',['category'=>$category]);
    }

    /**
     添加的执行页面
     */
    public function store(Request $request)
    {
        $post = $request->except('_token');
        if($request->hasFile('n_myfile')){
            $post['n_myfile']= $this->upload('n_myfile');
        }
        $res =DB::table('news')->insert($post);
//        if ($res) {
//            echo "<script>alert('添加成功');location.href='/news';</script>";
//        }
        if($res){
            return redirect('/news');
        }
        exit('没有文件上传，或者文件上传有误');
    }

    //文件上传
    public function upload($filename){
        //判断文件上传是否成功
        if( request()->file($filename)->isValid() ){
            //接收文件
            $photo  =request()->file($filename);
            //上传文件
            $store_result = $photo->store('news');
            return $store_result;
        }
    }

    /**
     * 展示页面
     */
    public function show($id)
    {
        //
    }

    /**
     * 修改页面
     */
    public function edit($id)
    {
        $data =DB::table('news')->where('n_id',$id)->first();
        return view('admin.news.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *修改
     */
    public function update(Request $request, $id)
    {
        $post =$request->except('_token');
        $res =DB::table('news')->where('n_id',$id)->update($post);
        if($res!==false){
            return redirect('/news');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = DB::table('news')->where('n_id',$id)->delete();
        if($res){
            return redirect('/news');
        }

    }
}
