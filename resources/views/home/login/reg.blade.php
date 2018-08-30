<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>会员注册_印象日记网</title>
    <meta name="keywords" content="会员注册" />
    <meta name="description" content="日记网会员注册" />
    <link href="/static/home/register/css/reg_1.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/static/home/register/js/jquery.min_1.js"></script>
    <script type="text/javascript" language="javascript" src='/static/home/register/js/login_1.js'></script>
    <script type="text/javascript" src="/static/home/register/js/gt_1.js"></script>
    <style>

        .inp {
            border: 1px solid gray;
            padding: 0 10px;
            width: 200px;
            height: 30px;
            font-size: 18px;
        }
        .btn {
            border: 1px solid gray;
            width: 100px;
            height: 30px;
            font-size: 18px;
            cursor: pointer;
        }
        #embed-captcha {
            width: 300px;
            margin: 0 auto;
        }
        .show {
            display: block;
        }
        .hide {
            display: none;
        }
        #notice {
            color: red;
        }
    </style>
</head>
<body>
<div class="regNew_top">
    <div class="reg_topCon">
        <div class="logo"></div>
        <div class="regNew_enter">
            <a href="/login">登录</a> <a href="/reg">注册</a>
        </div>
    </div>
</div>
<div style="clear:both"></div>
<div class="reg_main">
    <div class="reg_left reg_border">
        <div class="reg_head"><span>注册会员</span></div>
        <form action="" id="regUser" method="post">
            <input type="hidden" value="regbase" name="dopost"/>
            <input type="hidden" value="1" name="step"/>

            <div class="regItem">
                <label>账号</label>
                <input class="regInput_text" name="userid" autocomplete="off" id="txtUsername"  placeholder="建议用：名字拼音或QQ易记" type="text"><div id="_userid" class="tip"></div>
            </div>
            <div class="regItem">
                <label>密码</label>
                <input class="regInput_text" name="userpwd" autocomplete="off" id="userpwd" placeholder="设置密码（6-16位字符）" type="text"><div id="_password" class="tip"></div>
            </div>
            <div class="regItem">
                <label>重复密码</label>
                <input class="regInput_text" name="userpwdok" autocomplete="off" id="userpwdok" placeholder="请重复上面密码" type="text"><div id="_userpwdok" class="tip"></div>
            </div>
            <div class="regItem">
                <label>姓名/笔名</label>
                <input class="regInput_text1" name="uname" autocomplete="off" id="uname" placeholder="投稿作者姓名（仅允许汉字）" onkeyup="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" onpaste="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" oncontextmenu = "value=value.replace(/[^\u4E00-\u9FA5]/g,'')" type="text"><div id="_uname" class="tip">仅允许输入汉字</div>
            </div>
            <div class="regSex">性别</div>
            <div class="reg_SexRight">
                <input type="radio" name="sex" value="男" checked="checked" /> 男 &nbsp;&nbsp;<input type="radio" name="sex" value="女" /> 女

            </div>
            <div class="regItem">
                <p>
                    <label>QQ号</label>
                    <input class="regInput_text" name="email" autocomplete="off" id="email" placeholder="请填写您的QQ号" onkeyup="value=value.replace(/[^0-9]/g,'')" onpaste="value=value.replace(/[^0-9]/g,'')" oncontextmenu = "value=value.replace(/[^0-9]/g,'')" type="text"><div id="_email" class="tip"></div>
                </p>
                <p>&nbsp;</p>
            </div>


            <div class="regItem">

                <div id="embed-captcha"></div>
                <p id="wait" class="show">正在加载验证码......</p>
                <p id="notice" class="hide">请先完成验证</p>

                <script>
                    var handlerEmbed = function (captchaObj) {
                        $("#embed-submit").click(function (e) {
                            var validate = captchaObj.getValidate();
                            if (!validate) {
                                $("#notice")[0].className = "show";
                                setTimeout(function () {
                                    $("#notice")[0].className = "hide";
                                }, 2000);
                                e.preventDefault();
                            }
                        });
                        captchaObj.appendTo("#embed-captcha");
                        captchaObj.onReady(function () {
                            $("#wait")[0].className = "hide";
                        });
                    };
                    $.ajax({
                        url: "/sdk/web/StartCaptchaServlet.php?t=" + (new Date()).getTime(), // 加随机数防止缓存
                        type: "get",
                        dataType: "json",
                        success: function (data) {
                            console.log(data);
                            initGeetest({
                                gt: data.gt,
                                challenge: data.challenge,
                                new_captcha: data.new_captcha,
                                product: "embed",
                                offline: !data.success
                            }, handlerEmbed);
                        }
                    });
                </script>

                <p>&nbsp;</p>
            </div>
            <div class="info_tip">点击“立即注册”,即表示您同意并愿意遵守<a>《用户协议》</a></div>
            <button class="reg_btn" id="embed-submit" type="submit">立即注册</button>
        </form>
    </div>
    <div class="reg_right reg_border">
        <div class="reg_rightHead"><span>使用第三方帐号注册</span></div>
        <div class="login_kind">
            <a href="javascript:vod(0);" onclick="QQLogin();"><img src="/static/home/register/picture/qq_1.png" title="qq一键登录" alt="qq一键登录"/></a><!--<a><img src="static/picture/wx_1.png" title="微信一键登录" alt="微信一键登录"/></a>-->
        </div>
        <div class="login_explain">
            <div class="explain"><span>登录说明</span></div>
            <p class="sm_text">使用第三方帐号注册成功后，以后可使用第三方帐号一键登录，方便快捷！</p>
        </div>
    </div>
</div>
<div class="reg_footer">
    <div class="reg_bqsm">Copyright © 2018. All Rights Reserved</div>
</div>

</body>
</html>
