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
//前端
Route::get('/','Home\IndexController@index');
Route::group(['namespace'=>'Home'],function(){
    Route::get('/home/{name?}','HomeController@index')->where([
        'name'  => '\w+'
    ]);
});

//后端
Route::group(['namespace'=>'Admin'],function(){
    Route::get('bk_index','IndexController@index');//后台首页

    //分类模块
    Route::get('bk_cate','CatesController@index');//分类模块列表页

    // 后台首页
    Route::get('bk_index','IndexController@index');

    // 前台会员模块
    Route::get('bk_users','UsersController@index');

    //后台管理员模块

});


//后台登录模块
Route::get('bk_login','Admin\LoginController@index');

//后台登录处理
Route::get('bk_dologin','Admin\LoginController@dologin');