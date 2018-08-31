<?php

namespace App\Http\Controllers\Home\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\Content\ContentRijiSave;

class RijiController extends Controller
{
    //日记投稿页面
    public function index() {
    	return view('home.Person.riji');
    } 

    //日记添加处理
    public function doadd(ContentRijiSave $req) {
    	// dd($req);
    	$data = $req->only('uname','cid','week','weather','title','content');
    	$data['size'] = mb_strlen($data['content']);
    	$data['created_at'] = time();
    	$data['updated_at'] = time();
    	$res = DB::table('content')->insert($data);
    	if($res){
    		return redirect('/ps_riji')->with('success','添加成功');
    	}else{
    		return redirect('/ps_riji')->with('error','添加失败');
    	}
    }
}
