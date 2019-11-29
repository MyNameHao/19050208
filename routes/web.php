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
//Route::get('/aaa',function(){
//    echo "<script>alert('确认密码与密码不一致');window.history.go(-1);</script>";exit;
//});
Route::get('/user/login','admin\user@login');
Route::post('/user/logins','admin\user@logins');
Route::get('/news/index','admin\news@index')->middleware('user');
Route::get('/news/save','admin\news@save')->middleware('user');
Route::get('news/list','admin\news@lists')->middleware('user');
Route::get('news/play/{id}','admin\news@play')->middleware('user');
Route::post('/news/create','admin\news@create')->middleware('user');
