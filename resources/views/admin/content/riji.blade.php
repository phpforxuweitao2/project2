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
                    <li><a href="/bk_content/riji"><i class="fa fa-book"></i> 日记列表页</a></li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">日记列表</header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">
                                    <thead>
                                    <tr role="row">
                                        <th width="60">编号</th>
                                        <th>名称</th>
                                        <th>pid</th>
                                        <th>path</th>
                                        <th width="200">添加时间</th>
                                        <th width="200">修改时间</th>
                                        <th width="260">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody role="alert" aria-live="polite" aria-relevant="all">

                                    </tbody>
                                </table>
                                <div class="row-fluid">
                                    <div class="span6" style="text-align: right;">
                                        分页
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