<?php
/*  User: tao    Date: 2018/8/23   Time: 22:25  */


namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    //无限级递归方法
    public function getCatesBypid($pid){
        $s = DB::table('cates')->where('pid','=',$pid)->orderBy('id','asc')->get();
        //遍历
        $data=[];
        foreach($s as $key=>$value){
            $value->dev=$this->getCatesBypid($value->id);
            $data[]=$value;
        }
        return $data;
    }

    /**
     * 前台首页
     * @return [type] [description]
     */
    public function index() {

        $cate = $this->getCatesBypid(0);
        $data = DB::table('cates')->where('status','3')->get();
        return view('home.index',[
            'cates' =>  $cate,
            'data'  => $data
        ]);
        return view('home.index.index');

    }
}
