<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
// 引入校验类
use App\Http\Requests\AdminUser\AdminInsert;

class AdminUserController extends Controller
{
    /**
     * 显示管理员列表页
     * @return [type] [description]
     */
     public function index(Request $request)
    {
        //获取搜索关键词
        $k = $request->input('keywords');
        //获取列表数据
        $data = DB::table('admin_users')->where('name','like',"%".$k."%")->paginate(5);
        return view('admin.AdminUser.user.index',[
            'menu_admin'    => 'active',
            'menu_adminuser_index'=>'active',
            'data'          =>$data,'request'=>$request->all()
        ]);
    }

    /**
     * 显示管理员添加页面
     * @return [type] [description]
     */
    public function create()
    {
        // 获取角色信息
        $data = DB::table('role')->where('status',0)->select('id','name')->get();
        // 返回给视图
        return view('admin.AdminUser.user.add',[
            'menu_admin'        => 'active',
            'menu_adminuser_create' => 'active',
            'role'             =>  $data
        ]);
    }

    /**
     * 管理员添加操作
     * @return [type] [description]
     */
    public function add(AdminInsert $request)
    {
        var_dump($_POST);
        die;
        // 获取提交的数据
        $data = $request->except(['_token','role']);
        $role = $request->input('role');
        //开启一个事务 角色添加成功后 返回该角色的id 然后与nid 拼接
        DB::beginTransaction();
        try {
            $rid = DB::table('role')->insertGetId($data);
            $datas = [];
            foreach ($role as $k=>$v) {
                $datas[$k]['nid'] = $v;
                $datas[$k]['rid'] = $rid;
            }
            DB::table('role_node')->insert($datas);
            DB::commit();
            return redirect('/bk_role')->with('success','添加角色成功');
        } catch (\Exception $e){
            DB::rollBack();
            return back()->with('error','添加角色失败');
        }
    }
}
