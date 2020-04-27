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

Route::get('/select', 'SampleController@select');
Route::get('/form/index', 'SampleFormController@index');     //一覧
Route::get('/form/show/{id}', 'SampleFormController@show');  //更新
Route::post('/form/store', 'SampleFormController@store');    //追加