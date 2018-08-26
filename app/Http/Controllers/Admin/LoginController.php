<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class LoginController extends Controller
{

    public function index() {
    	return view('admin.login.login');
    }

    //处理登录方法
    public function dologin(Requset $request) {

    }
}
