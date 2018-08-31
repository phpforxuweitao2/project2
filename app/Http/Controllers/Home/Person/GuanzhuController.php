<?php

namespace App\Http\Controllers\Home\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuanzhuController extends Controller
{
    //粉丝关注列表页
	public function index() {
		return view('home.Person.guanzhu');
	}
}
