<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  
    public function index()
    {
        return view('admin/index/index');
    }

    public function left()
    {
        return view('admin/index/left');
    }

    public function head()
    {
        return view('admin/index/head');
    }

    public function main()
    {
        return view('admin/index/main');
    }

}
