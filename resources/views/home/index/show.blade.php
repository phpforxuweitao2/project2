<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="id" content="{{session('home_user')['id']}}">
    <meta http-equiv="Cache-Control" content="no-transform " />
    <title>{{$contents->title}}_日记网</title>
    <meta name="keywords" content="我的手肿了" />
    <meta name="description" content="我的手肿了:今天，我和爸爸妈妈在来福士吃完晚饭——“麻将”以后，逛起了商场。 突然，我的手臂上似乎被蚊子叮了一口，肿了一小块，痒痒的。我立刻拿起无比滴在痒的位置涂抹。过了一会儿" />
    <link rel="alternate" media="only screen and(max-width: 640px)"  href="https://m.riji.cn/html/55230.html" >
    <link rel="stylesheet" type="text/css" href="/static/home/show/css/index_3.css">
    <link rel="stylesheet" type="text/css" href="/static/home/show/css/comment_3.css">
    <style type="text/css">
        .gzBtn{ display:inline-block; margin-left:20px; padding:0px 10px; line-height:22px;border:1px solid #3ACA81;border-radius: 1px;}
        .wgt_name a.gzBtn{  color:#3ACA81;}
        .wgt_right{ position:relative;}
        .wgt_gz{ position:absolute; right:20px; top:14px; display:block;padding:0px 12px; line-height:22px; background:#3ACA81; border:1px solid #3ACA81;border-radius: 3px;}
        .wgt_gz a{color:#FFF; line-height:24px;}
        .wgt_gz:hover{ font-weight:bold;}
    </style>
    <script src="/static/home/show/js/jquery-1.8.1.min_3.js" type="text/javascript"></script>
    <script src="/static/home/show/js/pc_3.js" type="text/javascript"></script>
    <script src="/static/home/show/js/d0d59938f54c4522be984a8f5a3352d3.js" type="text/javascript"></script>
    <script src="/static/home/show/js/layer_3.js" type="text/javascript"></script>
    <script src="/static/home/show/js/zan_3.js" type="text/javascript"></script>
    <style>
        a {
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="head">
    <div class="main">
        <a class="logo" href="/"></a>
        <a href="/" class="name fl">日记大全</a>
    </div>
</div>
<div class="nav2">
    <div class="main2">
        <div class="subNav2 fl">
            <a href="http://www.project2.com">首页</a>
        @foreach($cates as $k=>$v)
            <a href="/list/{{$v->id}}" style="cursor:pointer;" title="小学生日记">{{$v->name}}</a>
        @endforeach
        </div>
    </div>
</div>
<div class="main mt15">
    <div class="l-box fl">
        <div class="mb30 shadow border">
            <div id="path">
                <a href='/'>日记网</a> >
                <a href='/list/{{$parent_cate->id}}'>{{$parent_cate->name}}</a> >
                <a href='/list/{{$childrent_cate->id}}'>{{$childrent_cate->name}}</a> >
            </div>
            <div class="l-th mb16 ar2_bt" style="height: 100px;">
                <h1>{{$contents->title}}</h1>
            </div>
            <div class="wgt_main">
                <div class="wgt_box">
                    <div class="grid">
                        <p class="wgt_photo">
                        @if($contents->is_admin === '0')
                            <a rel="nofollow" href="/user/{{$contents->uid}}" target="_blank">
                                <img src="{{$contents->uface}}">
                            </a>
                        @else
                            <a href="javascript:void(0);">
                                <img src="/static/home/person/images/boy.jpg">
                            </a>
                        @endif
                        </p>
                    </div>
                    <div class="wgt_right">
                        <div class="wgt_name clearfix">
                            @if( $contents->is_admin === '0' )
                                <a class="user_name" rel="nofollow" href="/user/{{$contents->uid}}" target="_blank">{{$contents->uname}}</a>
                                <a class="gzBtn" href="/user/{{$contents->uid}}/guanzhu" target="_blank">关注</a>
                            @else
                                <a class="user_name" rel="nofollow" href="javascript:void(0);" target="_blank">{{$contents->uname}}</a>
                            @endif
                        </div>
                        <div class="carefield">
                            <span class="mr_15">发布时间：{{date('Y-m-d H:i:s',$contents->created_at)}}</span>
                            <span class="mr_15">{{$contents->week}}</span>
                            <span class="mr_15">{{$contents->weather}}</span>
                            <span>浏览次数: </span>
                            <span>{{$contents->num}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="l-tbody">
                <div class="art-text">
                    <div style="float:right; width:336px; height:250px;padding-left:15px; padding-top:8px; padding-bottom:5px;">
                        <script type="text/javascript">a300();</script>
                    </div>
                    <div>
                        {!! $contents->content !!}
                    </div>
                    <div class="xg" id="newdigg">
                        <div class="vote_box">
                            <a id="diggGood" class="vote_recommend" title="哎哟,不错喔">
                                <span class="vote_icon"><i class="face_happy face_happyPlay"></i></span>
                                <span class="vote_number c_good" id="voteLike"  data-likenum="点赞">点赞（<i>{{$contents->laud}}</i>）</span>
                                <span class="vote_text c_good">点赞（<i>{{$contents->laud}}</i>）</span>
                            </a>

                            <a id="diggBad" class="vote_not_recommend" title="不怎么样">
                                <span class="vote_icon"><i class="face_unhappy face_unhappyPlay"></i></span>
                                <span class="vote_number c_bad" id="voteUnLike"  data-unlikenum="呵呵">呵呵（<i>{{$contents->belittle}}</i>）</span>
                                <span class="vote_text c_bad">呵呵（<i>{{$contents->belittle}}</i>）</span>
                            </a>
                        </div>
                    </div>
                    <ul>
                        <li>上一篇：@if($lastPage) <a href='/list/{{$lastPage->id}}/show' title="{{$lastPage->title}}">{{changeStr($lastPage->title,20,'...')}}</a> @else 没有了 @endif </li>
                        <li>下一篇：@if($nextPage) <a href='/list/{{$nextPage->id}}/show' title="{{$nextPage->title}}">{{changeStr($nextPage->title,20,'...')}}</a> @else 没有了 @endif </li>
                    </ul>
                    <div style="clear:both"></div>
                    <script type="text/javascript" src="/static/home/show/js/jquery.emoticons_3.js"></script>
                    {{--<script>--}}
                        {{--$.emoticons({--}}
                            {{--'activeCls':'trigger-active'--}}
                        {{--},function(api){--}}
                            {{--var $content = $('textarea[name="msg"]');--}}
                            {{--var $result  = $('#result');--}}
                            {{--$('#format').click(function(){--}}
                                {{--$result.html(api.format($content.val()));--}}
                            {{--});--}}
                        {{--});--}}
                    {{--</script>--}}

                    {{--<div class="emoticons">--}}
                        {{--<div style="width:682px; margin-top:15px;">--}}
                            {{--<div class="publisher">--}}
                                {{--<textarea name="msg" placeholder="" id="msg" class="comment-msg-txt"></textarea>--}}
                                {{--<div style="width:704px">--}}
                                    {{--<span id="a" style="margin-left:20px">最可输入200字 </span>--}}
                                    {{--<button type="button" class="button" onClick='AjaxComment()'>评论</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="comment-list"> </div>--}}
                    {{--<div class="comment-more"> <a href="javascript:void(0);" onClick='ListComment()'>加载更多</a> </div>--}}
                    {{--<script type="text/javascript">--}}
                        {{--var aid = "55230";--}}
                        {{--var page = 1;--}}
                        {{--ListComment(1);--}}
                        {{--function ListComment() {--}}
                            {{--$(".comment-more a").html("加载ing..");--}}
                            {{--$.ajax({--}}
                                {{--type : 'post',--}}
                                {{--url : "/plus/comment.php?action=list",--}}
                                {{--data : { aid: aid,page:page},--}}
                                {{--dataType : 'JSON',--}}
                                {{--success: function(jsonData ) {--}}
                                    {{--if (jsonData.totalcount<4) {--}}
                                        {{--$(".comment-more").hide();--}}
                                    {{--}--}}
                                    {{--if (jsonData.status == 1) {--}}
                                        {{--$(".comment-list").append(jsonData.info);--}}
                                        {{--$(".comment-more a").html("加载更多");--}}
                                        {{--page++;--}}
                                    {{--}--}}
                                    {{--else {--}}
                                        {{--$(".comment-more a").html(jsonData.info);--}}
                                        {{--return false;--}}
                                    {{--}--}}


                                {{--}--}}
                            {{--});--}}
                        {{--};--}}
                        {{--function AjaxComment() {--}}
                            {{--var content = $("#msg");--}}
                            {{--if (content.val().length < 5) {--}}
                                {{--alert('评论内容必须大于5个字');--}}
                                {{--return false;--}}
                            {{--}--}}
                            {{--$.ajax({--}}
                                {{--type : 'post',--}}
                                {{--url : "/plus/comment.php?action=save",--}}
                                {{--data : { aid: aid,content:content.val()},--}}
                                {{--dataType : 'JSON',--}}
                                {{--success: function(jsonData ) {--}}
                                    {{--if (jsonData.status == 1) {--}}
                                        {{--$(content).val(''); //发布后置空评论内容--}}
                                        {{--$(".comment-list").prepend(jsonData.info); //加载到列表顶部--}}
                                    {{--}--}}
                                    {{--else {--}}
                                        {{--alert(jsonData.info);--}}
                                        {{--return false;--}}

                                    {{--}--}}
                                {{--}--}}
                            {{--});--}}
                        {{--};--}}

                        {{--function Ajaxrecommend(id) {--}}
                            {{--$(".comment-list").find(".comment-post").remove();--}}
                            {{--$("#comm"+id).append("<div class='comment-post'><div class='emoticons'><div class='publisher'><div class='comment-msg'><textarea name='msg' id='msg"+id+"' class='comment-msg-txt'></textarea></p><p><a class='trigger' href='javascript:;'>☺</a><button type='button' class='button' onClick='AjaxReComment("+id+")'>回复</button><button type='button' class='button2 mr20' onClick='DelComment("+id+")'>取消</button></div></div></div></div>");--}}
                        {{--};--}}
                        {{--function DelComment(id) {--}}
                            {{--$(".comment-list").find(".comment-post").remove();--}}

                        {{--};--}}
                        {{--function AjaxReComment(id) {--}}
                            {{--var content = $("#msg"+id);--}}
                            {{--if (content.val().length < 5) {--}}
                                {{--alert('评论内容必须大于5个字');--}}
                                {{--return false;--}}
                            {{--}--}}
                            {{--$.ajax({--}}
                                {{--type : 'post',--}}
                                {{--url : "/plus/comment.php?action=save",--}}
                                {{--data : { aid: aid,fid:id,content:content.val()},--}}
                                {{--dataType : 'JSON',--}}
                                {{--success: function(jsonData ) {--}}
                                    {{--if (jsonData.status == 1) {--}}
                                        {{--$(content).val(''); //发布后置空评论内容--}}
                                        {{--$("#comm"+id+" .comment-recommend").prepend(jsonData.info); //加载到列表顶部--}}
                                    {{--} else {--}}
                                        {{--alert(jsonData.info);--}}
                                        {{--return false;--}}

                                    {{--}--}}
                                {{--}--}}
                            {{--});--}}
                        {{--};--}}
                    {{--</script>--}}
                    {{--<script language="javascript">--}}
                        {{--<!----}}
                        {{--var ppl=70; //每条长--}}
                        {{--var maxl=200; //总长--}}
                        {{--document.onkeydown=function(){--}}
                            {{--var s=document.getElementById("msg").value.length +1;--}}
                            {{--if(s>maxl)document.getElementById("msg").value=document.getElementById("msg").value.substr(0,maxl-1);--}}
                            {{--else document.getElementById("a").innerHTML="已输入："+s+"/"+maxl+" 字符"--}}
                        {{--};--}}
                        {{--function cha(){--}}
                            {{--var txt=document.getElementById("msg").value,tl=txt.length;--}}
                            {{--var txtArray=[],k=(tl/ppl<=1)?1:Math.ceil(tl/ppl);--}}
                            {{--for (var i=0;i<k;i++){--}}
                                {{--txtArray[i]=txt.substr(i*ppl,ppl);--}}
                                {{--alert(txtArray[i]) ;--}}
                            {{--}--}}
                            {{--document.getElementById("msg").value="";--}}
                            {{--document.getElementById("a").innerHTML="已输入字符: "--}}
                        {{--}--}}
                        {{--//-->--}}
                    {{--</script>--}}
                </div>
            </div>
        </div>
        <div class="knows shadow border mb30" style=" padding-top:3px;padding-left:12px;">
            {{--<script type="text/javascript" src="/static/home/show/js/niaokhqxjlprx_3.js"></script>--}}
        </div>
        <div class="knows shadow border mb30">
            <div class="ar_tit"> <span class="mark">相关日记</span> </div>
            <div class="lBox-tb lBox-List2-tb">
                <ul class="ulList">
                @foreach($relateds as $k=>$v)
                    <li><a href="/list/{{$v->id}}/show" target="_blank" title="{{$v->title}}">{{changeStr($v->title,15,'...')}}</a></li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="r-box">
        <div id="JscrollBox">
            <div class="mb30" style="width: 303px; height: 250px; background:white;">
                广告位置
                <script type="text/javascript">a300();</script>
            </div>
            <div class="relation shadow border tjzt mb30">
                <div class="list3_th"><span class="mark">阅读排行</span></div>
                <ul class="red_ph">
                @foreach($readTop10 as $k=>$v)
                    @if( $k < 3 )
                    <li>
                        <span class="ar_onHot">{{$k+1}}</span>
                        <a href="/list/{{$v->id}}/show" target="_blank" title="{{$v->title}}">{{changeStr($v->title,13,'...')}}</a>
                    </li>
                    @else
                        <li>
                            <span class="ar_offHot">{{$k+1}}</span>
                            <a href="/list/{{$v->id}}/show" target="_blank" title="{{$v->title}}">{{changeStr($v->title,13,'...')}}</a>
                        </li>
                    @endif
                @endforeach
                </ul>
            </div>
            <div class="border shadow tjzt mb30">
                <div class="list3_th"><span class="mark">年级分类</span></div>
                <div class="qc-list3 color9">
                @foreach($classCates as $k=>$v)
                    <a href="/list/{{$v->id}}" title="{{$v->name}}">{{$v->name}}</a>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div style="clear:both;"></div>
<div class="footer">
    <div class='footerIn'>
        <a href='#' target='_blank'>关于我们</a>|<a href='#' target='_blank'>网站申明</a>|<a href='#' target='_blank'>投稿帮助</a>|<a href='#' target='_blank'>意见建议</a>|<a href='#' target='_blank'>联系我们</a>
    </div>
    <div style="clear:both;"></div>
    <div class="bqsm">Copyright &copy; 2018</div>
</div>

{{--赞和踩--}}
<script>
    $diggGood   = $("#diggGood");//赞按钮
    $diggBad    = $("#diggBad");//踩按钮
    {{--diggPost('good',{{$contents->id}})--}}

    $diggGood.click(function(){
        @if( empty( session('home_user')['id'] ) )
            if ( confirm('请先登录!') ) {
                window.location.href = '/';
            }
        @else
            diggPost('good',{{$contents->id}});
        @endif
    });
    $diggBad.click(function(){
        @if( empty( session('home_user')['id'] ) )
        if ( confirm('请先登录!') ) {
            window.location.href = '/';
        }
        @else
        diggPost('bad',{{$contents->id}});
        @endif
    });

    function diggPost($type,$id) {
        $.ajax({
            url: '/digg',
            type: 'post',
            dataType:'json',
            data: {
                digg:$type,
                id:$id,
                uid: $("meta[name='id']").attr('content')
            },
            success:function(res) {
                if ( res.type == 'good' ) { //点赞后点赞数通过DOM加上
                    $(".c_good").find('i').each(function(){
                        $n1 = parseInt( $(this).text() );
                        $(this).text( $n1+1 );
                    });
                } else if( res.type == 'bad' ) {
                    $(".c_bad").find('i').each(function(){
                        $n1 = parseInt( $(this).text() );
                        $(this).text( $n1+1 );
                    });
                }
                alert( res.msg );
            },error:function(err) {
                console.log('网络错误');
            },beforeSend:function(xhr) {
                xhr.setRequestHeader('X-CSRF-TOKEN','{{csrf_token()}}')
            }
        });
    }
</script>
<script src="/static/home/show/js/dpl-tab_v2_3.js" type="text/javascript"></script>
<script type="text/javascript">
    //document.getElementById("click").innerHTML = document.getElementById("click_num").innerHTML;
</script>
</body>
</html>