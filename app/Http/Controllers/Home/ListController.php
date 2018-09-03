<?php
/*  User: tao    Date: 2018/9/2   Time: 15:01  */


namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use DB;

class ListController extends Controller
{

    /**
     * 列表页面, 根据$id(分类id) 将这个分类的所有数据 列出来
     * @param $id
     */
    public function index($id) {
        //导航栏分类列表
        $cate = $this->getCatesBypid(0);
        //根据$id获取该分类的列表数据和类名称和类id
        $cate_info = DB::table('cates')->where('id',$id)->select(['id','name','pid'])->first();
        if ( $cate_info->pid != 0 ) {   //进入子级分对应的内容列表页面
            $list = DB::table('cates as c')
                ->join('content as con','c.id','=','con.cid')
                ->where('c.id',$id)
                ->paginate(5);
            return view('home.index.list',[
                'cates' => $cate,
                'list'  => $list,
                'cate_info' => $cate_info
            ]);
        } else {    //进入顶级分类对应的子类列表
            //根据顶级类的id获取子类列表(一级分类) 和  子类的列表(内容)
            $res_cids = DB::table('cates')->where('pid',$cate_info->id)->orderBy('id')->select('id','name')->get();
            foreach ($res_cids as $k=>$v) {
                $v->child = DB::table('content')->orderBy('id','desc')->where('cid',$v->id)->select(['id','title'])->get();
                $lists[] = $v;
            }
            return view('home.index.list_p',[
                'cates'     => $cate,
                'cate_info' => $cate_info,
                'lists'     => $lists
            ]);
        }

    }

    /**
     * 详情页面
     * @param $id  int 内容id
     * @return string
     */
    public function show($id) {
        //$id对应的内容点击数量+1
        DB::table('content')->where('id',$id)->increment('num');
        //导航栏分类列表
        $cate = DB::table('cates')->select('id','name')->where('pid','=',0)->orderBy('id','asc')->get();
        //根据内容参数$id 获取内容数据 以及根据内容数据中的cid 获取 内容页面子导航链接
        $info = DB::table('content')
            ->where('id','=',$id)
            ->first();
        $child_cate = DB::table('cates')->select('id','name','pid')->where('id','=',$info->cid)->first();
        $parent_cate = DB::table('cates')->select('id','name')->where('id','=',$child_cate->pid)->first();
        if ( DB::table('content')->select('is_admin')->where('is_admin','=','0')->where('id',$id)->first() ) {
            $contents = DB::table('content as c')
                ->join('users as u','c.uid','=','u.id')
                ->join('users_detail as ud','c.uid','=','ud.uid')
                ->select('c.*','ud.uface')
                ->where('c.id',$id)
                ->first();
        } else {//管理员用户发表内容
            $contents = DB::table('content')
                ->where('id',$id)
                ->first();
        }

        //dd($contents);
        return view('home.index.show',[
            'cates'         => $cate,
            'parent_cate'   => $parent_cate,
            'childrent_cate'=> $child_cate,
            'contents'      => $contents
        ]);
    }


    //无限级递归方法
    public function getCatesBypid($pid){
        $s = DB::table('cates')->where('pid','=',$pid)->orderBy('id','asc')->get();
        //遍历
        $data=[];
        foreach($s as $key=>$value){
            $value->child=$this->getCatesBypid($value->id);
            $data[]=$value;
        }
        return $data;
    }
}