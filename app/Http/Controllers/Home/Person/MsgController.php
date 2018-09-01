<?php

namespace App\Http\Controllers\Home\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

class MsgController extends Controller
{
    //信息修改页面
    public function index() {
    	$data = DB::table('users as u')
    		->join('users_detail as ud','u.id','=','ud.uid')
    		->select('u.name','u.pass','ud.sex','ud.nickname','ud.uface')
    		->where('u.id','=',1)
    		->get();

    	return view('home.Person.msg',['data'=>$data[0]]);
    }

    //处理修改
    public function doedit(Request $req) {
    	$data = $req->only('nickname','sex','pic','pass','repass');
    	// 头像修改
    	if($req->hasFile('pic')){
    		$name = time()+rand(1,10000);
    		//获取上传文件的后缀
    		$ext = $req->file('pic')->getClientOriginalExtension();
    		//存放到指定位置
    		$req->file('pic')->move('./uploads/home/',$name.'.'.$ext);
    		//获取图片位置
    		$pic = '/uploads/home/'.$name.'.'.$ext;
    		$data['pic'] = $pic;
    	}
    	// 数据库获取用户修改前的信息
    	$users = DB::table('users')->where('id','=',1)->first();
    	if(!empty($data['pass'])){
    		if(Hash::check($data['pass'],$users->pass)){ //如果修改后的密码和原密码一样，不给修改
    			return back()->with('error','修改后的密码和原密码一样');
    		}else{
    			$hash = Hash::make($data['pass']);
    			DB::table('users')->where('id','=',1)->update(['pass'=>$hash]);
    		}
    	}
    	$data['sex']=='男' ? $data['sex']='m' : $data['sex']='w'; //转换为m、w格式
    	dd($data);

    	$res = DB::table('users_detail')->where('id','=',1)->update($data);
    	if($res){
    		return back()->with('success','信息修改成功');
    	}else{
    		return back()->with('error','信息修改失败');
    	}
    }
}
