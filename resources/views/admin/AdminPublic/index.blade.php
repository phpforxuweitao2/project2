@include('admin.AdminPublic.meta')

<body class="sticky-header">

<section>
<!-- 左侧菜单栏 开始 -->
@include('admin.AdminPublic.menu')
<!-- 左侧菜单栏 结束-->

<!-- 右侧内容区域 开始-->
@section('container')
@show
<!-- 右侧内容区域 结束-->
</section>

@include('admin.AdminPublic.footer')