<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <link rel="stylesheet" type="text/css" href="/static/home/person/css/space.css" /> 
  <title>{{$msg->nickname}}的日记与作文</title> 
 </head> 
 <body> 
  <!--登录显示--> 
  <div class="headerIn"> 
   <div class="logo">
    <a href="/"><img src="/static/home/person/images/logo.png" alt="" /></a>
   </div> 
   <div class="navi">
    <!-- <a href="https://www.riji.cn/">网站首页</a> -->
  <!--   <a href="https://www.riji.cn/">日记</a>
    <a href="https://www.riji.cn/zhouji/">周记</a>
    <a href="https://www.riji.cn/zuowen/">作文</a> -->
    <!-- <a href="#">留言</a> -->
   </div> 
   <div class="t_manage"> 
    <a href="/ps_index" alt="{{$name}}">{{$name}}</a> 
    <a href="/logout">[退出]</a> 
    <a href="/ps_index">会员中心</a> 
   </div> 
  </div> 
  <div class="item"> 
   <div class="album-summary layout"> 
    <div class="album-summary-inner"> 
     <div class="cover"> 
      <img src="{{$msg->uface}}" alt="" /> 
     </div> 
     <div class="person_intro"> 
      <h1 class="per_title">{{$msg->nickname}}</h1> 
      <div class="per_summary">
       {{$msg->signatrue}}
      </div> 
      <div class="per_xgBtn"> 
       <a class="per_btn gz_btn" href="/ps_space/gz/{{$msg->uid}}">关注</a> 
       <button class="per_btn sx_btn"><a href="/ps_letter/send/{{$msg->uid}}" target="_blank">私信</a></button> 关注：{{$msg->from_uid}} 人&nbsp;&nbsp;&nbsp;&nbsp;粉丝：{{$fs}} 人 
      </div> 
     </div> 
     <div class="clear"></div> 
    </div> 
    <span class="blur-wrap"> <span class="blur-img" style="background-image: url(/static/home/person/images/myface.jpg)"> </span> <span class="blur-mask"></span> </span> 
   </div> 
   <!-- 毛玻璃背景 --> 
   <span class="blur-wrap"> <span class="blur-img" style="background-image:url(/static/home/person/css/images/myface.jpg)"> </span> <span class="blur-mask"></span> </span> 
  </div> 
  <div class="t_main"> 
   <div class="t_left"> 
    <ul>
     @foreach($content as $v)
     <li> 
      <div class="title"> 
       <span class="zw_tit"> <a href="" target="_blank" title="{{$v->title}}">{{$v->title}}</a> </span> 
      </div> 
      <div class="clear"></div> 
      <div class="summary"> 
       <p>{{$v->content}}</p> 
      </div> 
      <div class="artinfo">
       <span class="like">点击：{{$v->num}}</span> 获赞：{{$v->laud}} 
       <span class="time">日期：{{date('Y-m-d H:i:s',$v->updated_at)}}</span>
      </div>
     </li>
     @endforeach
    </ul> 
    <br /> 
   </div> 
   <div class="t_rights"> 
    <div class="user_visitor"> 
     <h2>个人资料</h2> 
    </div> 
    <dl class="user_fans"> 
     <dd>
      性别:
      <strong>
        @if($msg->sex == 'm')
         男
        @elseif($msg->sex == 'w')
         女
        @endif
      </strong>
     </dd> 
     <dd>
      人气:
      <strong>{{$msg->fame}}</strong>
     </dd> 
     <dd>
      积分:
      <strong>{{$msg->score}}</strong>
     </dd> 
     <!-- <dd>
      s等级:
      <strong><img src="/static/home/person/images/v1.png" /></strong>
     </dd> --> 
     <dd>
      最后登录:
      <strong>{{date('Y-m-d H:i:s',$msg->last_login_time)}}</strong>
     </dd> 
    </dl> 
    <!-- <div class="user_visitor"> 
     <h2>最近访客</h2> 
     <ul class="avatar_list"> 
      <li> <a href=""> <img src="/static/home/person/images/myface_002.jpg" title="二年级小学生" alt="二年级小学生" width="42" height="42" /></a> </li> 
     </ul> 
    </div> --> 
   </div> 
  </div> 
  <div class="footer">
   Copyright &copy; 2012-2016 
   <a href="#">印象日记</a> All Rights Reserved.
  </div>  
 </body>
</html>