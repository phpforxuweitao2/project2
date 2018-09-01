<?php
/*  User: tao    Date: 2018/8/30   Time: 8:58  */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use DB;
use Hash;
use Cache;
use Mail;
use Illuminate\Http\Request;

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
            return json_encode(['code'=>0,'msg'=>'登录成功!']);
        } else {
            return json_encode(['code'=>4,'msg'=>'密码错误']);
        }

    }

    //退出登录
    public function logout() {
        session()->pull('home_user');
        return back();
    }

    //进入注册页面
    public function register() {
        return view('home.login.reg');
    }

    //处理注册页面数据
    public function registerCheck(Request $req) {
        if ( $req->ajax() ) {
            $data   = $req->only(['name','pass','email','sex','nickname','sex']);
            DB::beginTransaction();
            try {
                $uid = DB::table('users')->insertGetId([
                    'name'  => $data['name'],
                    'pass'  => Hash::make($data['pass']),
                    'email' => $data['email']
                ]);
                DB::table('qiandao')->insert(['uid'=>$uid]);
                DB::table('users_detail')->insert([
                    'nickname'  => $data['nickname'],
                    'uid'       => $uid,
                    'sex'       => $data['sex'],
                ]);
                DB::commit();
                return response()->json([
                    'code'      => '000',
                    'msg'       => '注册成功',
                    'time'      => time()
                ]);
            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json([
                    'code'      => '111',
                    'msg'       => '注册失败',
                    'time'      => time()
                ]);
            }
        }
    }

    //ajax验证帐号
    public function checkName(Request $req) {
        if ( $req->ajax() ) {
            $data = $req->except('_token');
            if ( DB::table('users')->where('name','=',$data['name'])->exists() ) {
                return $this->returnJson('帐号已存在','111');
            } else {
                return $this->returnJson('帐号可用');
            }
        }
    }

    //ajax验证笔名/妮称
    public function checkNickname(Request $req) {
        if ( $req->ajax() ) {
            $data = $req->except('_token');
            if ( DB::table('users_detail')->where('nickname','=',$data['nickname'])->exists() ) {
                return $this->returnJson('笔名/妮称已存在','111');
            } else {
                return $this->returnJson('笔名/妮称可用');
            }
        }
    }

    //ajax验证邮箱
    public function checkEmail(Request $req) {
        if ( $req->ajax() ) {
            $email = $req->input('email');
            if ( DB::table('users')->where('email','=',$email)->exists() ) {
                return $this->returnJson('邮箱已存在','111');
            } else {
                return $this->returnJson('邮箱可用');
            }
        }
    }

    //检测邮箱验证码是否正确
    public function checkVcode(Request $req) {
        $vcode = $req->input('vcode');
        $reg_vcode = Cache::get('reg_vcode');
        if ( $req->ajax() && $vcode == $reg_vcode ) {
            return response()->json([
                'code'      => '000',
                'msg'       => '验证码正确',
                'time'      => time()
            ]);
        } else {
            return response()->json([
                'code'      => '111',
                'msg'       => '验证码错误',
                'time'      => time()
            ]);
        }
    }

        //发送邮箱验证码
    public function regSendMail(Request $req)  {
        $toEmail = $req->input('email');
        $vcode = mt_rand(10000,999999);
        $limit_time = 3;
        Cache::put('reg_vcode',$vcode,$limit_time);
        //邮件发送方式一:  以文本形式发送邮件
        Mail::raw("你好,注册验证码为: {$vcode} , {$limit_time}分钟内有效。By 印象日记网络!",function($message) use($toEmail) {
            $message->subject('印象日记注册验证码');
            $message->to('1139204319@qq.com');
        });
        return response()->json([
            'code'      => '000',
            'msg'       => '邮件发送成功',
            'time'      => time()
        ]);
    }


}
