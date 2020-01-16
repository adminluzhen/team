<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserModel;
use Validator;
use DB;
class GuanliyuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data=UserModel::orderBy('admin_id','desc')->paginate(3);
        //dd($data);
        $logs = DB::getQueryLog();

        //dump($logs);
        $query=request()->all();
        return view('admin/users/index',['data'=>$data,'query'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(666);
        
        $request->validate([
         'admin_name' => 'required|unique:admin|max:255',
          'admin_pwd' => 'required:admin|max:255'
        ],[

            'admin_name.required'=>"管理员名称必填",
            'admin_name.unique'=>"管理员名称已存在",
            //'is_show.required'=>'是否显示必填!'
            'admin_pwd.required'=>"密码必填"
        ]);


        $post=$request->except('_token');
        $post['add_time']=time();
        // dd($post);
        $res=UserModel::insert($post);
        if($res){
        return redirect('/users');
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
        $data=UserModel::find($id);
        return view('admin.users.edit',['data'=>$data]);
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
      $post=$request->except('_token');
        //dd($post);
        $res=UserModel::where('admin_id',$id)->update($post);
        //dd($res);
        if($res!==false){
            return redirect('/users');
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
          $res=UserModel::destroy($id);
             if($res){
            return redirect('/users');
        }
        //dd($id);
    }
}
