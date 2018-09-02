<?php

namespace App\Http\Controllers\Home\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class LetterController extends Controller
{
	public function index() {

	}

    //收件箱页面
	public function in(Request $req) {
		$all = $req->session()->all();
        $id = $all['home_user']['id'];
		$data = DB::table('letter as l')
			->join('users_detail as ud','l.from_uid','=','ud.uid')
			->select('ud.uface','ud.nickname','l.to_uid','l.content','l.created_at')
			->where('uid','=',$id)
			->get();
		
		return view('home.Person.letter_in',['data'=>$data]);
	}

	//发件箱页面
	public function out(Request $req) {
		$all = $req->session()->all();
        $id = $all['home_user']['id'];
		$data = DB::table('letter as l')
			->join('users_detail as ud','l.from_uid','=','ud.uid')
			->select('ud.uface','ud.nickname','l.to_uid','l.content','l.created_at')
			->where('uid','=',$id)
			->get();
		return view('home.Person.letter_out',['data'=>$data]);
	}
}
