@extends('admin.AdminPublic.index')
@section('title','分类列表页面')
@section('container')
<!--右侧显示内容区域 开始-->
<div class="wrapper">
    <div class="row">
        <div class="col-md-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb panel">
                <li><a href="/bk_index"><i class="fa fa-home"></i> 首页</a></li>
                <li><a href="/bk_trash"><i class="fa fa-book"></i> 分类回收列表页</a></li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <h2>分类回收列表页</h2>
            </section>
        </div>
    </div>
</div>
<!--右侧显示内容区域 结束-->
@endsection