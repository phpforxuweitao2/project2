<?php
/*  User: tao    Date: 2018/8/20   Time: 11:40  */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index($uname='xxoo'){

        return view('home.index',['uname'=>$uname]);
    }
}