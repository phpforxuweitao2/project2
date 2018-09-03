<?php

namespace App\Http\Controllers\Home\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
	//我的个人中心
    public function index(Request $req) {
        $all = $req->session()->all();
        $id = $all['home_user']['id'];
        //用户详情与用户表关联
    	$data = DB::table('users as u')
    		->join('users_detail as ud','u.id','=','ud.uid')
    		->select('u.name','u.qq','u.email','u.score','ud.uface','ud.nickname','ud.fame')
    		->where('u.id','=',$id)
    		->get();
            
        $to_uid = DB::table('guanzhu')->where('from_uid','=',$id)->count();
        $qd = DB::table('qiandao')->where('uid','=',$id)->get();

    	return view('home.Person.index',[
            'data'   => $data[0],
            'to_uid' => $to_uid,
            'qd'     => $qd
            ]);
    }

    //签到记录
     public function qiandao(Request $req) {
        $all = $req->session()->all();
        $id = $all['home_user']['id'];
        $data = DB::table('qiandao')->where('uid','=',$id)->get();
        if($data[0]->status == 0){
            $num = rand(5,10); //获取随机签到积分
            $users = DB::table('users')->where('id','=',$id)->get();
            $score = $users[0]->score;
            $score += $num; //总积分

            $continue_num = $data[0]->continue_num;
            $continue_num++; //连续签到日数加1
            // 用户表与签到表关联
            DB::table('qiandao as qd')
                ->join('users as u','qd.uid','=','u.id')
                ->where('qd.uid','=',$id)
                ->update([
                        'qd.status'       => '1',
                        'u.score'         => $score,
                        'qd.continue_num' => $continue_num    
                    ]);
            //签到详情表数据的插入
            DB::table('qiandao_detail')
                ->insert(['uid'=>$id,'score'=>$num,'created_at'=>time()]);

            return response()->json([ 
                'code'  => 1,
                'msg'   => '签到成功',
                'num'   => $num,
                'score' => $score
            ]); 
        }else{
            return 0;
        }
        
    }


}
