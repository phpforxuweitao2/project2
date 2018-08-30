@extends('admin.AdminPublic.index')
@section('title','分类添加页面')
@section('container')
    <!--右侧显示内容区域 开始-->
    <div class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb panel">
                    <li><a href="/bk_index"><i class="fa fa-home"></i> 首页</a></li>
                    <li><a href="#">内容管理</a></li>
                    <li class="active">内容详情页面</li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">日记详情</header>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-2">发布者: {{$info->uname}}</div>
                            <div class="col-xs-2">分类: {{$info->name}}日记</div>
                            <div class="col-xs-2">时间: {{date('Y-m-d H:i:s',$info->created_at)}}</div>
                            <div class="col-xs-1">天气: {{$info->weather}}</div>
                            <div class="col-xs-1">大小: {{$info->size}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-8">
                                内容: {{strip_tags($info->content,'')}}
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-xs-8">
                                <a href="{{$backUrl}}" class="btn btn-info btn-small">返回</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--右侧显示内容区域 结束-->
<script type="text/javascript">
    var ue = UE.getEditor('editorCont',{
        toolbars:[
            [
                'undo', //撤销
                'redo', //重做
                'fontfamily', //字体
                'fontsize', //字号
                'forecolor', //字体颜色
                'backcolor', //背景色
                'indent', //首行缩进
                'bold', //加粗
                'italic', //斜体
                'underline', //下划线
                'strikethrough', //删除线
                'horizontal', //分隔线
                'link', //超链接
                'searchreplace', //查询替换
                'rowspacingtop', //段前距
                'rowspacingbottom', //段后距
                'lineheight', //行间距
            ]
        ],
        enableContextMenu:false,    //内容区域右击菜单 默认为true
        elementPathEnabled:false,   //是否启用元素路径，默认是显示
        maximumWords:1000,          //允许的最大字符数
        wordCountMsg:'{#count} / {#leave} 字',   //输入字体数提示
        allowDivTransToP: false
    });
</script>
<script>
    uParse('#editorCont',{
        rootPath: '/static/ueditor/'
    });
</script>
@endsection