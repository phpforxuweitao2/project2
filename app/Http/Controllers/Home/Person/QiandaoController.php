<?php

namespace App\Http\Controllers\Home\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class QiandaoController extends Controller
{
    //签到记录
    public function index(Request $req) {
    	$all = $req->session()->all();
        $id = $all['home_user']['id'];
    	$data = DB::table('qiandao_detail as qdd')
    		->join('users as u','qdd.uid','=','u.id')
    		->select('qdd.id','u.name','qdd.score','qdd.created_at')
    		->where('u.id','=',$id)
    		->paginate(2);
    	return view('home.person.qiandao',['data'=>$data]);
    }
}
