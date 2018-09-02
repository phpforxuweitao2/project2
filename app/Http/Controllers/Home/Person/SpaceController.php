<?php

namespace App\Http\Controllers\Home\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SpaceController extends Controller
{
    //个人中心主页
    public function index(Request $req) {
    	$all = $req->session()->all();
        $id = $all['home_user']['id'];
        $name = $all['home_user']['name'];
    	$msg = DB::table('users_detail as ud')
    		->join('guanzhu as gz','ud.uid','=','from_uid')
    		->join('users as u','ud.uid','=','u.id')
    		->select('ud.nickname','ud.uface','ud.signatrue','ud.sex','ud.fame','u.score','ud.last_login_time')
    		->where('uid','=',$id)
    		->get();
    	
    	//获取粉丝人数
    	$fs = DB::table('users_detail as ud')
    		->join('guanzhu as gz','ud.uid','=','to_uid')
    		->where('uid','=',$id)
    		->count();
		//获取我关注人数
    	$msg[0]->from_uid = count($msg); 
    	
    	$content = DB::table('content')->select('title','content','num','laud','updated_at')->where('uid','=',$id)->get();
    	// dd($content);
    	return view('home.Person.space',[
    			'name'=>$name,
    			'msg'=>$msg[0],
    			'fs'=>$fs,
    			'content'=>$content
    		]);
    }


}
