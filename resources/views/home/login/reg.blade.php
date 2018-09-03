<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>会员注册_日记网</title>
    <meta name="keywords" content="会员注册" />
    <meta name="description" content="日记网会员注册" />
    <link href="/static/home/register/static/css/reg_1.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/static/home/register/bs/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/static/home/register/static/css/mycss1.css">
    <link rel="stylesheet" type="text/css" href="/static/home/register/mycss/mycss.css">
    <script type="text/javascript" src="/static/home/register/static/js/jquery-3.1.1.js"></script>
    <style type="text/css">
        .wawa{
            left: -50px;
        }
        .tupian{
            z-index:50;
        }
        .regNew_top{
            z-index: 50;
        }
    </style>
</head>

<body>
<div class="regNew_top">
    <div class="reg_topCon tupian">
        <div class="logo" style="z-index: 50"></div>
        <div class="clock">
            <img src="/static/home/register/img/aa.png" width="100px" class="wawa">
        </div>
        <div class="regNew_enter">
            <a href="/login">登录</a> <a href="/reg">注册</a>
        </div>
    </div>
</div>
<!-- <button class="btn btn-success btn-lg btn-block" type="button">Block level button</button> -->
<div style="clear:both"></div>

<div class="reg_main">
    <div class=" col-md-2">
    </div>
    <div class=" reg_border col-md-8">
        <section class="panel">
            <header class="panel-heading htt">
                <h4>账号注册</h4>
            </header>
            <div class="col-md-1 "></div>
            <div class="panel-body col-md-10 ht">
                <form class="form-horizontal" id="fm_reg">
                    <div class="form-group ">
                        <label class="col-lg-2 control-label">账号</label>
                        <div class="col-lg-7">
                            <input type="text" id="f_name" class="form-control" name="name" placeholder="建议用拼音名字/QQ号"/>
                        </div>
                        <span class="col-lo-3 hide">账号名不符合规则密码错误为啥啊</span>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">密码</label>
                        <div class="col-lg-7">
                            <input type="password" placeholder="设置密码（6-16位字符）" id="pass" class="form-control" name="pass">
                        </div>
                        <span  class="col-lo-3 hide">账号名不符合规则密码错误为啥啊</span>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">确认密码</label>
                        <div class="col-lg-7">
                            <input type="password" placeholder="请重复上面密码" id="repass" class="form-control" name="repass">
                        </div>
                        <span  class="col-lo-3 hide">账号名不符合规则密码错误为啥啊</span>
                    </div>
                    <div class="form-group ">
                        <label class="col-lg-2 control-label">笔名/昵称</label>
                        <div class="col-lg-7">
                            <input type="text"  placeholder="笔名站内昵称仅允许汉字" id="f_nickname" autocomplete="off" class="form-control" onkeyup="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" onpaste="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" oncontextmenu="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" name="nickname">
                        </div>
                        <span  class="col-lo-3 hide">账号名不符合规则密码错误为啥啊</span>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">性别</label>
                        <div class="col-lg-7 text-left">
                            <div class="sex col-lg-2">
                                <label>
                                    <input type="radio" name="sex" value="m" checked>男
                                </label>
                            </div>
                            <div class="sex col-lg-2">
                                <label>
                                    <input type="radio" name="sex" value="w">女
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-lg-2 control-label">邮箱</label>
                        <div class="col-lg-7">
                            <input type="text" vchecked="false" placeholder="请填写您的邮箱" id="f_email" class="form-control" name="email">
                        </div>
                        <span  class="col-lo-3 hide">账号名不符合规则密码错误为啥啊</span>
                    </div>
                    <div class="form-group ">
                        <label class="col-lg-2 control-label">验证码</label>
                        <div class="col-lg-3">
                            <input type="text" autocomplete="off" maxlength="6" placeholder="请输入验证码" id="f_vcode" class="form-control" name="vcode">
                        </div>
                        <span class="hide">验证码错误</span>
                        <button id="getCode" type="button" style="width: 150px; height: 40px;" class="btn btn-success">获取验证码</button>
                    </div>
                    <div class="info_tip">点击“立即注册”,即表示您同意并愿意遵守<a>《用户协议》</a></div>
                    <div class="form-group text-center" style="text-align: center;">
                        <div class="col-lg-8 ">
                            <button class="reg_btn" id="embed-submit" type="submit">立即注册</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <div class=" col-md-2 tupian">
        <img src="/static/home/register/img/6.jpg" width="150px" class='yay'>
    </div>
    <script type="text/javascript">
        $(function(){
             $fm_reg = $("#fm_reg");
             $f_name = $("#f_name");
             $f_pass = $("#pass");
             $f_repass = $("#repass");
             $f_nickname = $("#f_nickname");
             $f_sex      = $fm_reg.find("input[type='radio']:checked");
             $f_email       = $("#f_email");
             $f_vcode    = $("#f_vcode");

            $fm_reg.find('input').keydown(function(event){
                if (event.keyCode === 13) {
                    event.preventDefault ? event.preventDefault() : event.returnValue = false;
                }
            }); //禁用form表单下所有input的回车提交表单事件

            $f_name.blur(function(){    //检测帐号
                that = $(this);
                if ( !$(this).val().length ) {
                    $(this).parent().next('span').removeClass('hide').css({'color':'red'}).text('帐号不能为空');
                    return false;
                }
                $.ajax({
                    url:'/regCheckName',
                    method:'post',
                    dataType:'json',
                    contentType:'application/x-www-form-urlencoded',
                    data:{
                        'name':$(this).val()
                    },
                    success:function(res){
                        if (res.code === '000') {
                            that.parent().next('span').removeClass('hide').css({'color':'green'}).text(res.msg);
                        } else {
                            that.parent().next('span').removeClass('hide').css({'color':'red'}).text(res.msg);
                        }
                    },error:function(err){
                        console.log('网络错误');
                    },beforeSend:function(xhr) {
                        xhr.setRequestHeader('X-CSRF-TOKEN','{{csrf_token()}}')
                    }
                });
            });
            $f_nickname.blur(function(){    //检测笔名/妮称
                that = $(this);
                if ( !$(this).val().length ) {
                    $(this).parent().next('span').removeClass('hide').css({'color':'red'}).text('笔名/妮称 不能为空');
                    return false;
                }
                $.ajax({
                    url:'/regCheckNickname',
                    method:'post',
                    dataType:'json',
                    contentType:'application/x-www-form-urlencoded',
                    data:{
                        'nickname':that.val()
                    },
                    success:function(res){
                        if (res.code === '000') {
                            that.parent().next('span').removeClass('hide').css({'color':'green'}).text(res.msg);
                        } else {
                            that.parent().next('span').removeClass('hide').css({'color':'red'}).text(res.msg);
                        }
                    },error:function(err){
                        console.log('网络错误');
                    },beforeSend:function(xhr) {
                        xhr.setRequestHeader('X-CSRF-TOKEN','{{csrf_token()}}')
                    }
                });
            });
            $f_pass.blur(function(){
                if ( $(this).val().length < 6 || $(this).val().length > 16 ) {
                    $(this).parent().next('span').removeClass('hide').css({'color':'red'}).text('密码必须为6-16位');
                    return false;
                }
                $(this).parent().next('span').removeClass('hide').css({'color':'green'}).text('密码正确');
            });
            $f_repass.blur(function(){
                if ( $(this).val().length < 6 || $(this).val().length > 16 ) {
                    $(this).parent().next('span').removeClass('hide').css({'color':'red'}).text('密码必须为6-16位');
                    return false;
                } else if( $f_pass.val() !== $f_repass.val() ) {
                    $(this).parent().next('span').removeClass('hide').css({'color':'red'}).text('密码与确认密码不一致');
                    return false;
                }
                $(this).parent().next('span').removeClass('hide').css({'color':'green'}).text('确认密码一致');
            });
            $f_email.blur(function(){
                that = $(this);
                that_val = that.val();
                reg_email = /^\w+@\w+(\.\w+){1,3}$/;
                if ( !that_val.length ) {
                    $(this).parent().next('span').removeClass('hide').css({'color':'red'}).text('邮箱不能为空');
                    return false;
                } else if ( !reg_email.test(that_val) ) {
                    $(this).parent().next('span').removeClass('hide').css({'color':'red'}).text('邮箱格式错误');
                    return false;
                }
                $(this).parent().next('span').removeClass('hide').css({'color':'green'}).text('');
                $(this).attr('vchecked','true');
                $.ajax({
                    url:'/regCheckEmail',
                    method:'post',
                    dataType:'json',
                    contentType:'application/x-www-form-urlencoded',
                    data:{
                        'email':that_val
                    },
                    success:function(res){
                        if (res.code === '000') {
                            that.parent().next('span').removeClass('hide').css({'color':'green'}).text(res.msg);
                        } else {
                            that.parent().next('span').removeClass('hide').css({'color':'red'}).text(res.msg);
                        }
                    },error:function(err){
                        console.log('网络错误');
                    },beforeSend:function(xhr) {
                        xhr.setRequestHeader('X-CSRF-TOKEN','{{csrf_token()}}')
                    }
                });
            });
            $("#getCode").click(function(){
                that = $(this);
                if ( $f_email.attr('vchecked') === 'true' ) {
                    $m = 120;
                    $f_email.attr('disabled','true');
                    that.attr('disabled','true').css('cursor','not-allowed');
                    email_time = setInterval(function(){
                        $m--;
                        if ( $m < 0 ) {
                            $f_email.removeAttr('disabled');
                            that.text('重新发送');
                            that.removeAttr('disabled').css('cursor','pointer');
                            clearInterval(email_time);
                        } else {
                            that.text($m+'秒后重发');
                        }
                    },1000);
                    $.ajax({
                        url:'/regSendMail',
                        method:'post',
                        dataType:'json',
                        contentType:'application/x-www-form-urlencoded',
                        data:{email:$f_email.val()},
                        success:function(res) {
                            if (res.code === '000') {
                                console.log(res);
                            } else {
                                console.log(res);
                            }
                        },error:function(err) {
                            console.log('网络错误');
                        },beforeSend:function(xhr){
                            xhr.setRequestHeader('X-CSRF-TOKEN','{{csrf_token()}}')
                        }
                    });
                }
            });
            $f_vcode.blur(function(){
                that = $(this);
                if ( !$(this).val().length ) {
                    $(this).parent().next('span').removeClass('hide').css({'color':'red'}).text('验证码不能为空');
                    return false;
                }
                $.ajax({
                    url:'/checkVcode',
                    method:'post',
                    dataType:'json',
                    contentType:'application/x-www-form-urlencoded',
                    data:{
                        'vcode':that.val()
                    },
                    success:function(res){
                        console.log(res);
                        if (res.code === '000') {
                            that.parent().next('span').removeClass('hide').css({'color':'green'}).text(res.msg);
                        } else {
                            that.parent().next('span').removeClass('hide').css({'color':'red'}).text(res.msg);
                        }
                    },error:function(err){
                        console.log('网络错误');
                    },beforeSend:function(xhr) {
                        xhr.setRequestHeader('X-CSRF-TOKEN','{{csrf_token()}}')
                    }
                });
            });



            $fm_reg.submit(function(ev){
                $.ajax({
                    url: '/register_check',
                    method: 'post',
                    contentType:'application/x-www-form-urlencoded',
                    dataType:'json',
                    data:{
                        'name':$f_name.val(),
                        'pass':$f_pass.val(),
                        'nickname':$f_nickname.val(),
                        'sex':$f_sex.val(),
                        'email':$f_email.val(),
                        'vcode':$f_vcode.val()
                    },
                    success:function(res){
                        if ( res.code === '000' ) {
                            setInterval(function(){
                                window.location.href="http://www.project2.com";
                            },1000)
                        } else {
                            console.log(res.msg);
                        }
                        console.log(res);
                    },error:function(err) {
                        console.log('网络错误');
                    },beforeSend:function(xhr){
                        xhr.setRequestHeader('X-CSRF-TOKEN','{{csrf_token()}}');
                        if ( !$f_name.val().length || !$f_pass.val().length || !$f_nickname.val().length || !$f_email.val().length || !$f_vcode.val().length ) {
                            return false;
                        }
                    }
                });
                ev.preventDefault();    //阻止表单的默认跳转
            });
        });
    </script>
</div>
<div class="reg_footer">
    <div class="reg_bqsm">Copyright © 2004-2017 www.riji.cn . All Rights Reserved <a href="/">日记网</a> 版权所有 <a href="http://www.miitbeian.gov.cn/" target="_blank">苏ICP备16062942号-9</a></div>
</div>
</body>
</html>
