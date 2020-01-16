<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware('checklogin')->group(function (){
    Route::get('index','AdminController@index');
    Route::get('left','AdminController@left');
    Route::get('head','AdminController@head');
    Route::get('main','AdminController@main');
});

<<<<<<< HEAD
//新闻


Route::prefix('news')->group(function(){
     Route::get('create','NewsController@create');
     Route::post('store','NewsController@store');

    Route::get('/','NewsController@index');
    Route::get('/edit/{id}','NewsController@edit');
    Route::post('/update/{id}','NewsController@update');
   Route::get('/del/{id}','NewsController@destroy');
//    Route::get('checkOnly','NewsController@checkOnly');

});
=======

Route::prefix('link')->group(function(){
    Route::get('showadd','LinkController@showadd');
    Route::post('do_add','LinkController@do_add');
    Route::get('list','LinkController@list');
    Route::get('del','LinkController@del');
    Route::get('update','LinkController@update');
    Route::post('do_update','LinkController@do_update');
});

Route::prefix('cate')->group(function(){

   Route::get('create','cateController@create');
   Route::post('/store','cateController@store');
   Route::get('/','cateController@index');
   Route::get('destroy/{id}','cateController@destroy');

   Route::get('edit/{id}','cateController@edit');
   Route::post('update/{id}','cateController@update');
  
   });
>>>>>>> 561e806ce6b83f8a23356ef9c9901399a7af7a19


Route::prefix('users')->group(function (){
	Route::get('login','UsersController@login');
	Route::post('do_login','UsersController@do_login');
	Route::get('logout','UsersController@logout');
});
Route::prefix('users')->middleware('checklogin')->group(function(){
Route::get('create','GuanliyuanController@create');
Route::post('store','GuanliyuanController@store');
Route::get('/','GuanliyuanController@index');
Route::get('edit/{id}','GuanliyuanController@edit');
Route::post('update/{id}','GuanliyuanController@update');
Route::get('delete/{id}','GuanliyuanController@destroy');
//Route::get('show/{id}','GuanliyuanController@show');

});

