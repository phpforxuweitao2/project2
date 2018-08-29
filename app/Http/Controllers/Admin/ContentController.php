<?php
/*  User: tao    Date: 2018/8/29   Time: 9:41  */


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Content_riji;
use DB;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function riji() {
        return view('admin.content.riji',[
            'menu_content'  => 'active',
            'menu_content_riji'=> 'active'
        ]);
    }

    public function riji_add() {
        $cates = DB::table('cates')->orderBy('id','asc')->orderByRaw('concat(path,id)')->select('id','name','pid','path')->get();
        foreach ($cates as $k=>$v){
            if ($v->pid != 0) {
                $data[] = $v;
            }
        }
        return view('admin.content.riji_add',[
            'menu_content'          => 'active',
            'menu_content_riji_add' => 'active',
            'cate_data'             => $data
        ]);
    }

    public function save_riji(Content_riji $req) {
        $data = $req->only(['uid','cid','title','content','week','weather']);
        $data['size'] = mb_strlen($data['content']);
        $data['created_at'] = time();
        $data['updated_at'] = time();
        if ( DB::table('content')->insert($data) ) {
            return redirect('/bk_content/riji')->with('success','添加日记成功');
        } else {
            return back()->with('error','添加日记失败');
        }

    }


}