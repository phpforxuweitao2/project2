<?php

namespace App\Http\Controllers\Home\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QiandaoController extends Controller
{
    //签到记录
    public function index() {
    	return view('home.person.qiandao');
    }
}
