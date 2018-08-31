<?php

namespace App\Http\Controllers\Home\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
	//我的个人中心
    public function index() {
    	$data = DB::table('users as u')
    		->join('users_detail as ud','u.id','=','ud.uid')
    		->select('u.name','u.qq','u.email','u.score','ud.uface','ud.ncikname','ud.fame')
    		->where('u.id','=',2)
    		->get();
        $to_uid = DB::table('guanzhu')->count();
        
    	return view('home.Person.index',['data'=>$data],['to_uid'=>$to_uid]);
    }


}
