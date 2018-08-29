<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\Lunbo;
use App\Http\Requests\LunboEdit;

class LunboController extends Controller
{
    //轮播图列表页
    public function index() {
    	$data = DB::table('lunbo')->select()->get();
    	return view('admin.lunbo.index',[
    		'menu_lunbo' => 'active',
    		'menu_lunbo_index' => 'active',
    		'data' => $data
    	]);
    }

    //轮播图添加
    public function add() {
    	return view('admin.lunbo.add',[
    		'menu_lunbo' => 'active',
    		'menu_lunbo_add' => 'active'
    	]);
    }

    //添加处理
    public function doadd(Lunbo $req) {
    	$data = $req->only('url','status','orderlist');
    	//图片处理
    	if($req->hasFile('pic')){
    		$name = time()+rand(1,10000);
    		//获取上传文件的后缀
    		$ext = $req->file('pic')->getClientOriginalExtension();
    		//存放到指定位置
    		$req->file('pic')->move('./uploads/lunbo/',$name.'.'.$ext);
    		//获取图片位置
    		$pic = '/uploads/lunbo/'.$name.'.'.$ext;
    	}
    	$data['pic'] = $pic;
    	$data['created_at'] = time();
    	$data['updated_at'] = time();
    	$res = DB::table('lunbo')->insert($data);
    	if($res){
    		return redirect('bk_lunbo')->with('success','添加成功');	
    	}else{
    		return redirect('bk_lunbo/add')->with('error','添加失败');
    	}
    }

    //删除处理
    public function delete($id){
    	$res = DB::table('lunbo')->where('id','=',$id)->delete();
    	if($res){
    		return redirect('bk_lunbo')->with('success','删除成功');	
    	}else{
    		return redirect('bk_lunbo}')->with('error','删除失败');
    	}
    }

    //修改页面
    public function edit($id) {
    	$data = DB::table('lunbo')->where('id','=',$id)->first();
    	// dd($data);
    	return view('admin.lunbo.edit',['data'=>$data]);
    }

    //处理修改
    public function doedit(LunboEdit $req) {
    	$data = $req->only('id','url','orderlist');
    	$id = $data['id'];
    	//图片处理
    	if($req->hasFile('pic')){
    		$name = time()+rand(1,10000);
    		//获取上传文件的后缀
    		$ext = $req->file('pic')->getClientOriginalExtension();
    		//存放到指定位置
    		$req->file('pic')->move('./uploads/lunbo/',$name.'.'.$ext);
    		//获取图片位置
    		$pic = '/uploads/lunbo/'.$name.'.'.$ext;
    		$data['pic'] = $pic;
    	}
    	$data['updated_at'] = time();

    	$res = DB::table('lunbo')->where('id','=',$id)->update($data);
    	if($res){
    		return redirect('bk_lunbo')->with('success','修改成功');	
    	}else{
    		return redirect('bk_lunbo/edit/{$id}')->with('error','修改失败');
    	}
    }

    //启用和禁用轮播图
    public function change($id) {
    	$arr = DB::table('lunbo')->where('id','=',$id)->get();

    	if($arr[0]->status == 0){
    		$res = DB::table('lunbo')->where('id','=',$id)->update(['status'=>'1']);
    		return redirect('/bk_lunbo')->with('success','修改成功');
    	}else if($arr[0]->status == 1){
    		$res = DB::table('lunbo')->where('id','=',$id)->update(['status'=>'0']);
    		return redirect('/bk_lunbo')->with('success','修改成功');
    	}	
    }
}
