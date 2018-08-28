<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\AdminLogin;
use Hash;
use Cache;
use Carbon\Carbon;

class LoginController extends Controller
{
	public $limit = 3;

	//登录
    public function index() {
    	return view('admin.login.login');
    }

    //处理登录方法
    public function dologin(Request $request) {
    	$name = $request -> input('name');
    	$pass = $request -> input('pass');
    	$user = DB::table('admin_users')
    	    ->where('name','=',$name)
    	    ->first(); //获取数据库中匹配的用户名
    	
    	
    	if($user) {
    		// check方法验证hash密码
    		if(Hash::check($pass,$user->pass)) {
                session(['id'=>$user->id]); //把用户信息写入到session
                session(['name'=>$user->name]);
                //登录成功，跳转到后台首页
    			return redirect('/bk_index')->with('success','登录成功');
    		} else {
    			if(Cache::get('status') == '1'){
    				return redirect('/bk_login')->with('error','该账号已被禁用');
    			}
   			
    			if(empty($num)){
    				$num=1;
    			}else if(!empty($num) && $num<3){
    				$num++;
    			}
    			
    			Cache::put(['num'=>$num],Carbon::now()->addSeconds(300));
    			echo Cache::get('num');die;
    			// echo $num;die;
    			if(Cache::get('num') > 3){
    				cache(['status'=>'1'],Carbon::now()->addSeconds(300));
    				//修改status的值
		    		return redirect('/bk_login')->with('error','你已经登录错误5次，请1小时后再登录');
		    	}
    			return redirect('/bk_login')->with('error','密码有误');
    		}
    	} else {
    		return redirect('/bk_login')->with('error','用户名有误');
    	}
    }

    //退出登录
    public function logout(Request $request) {
    	//销毁session值
    	$request -> session() -> pull('id');
        $request -> session() -> pull('name');
    	return redirect('/bk_login');
    }
}
