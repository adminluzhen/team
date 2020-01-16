<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cate;
use Illuminate\Support\Facades\Cache;
class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $c_name=request()->c_name;
         $c_man=request()->c_man;
         $where=[];
          if ($c_name){
            $where[]=['c_name','like',"%$c_name%"];
        }
         if ($c_man){
            $where[]=['c_man','like',"%$c_man%"];
        }
        $data=Cache::get('data_'.$c_name.$c_man);
        if($data)  if (!$data){
            echo '数据库';
        }
        $data = Cate::where($where)->orderBy('c_id','desc')->paginate(2);

         $query = request() -> all();
        //dd($query);

        if(request() -> ajax()){

            return view('admin.cate.ajaxindex',['data'=>$data,'query'=>$query]);

        }

        return view('admin.cate.index',['data'=>$data,'query' => $query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.cate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $post = $request -> except('_token');
          $res = Cate::insert($post);
           if($res){

            return redirect('/cate');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Cate::where('c_id',$id) -> first();

        return view('admin.cate.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = $request -> except('_token');
      
         $res = Cate::where('c_id','=',$id)->update($post);

        if($res !== false){

            return redirect('/cate');

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
        
        //ORM操作
        $res = Cate::destroy($id);
        if($res){

            return redirect('/cate');

        }

    }
}