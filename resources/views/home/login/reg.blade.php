<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>会员注册_日记网</title>
    <meta name="keywords" content="会员注册" />
    <meta name="description" content="日记网会员注册" />
    <link href="/static/home/register/css/reg_1.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/static/home/register/bs/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/static/home/register/static/css/mycss1.css">
    <style>

    </style>
</head>

<body>
<div class="regNew_top">
    <div class="reg_topCon tupian">
        <div class="logo"></div>
        <img src="/static/home/register/img/sss1.png" width="100px" class="wawa">
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
                <form class="form-horizontal adminex-form" method="post" action="/reg_check">
                    <div class="form-group ">
                        <label class="col-lg-2 control-label">账号</label>
                        <div class="col-lg-7">
                            <input type="text" placeholder="建议用拼音名字QQ号" id="f-name" class="form-control" name="name">
                        </div>
                        <span  class="col-lo-3">账号名不符合规则密码错误为啥啊</span>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">密码</label>
                        <div class="col-lg-7">
                            <input type="password" placeholder="设置密码（6-16位字符）" id="l-name" class="form-control" name="pass">
                        </div>
                        <span  class="col-lo-3">账号名不符合规则密码错误为啥啊</span>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">重复密码</label>
                        <div class="col-lg-7">
                            <input type="password" placeholder="请重复上面密码" id="email2" class="form-control" name="repass">
                        </div>
                        <span  class="col-lo-3">账号名不符合规则密码错误为啥啊</span>
                    </div>
                    <div class="form-group ">
                        <label class="col-lg-2 control-label">笔名/昵称</label>
                        <div class="col-lg-7">
                            <input type="text" placeholder="笔名站内昵称仅允许汉字" id="f-name" class="form-control" name="name">
                        </div>
                        <span  class="col-lo-3">账号名不符合规则密码错误为啥啊</span>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">性别</label>
                        <div class="col-lg-7 text-left">
                            <div class="sex col-lg-2">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">男
                                </label>
                            </div>
                            <div class="sex col-lg-2">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">女
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-lg-2 control-label">QQ号</label>
                        <div class="col-lg-7">
                            <input type="text" placeholder="请填写您的QQ号" id="f-name" class="form-control" name="name">
                        </div>
                        <span  class="col-lo-3">账号名不符合规则密码错误为啥啊</span>
                    </div>
                    <div class="form-group ">
                        <label class="col-lg-2 control-label">验证码</label>
                        <div class="col-lg-3">
                            <input type="text" placeholder="请输入验证码" id="f-name" class="form-control" name="name">
                        </div>
                        <div class="col-lg-3" style="background: red ;height:38px">
                        </div>
                    </div>
                    <div class="info_tip">点击“立即注册”,即表示您同意并愿意遵守<a>《用户协议》</a></div>
                    <div class="form-group text-center" style="text-align: center;">
                        <div class="col-lg-8 ">
                            <button class="reg_btn" id="embed-submit" type="submit">立即注册</button>
                        </div>
                    </div>
                </form>
            </div>
            <div></div>
        </section>
    </div>
    <div class=" col-md-2 tupian">
        <img src="/static/home/register/img/6.jpg" width="150px" class='yay'>
    </div>

</div>
<div class="reg_footer">
    <div class="reg_bqsm">Copyright © 2004-2017 www.riji.cn . All Rights Reserved <a href="/">日记网</a> 版权所有 <a href="http://www.miitbeian.gov.cn/" target="_blank">苏ICP备16062942号-9</a></div>
</div>


</body>

</html>
