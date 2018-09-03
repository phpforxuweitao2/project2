@extends('home.PersonPublic.index')
@section('title','我的个人中心')
<div style="clear:both"></div>

 @section('container')
  <div class="ab_right">
    <div class="shop-nav"><a>会员中心</a></div>
    <div class="moudle-one new_moudle">
      
      <div class="infor-div clearfix">
        <div class="fl portrait"><img src="{{$data->uface}}" width="98" height="98"></div>
        <div class="kinds_of fl">
          <div class="name-user clearfix">
            <div class="notice-i fl"></div>
            <div class="say-hello fl"><span>{{$data->nickname}} ( ID：{{$data->name}} )</span></div>
          </div>
          <div class="kinds_state clearfix">
            <div class="every  fl">
              <i class="bd-qq every-i"></i>
              <div class="notice">
                <i class="triangle"></i>{{$data->qq}}
              </div>            
            </div>
            <!--<div class="every  fl"> <a href="#"><i class="no-phone every-i"></i></a>
              <div class="notice"> <i class="triangle"></i>点击绑定</div>
            </div>-->
            <div class="every fl">
              <i class="bd-mail every-i"></i>
              <div class="notice" style="width: 200px">
                <i class="triangle"></i>{{$data->email}}
              </div>
            </div>
          </div>
          <div class="Balance  new_balance">
            <p class="fl">
              积分：<span id="jf">{{$data->score}}</span> 
              人气：<span>{{$data->fame}}</span>  
              粉丝：<span>{{$to_uid}}</span>
            </p>
            @foreach($qd as $v)
            <a href="javascript:void(0)" class="qd_btn fl">
              @if($v->status == 0)
              未签到
              @elseif($v->status == 1)
              已签到
              @endif
            </a>
            @endforeach
            <a class="join_btn" target="_blank" href="">
             <img src="/static/home/person/images/group.png" title="点击加入小作者QQ群" border="0">
            </a>
          </div>
        </div>
        <div class="fl reply-box"> </div>
      </div>
      
      <div style="clear:both"></div>
      <div class="context">
      	<div class="zb_wrap">
          <div id="" class="pl_con">
            <div class="">
              <ul class="zb_list">
                <li class="zb_head zb">收到的评论</li>
              </ul>
            </div>
            <div class="pl_conTxt">
              <div class="">                 
              </div>
            </div>
          </div>
          <div id="" class="pl_con">
            <div class="">
              <ul class="zb_list">
                <li class="zb_head">会员动态</li>
              </ul>
            </div>
            <div class="pl_conTxt">
              <div class="">                 
                <ul id="dt_list" class="dt_list">
                  <li><span>36分钟前</span><a class="link" href="https://www.riji.cn/user/13561/" target="_blank">对对对对对对</a> 评论了文章 <a class="key_word" href="https://www.riji.cn/html/55229.html" target="_blank">老酸奶</a></li>
                </ul>
                <ul id="dt_list" class="dt_list">
                  <li><span>38分钟前</span><a class="link" href="https://www.riji.cn/user/12468/" target="_blank">纯音乐</a> 评论了文章 <a class="key_word" href="https://www.riji.cn/html/55242.html" target="_blank">小MM</a></li>
                </ul>
                <ul id="dt_list" class="dt_list">
                  <li><span>3小时前</span><a class="link" href="https://www.riji.cn/user/13434/" target="_blank">莫言</a> 回复了文章 <a class="key_word" href="https://www.riji.cn/html/54821.html" target="_blank">新功能</a></li>
                </ul>
                <ul id="dt_list" class="dt_list">
                  <li><span>3小时前</span><a class="link" href="https://www.riji.cn/user/13536/" target="_blank">立之名</a> 回复了文章 <a class="key_word" href="https://www.riji.cn/html/54637.html" target="_blank">回忆</a></li>
                </ul>
                <ul id="dt_list" class="dt_list">
                  <li><span>3小时前</span><a class="link" href="https://www.riji.cn/user/13315/" target="_blank">党金博</a> 评论了文章 <a class="key_word" href="https://www.riji.cn/html/55186.html" target="_blank">刺激战场真刺激</a></li>
                </ul>
                <ul id="dt_list" class="dt_list">
                  <li><span>2018-08-23 23:12:31</span><a class="link" href="https://www.riji.cn/user/13559/" target="_blank">抓不住的杰瑞</a> 评论了文章 <a class="key_word" href="https://www.riji.cn/html/53201.html" target="_blank">煎荷包蛋</a></li>
                </ul>
                <ul id="dt_list" class="dt_list">
                  <li><span>2018-08-23 22:30:08</span><a class="link" href="https://www.riji.cn/user/13487/" target="_blank">夏沫洛梨</a> 回复了文章 <a class="key_word" href="https://www.riji.cn/html/55229.html" target="_blank">老酸奶</a></li>
                </ul>
                                <ul id="dt_list" class="dt_list">
                  <li><span>2018-08-23 22:25:24</span><a class="link" href="https://www.riji.cn/user/13487/" target="_blank">夏沫洛梨</a> 回复了文章 <a class="key_word" href="https://www.riji.cn/html/55229.html" target="_blank">老酸奶</a></li>
                </ul>
                                <ul id="dt_list" class="dt_list">
                  <li><span>2018-08-23 20:59:29</span><a class="link" href="https://www.riji.cn/user/13383/" target="_blank">小子大帅比</a> 评论了文章 <a class="key_word" href="https://www.riji.cn/html/54743.html" target="_blank">没事做（吗？）</a></li>
                </ul>
                                <ul id="dt_list" class="dt_list">
                  <li><span>2018-08-23 20:43:39</span><a class="link" href="https://www.riji.cn/user/13393/" target="_blank">喵酱</a> 评论了文章 <a class="key_word" href="https://www.riji.cn/html/55186.html" target="_blank">刺激战场真刺激</a></li>
                </ul>
                                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
  $('.qd_btn').click(function(){
    qd = $(this);
    $.get('/ps_index/qiandao',{},function(data){
      if(data.code == 1){
        alert('签到成功，获得'+data.num+'积分');
        qd.text('已签到');
        $('#jf').text(data.score);
      }else if(data == 0){
        alert('今日已签到过,请不要重复签到');
      }
    },'json');
  });
</script>
@endsection
