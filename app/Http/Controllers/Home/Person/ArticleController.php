<?php

namespace App\Http\Controllers\Home\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ArticleController extends Controller
{
	//我的文章列表
    public function index() {
    	$data = DB::table('content')
    		->select('id','title','status','updated_at')
    		->where('uname','=','匿名')
    		->where('status','!=','3')
    		->paginate(5);
    	return view('home.Person.article',['data'=>$data]);
    }

    //删除日记
    public function delete($id) {
    	// dd($id);
    	$res = DB::table('content')->where('id','=',$id)->delete();
    	if($res){
    		return back()->with('success','删除成功');
    	}else{
    		return back()->with('error','删除失败');
    	}
    }
}
