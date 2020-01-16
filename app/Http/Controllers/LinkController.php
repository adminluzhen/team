<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinkModel;
use DB;
class LinkController extends Controller
{
    public function showadd(){
        return view('admin/link/add');
    }

    public function do_add(){
        $post = request()->except('_token');
        $res = LinkModel::insert($post);
        if($res){
            return redirect('link/list');
        }else{
            return redirect('link/showadd');
        }
    }

    public function list(){
        $data = LinkModel::paginate(2);
        if(request()->ajax()){
            return view('admin/link/ajaxlist',['data'=>$data]);
        }
        return view('admin/link/list',['data'=>$data]);
    }

    public function del(){
        $l_id = request()->input('l_id');
        $res = LinkModel::where('l_id',$l_id)->delete();
        if($res){
            return redirect('link/list');
        }else{
            return redirect('link/list');
        }
    }

    public function update(){
        $l_id = request()->input('l_id');
        $data = LinkModel::where('l_id',$l_id)->first();
        return view('admin/link/update',['data'=>$data]);
    }

    public function do_update(){
        $post = request()->except('_token');
        $res = LinkModel::where('l_id',$post['l_id'])->update($post);
        if($res){
            return redirect('link/list');
        }else{
            return redirect('link/update');
        }
    }
}
