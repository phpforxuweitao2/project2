<?php

namespace App\Http\Controllers\Home\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GuanzhuController extends Controller
{
    //粉丝关注列表页
	public function index() {
		// from_uid 点击关注用户的id
		// to_uid   被关注用户id
		// 1 昵称是xxx         昵称是xxx  关注  叫什么鬼名字
		// 2 叫什么鬼名字
		// 3 粉丝              粉丝       关注  昵称是xxx
		//ncikname sex fame uface
		$data = DB::table('users_detail as ud')
			->join('guanzhu as gz','ud.uid','=','gz.to_uid')
			->select('ud.nickname','ud.sex','ud.fame','ud.uface','gz.from_uid','gz.to_uid')
			->where('gz.from_uid','=',1)
			->get();
		// dd($data);
		return view('home.Person.gz_index',['data'=>$data]);
	}

	//我的粉丝列表页
	public function fensi() {
		$data = DB::table('users_detail as ud')
			->join('guanzhu as gz','ud.uid','=','gz.from_uid')
			->select('ud.nickname','ud.sex','ud.fame','ud.uface','gz.to_uid')
			->where('gz.to_uid','=',1)
			->get();
			
		return view('home.Person.gz_fensi',['data'=>$data]);
	}

	//取消关注
	public function quxiao($id) {
		// echo $id;
		$res = DB::table('guanzhu')
			->where('from_uid','=',1)
			->where('to_uid','=',$id)
			->delete();
		if($res){
			return back()->with('success','取消关注成功');
		}else{
			return back()->with('error','取消关注失败');
		}
	}
}
