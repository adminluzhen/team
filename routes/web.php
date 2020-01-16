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

Route::prefix('admin')->group(function (){
    Route::get('index','AdminController@index');
    Route::get('left','AdminController@left');
    Route::get('head','AdminController@head');
    Route::get('main','AdminController@main');
});



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

