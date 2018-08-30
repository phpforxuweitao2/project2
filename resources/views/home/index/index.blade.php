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
  <script type="text/javascript">
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
window.location = "https://m.riji.cn";
}
</script>
  <script src="/static/home/index/js/jquery-1.8.1.min.js" type="text/javascript"></script>
  <script src="/static/home/index/js/f188a890851e45b28d5d90a437612ffa.js" type="text/javascript"></script>
  <script src="/static/home/index/js/slideshow.js" type="text/javascript"></script>
  <script src="/static/home/index/js/g.js" type="text/javascript"></script>
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
           <li><a href="https://www.riji.cn/shujiariji/" target="_blank"><img src="/static/home/index/picture/shujia.jpg" alt="暑假日记" width="248" height="200" /></a></li>
           <li><a href="https://www.riji.cn/shujiariji/" target="_blank"><img src="/static/home/index/picture/shujia.jpg" alt="暑假日记" width="248" height="200" /></a></li>
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
        <li><a href="https://www.riji.cn/wuyijie/" target="_blank">{{$row->name}}</a></li>
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
       <li> <p class="photo"><a href="https://www.riji.cn/user/13487/" target="_blank"><img src="/static/home/index/picture/myface.jpg" alt="夏沫洛梨" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">夏沫洛梨</span>
          <a href="https://www.riji.cn/html/55234.html" target="_blank">下雨了，快跑</a>
         </div>
        </div> </li>
       <li> <p class="photo"><a href="https://www.riji.cn/user/13275/" target="_blank"><img src="/static/home/index/picture/6660768e35f74cbca49f8b5b861c3c1e.gif" alt="小建哥" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">小建哥</span>
          <a href="https://www.riji.cn/html/54907.html" target="_blank">夏云.童年.捉虾米</a>
         </div>
        </div> </li>
       <li> <p class="photo"><a href="https://www.riji.cn/user/13077/" target="_blank"><img src="/static/home/index/picture/736ea988b3c042e6a852e30d5006f214.gif" alt="刺" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">刺</span>
          <a href="https://www.riji.cn/html/55237.html" target="_blank">意外吃鸡</a>
         </div>
        </div> </li>
       <li> <p class="photo"><a href="https://www.riji.cn/user/13500/" target="_blank"><img src="/static/home/index/picture/boy.jpg" alt="李思萌" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">李思萌</span>
          <a href="https://www.riji.cn/html/55247.html" target="_blank">暑假过去一半了</a>
         </div>
        </div> </li>
       <li> <p class="photo"><a href="https://www.riji.cn/user/13491/" target="_blank"><img src="/static/home/index/picture/ec724c590abd45b6b96f8cc2d4985b3a.gif" alt="寒乔雨露" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">寒乔雨露</span>
          <a href="https://www.riji.cn/html/55238.html" target="_blank">有点不开心 非常不开心</a>
         </div>
        </div> </li>
       <li> <p class="photo"><a href="https://www.riji.cn/user/13487/" target="_blank"><img src="/static/home/index/picture/myface.jpg" alt="夏沫洛梨" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">夏沫洛梨</span>
          <a href="https://www.riji.cn/html/55233.html" target="_blank">百香果绿茶</a>
         </div>
        </div> </li>
       <li> <p class="photo"><a href="https://www.riji.cn/user/13487/" target="_blank"><img src="/static/home/index/picture/myface.jpg" alt="夏沫洛梨" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">夏沫洛梨</span>
          <a href="https://www.riji.cn/html/55230.html" target="_blank">我的手肿了</a>
         </div>
        </div> </li>
       <li> <p class="photo"><a href="https://www.riji.cn/user/13487/" target="_blank"><img src="/static/home/index/picture/myface.jpg" alt="夏沫洛梨" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">夏沫洛梨</span>
          <a href="https://www.riji.cn/html/55229.html" target="_blank">老酸奶</a>
         </div>
        </div> </li>
       <li> <p class="photo"><a href="https://www.riji.cn/user/13467/" target="_blank"><img src="/static/home/index/picture/139469515bfa4eb3b37ec091e6f06fae.gif" alt="惜羽纤" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">惜羽纤</span>
          <a href="https://www.riji.cn/html/55219.html" target="_blank">碰伤</a>
         </div>
        </div> </li>
       <li> <p class="photo"><a href="https://www.riji.cn/user/13529/" target="_blank"><img src="/static/home/index/picture/27a1051a9c2f4d1dacf6df51acc8d2eb.gif" alt="妖熘D麟韬" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">妖熘D麟韬</span>
          <a href="https://www.riji.cn/html/55214.html" target="_blank">无聊</a>
         </div>
        </div> </li>
       <li> <p class="photo"><a href="https://www.riji.cn/user/11540/" target="_blank"><img src="/static/home/index/picture/myface.jpg" alt="乐呵呵" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">乐呵呵</span>
          <a href="https://www.riji.cn/html/55213.html" target="_blank">开心的一天</a>
         </div>
        </div> </li>
       <li> <p class="photo"><a href="https://www.riji.cn/user/12487/" target="_blank"><img src="/static/home/index/picture/myface.jpg" alt="菜丶晓刻" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">菜丶晓刻</span>
          <a href="https://www.riji.cn/html/55204.html" target="_blank">说实话“有点心痛”</a>
         </div>
        </div> </li>
       <li> <p class="photo"><a href="https://www.riji.cn/user/13515/" target="_blank"><img src="/static/home/index/picture/4b9ae38302e6487199009f5364f7f5fe.gif" alt="洋葱" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">洋葱</span>
          <a href="https://www.riji.cn/html/55203.html" target="_blank">悲惨的一天</a>
         </div>
        </div> </li>
       <li> <p class="photo"><a href="https://www.riji.cn/user/12487/" target="_blank"><img src="/static/home/index/picture/myface.jpg" alt="菜丶晓刻" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">菜丶晓刻</span>
          <a href="https://www.riji.cn/html/55186.html" target="_blank">刺激战场真刺激</a>
         </div>
        </div> </li>
       <li> <p class="photo"><a href="https://www.riji.cn/user/12487/" target="_blank"><img src="/static/home/index/picture/myface.jpg" alt="菜丶晓刻" /></a></p>
        <div class="con_tit">
         <div class="ys_icon">
          <span class="data">08-23</span>
          <span class="writer">菜丶晓刻</span>
          <a href="https://www.riji.cn/html/55175.html" target="_blank">眼睛进入“灰尘”了</a>
         </div>
        </div> </li>
      </ul>
     </div>
     <div class="riji_list">
      <ul>
       <li><a href="https://www.riji.cn/html/55237.html" target="_blank">意外吃鸡</a></li>
       <li><a href="https://www.riji.cn/html/55234.html" target="_blank">下雨了，快跑</a></li>
       <li><a href="https://www.riji.cn/html/55233.html" target="_blank">百香果绿茶</a></li>
       <li><a href="https://www.riji.cn/html/55232.html" target="_blank">军训完了...</a></li>
       <li><a href="https://www.riji.cn/html/55231.html" target="_blank">菜、晓刻你给我记住！</a></li>
       <li><a href="https://www.riji.cn/html/55230.html" target="_blank">我的手肿了</a></li>
       <li><a href="https://www.riji.cn/html/55229.html" target="_blank">老酸奶</a></li>
       <li><a href="https://www.riji.cn/html/55219.html" target="_blank">碰伤</a></li>
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
       <div class="c nq-center">
        <div class="loginCon">

        </div>
       </div>
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
</html>
