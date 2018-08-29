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
    Route::get('bk_cates/add/{id?}','CatesController@add');//进入分类添加页面
    Route::post('bk_cates/doadd','CatesController@doadd');//处理分类添加数据
<<<<<<< HEAD
    Route::get('bk_cates/del-{id}','CatesController@delete');//处理分类删除
    Route::get('bk_cates/edit-{id}','CatesController@edit');//进入分类修改页面
    Route::post('bk_cates/doedit','CatesController@doedit');//处理分类修改数据

    //内容管理模块
    Route::get('bk_content/riji','ContentController@riji');//日记列表页面
    Route::get('bk_content/riji/add','ContentController@riji_add');//进入添加日记页面
    Route::post('bk_content/riji/saveriji','ContentController@save_riji');//保存日记
=======
<<<<<<< HEAD
    Route::get('bk_del-{id}','CatesController@delete');//处理分类删除
    Route::get('bk_cates/trash','CatesController@trash');//进入分类回收站
=======
    Route::get('bk_cates/down-{id}','CatesController@down');//处理分类禁用
    Route::get('bk_cates/up-{id}','CatesController@up');//处理分类启用
    Route::get('bk_cates/del-{id}','CatesController@delete');//处理分类删除
    Route::get('bk_cates/edit-{id}','CatesController@edit');//进入分类修改页面
    Route::post('bk_cates/doedit','CatesController@doedit');//处理分类修改数据
>>>>>>> a2b5f5a38434930189e9e7205ccda03ccaf9f4b7
>>>>>>> 770260d86209de690bf46a36bf6246213105d6cd

    // 前台会员模块
    Route::get('bk_users','UsersController@index');//会员列表
    Route::get('bk_users/create','UsersController@create');//会员添加页
    Route::post('bk_users/add','UsersController@add');//会员添加方法
    Route::get('bk_users/del/{id}','UsersController@del')->where(['id' => '\d+']);//会员删除
    Route::get('bk_users/open/{id}','UsersController@open')->where(['id' => '\d+']);//会员启用
    Route::get('bk_users/close/{id}','UsersController@close')->where(['id' => '\d+']);//会员禁用
    Route::get('bk_users/{id}/edit','UsersController@edit')->where(['id' => '\d+']);//会员修改页
    Route::post('bk_users/update','UsersController@update');//会员修改操作
    Route::get('bk_users/{id}/show','UsersController@show')->where(['id' => '\d+']);//会员详情页

<<<<<<< HEAD
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
=======
    //后台角色管理
    Route::get('bk_role','RoleController@index');//角色列表
    Route::get('bk_role/create','RoleController@create');//角色添加页
    Route::post('bk_role/add','RoleController@add');//角色添加方法
    Route::get('bk_role/del/{id}','RoleController@del')->where(['id' => '\d+']);//角色删除
    Route::get('bk_role/open/{id}','RoleController@open')->where(['id' => '\d+']);//角色启用
    Route::get('bk_role/close/{id}','RoleController@close')->where(['id' => '\d+']);//角色锁定
    Route::get('bk_role/{id}/edit','RoleController@edit')->where(['id' => '\d+']);//角色修改页
    Route::post('bk_role/update','RoleController@update');//角色修改操作
    Route::get('bk_role/{id}/node','RoleController@node')->where(['id' => '\d+']);//角色权限分配页
    Route::post('bk_role/donode','RoleController@donode');//角色权限分配操作
>>>>>>> a2b5f5a38434930189e9e7205ccda03ccaf9f4b7

    // 后台权限管理
    Route::get('bk_node','NodeController@index');//权限列表
    Route::get('bk_node/create','NodeController@create');//权限添加页
    Route::post('bk_node/add','NodeController@add');//权限添加方法
    Route::get('bk_node/del/{id}','NodeController@del')->where(['id' => '\d+']);//权限员删除
    Route::get('bk_node/open/{id}','NodeController@open')->where(['id' => '\d+']);//权限启用
    Route::get('bk_node/close/{id}','NodeController@close')->where(['id' => '\d+']);//权限锁定
    Route::get('bk_node/{id}/edit','NodeController@edit')->where(['id' => '\d+']);//权限修改页
    Route::post('bk_node/update','NodeController@update');//权限修改操作

    //后台管理员模块
                                                                                                                          Route::get('bk_adminuser','AdminUserController@index');//管理员列表
    Route::get('bk_adminuser/create','AdminUserController@create');//管理员添加页
    Route::post('bk_adminuser/add','AdminUserController@add');//管理员添加方法
    Route::get('bk_adminuser/del/{id}','AdminUserController@del')->where(['id' => '\d+']);//管理员删除
    Route::get('bk_adminuser/open/{id}','AdminUserController@open')->where(['id' => '\d+']);//管理员启用
    Route::get('bk_adminuser/close/{id}','AdminUserController@close')->where(['id' => '\d+']);//管理员锁定
    Route::get('bk_adminuser/{id}/edit','AdminUserController@edit')->where(['id' => '\d+']);//管理员修改页
    Route::post('bk_adminuser/update','AdminUserController@update');//管理员修改操作
    Route::get('bk_adminuser/{id}/node','AdminUserController@node')->where(['id' => '\d+']);//管理员角色分配页
    Route::post('bk_adminuser/donode','AdminUserController@donode');//管理员角色分配操作
});


//后台登录模块
Route::get('bk_login','Admin\LoginController@index'); //后台登录页面


//后台登录处理
Route::post('bk_dologin','Admin\LoginController@dologin'); //后台登录处理
Route::get('bk_logout-{id}','Admin\LoginController@logout'); //后台退出登录

