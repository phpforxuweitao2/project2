<?php
/*  User: tao    Date: 2018/8/26   Time: 15:02  */


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cates;
use DB;

class CatesController extends Controller
{
    /**
     * 分类首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $cates = DB::table('cates')->orderBy('id','asc')->orderByRaw('concat(path,id)')->select('id','name','pid','path','created_at')->paginate(10);
        return view('admin.cates.index',[
            'menu_cates'   => 'active',
            'menu_cates_index'=>'active',
            'cates'         =>$cates
        ]);
    }

    public function add() {
        $cates = DB::table('cates')->orderBy('id','asc')->orderByRaw('concat(path,id)')->select('id','name','pid','path','created_at')->get();
        return view('admin.cates.add',[
            'menu_cates'   => 'active',
            'menu_cates_add'=> 'active',
            'cates'         =>$cates
        ]);
    }

    /**
     * @param Cates $req
     * @return \Illuminate\Http\RedirectResponse
     */
    public function doadd(Cates $req) {
        $data = $req->only(['name','pid']);
        $data['created_at'] = time();
        $data['updated_at'] = time();
        if ( $data['pid'] == '0') {
            $data['path'] = '0,';
        } else {
            $res = DB::table('cates')->where('id','=',$data['pid'])->first();
            $data['path'] = $res->path.$data['pid'].',';
        }
        //执行数据库插入
        if ( DB::table('cates')->insert($data) ) {
            return  redirect('/bk_cates')->with('success','添加分类成功');
        } else {
            return  back()->with('error','添加分类失败');
        }
    }

    public function delete($id) {
        $check = DB::table('cates')->where('pid','=',$id)->count();
        if ( $check > 0 ) {
            return back()->with('error','不能删除带有子类的分类节点');
        }
        //直接删除当前没有子类的分类
        if ( DB::table('cates')->where('id','=',$id)->delete() ) {
            return redirect('/bk_cates')->with('success','删除成功');
        } else {
            return redirect('/bk_cates')->with('error','删除失败');
        }
    }

    public function trash() {

        return view('admin.cates.trash',[
            'menu_cates'   => 'active',
            'menu_cates_trash'      => 'active'
        ]);
    }

}