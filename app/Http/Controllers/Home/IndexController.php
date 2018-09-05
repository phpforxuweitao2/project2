<?php
/*  User: tao    Date: 2018/8/23   Time: 22:25  */


namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Cache;
use Cookie;
use App\Http\Requests\Links\Links;

class IndexController extends Controller
{

    // 前台位置内容的方法
    public function pon($pon)
    {
        // 获取该位置的顶级位置
        $cid = DB::table('cates')
                    ->select('id','name')
                    ->where('position',$pon)
                    ->where('status','!=','1')
                    ->where('status','!=','2')
                    ->first();
        if ($cid) {
            // 获取该位置顶级类的子类信息
            $list = DB::table('cates')
                        ->select('id','name')
                        ->where('pid',$cid->id)
                        ->where('status','!=','1')
                        ->where('status','!=','2')
                        ->orderBy('id')
                        ->get();
            // 将子类的信息存储在数组，找到该子类的所有内容
            $con_id = [];
            foreach($list as $v){
                $con_id[] = $v->id;
            }
            $con = DB::table('content')
                        ->select('id','title')
                        ->whereIn('cid',$con_id)
                        ->where('status','0')
                        ->limit(22)
                        ->orderBy('id','desc')
                        ->get();
            // 将点击量的数据查询出来
            $paihan = DB::table('content')
                        ->select('id','title','num')
                        ->whereIn('cid',$con_id)
                        ->where('status','0')
                        ->limit(22)
                        ->orderBy('num','desc')
                        ->get();
            // 根据时间排序最新数据
            $new = DB::table('content')
                        ->select('id','title','num','created_at')
                        ->whereIn('cid',$con_id)
                        ->where('status','0')
                        ->limit(22)
                        ->orderBy('created_at','desc')
                        ->get();
            // 获取两张图片的内容
            $pic = DB::table('content')
                        ->whereIn('cid',$con_id)
                        ->where('status','0')
                        ->where('recommand','2')
                        ->limit(2)
                        ->get();
            // 将顶级标题跟二级标题还有里面的内容存在数组
            $data[] = $cid->name;
            $data[] = $list;
            $data[] = $con;
            $data[] = $paihan;
            $data[] = $new;
            $data[] = $pic;
            return $data;
        } else {
            return false;
        }
    }

    /**
     * 前台页面
     * @return [type] [description]
     */
    public function index(Request $req) {
        //  获取所有分类
        $cate = getCatesBypid(0);
        // 热门日记
        $data = DB::table('cates')->where('status', '3')->limit(5)->get();
        // 原创下的文章
        $data_recommand = DB::table('content')->where('recommand', '=', '1')->limit(8)->get();
        // 原创投稿的轮播
        $new = DB::table('content as c')
                    ->join('users_detail as u','c.uid','=','u.uid')
                    ->where('c.is_admin','0')
                    ->where('c.status','0')
                    ->orderBy('c.id','desc')
                    ->select('c.title','c.created_at','u.nickname','u.uface','c.uid','c.id')
                    ->limit(10)
                    ->get();
        // 前台轮播图
        $pic = DB::table('lunbo')
                    ->where('status','0')
                    ->limit(4)
                    ->get();
        // 前台公告列表
        $notice = DB::table('notice')
                    ->orderBy('id','desc')
                    ->limit(3)
                    ->get();
        // 前台下的主要内容
        $list = $this->pon(1);
        // 站内前12个会员积分排行
        $user = DB::table('users as u')
                    ->join('users_detail as d','u.id','=','d.uid')
                    ->select('u.id','d.nickname','d.uface')
                    ->where('u.status','0')
                    ->orderBy('u.score','desc')
                    ->limit(12)
                    ->get();
        // dd($list);
        // 友情链接信息
        $link = DB::table('links')
                    ->where('status','0')
                    ->get();
        return view('home.index.index',[
            'cates' => $cate,
            'data' => $data,
            'data_recommand' => $data_recommand,
            'new'      => $new,
            'pic'      => $pic,
            'notice'   => $notice,
            'con1'     => $list,
            'users'    => $user,
            'link'     => $link
        ]);
    }


    /**
     * 公告详情
     * @param $id
     */
    public function show() {
        $data = DB::table('notice')
                    ->where('id',$_GET['id'])
                    ->first();
        $data->created_at = date('Y/m/d',$data->created_at);
        return json_encode($data);
    }

    //前台友情链接申请处理
    public function addlinks(Links $req) {
        $data = $req->only('name','url');
        $data['created_at'] = time();
        $data['updated_at'] = time();

        if(DB::table('links')->insert($data)){
            return back()->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }



}


