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
Route::group(['middleware'=>'login','namespace'=>'Admin'],function(){
    Route::get('bk_index','IndexController@index');//后台首页

    //分类模块
    Route::get('bk_cates','CatesController@index');//分类模块列表页
    Route::get('bk_cates/add','CatesController@add');//进入分类添加页面
    Route::post('bk_cates/doadd','CatesController@doadd');//处理分类添加数据
    Route::get('bk_cates/down-{id}','CatesController@down');//处理分类禁用
    Route::get('bk_cates/up-{id}','CatesController@up');//处理分类启用
    Route::get('bk_cates/del-{id}','CatesController@delete');//处理分类删除
    Route::get('bk_cates/edit-{id}','CatesController@edit');//进入分类修改页面
    Route::post('bk_cates/doedit','CatesController@doedit');//处理分类修改数据

    // 后台首页
    Route::get('bk_index','IndexController@index');

    // 前台会员模块
    Route::get('bk_users','UsersController@index');

    //后台管理员模块

});


//后台登录模块
Route::get('bk_login','Admin\LoginController@index'); //后台登录页面

Route::post('bk_dologin','Admin\LoginController@dologin'); //后台登录处理

Route::get('bk_logout','Admin\LoginController@logout'); //后台退出登录