<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class LayoutController extends Controller
{
    // 排版的设定列表页
    public function index(Request $request)
    {
         //获取搜索关键词
        $k = $request->input('keywords');
        
        $data = DB::table('cates')
                ->where('status','0')
                ->where('pid','0')
                ->where('name','like',"%".$k."%")
                ->get();
        return view('admin.layout.index',['data' => $data]);
    }

    // 排版调整页
    public function edit($id)
    {   
        $data = DB::table('cates')->where('id',$id)->first();

        return view('admin.layout.edit',['data' => $data]);
    }

    // 排版调整方法
    public function update(Request $req)
    {   
        $data = $req->except(['_token']);
        // 将数据修改入数据
        // dd($data);
        $row = DB::table('cates')
                ->where('id',$data['id'])
                ->update(['position'=>$data['position']]);
        // 判断位置是否调整成功
        if ($row) {
            return redirect('/bk_layout')->with('success','位置调整成功');
        } else {
            return back()->with('error','位置调整失败');
        } 
    }
}
