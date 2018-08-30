<?php
/*  User: tao    Date: 2018/8/30   Time: 8:58  */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //进入登录页面
    public function login() {
        return view('home.login.login');
    }

    //登录检测
    public function login_check() {

    }


    //进入注册页面
    public function register() {
        return view('home.login.reg');
    }

}