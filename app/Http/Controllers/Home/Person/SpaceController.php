<?php

namespace App\Http\Controllers\Home\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SpaceController extends Controller
{
    //个人中心主页
    public function index(Request $req,$id) {
    	$all = $req->session()->all();
        $login_id = $all['home_user']['id'];
        $name = $all['home_user']['name'];
        //判断要进去的个人空间是自己的还是其他人的
        if($login_id == $id){
            $id = $login_id;
        }
        //用户详情表与关注表关联
    	$msg = DB::table('users_detail as ud')
    		->join('users as u','ud.uid','=','u.id')
    		->select('ud.nickname','ud.uface','ud.signatrue','ud.sex','ud.fame','u.score','ud.last_login_time','ud.uid')
    		->where('uid','=',$id)
    		->get();
    	// dd($msg);
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

    //关注处理
    public function gz(Request $req,$id) {
        $all = $req->session()->all();
        $login_id = $all['home_user']['id'];
        //如果进自己的空间，则不能关注自己
        if($login_id == $id){
            return back()->with('error','不能关注自己');
        }
        $data['from_uid'] = $login_id;
        $data['to_uid'] = $id;
        $data['create_at'] = time();

        $res = DB::table('guanzhu')->insert($data);
        if($res){
            return back()->with('success','关注成功');
        }else{
            return back()->with('error','关注失败');
        }
    }

}