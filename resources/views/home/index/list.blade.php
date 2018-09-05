<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-transform " />
    <title>{{$cate_info->name}}_小学生日记大全网</title>
    <meta name="keywords" content="{{$cate_info->name}}" />
    <meta name="description" content="{{$cate_info->name}}"/>
    <link href="/static/home/list/css/index.css" rel="stylesheet" type="text/css">
    <script src="/static/home/list/js/jquery-3.1.1.js" type="text/javascript"></script>
    <script src="/static/home/list/js/uaredirect.js" type="text/javascript"></script>
    <script src="/static/home/list/js/g.js" type="text/javascript"></script>
    <script src="/static/home/index/js/slideshow.js" type="text/javascript"></script>
    <style>
        div.list_page>span {
            text-align: center;
        }
        div.list_page>span>.pagination>li {
            float: left;
        }
        div.list_page>span>.pagination>li.disabled>span {
            border: 1px solid #ededed;
            cursor: not-allowed;
        }
        div.list_page>span>.pagination>li.active>span {
            border: 1px solid #81c08f;
        }
        a {
            cursor: pointer;
        }
    </style>
</head>
<body id="Jbody">
<div class="head">
    <div class="main">
        <a style="cursor:pointer;" class="logo" href="/"></a>
        <a style="cursor:pointer;" href="/" class="name fl">日记</a>
        <p class="h-crumb">
            <em class="arr"></em>
            <a href='/list/{{$cate_info->id}}'>{{$cate_info->name}}</a>
        </p>
        <div class="search">
        </div>
    </div>
</div>
<!-- nav S -->
<div class="nav2">
    <div class="main2">
        <div class="subNav2 fl">
            <a href="/">首页</a>
        @foreach($cates as $k => $v)
            <span class="subNav-more2">
                <a style="cursor:pointer;" href="/list/{{$v->id}}">{{$v->name}}</a>
                <em class="subNav-more-btn2"></em>
            @if( !empty($v->child) )
                <ul class="subNav-more-ul2">
                @foreach($v->child as $k2=>$v2)
                    <li class="subNav-more-li">
                        <a style="cursor:pointer;" href="/list/{{$v2->id}}" target="_blank" title="{{$v2->name}}">{{$v2->name}}</a>
                    </li>
                @endforeach
                </ul>
            @endif
            </span>
        @endforeach
        </div>
    </div>
</div>
<div class="main2 mb30">
    <div class="left665">
        <div class="lBox qaList part">
            <div class="lBox-th2 qaList-nav">
                <a class="toc current" href="https://www.riji.cn/shujiariji/" target="_self">{{$cate_info->name}}大全</a>
            </div>
            <div class="lBox-tb">
                <ul class="qaList-ulList ">
                @foreach($list as $k=>$v)
                    <li>
                        <p class="pQ">
                            <span class="fr lgray">{{date('Y-m-d',$v->created_at)}}</span>
                            <span class="fr lgray">{{$v->size}}字</span>
                            <span class="fr pAuthor">{{$v->uname}}</span>
                            <a style="cursor:pointer;" href="/list/{{$v->id}}/show">{{changeStr($v->title,'20','...')}}</a>
                        </p>
                    </li>
                @endforeach
                </ul>
                <div class="list_page">
                    <span>
                        {{$list->render()}}
                    </span>
                </div>
                <div style="margin-top:20px; padding-bottom:40px; margin-left:32px;">
                    <script type="text/javascript">a710();</script>
                </div>
            </div>
        </div>
    </div>
    <div class="right305">
        <div class="rad shadow mb30" style="width:303px; height:250px">
            <script type="text/javascript">a300();</script>
        </div>
        <div class="relation shadow border tjzt mb30">
            <div class="list3_th"><span class="mark">阅读排行</span></div>
            <ul class="red_ph">
                @foreach($readTop10 as $k=>$v)
                    @if( $k<3 )
                        <li>
                            <span class="ar_onHot">{{$k+1}}</span>
                            <a href="/list/{{$v->id}}/show" target="_blank" title="{{$v->title}}">{{changeStr($v->title,15,'...')}}</a>
                        </li>
                    @else
                        <li>
                            <span class="ar_offHot">{{$k+1}}</span>
                            <a href="/list/{{$v->id}}/show" target="_blank" title="{{$v->title}}">{{changeStr($v->title,15,'...')}}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>

        <div class="rBox part">
            <div class="rBox-th"><h3 class="mark">教育图库</h3></div>
            <div class="rBox-ulPic">
                <ul class="clearfix">
                    <li><a target="_blank" href="https://www.riji.cn/scb/"><img src="/static/home/list/picture/li4img1.jpg" width="118" height="88"><p>手抄报</p></a></li>
                    <li><a><img src="/static/home/list/picture/li4img2.jpg" width="118" height="88"><p>黑板报</p></a></li>
                    <li><a><img src="/static/home/list/picture/li4img3.jpg" width="118" height="88"><p>小制作</p></a></li>
                    <li><a target="_blank" href="https://www.riji.cn/jbh/"><img src="/static/home/list/picture/li4img3.jpg" width="118" height="88"><p>简笔画</p></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div style="clear:both"></div>
<div class="footer">
    <script src="/static/home/list/js/link.js" type="text/javascript"></script>
    <div style="clear:both;"></div>
    <div class="bqsm">Copyright &copy; 2004-2017 <a href="https://www.riji.cn/">日记网</a> All Rights Reserved <a href="http://www.miitbeian.gov.cn/" target="_blank">苏ICP备16062942号-9</a>
    </div>
</div>

<script src="/static/home/list/js/jquery.min.js" type="text/javascript"></script>
<script src="/static/home/list/js/dpl-tab_v2.js" type="text/javascript"></script>
</body>
</html>