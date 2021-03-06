@extends('admin.AdminPublic.index')
@section('title','日记审核不通过列表页面')
@section('container')
    <!-- 右侧顶部搜索部分 开始 -->
    @include('admin.AdminPublic.header')
    <!-- 右侧顶部搜索部分 结束 -->
    <!-- 右侧顶部链接导航区域 开始 -->
    <div class="row">
        <div class="col-md-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb panel">
                <li><a href="/bk_index"><i class="fa fa-home"></i> 首页</a></li>
                <li><a href="#">内容管理</a></li>
                <li class="active">日记审核不通过列表页面</li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>
    <div class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <!-- 搜索  -->
                    <div class="panel-body col-sm-6">
                        <h4>审核不通过列表</h4>
                    </div>
                    <div class="panel-body col-sm-6 text-right">
                        <form class="form-inline" role="form" method="get" action="/bk_content/riji/unpasslist">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">内容搜索</label>
                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="发布者" name="keywords" />
                            </div>
                            <button type="submit" class="btn btn-primary">搜索</button>
                        </form>
                    </div>
                    <div class="panel-body" style="display: block;">
                        <table class="table  table-hover ">
                            <thead>
                                <tr>
                                    <th> ID</th>
                                    <th>发布者</th>
                                    <th>类别</th>
                                    <th class="col-md-6">标题</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $k=>$v)
                                <tr>
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->uname}}</td>
                                    <td>{{$v->cname}}</td>
                                    <td>
                                        @php
                                            $title = changeStr($v->title,'30','...');
                                        @endphp
                                        <a href="/bk_content/riji/show/{{$v->id}}">{{$title}}</a>
                                    </td>
                                    <td>
                                        <a class="label label-danger" id="add-max" href="/bk_content/riji/del/{{$v->id}}">删除</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- 分页 -->
                        <div class="row">
                            <div class="col-xs-12" style="text-align: right;" >
                                {{$data->appends($req)->render()}}
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--右侧显示内容区域 结束-->
@endsection
