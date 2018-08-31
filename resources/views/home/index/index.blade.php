<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Cache-Control" content="no-transform " />
  <title>日记大全_小学生日记大全网</title>
  <meta name="keywords" content="小学生日记,小学生日记大全" />
  <meta name="description" content="小学生日记大全网，提供小学生一年级、二年级、三年级、四年级、五年级、六年级日记，以及日记50字,100字,200字,300字,400字,500字，等小学生日记。" />
  <link rel="alternate" media="only screen and(max-width: 640px)" href="https://m.riji.cn/" />
  <link href="/static/home/index/css/index.css" rel="stylesheet" type="text/css" />
  <link href="/static/home/index/css/newfix.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="/static/home/index/css/iconfont.css">
  <script type="text/javascript">
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
window.location = "https://m.riji.cn";
}
</script>
  <script src="/static/home/index/js/jquery-1.8.1.min.js" type="text/javascript"></script>
  <script src="/static/home/index/js/f188a890851e45b28d5d90a437612ffa.js" type="text/javascript"></script>
  <script src="/static/home/index/js/slideshow.js" type="text/javascript"></script>
  <script src="/static/home/index/js/g.js" type="text/javascript"></script>
  <style type="text/css">
  .longd{
    width:222px;
    height: 30px;
    padding:0px 5px 0px 34px;
    margin-bottom:20px;
    border: 1px solid #ccc;
    position: relative;
  }
  .longd i{
    position: absolute;
    left: 6px;
    top: 3px;
    font-size: 18px;
    color: #ccc;
  }
  .longd input{
    height:30px;
    border: none;
  }
  .cbx{
    border: none;
    line-height: 20px;
    padding-left: 5px;
  }
  .cbx span{
    position: relative;
    top:-11px;
    left: 3px;
  }
  #ddlulu{
    height: 30px;
    width: 264px;
    background: #ccc;
    text-align: center;
    display: block;
    font-size: 16px;
    color: #fff;
    line-height: 30px;
  }
  #ddlulu:hover{
    background:#FC6F31;
    cursor:pointer;
  }
  </style>
 </head>
 <body id="Jbody">
  <div class="main" id="main1">
   <div class="head">
    <a><em class="head-title"></em></a>
    <a href="https://www.riji.cn/" target="_blank"><em class="head-channel">日记大全</em></a>
    <em class="head-zq"></em>
    <div class="search">
     <div id="s-form" class="form">
     </div>
    </div>
   </div>
  </div>
  <div class="nav2">
   <div class="main2">
    <div class="subNav2 fl">
     <a href="https://www.riji.cn/">首页</a>
    @foreach($cates as $v)
     <span class="subNav-more2"> {{$v->name}}<em class="subNav-more-btn2"></em>
      <ul class="subNav-more-ul2">
        @foreach($v->dev as $val)
       <li class="subNav-more-li"><a href="https://www.riji.cn/1/" target="_blank" title="一年级日记">{{$val->name}}</a></li>
        @endforeach
      </ul> </span>
      @endforeach
    </div>
   </div>
  </div>
  <div class="main tab2 ">
   <div class="left660 border shadow fl">
    <div class="left_box">
     <div class="hotpic">
      <div class="comiis_wrapad" id="slideContainer">
       <div id="frameHlicAe" class="frame cl">
        <div class="block">
         <div class="cl">
          <ul class="slideshow" id="slidesImgs">
           <li><a href="https://www.riji.cn/shujiariji/" target="_blank"><img src="static/picture/shujia.jpg" alt="暑假日记" width="248" height="200" /></a></li>
           <li><a href="https://www.riji.cn/shujiariji/" target="_blank"><img src="static/picture/shujia.jpg" alt="暑假日记" width="248" height="200" /></a></li>
          </ul>
         </div>
         <div class="slidebar" id="slideBar">
          <ul>
           <li class="on">1</li>
           <li>2</li>
           <li>3</li>
           <li>4</li>
          </ul>
         </div>
        </div>
       </div>
      </div>
      <script type="text/javascript">
                    SlideShow(2500);
                    </script>
      <div class="survey_block_index">
       <div class="title_survey_block_index">
        <ul class="scrollUl">
         <a id="m01" class="sd01" href="javascript:void(0)"></a>
         <a id="m02" class="sd02" href="javascript:void(0)"></a>
         <a style="BACKGROUND-IMAGE: none" id="m03" class="sd03" href="javascript:void(0)"></a>
        </ul>
       </div>
      </div>
     </div>
     <div class="hotlist">
      <div class="term">
       热门日记
      </div>
      <div class="term_list">
       <ul>
        @foreach($data as $row)
        <li><a href="#" target="_blank">{{$row->name}}</a></li>
       @endforeach
       </ul>
      </div>
     </div>
    </div>
    <div class="middle_box">
     <div class="riji">
      <a href="javascript:vod(0);" onclick="tougao();" target="_blank">我要投稿</a>原创日记
     </div>
     <div class="moveAr" id="scrollDiv">
      <ul>
       <li> <p class="photo"><a href="https://www.riji.cn/user/13487/" target="_blank"><img src="static/picture/myface.jpg" alt="夏沫洛梨" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">夏沫洛梨</span>
          <a href="https://www.riji.cn/html/55234.html" target="_blank">下雨了，快跑</a>
         </div>
        </div> </li>
      </ul>
     </div>
     <div class="riji_list">
      <ul>
        @foreach($data_recommand as $k=>$v)
        @php
         $title = changeStr($v->title,'10','...');
        @endphp
        <li><a href="#" target="_blank">{{$title}}</a></li>
       @endforeach
      </ul>
     </div>
    </div>
   </div>
   <div class=" border shadow fr">
    <div class="slide03">
     <div class="control">
      <ul id="myTab666">
       <li class="active"><a>会员登录<em></em></a></li>
       <li class="normal"><a href="https://www.riji.cn/user/reg" target="_blank">会员注册<em></em></a></li>
      </ul>
     </div>
     <div class="tb-slide05">
      <div id="_userlogin">
      @if(!session('home_user'))
      <!-- 登录的表单 -->
       <div class="c nq-center">
        <div class="loginCon">
           <form>
            <div class="longd">
              <i class="iconfont icon-yonghu"></i>
              <input type="text" name="name" value="{{cache('home_info')['name']}}">
            </div>
            <div class="longd">
              <i class="iconfont icon-icon_password"></i>
              <input type="password" name="pass" value="{{cache('home_info')['pass']}}">
            </div class="longd">
            <div class="longd cbx">
              <label>
                <input type="checkbox" checked="true" name="rem" value="1">
                <span>下次自动登录</span>
              </label>
            </div class="longd">
            <a id="ddlulu" href="javascript:void(0)">登  录</a>
          </form>
        </div>
       </div>
      <!-- 登录结束 -->
      @else
       <div class="c nq-center">
         <div style="height:226px">
          <a class="first pc-edit"><img class="fl" src="//thirdqq.qlogo.cn/qqapp/101394506/3AEFBFD228E301EB7E78F6D140943B0D/100" width="68" height="68" /> <span class="art-tit">夜凌弃</span> <span class="art-des">积分：15 </span></a>
          <div class="user_menu">
           <ul>
            <li><a href="/user/riji_add" target="_blank">发表文章</a></li>
            <li><a href="/user/wenzhang/" target="_blank">我的投稿</a></li>
            <li><a href="/user/lipin" target="_blank">积分兑换</a></li>
            <li><a href="/user/touxiang" target="_blank">头像管理</a></li>
            <li><a href="/user/13560/" target="_blank">我的主页</a></li>
            <li><a href="/out/" target="_blank">退出登录</a></li>
            <span><a href="/user/" target="_blank">进入会员中心</a></span>
           </ul>
          </div>
         </div>
        </div>
        <!-- 登录过 -->
        @endif
      </div>
       </div>
     <div style="clear:both"></div>
     <div class="iiarTitle">
      <a>本站公告</a>
     </div>
     <div class="iiarList">
      <ul>
       <li><a>本站已全新改版</a><span class="iar_time">12/8</span></li>
       <li><a>注册本站会员用户须知</a><span class="iar_time">12/8</span></li>
       <li><a>关于会员投稿的说明</a><span class="iar_time">12/8</span></li>
      </ul>
     </div>
    </div>
   </div>
  </div>
  <div style="clear:both"></div>
  <div class="main tab3 clearfix" id="main2">
   <div class="left660 fl border shadow">
    <div class="th clearfix">
     <p class="tabTit fl">小学生日记</p>
     <div class="th-b fr">
      <a href="https://www.riji.cn/1/" target="_blank">一年级</a>
      <em></em>

     </div>
    </div>
    <div class="pic-txt">
     <div class="pics">
      <span><a target="_blank" href="https://www.riji.cn/html/42637.html"><img src="/static/home/index/picture/1-1612202106051n.jpg" border="0" width="180" height="135" alt="猫" /><em></em><i>猫</i></a></span>
      <span><a target="_blank" href="https://www.riji.cn/html/12832.html"><img src="/static/home/index/picture/1-161210120954435.jpg" border="0" width="180" height="135" alt="我爱看书" /><em></em><i>我爱看书</i></a></span>
     </div>
     <div class="txtbox">
      <ul class="txt" style="margin-top:20px">
       <li><a href="https://www.riji.cn/html/55247.html" target="_blank">暑假过去一半了</a> </li>

      </ul>
     </div>
    </div>
   </div>
   <div class="right306 border shadow fr">
    <div class="slide03">
     <div class="control">
      <ul id="myTab">
       <li class="active" onmouseover="nTabs(this,0);"><a>阅读排行<em></em></a></li>
       <li class="normal" onmouseover="nTabs(this,1);"><a>字数分类<em></em></a></li>
      </ul>
     </div>
     <div class="tb-slide03">
      <div class="c" id="myTab_Content0">
       <ul class="hotPicUlList">
        <li> <a href="https://www.riji.cn/html/53107.html" target="_blank"><i class="iName">放鞭炮</i> <i class="iGood">二年级日记</i> </a> </li>

       </ul>
      </div>
      <div class="c" id="myTab_Content1" style="display:none;">
       <div class="qc-list3 color9 mt25">
        <a target="_blank" href="https://www.riji.cn/20zi/" title="日记20字">20字</a>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div style="clear:both"></div>
  <div class="main border shadow mb30">
   <div class="i3_lBox">
    <div class="i3lBox-th">
     <h3 class="mark">月投稿榜<span style=" margin-left:20px; font-size:14px; color:#666">[ 按一月内通过审核的投稿数排序 ]</span></h3>
    </div>
    <ul class="picList-ul">
     <li><a href="https://www.riji.cn/user/13050/" target="_blank"><img src="/static/home/index/picture/myface.png" width="65" height="65" /><i>柠檬不萌❤</i></a></li>
    </ul>
   </div>
  </div>
    </div>
  <div style="clear:both"></div>
  <div class="main mb30">
   <div class="i3_lBox border shadow">
    <div class="i3lBox-th">
     <h3 class="mark">教育图库</h3>
    </div>
    <div class="lBox-tb">
     <ul class="picTxt-ul">
      <li><a href="https://www.riji.cn/scb/" target="_blank"><img src="/static/home/index/picture/sptu1.jpg" width="220" height="150" /><i>手抄报</i></a></li>
      <li><a><img src="/static/home/index/picture/sptu2.jpg" width="220" height="150" /><i>黑板报</i></a></li>
      <li><a href="https://www.riji.cn/jbh/" target="_blank"><img src="/static/home/index/picture/sptu3.jpg" width="220" height="150" /><i>简笔画</i></a></li>
      <li><a><img src="/static/home/index/picture/sptu4.jpg" width="220" height="150" /><i>手工小制作</i></a></li>
     </ul>
    </div>
   </div>
  </div>
  <div class="main mb30">
   <div class="i3_lBox border shadow">
    <div class="i3lBox-th">
     <h3 class="mark">合作伙伴</h3>
     <img src="/static/home/index/picture/lxqq.gif" width="200" height="36" />
    </div>
    <div class="lBox-tb i3_hzhb clearfix">
     <a href="http://www.riji.cn/" target="_blank">日记大全</a>

    </div>
   </div>
  </div>
  <div class="footer">
   <script src="/static/home/index/js/link.js" type="text/javascript"></script>
   <div style="clear:both;"></div>
   <div class="bqsm">
    Copyright &copy; 2004-2017 www.riji.cn . All Rights Reserved
    <a href="https://www.riji.cn/">日记网</a> 日记大全
    <a href="http://www.miitbeian.gov.cn/" target="_blank">苏ICP备16062942号-9</a>
    <br />
    <img src="/static/home/index/picture/gongan.png" width="20" height="20" />苏公网安备 32132202000332号
   </div>
  </div>
  <script src="/static/home/index/js/dpl-tab_v2.js" type="text/javascript"></script>
  <script src="/static/home/index/js/newfix.js"></script>
 </body>
 <script type="text/javascript">
    $('#ddlulu').click(function(){
        name = $("input[name='name']").val();
        pass = $("input[name='pass']").val();
        rem = $("input[name='rem']").attr('checked');
        // alert(name);
        if (rem == 'checked') {
          rem = 1;
        } else {
          rem = 0;
        }
          $.ajax({
          url: '/login_check',
          type:'post',
          dataType:'json',
          data:{name:name,pass:pass,rem:rem},
          success:function(res){
            alert(res.msg);
          }, error:function(err){
            console.log('网络错误');
          },beforeSend:function(xhr){
            xhr.setRequestHeader('X-CSRF-TOKEN','{{csrf_token()}}');
          }
       });
    });

 </script>
</html>
