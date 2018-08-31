<?php
/*  User: tao    Date: 2018/8/23   Time: 22:25  */


namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Cache;
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
        $data = DB::table('cates')->where('status','3')->limit(5)->get();
        $data_recommand = DB::table('content')->where('recommand','=','1')->limit(8)->get();
//        $data1  = DB::table('content as a')
//            ->join('admin_users as au','a.uid','=','au.id')
//            ->select('a.id','a.uid','a.title','a.uname','a.created_at')
//            ->where('a.is_admin','=','1')
//            ->limit(8)
//            ->get();
//        $data_content  = DB::table('content as a')
//            ->join('users as u','a.uid','=','u.id')
//            ->join('users_detail as ud','u.name','=','ud.uid')
//            ->select('a.id','a.uid','a.title','a.uname','a.created_at','ud.uface')
//            ->where('a.is_admin','=','0')
//            ->limit(8)
//            ->get();
//        dd($data_content);
        return view('home.index.index',[
            'cates' =>  $cate,
            'data'  => $data,
            'data_recommand'    => $data_recommand
            // 'data_content'      => $data_content
        ]);
    }
}
