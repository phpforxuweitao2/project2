@extends('admin.AdminPublic.index')
@section('title','会员列表')
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
                    <li><a href="#">会员管理</a></li>
                    <li class="active">会员列表</li>
                </ul>
                <!--breadcrumbs end -->
            </div>
   </div>
	 <div class="wrapper"> 
   <div class="row"> 
    <div class="col-sm-12"> 
     <section class="panel"> 
      <header class="panel-heading">
        会员列表 
       <span class="tools pull-right"> <a href="javascript:;" class="fa fa-chevron-down"></a> <a href="javascript:;" class="fa fa-times"></a> </span> 
      </header> 
      <div class="panel-body" style="display: block;"> 
       <table class="table  table-hover "> 
        <thead> 
         <tr> 
          <th> ID</th> 
          <th class="hidden-phone">账号</th> 
          <th>邮箱</th> 
          <th>积分</th> 
          <th>QQ</th> 
          <th>登录次数</th> 
          <th>状态</th> 
          <th>操作</th> 
         </tr> 
        </thead> 
        <tbody>
          @foreach($user as $row) 
         <tr> 
          <td> <a href="#"> {{$row->id}} </a> </td> 
          <td class="hidden-phone">{{$row->name}}</td> 
          <td>{{$row->email}}</td> 
          <td>{{$row->score}}</td> 
          <td>{{$row->qq}}</td> 
          <td>{{$row->login_num}}</td> 
          <td> @if($row->status == 0) 
          	<span class="badge badge-success">正常</span> 
          		@elseif($row->status == 1) 
          	<span class="badge badge-important">禁用</span> 
          	@endif 
          </td> 
          <td> 
			<a class="label label-info" id="add-without-image" href="/bk_users/{{$row->id}}/">修改</a>
			@if($row->status == 0) 
          		<a class="label label-danger id="remove-all" href="/bk_users/close/{{$row->id}}">禁用</a> 
          	@elseif($row->status == 1) 
          		<a  class="label label-success" id="add-without-image" href="/bk_users/open/{{$row->id}}">启用</a> 
          	@endif 
          	<a class="label label-default" id="add-max" href="/bk_users/del/{{$row->id}}">删除</a>
          </td>
         </tr> @endforeach 
        </tbody> 
       </table> 
       <!-- 分页 --> 
		  <div class="row">

		   <div class="col-xs-12" style="text-align: right;">
               {{$user->appends($request)->render()}}
		   </div>
		  </div>

      </div>
     </section> 
    </div> 
   </div> 
  </div>
<!--右侧显示内容区域 结束-->

@endsection