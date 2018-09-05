<?php
/*  User: tao    Date: 2018/9/2   Time: 15:01  */


namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use think\Exception;

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
        //获取阅读排行中前10条
        $readTop10 = DB::table('content')->select('id','title','num')->orderBy('num','desc')->limit(10)->get();
        //获取年级分类
        $classCates = DB::table('cates')->select('id','pid','name')->whereIn('pid',['29','36','40'])->where('status','!=','1')->orderBy('id','asc')->get();

        if ( $cate_info->pid != 0 ) {   //进入子级分对应的内容列表页面
            $list = DB::table('cates as c')
                ->join('content as con','c.id','=','con.cid')
                ->where('c.id',$id)
                ->paginate(5);
            return view('home.index.list',[
                'cates'     => $cate,
                'list'      => $list,
                'cate_info' => $cate_info,
                'readTop10' => $readTop10,

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
                'lists'     => $lists,
                'readTop10' => $readTop10,
                'classCates'=> $classCates,

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
        //获取上一篇
        $lastPage = DB::table('content')->orderBy('id','desc')->where('id','<',$id)->limit(1)->first();
        //获取下一篇
        $nextPage = DB::table('content')->orderBy('id','asc')->where('id','>',$id)->limit(1)->first();
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
        //获取相关日记
        $relateds = DB::table('content')->select('id','title')->where('cid','=',$info->cid)->limit(8)->get();
        //获取阅读排行中前10条
        $readTop10 = DB::table('content')->select('id','title','num')->orderBy('num','desc')->limit(10)->get();
        //获取年级分类
        $classCates = DB::table('cates')->select('id','pid','name')->whereIn('pid',['29','36','40'])->where('status','!=','1')->orderBy('id','asc')->get();
        return view('home.index.show',[
            'cates'         => $cate,
            'parent_cate'   => $parent_cate,
            'childrent_cate'=> $child_cate,
            'contents'      => $contents,
            'lastPage'      => $lastPage,
            'nextPage'      => $nextPage,
            'relateds'      => $relateds,
            'readTop10'     => $readTop10,
            'classCates'    => $classCates
        ]);
    }

    public function digg(Request $req) {
        if ( $req->ajax() ) {
            $type   = $req->input('digg');
            $uid    = $req->input('uid');
            $id     = $req->input('id');//日记内容id
            $info   = DB::table('content')->where('id',$id)->first();
            //如果$type 为good 则表示 点赞  为bad则为点踩
            if ( $type == 'good' ) {
                //记录点赞时的用户id和日记内容id 防止重复点赞（先验证用户记录是否已存在 feeling表中）
                $check = DB::table('feeling')->where([
                    'uid'   => $uid,
                    'cid'   => $id
                ])->exists();
                if ( $check ) {
                    return response()->json([
                        'code'      => '111',
                        'msg'       => '已评价过,不能重复评价',
                        'time'      => time()
                    ]);
                }

                DB::beginTransaction();
                try {
                    if ( $info->is_admin == '0' ) {//会员用户
                        //被点赞 随机增加积分
                        $score = mt_rand(1,10);
                        DB::table('users')->where('id',$info->uid)->increment('score',$score);
                    }
                    DB::table('content')->where('id',$id)->increment('laud',1);//赞数+1
                    //点赞记录保存
                    DB::table('feeling')->insert([
                        'uid'   => $uid,
                        'cid'   => $id,
                        'status'=> '0'
                    ]);
                    DB::commit();
                    return response()->json([
                        'code'      => '000',
                        'msg'       => '成功点赞',
                        'type'      => 'good',
                        'time'      => time()
                    ]);
                } catch (Exception $e) {
                    DB::rollBack();
                    return response()->json([
                        'code'      => '111',
                        'msg'       => '点赞操作失败',
                        'time'      => time()
                    ]);
                }

            } else if( $type == 'bad' ) {   //点踩
                //记录点赞时的用户id和日记内容id 防止重复点踩（先验证用户记录是否已存在 feeling表中）
                $check = DB::table('feeling')->where([
                    'uid'   => $uid,
                    'cid'   => $id
                ])->exists();
                if ( $check ) {
                    return response()->json([
                        'code'      => '111',
                        'msg'       => '已评价过,不能重复评价',
                        'time'      => time()
                    ]);
                }

                DB::beginTransaction();
                try {
                    DB::table('content')->where('id',$id)->increment('belittle',1);//踩数+1
                    //点踩记录保存
                    DB::table('feeling')->insert([
                        'uid'   => $uid,
                        'cid'   => $id,
                        'status'=> '1'
                    ]);
                    DB::commit();
                    return response()->json([
                        'code'      => '000',
                        'msg'       => '成功点踩',
                        'type'      => 'bad',
                        'time'      => time()
                    ]);
                } catch (Exception $e) {
                    DB::rollBack();
                    return response()->json([
                        'code'      => '111',
                        'msg'       => '点踩操作失败',
                        'time'      => time()
                    ]);
                }
            }
        } else {
            return response()->json([
                'code'      => '111',
                'msg'       => '请求方式非法',
                'time'      => time()
            ]);
        }
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