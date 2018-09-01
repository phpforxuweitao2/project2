@include('home.PersonPublic.header')
<!-- <link rel="stylesheet" type="text/css" href="/static/admin/css/bootstrap.min.css"> -->
<link rel="stylesheet" type="text/css" href="/static/home/person/css/user.css">
<link rel="stylesheet" type="text/css" href="/static/home/person/css/user_002.css">
<link rel="stylesheet" type="text/css" href="/static/home/person/css/riji.css">
<link rel="stylesheet" type="text/css" href="/static/home/person/css/article.css">
<link rel="stylesheet" type="text/css" href="/static/home/person/css/qianming.css">
<link rel="stylesheet" type="text/css" href="/static/home/person/css/jifen.css">
<link rel="stylesheet" type="text/css" href="/static/home/person/css/fensi.css">
<link rel="stylesheet" type="text/css" href="/static/home/person/css/fajianxiang.css">
<link rel="stylesheet" type="text/css" href="/static/home/person/css/guanzhu.css">
<!-- <link rel="stylesheet" type="text/css" href="/static/admin/css/bootstrap.min.css"> -->


<script language="javascript" src="/static/home/person/js/jquery-1.js"></script>
<script type="text/javascript" src="/static/home/person/js/box.js"></script>
<script type="text/javascript" language="javascript" src="/static/home/person/js/j.js"></script>
<script type="text/javascript" language="javascript" src="/static/home/person/js/table_function.js"></script>
<script type="text/javascript" src="/static/home/person/js/dedeajax2.js"></script>
<script type="text/javascript" src="/static/home/person/js/ajaxpage.js"></script>
<script language="javascript" src="/static/home/person/js/main.js"></script>
<script language="javascript" src="/static/home/person/js/article_htm.js"></script>
<script language="javascript" src="/static/home/person/js/msgbox.js"></script>
<script language="javascript" src="/static/home/person/js/dropdownlist.js"></script>
<!-- 站内信 -->
<script language="javascript" src="/static/home/person/js/fajianxiang.js"></script>
<!-- 个性签名 -->
<script language="javascript" src="/static/home/person/js/qianming.js"></script>
<!-- 日记投稿 -->
<script language="javascript" src="/static/home/person/js/riji.js"></script>
<!-- 我的文章 -->
<script language="javascript" src="/static/home/person/js/wenzhang.js"></script>


</head>
<body>

<div class="header_view">
  <div class="header_top_view">
	<div class="islogin"> <a href="#"></a>你好，二年级小学生 ( ID：admin1234 )，欢迎回来！ </div>
  </div>
</div>
<div id="rj_header" class="header">
  <div class="w1000 clearfix">
    <div class="fl logo"><a target="_blank" href="https://www.riji.cn/"></a></div>	
    <!--<ul class="header_nav">
      <li><a href="#">首页</a></li>
      <li><a href="#">日记</a></li>
      <li><a href="#">周记</a></li>
      <li><a href="#">作文</a></li>    
      <li><a href="#">留言</a></li>
	</ul>-->
  </div>           
</div>

@if(session('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" id="success" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>{{session('success')}}</strong>
</div>
<script>
setInterval(function(){
    $('#success').trigger('click');
},2500)
</script>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" id="error" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>{{session('error')}}</strong>
</div>
<script>
setInterval(function(){
    $('#error').trigger('click');
},2500)
</script>
@endif

<div id="wrapper" class="clearfix w1000">
  <!-- 左侧导航栏 -->
  @include('home.PersonPublic.menu')
  <!-- 左侧导航栏结束 -->

  <!-- 右侧区域开始 -->
  @section('container')
  @show
  <!-- 右侧区域结束 -->
</div>
</body>
<!-- 图片预览 -->
<script src="/static/admin/js/ads.js"></script>
</html>