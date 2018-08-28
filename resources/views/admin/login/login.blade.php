<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>后台管理系统登录</title>

    <link href="/static/admin/css/style.css" rel="stylesheet">
    <link href="/static/admin/css/style-responsive.css" rel="stylesheet">
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
    	.mws-form-message {
		    font-size: 12px;
		    cursor: pointer;
		    border: 1px solid #d2d2d2;
	        border-top-color: rgb(210, 210, 210);
	        border-top-style: solid;
	        border-top-width: 1px;
	        border-right-color: rgb(210, 210, 210);
	        border-right-width: 1px;
	        border-bottom-color: rgb(210, 210, 210);
	        border-bottom-width: 1px;
	        border-left-color: rgb(210, 210, 210);
	        border-left-width: 1px;
		    padding: 15px 8px 15px 45px;
		    position: relative;
		    vertical-align: middle;
		    background-color: #f8f8f8;
		    background-position: 12px 12px;
		    background-repeat: no-repeat;
		    margin-bottom: 12px;
		    -webkit-border-radius: 3px;
		    -moz-border-radius: 3px;
		    border-radius: 3px;
		}
		.mws-form-message.warning {
		    background-color: #fef0b1;
		    background-image: url(/static/admin/images/message-warning.png);
		    border-color: #ddca76;
	        border-top-color: rgb(221, 202, 118);
	    	color: #a98b15;
		}
    </style>
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" action="bk_dologin" method="post">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">后台管理系统登录</h1>
            <img src="/static/admin/images/login-logo.png" alt=""/>
        </div>
        @if(session('error'))
	        <div class="mws-form-message warning">
	            {{session('error')}} 
	        </div>
        @endif
        <div class="login-wrap">
            <input type="text" class="form-control" name="name" id="name" placeholder="用户名" autofocus>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="密码">
             {{csrf_field()}}
            <button class="btn btn-lg btn-login btn-block" id="sub" type="submit">
                <i class="fa fa-check"></i>
            </button>

            <div class="registration">
                
                <a class="" href="registration.html">
                    
                </a>
            </div>
            <!-- <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label> -->

        </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                       
                        <button class="btn btn-primary" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

    </form>

</div>



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="/static/admin/login/js/jquery-1.10.2.min.js"></script>
<script src="/static/admin/login/js/bootstrap.min.js"></script>
<script src="/static/admin/login/js/modernizr.min.js"></script>
<script>
	$('.warning').click(function(){
		$(this).css('display','none');
	});
</script>
</body>
</html>
