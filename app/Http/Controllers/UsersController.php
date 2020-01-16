<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserModel;
use Validator;

class UsersController extends Controller
{
    function login(){
    	return view('admin/users/login');
    }
    function do_login(Request $request){
    $post=request()->except('_token');
        $request->validate([
         'admin_name' => 'required:admin|max:255',
          'admin_pwd' => 'required:admin|max:255'
        ],[

            'admin_name.required'=>"管理员名称必填",
            'admin_name.unique'=>"管理员名称已存在",
            //'is_show.required'=>'是否显示必填!'
            'admin_pwd.required'=>"密码必填"
        ]);

       $data=UserModel::where($post)->first();

        if($data){
            session(['admin'=>$data]);
            request()->session()->save();
            return redirect('/admin/index');
        }       
        return redirect('/users/login')->with('msg','此用户不存在!其联系管理员');
    }
    function logout(){
         session(['admin'=>null]);
            request()->session()->save();
            return redirect('users/login');
               
    }
}
