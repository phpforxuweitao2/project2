<?php

namespace App\Http\Controllers\Home\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

class MsgController extends Controller
{
    //信息修改页面
    public function index(Request $req) {
        $all = $req->session()->all();
        $id = $all['home_user']['id'];
    	$data = DB::table('users as u')
    		->join('users_detail as ud','u.id','=','ud.uid')
    		->select('u.name','u.pass','ud.sex','ud.nickname','ud.uface','ud.birthday')
    		->where('u.id','=',$id)
    		->get();

    	return view('home.Person.msg',['data'=>$data[0]]);
    }

    //处理修改
    public function doedit(Request $req) {
        $all = $req->session()->all();
        $id = $all['home_user']['id'];
    	$data = $req->only('nickname','sex','birthday');
        $y = substr($data['birthday'],0,4);
        $m = substr($data['birthday'],5,2);
        $d = substr($data['birthday'],8,2);
        $mktime = mktime(0,0,0,$m,$d,$y);

        if(time()-$mktime<0){
            return back()->with('error','出生日期有误');
        }
        // dd($data);
    	// 头像修改
    	if($req->hasFile('pic')){
    		$name = time()+rand(1,10000);
    		//获取上传文件的后缀
    		$ext = $req->file('pic')->getClientOriginalExtension();
    		//存放到指定位置
    		$req->file('pic')->move('./uploads/home/',$name.'.'.$ext);
    		//获取图片位置
    		$pic = '/uploads/home/'.$name.'.'.$ext;
    		$data['uface'] = $pic;
    	}
        
    	$data['sex']=='男' ? $data['sex']='m' : $data['sex']='w'; //转换为m、w格式
    	// dd($data);

    	$res = DB::table('users_detail')->where('id','=',$id)->update($data);
    	if($res){
    		return back()->with('success','信息修改成功');
    	}else{
    		return back()->with('error','信息修改失败');
    	}
    }
}
