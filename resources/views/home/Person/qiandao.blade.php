@extends('home.PersonPublic.index')
@section('title','签到记录') 
@section('container')
  <div class="ab_right">
  <div class="shop-nav"><a>签到记录</a></div>
    <div class="newArticle_cz">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" id="hy_table" class="hy_table">
              <thead>
                <tr>
                  <td width="5%">排序</td>
                	<td width="10%">用户名</td>
                	<td width="10%">赠送积分</td>
                	<td width="10%">签到日期</td>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $v)
                <tr>
                  <td class="hy_title">{{$v->id}}</td>
                  <td>{{$v->name}}</td>
                  <td>{{$v->score}}</td>
                  <td>{{date("Y-m-d H:i:s",$v->created_at)}}</td>
                </tr>
                @endforeach
              </tbody> 
            </table>
      <div class="article_pages">
       <span>{{$data->render()}}</span>
      </div>
    </div>
  </div>
@endsection