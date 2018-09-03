<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-transform " />
    <title>{{$cate_info->name}}_日记大全</title>
    <meta name="keywords" content="{{$cate_info->name}}" />
    <meta name="description" content="{{$cate_info->name}}"/>
    <link rel="stylesheet" type="text/css" href="/static/home/list_p/css/index.css">
    <script src="/static/home/list_p/js/uaredirect.js" type="text/javascript"></script>
    <script src="/static/home/list_p/js/jquery-1.8.1.min.js" type="text/javascript"></script>
    <script src="/static/home/list_p/js/g.js" type="text/javascript"></script>
</head>
<body id="Jbody">
<div class="head">
    <div class="main">
        <a class="logo" href="/" style="cursor:pointer;" target="_blank"></a>
        <a target="_blank" style="cursor:pointer;" href="/" class="name fl">日记</a>
        <p class="h-crumb">
            <em class="arr"></em>
            <a style="cursor:pointer;" href='/'>日记网</a> >
            <a href='/list/{{$cate_info->id}}'>{{$cate_info->name}}</a>
        </p>
        <div class="search"></div>
    </div>
</div>
<div class="nav2">
    <div class="main2">
        <div class="subNav2 fl">
            <a href="/">首页</a>
        @foreach($cates as $k=>$v)
            <span class="subNav-more2">
                <a style="cursor:pointer;" href="/list/{{$v->id}}">{{$v->name}}</a>
            </span>
        @endforeach
        </div>
    </div>
</div>
<div class="main mt15">
    <div class="l-box fl">
    {{--foreach--}}
    @foreach($lists as $k=>$v)
        <div class="mb30 border shadow">
            <div class="ia_ListPart">
                <div class="ia_part">
                    <div class="iaAt_title">
                        <h2><a style="cursor:pointer;" href="/list/{{$v->id}}">{{$v->name}}</a></h2>
                    </div>
                    <div class="ia_articleList">
                        <ul>
                        @foreach($v->child as $k2=>$v2)
                            <li>
                                <a style="cursor:pointer;" href="/list/{{$v2->id}}/show">{{changeStr($v2->title,20,'...')}}</a>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{--endforeach--}}
    </div>
    <div class="r-box">
        <div id="JscrollBox" class="">
            <div class="mb30" style="width:300px; height:265px; background-color:white;">
                <script type="text/javascript">a300();</script>
            </div>
            <div class="relation shadow border tjzt mb30">
                <div class="list3_th"><span class="mark">阅读排行</span></div>
                <ul class="red_ph">
                    <li><span class="ar_onHot">1</span><a href="https://www.riji.cn/html/55601.html" target="_blank">一只胆小的狗</a></li>
                    <li><span class="ar_onHot">2</span><a href="https://www.riji.cn/html/55589.html" target="_blank">往事即风</a></li>
                    <li><span class="ar_onHot">3</span><a href="https://www.riji.cn/html/55575.html" target="_blank">未来，正在等你</a></li>
                    <li><span class="ar_offHot">4 </span><a href="https://www.riji.cn/html/55569.html" target="_blank">以后读书要住宿了</a></li>
                    <li><span class="ar_offHot">5 </span><a href="https://www.riji.cn/html/55568.html" target="_blank">无火影——不青春</a></li>
                    <li><span class="ar_offHot">6 </span><a href="https://www.riji.cn/html/55559.html" target="_blank">父亲</a></li>
                    <li><span class="ar_offHot">7 </span><a href="https://www.riji.cn/html/55528.html" target="_blank">和同学们的最后一次玩耍</a></li>
                    <li><span class="ar_offHot">8 </span><a href="https://www.riji.cn/html/55529.html" target="_blank">悔恨当初</a></li>
                    <li><span class="ar_offHot">9 </span><a href="https://www.riji.cn/html/55523.html" target="_blank">没有重点的</a></li>
                    <li><span class="ar_offHot">10 </span><a href="https://www.riji.cn/html/55520.html" target="_blank">他</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div style="clear:both;"></div>
<div class="footer">
    <script src="/static/home/list_p/js/link.js" type="text/javascript"></script>
    <div style="clear:both;"></div>
    <div class="bqsm">Copyright &copy; 2004-2017 <a href="https://www.riji.cn/">日记网</a> All Rights Reserved <a href="http://www.miitbeian.gov.cn/" target="_blank">苏ICP备16062942号-9</a></div>
</div>
<script src="/static/home/list_p/js/dpl-tab_v2.js" type="text/javascript"></script>
</body>
</html>
