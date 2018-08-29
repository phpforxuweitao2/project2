<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\Ads;
use App\Http\Requests\AdsEdit;

class AdsController extends Controller
{
    //广告首页
    public function index() {
    	$ads = DB::table('advertising')->select()->paginate(5);	
    	return view('admin.ads.index',[
    		'menu_ads' => 'active',
    		'menu_ads_index' => 'active',
    		'ads' => $ads
    	]);
    }

    //广告添加
    public function add() {
    	return view('admin.ads.add',[
    		'menu_ads' => 'active',
    		'menu_ads_add' => 'active'
    	]);
    }

    //添加处理
    public function doadd(Ads $req) {
    	$data = $req->only('name','url','pos','listorder');
    	// dd($data);
    	//判断文件是否上传
    	if($req->hasFile('pic')){
    		$name = time()+rand(1,10000);
    		//获取上传文件的后缀
    		$ext = $req->file('pic')->getClientOriginalExtension();
    		//存放到指定位置
    		$req->file('pic')->move('./uploads/ads/',$name.'.'.$ext);
    		//获取图片位置
    		$pic = '/uploads/ads/'.$name.'.'.$ext;
    	}
    	$data['pic'] = $pic;
    	$data['created_at'] = time();
    	$data['updated_at'] = time();

    	$res = DB::table('advertising')->insert($data);
    	if($res){
    		return redirect('/bk_ads')->with('success','添加成功');
    	}else{
    		return redirect('/bk_ads/add')->with('error','添加失败');
    	}
    }

    //删除处理
    public function delete($id) {
    	$res = DB::table('advertising')->where('id','=',$id)->delete();
    	if($res){
    		return redirect('/bk_ads')->with('success','删除成功');
    	}else{
    		return redirect('/bk_ads')->with('success','删除失败');
    	}
    }

    //修改页面
    public function edit($id) {
    	$data = DB::table('advertising')->where('id','=',$id)->first();
    	return view('admin.ads.edit',['data'=>$data]);
    }

    public function doedit(AdsEdit $req) {
    	$data = $req->only('id','name','url','pos','listorder');
    	if($req->hasFile('pic')){
    		$name = time()+rand(1,10000);
    		//获取上传文件的后缀
    		$ext = $req->file('pic')->getClientOriginalExtension();
    		//存放到指定位置
    		$req->file('pic')->move('./uploads/ads/',$name.'.'.$ext);
    		//获取图片位置
    		$pic = '/uploads/ads/'.$name.'.'.$ext;
    		$data['pic'] = $pic;
    	}
    	
    	$data['updated_at'] = time();

    	$res = DB::table('advertising')->where('id','=',$data['id'])->update($data);
		if($res){
    		return redirect('/bk_ads')->with('success','修改成功');
    	}else{
    		return redirect('/bk_ads/edit/{id}')->with('success','修改失败');
    	}
    }

}
