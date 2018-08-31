@extends('home.PersonPublic.index')
@section('title','我的个人中心')
<div style="clear:both"></div>

 @section('container')
  <div class="ab_right">
    <div class="shop-nav"><a>会员中心</a></div>
    <div class="moudle-one new_moudle">
      @foreach($data as $v)
      <div class="infor-div clearfix">
        <div class="fl portrait"><img src="{{$v->uface}}" width="98" height="98"></div>
        <div class="kinds_of fl">
          <div class="name-user clearfix">
            <div class="notice-i fl">
                          </div>
            <div class="say-hello fl"><span>{{$v->ncikname}} ( ID：{{$v->name}} )</span></div>
          </div>
          <div class="kinds_state clearfix">
            <div class="every  fl">
              <i class="bd-qq every-i"></i>
              <div class="notice">
                <i class="triangle"></i>{{$v->qq}}
              </div>            
            </div>
            <!--<div class="every  fl"> <a href="#"><i class="no-phone every-i"></i></a>
              <div class="notice"> <i class="triangle"></i>点击绑定</div>
            </div>-->
            <div class="every fl">
              <i class="bd-mail every-i"></i><div class="notice" style="width: 200px"><i class="triangle"></i>{{$v->email}}</div>            </div>
          </div>
          <div class="Balance  new_balance">
            <p class="fl">积分：<span>{{$v->score}}</span> 人气：<span>{{$v->fame}}</span>  粉丝：<span>{{$to_uid}}</span></p> 
            <!--<a href="/user/lipin" class="jf_btn fl">积分兑换</a>-->  <a href="https://www.riji.cn/user/qiandao" class="qd_btn fl">签到得积分</a> <a class="join_btn" target="_blank" href="https://shang.qq.com/wpa/qunwpa?idkey=86c09783d5cd8b3ae99bee5c629c7cf59885420ace300849c313c79f6ba0b296"><img src="/static/home/person/images/group.png" title="点击加入小作者QQ群" border="0"></a></div>
        </div>
        <div class="fl reply-box"> </div>
      </div>
      @endforeach
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
@endsection
