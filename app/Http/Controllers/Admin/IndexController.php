<?php
/*  User: tao    Date: 2018/8/23   Time: 22:33  */


namespace App\Http\Controllers\Admin;
use Hash;
use App\Http\Requests\AdminUser\PassUpdate;
use DB;
class IndexController
{

    public function index() {

        return view('admin.index.index',[
            'menu_index'    => 'active',

        ]);
    }

    /**
     * 修改用户密码页面
     * @return [type] [description]
     */
    public function edit()
    {
        return view('admin.index.edit');
    }

    public function update(PassUpdate $request)
    {
        $pass = $request->input('pass');
        $data['pass'] = Hash::make($request->input('newpass'));
        $data['update_time'] = time();
        // 获取该用户原密码判断密码是否正确
        $user = DB::table('admin_users')
            ->where('id',session('admin_info')['uid'])
            ->first();
        if (Hash::check($pass,$user->pass)) {
            try {
                DB::table('admin_users')
                    ->where('id',session('admin_info')['uid'])
                    ->update($data);
                return redirect('/bk_index')->with('success','密码修改成功');
            } catch (Exception $e) {
                return back()->with('error','密码修改失败');
            }
        } else {
            return back()->with('error','原密码不正确');
        }
    }
}
