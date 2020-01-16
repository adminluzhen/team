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

