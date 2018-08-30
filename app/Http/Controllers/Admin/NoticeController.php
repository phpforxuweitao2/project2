<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\Notice\Notice;

class NoticeController extends Controller
{
    //公告列表页
    public function index() {
    	$data = DB::table('notice')->select()->get();
    	// dd($data);
    	return view('admin.notice.index',[
    		'menu_notice' => 'active',
    		'menu_notice_index' => 'active',
    		'data' => $data
    	]);
    }

    //公告添加页
    public function add() {
    	return view('admin.notice.add',[
    		'menu_notice' => 'active',
    		'menu_notice_add' => 'active'
    	]);
    }

    //添加处理
    public function doadd(Notice $req) {
    	$data = $req->only('title','content');
    	$data['created_at'] = time();
    	
    	$res = DB::table('notice')->insert($data);
    	if($res){
    		return redirect('/bk_notice')->with('success','添加成功');
    	}else{
    		return redirect('/bk_notice/add')->with('error','添加失败');
    	}
    }

    //修改页面
    public function edit($id) {
    	$data = DB::table('notice')->where('id','=',$id)->first();
    	// dd($data);
    	return view('admin.notice.edit',['data'=>$data]);
    }

    //处理修改
    
}
