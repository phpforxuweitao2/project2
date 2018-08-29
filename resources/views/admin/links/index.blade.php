@extends('admin.AdminPublic.index')
@section('title','友情链接页面')
@section('container')
    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<!--右侧显示内容区域 开始-->
<div class="wrapper">
    <div class="row">
        <div class="col-md-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb panel">
                <li><a href="/bk_index"><i class="fa fa-home"></i> 首页</a></li>
                <li><a href=""><i class="fa fa-book"></i> 友情链接页</a></li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">友情链接列表</header>
                <div class="panel-body">
                    <div class="adv-table">
                        <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            <div class="row-fluid">
                                <div class="col-xs-6">
                                    <div id="dynamic-table_length" class="dataTables_length">
                                        <label>
                                            <select class="form-control" size="1" name="dynamic-table_length" aria-controls="dynamic-table">
                                                <option value="10" selected="selected">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> 条/页
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <form class="form" action="/bk_cates" method="get">
                                        <div class="col-xs-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="搜索...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="button">搜索</button>
                                                 </span>
                                            </div><!-- /input-group -->
                                        </div><!-- /.col-lg-6 -->
                                    </form>
                                </div>
                            </div>
                            <table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">
                                <thead>
                                    <tr role="row">
                                        <th width="60">编号</th>
                                        <th>名称</th>
                                        <th>url</th>
                                        <th>状态</th>
                                        <th>修改时间</th>
                                        <th width="200">操作</th>
                                    </tr>
                                </thead>
                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                @foreach($links as $v)
                                    <tr class="gradeA odd">
                                        <td class="center">{{$v->id}}</td>
                                        <td class="sorting_1">{{$v->name}}</td>
                                        <td class="center">{{$v->url}}</td>
                                        <td class="center">
                                            {{date('Y-m-d H:i:s',$v->updated_at)}}
                                        </td>
                                        <td class="center hidden-phone ">
                                        
                                            @if($v->status == 0)
                                            <a class="btn btn-success" href="/bk_link/change/{{$v->id}}">启用</a>
                                            @else
                                            <a class="btn btn-warning" href="/bk_link/change/{{$v->id}}">禁用</a>
                                            @endif
                                        </td>
                                        <td class="center hidden-phone">
                                            <a class="btn btn-success" href="/bk_links/edit/{{$v->id}}">修改</a>&nbsp;&nbsp;
                                            <a class="btn btn-warning" href="/bk_links/del/{{$v->id}}">删除</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row-fluid">
                                <div class="span6" style="text-align: right;">
                                    {{$links->render()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!--右侧显示内容区域 结束-->
@endsection