<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class UsersController extends Controller
{
    /**
     * 显示会员列表页
     * @return [type] [description]
     */
    public function index(Request $request){
        //获取搜索关键词
        $k = $request->input('keywords');
        //获取列表数据
        $user = DB::table("users")->where("name",'like',"%".$k."%")->paginate(5);
        // dd($user);
        return view('admin.users.index',['user'=>$user,'request'=>$request->all()]);
    }
}
