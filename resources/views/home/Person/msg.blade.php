@extends('home.PersonPublic.index')
@section('title','修改信息')
@section('container')
<div class="ab_right">
  <form name="form2" action="/ps_msg/doedit" method="post" onsubmit="return checkSubmit();">
    <div class="shop-nav"><a>修改信息</a></div>
    <dl class="editInfoPhone">
      <input name="dopost" value="save" type="hidden">
      <dt>基本信息</dt>
      <dd style="height: 150px;">
        <img src="{{$data->uface}}" id="img0" alt="" style="width: 100px;height: 100px;border-radius: 100px">
        <input type="file" id="file0" name="pic" style="position: relative;top: 30px;left: -100px">
      </dd>
      <dd style="clear: both">帐号：<span>{{$data->name}}</span></dd>
      <dd>
        笔名：
        <span>
          <input name="nickname" id="uname" value="{{$data->nickname}}" class="intxt" style="width:100px" type="text">
        </span>
      </dd>
      <dd>
        性别：
        <span>
          @if($data->sex == 'm')
          <input name="sex" value="男" type="radio" checked>
          男 &nbsp;
          <input name="sex" value="女" type="radio">
          女
          @elseif($data->sex == 'w')
          <input name="sex" value="男" type="radio">
          男 &nbsp;
          <input name="sex" value="女" type="radio" checked>
          女
          @endif
        </span>
      </dd>
    </dl>
    <dl class="editInfo">
      <dt>修改密码(<font color="#FF0000">不修改密码请不要填写</font>)</dt>
      <dd>
        <input name="pass" class="password" title="密码" type="password">
        <span class="pass-value">密码</span>
      </dd>
      <dd>
        <input name="repass" class="passconf" title="确认密码" type="password">
        <span class="pass-value">确认密码</span>
      </dd>
      <dd class="editInfo-btn">
        {{csrf_field()}}
        <input value="保存" class="editPassword-submit" type="submit">
        <input value="取消" class="editPassword-reset" type="reset">
      </dd>
    </dl>
  </form>
</div>
@endsection
