<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    {{--<link rel="shortcut icon" href="#" type="image/png">--}}

    <title>后台管理系统登录</title>

    <link href="/static/admin/css/style.css" rel="stylesheet">
    <link href="/static/admin/css/style-responsive.css" rel="stylesheet">
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/static/admin/js/html5shiv.js"></script>
    <script src="/static/admin/js/respond.min.js"></script>
    <![endif]-->
    <script src="/static/admin/js/jquery-1.10.2.min.js"></script>
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" action="bk_dologin" method="post">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">后台管理系统登录</h1>
            <img src="/static/admin/images/login-logo.png" alt=""/>
        </div>
        @if(session('admin_login_error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" id="login_err" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{session('admin_login_error')}}
            </div>
            <script>
                setInterval(function(){
                    $('#login_err').trigger('click');
                },2000)
            </script>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" id="empty_err" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <script>
                setInterval(function(){
                    $("#empty_err").trigger('click');
                },2000)
            </script>
        @endif

        <div class="login-wrap">
            <input type="text" class="form-control" name="name" id="name" placeholder="用户名" value="{{old('name')}}">
            <input type="password" class="form-control" name="pass" id="pass" placeholder="密码">
             {{csrf_field()}}
            <button class="btn btn-lg btn-login btn-block" id="sub" type="submit">登录</button>
            {{--<div class="registration">--}}
                {{----}}
                {{--<a class="" href="registration.html">--}}
                    {{----}}
                {{--</a>--}}
            {{--</div>--}}
            <!-- <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
                </span>
            </label> -->

        </div>

        <!-- Modal -->
        {{--<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">--}}
            {{--<div class="modal-dialog">--}}
                {{--<div class="modal-content">--}}
                    {{--<div class="modal-header">--}}
                        {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
                        {{--<h4 class="modal-title">Forgot Password ?</h4>--}}
                    {{--</div>--}}
                    {{--<div class="modal-body">--}}
                        {{--<p>Enter your e-mail address below to reset your password.</p>--}}
                        {{--<input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">--}}

                    {{--</div>--}}
                    {{--<div class="modal-footer">--}}
                        {{--<button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>--}}
                       {{----}}
                        {{--<button class="btn btn-primary" type="button">Submit</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- modal -->

    </form>

</div>



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="/static/admin/js/bootstrap.min.js"></script>
<script src="/static/admin/js/modernizr.min.js"></script>
</body>
</html>
