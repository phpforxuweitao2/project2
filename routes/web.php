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
    Route::get('bk_cates','CatesController@index');//分类模块列表页
    Route::get('bk_cates/add','CatesController@add');//进入分类添加页面
    Route::post('bk_cates/doadd','CatesController@doadd');//处理分类添加数据
    Route::get('bk_del-{id}','CatesController@delete');//处理分类删除
    Route::get('bk_cates/trash','CatesController@trash');//进入分类回收站

    // 前台会员模块
    Route::get('bk_users','UsersController@index');

    //轮播图模块
    Route::get('bk_lunbo','LunboController@index'); //轮播图列表页
    Route::get('bk_lunbo/add','LunboController@add'); //轮播图添加
    Route::post('bk_lunbo/doadd','LunboController@doadd'); //轮播图添加处理
    Route::get('bk_lunbo/del/{id}','LunboController@delete'); //处理删除
    Route::get('bk_lunbo/edit/{id}','LunboController@edit'); //轮播图修改页
    Route::post('bk_lunbo/doedit','LunboController@doedit'); //处理修改
    Route::get('bk_lunbo/change/{id}','LunboController@change'); //启用和禁用轮播图

    //广告模块
    Route::get('bk_ads','AdsController@index'); //广告列表页
    Route::get('bk_ads/add','AdsController@add'); //广告添加页
    Route::post('bk_ads/doadd','AdsController@doadd'); //广告添加处理
    Route::get('bk_ads/del/{id}','AdsController@delete'); //删除处理
    Route::get('bk_ads/edit/{id}','AdsController@edit'); //修改页面
    Route::post('bk_ads/doedit','AdsController@doedit'); //处理修改

    //友情链接模块
    Route::get('bk_links','LinksController@index'); //友情链接列表页
    Route::get('bk_links/add','LinksController@add'); //友情链接添加页
    Route::post('bk_links/doadd','LinksController@doadd'); //处理添加页
    Route::get('bk_links/del/{id}','LinksController@delete'); //删除处理
    Route::get('bk_links/edit/{id}','LinksController@edit'); //修改页面
    Route::post('bk_links/doedit','LinksController@doedit'); //处理修改
    Route::get('bk_link/change/{id}','LinksController@change'); // 启用链接
    

    //后台管理员模块

});


//后台登录模块
Route::get('bk_login','Admin\LoginController@index'); //后台登录页面

Route::post('bk_dologin','Admin\LoginController@dologin'); //后台登录处理

Route::get('bk_logout','Admin\LoginController@logout'); //后台退出登录