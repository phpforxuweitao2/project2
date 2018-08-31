<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
// 引入校验类
use App\Http\Requests\AdminUser\AdminInsert;
use App\Http\Requests\AdminUser\AdminUpdate;
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
        // 获取提交的数据
        $data = $request->except(['_token','role']);
        $role = $request->input('role');
        // 数据处理
        $data['pass'] = Hash::make($data['pass']);
        $data['created_at'] = time();
        //开启一个事务 角色添加成功后 返回该角色的id 然后与rid 拼接
        DB::beginTransaction();
        try {
            $id = DB::table('admin_users')->insertGetId($data);
            if ( !empty($role) ) {
                $datas = [];
                foreach ($role as $k=>$v) {
                    $datas[$k]['rid'] = $v;
                    $datas[$k]['uid'] = $id;
                }
                DB::table('user_role')->insert($datas);
            }
            // 添加成功提交事务
            DB::commit();
            return redirect('/bk_adminuser')->with('success','添加管理员成功');
        } catch (\Exception $e){
            // 失败回滚事务
            DB::rollBack();
            return back()->with('error','添加管理员失败');
        }
    }

    /**
     * 删除管理员的方法
     * @return [type]
     */
    public function del($id)
    {
       //开启一个事务
        DB::beginTransaction();
        try {
            // 删除管理员表数据
            DB::table('admin_users')->where('id','=',$id)->delete();
            // 删除管理员表分配角色
            DB::table('user_role')->where('uid',$id)->delete();
            DB::commit();
            return redirect('/bk_adminuser')->with('success','删除成功');
        } catch (\Exception $e){
            DB::rollBack();
            return back()->with('error','删除失败');
        }
    }

    /**
     * 管理员解锁方法
     * @return [type]     [description]
     */
    public function open($id)
    {
        $row = DB::table('admin_users')->where('id',$id)->update(['status'=> '0']);
        // 判断是否启用成功
        if ($row) {
             return back()->with('success','成功启用');
        } else {
            return back()->with('error','启用失败');
        }
    }

    /**
     * 管理员禁用方法
     * @return [type]     [description]
     */
    public function close($id)
    {
        $row = DB::table('admin_users')->where('id','=',$id)->update(['status'=> '1']);
        // 判断是否启用成功
        if ($row) {
             return back()->with('success','成功锁定');
        } else {
            return back()->with('error','锁定失败');
        }
    }

     /**
     * 显示管理员修改页
     * @return [type]     [description]
     */
    public function edit($id)
    {
        //获取需要修改的数据
        $data = DB::table('admin_users')->where('id','=',$id)->first();
        return view('admin.AdminUser.user.edit',['data'=>$data,'menu_admin'=> 'active']);
    }

    /**
     * 管理员修改的方法
     * @return [type]              [description]
     */
    public function update(AdminUpdate $request)
    {
        // 获取修改数据拼
        $data = $request->except(['id','_token']);
        $id = $request->input('id');
        $data['pass'] = Hash::make($data['pass']);
        $row = DB::table('admin_users')->where('id','=',$id)->update($data);
        // 判断是否修改成功
        if ($row) {
             return redirect('/bk_adminuser')->with('success','修改成功');
        } else {
            return back()->with('error','修改失败');
        }
    }

    /**
     * 管理员分配页
     * @return [type]     [description]
     */
    public function role($id)
    {
        // 获取该管理员
        $user = DB::table('admin_users')->where('id','=',$id)->first();
        // 获取所有角色
        $role = DB::table('role')->where('status',0)->select('id','name')->get();
        // 获取该管理员已有的权限
        $data = DB::table('user_role')->where('uid','=',$id)->select('rid')->get();
        // 判断是否之前分配过权限
        if ($data) {
            // 将该管理员已有权限组合成数组
            $datas = [];
            foreach ($data as $v) {
                $datas[] = $v->rid;
            }
            // 返回给视图
            return view('admin.AdminUser.user.role',['data'=>$datas,'user'=>$user,'role'=>$role,'menu_admin'=>'active']);
        } else {
            return view('admin.AdminUser.user.role',['data'=>array(),'node'=>$node,'role'=>$role,'menu_admin'=>'active']);
        }
    }

    /**
     *管理员角色分配操作的方法
     * @return [type]           [description]
     */
    public function dorole(Request $request)
    {
         // 获取提交的数据
        $uid = $request->input('uid');
        $role = $request->input('role');
        $row = DB::table('user_role')->where('uid',$uid)->first();
        //开启一个事务  用该角色的id 然后与rid 拼接
        DB::beginTransaction();
        try {
            // 判断之前是否有角色
            if ( $row) {
                DB::table('user_role')->where('uid',$uid)->delete();
            }
            // 判断是否分配了角色
            if (!empty($role)) {
                $datas = [];
                foreach ($role as $k=>$v) {
                    $datas[$k]['rid'] = $v;
                    $datas[$k]['uid'] = $uid;
                }
                DB::table('user_role')->insert($datas);
            }
            // 修改成功则提交事务返回视图
            DB::commit();
            return redirect('/bk_adminuser')->with('success','管理员角色分配成功');
        } catch (\Exception $e){
            DB::rollBack();
            return back()->with('error','管理员角色分配失败');
        }
    }

    /**
     * 登录日志显示页
     * @return [type] [description]
     */
    public function log(Request $request)
    {
        //获取搜索关键词
        $k = $request->input('keywords');
        // 获取登录后台的数据
        $data = DB::table('admin_log as log')
            ->join('admin_users as u','log.uid','=','u.id')
            ->where('u.name','like',"%".$k."%")
            ->where('log.status',0)
            ->orderBy('log.id','desc')
            ->select('log.*','u.name')
            ->paginate(10);
        // 将数据返回视图
        return view('admin.AdminUser.user.log',[
            'menu_admin'        => 'active',
            'menu_adminuser_log'=>'active',
            'data'              =>$data,
            'request'           =>$request->all()
        ]);
    }

    /**
     * 删除日志的方法
     * @return [type]
     */
    public function logdel($id)
    {
        $row = DB::table('admin_log')->where('id','=',$id)->update(['status'=> '2']);
        // 判断是否删除成功
        if ($row) {
             return back()->with('success','删除成功');
        } else {
            return back()->with('error','删除失败');
        }
    }
}
