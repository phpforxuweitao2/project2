<?php
/*  User: tao    Date: 2018/8/30   Time: 8:58  */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use DB;
use Hash;
use Cache;
class LoginController extends Controller
{
    //进入登录页面
    public function login() {
        return view('home.login.login');
    }

    //登录检测
    public function login_check() {
        // 判断用户账号密码是否正确

        // 判断账号是否为空
        if (empty($_POST['name'])) {
            return json_encode(['code'=>1,'msg'=>'账号不能为空']);
        }
        // 判断密码是否为空
        if (empty($_POST['pass'])) {
            return json_encode(['code'=>2,'msg'=>'密码不能为空']);
        }
        // 判断该用户是否存在
        $row = DB::table('users')->where('name',$_POST['name'])->where('status','!=','2')->first();
        if (!$row) {
            return json_encode(['code'=>3,'msg'=>'该用户不存在或用户输入有误']);
        }
        // 判断该用户是否被禁用
        if ($row->status == 1) {
            return json_encode(['code'=>4,'msg'=>'该用户被禁用请联系管理员']);
        }
        // 判断密码跟用户是否存在
        if ( $row && Hash::check($_POST['pass'],$row->pass)) {
            session([
                'home_user' =>[
                    'name'  =>  $row->name,
                    'id'    =>  $row->id
                ]
            ]);
            // 判断该用户是否记住密码
            if ( $_POST['rem'] == 1 ) {
                Cache::put('home_info', [
                    'name' => $row->name,
                    'pass' => $_POST['pass']
                ], 10080);
            } else {
                Cache::forget('home_info');
            }
            // 将用户登录信息写入数据库
            DB::table('users_detail')
                ->where('id',$row->id)
                ->update([
                    'last_login_ip' => $_SERVER['REMOTE_ADDR'],
                    'last_login_time'=>time()
                ]);
            return json_encode(['code'=>0,'msg'=>'呵呵正确答案']);
        } else {
            return json_encode(['code'=>4,'msg'=>'密码错误']);
        }

    }


    //进入注册页面
    public function register() {
        return view('home.login.reg');
    }

    //处理注册页面数据
    public function doregister() {

    }

}
