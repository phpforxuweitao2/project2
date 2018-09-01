@extends('home.PersonPublic.index')
@section('title','粉丝关注') 
@section('container')
  <div class="ab_right">
    <div class="shop-nav2">
      <a href="/ps_guanzhu">我关注的</a> 
      <a class="selected" href="#">我的粉丝</a>
    </div>
    <ul class="gz_list">  
      @foreach($data as $v)
      <li>
        <img src="{{$v->uface}}" width="60" height="60">
        <div class="gz_info">
          <a href="https://www.riji.cn/user/13791/" target="_blank">{{$v->nickname}}</a>
          <span>
            性别：@if($v->sex == 'm')
                  男
                  @elseif($v->sex == 'w')
                  女
                  @elseif($v->sex == 'x')
                  保密
                  @endif
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            积分：{{$v->fame}}
          </span>
          <a href="https://www.riji.cn/user/mail/13791/" target="_blank">发送短信</a>
          <a href="https://www.riji.cn/user/13791/quguan/" target="_blank">关注TA</a>
        </div>
      </li>
      @endforeach
    </ul>
    <div class="gz_page">   
      <span>共 1 页/1条记录</span>
    </div> 
  </div>
@endsection