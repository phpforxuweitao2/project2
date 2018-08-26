<script type="text/javascript">
    jQuery(".sideMenu").slide({
        titCell:"h3", //鼠标触发对象
        targetCell:"ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
        effect:"slideDown", //targetCell下拉效果
        delayTime:300 , //效果时间
        triggerTime:150, //鼠标延迟触发时间（默认150）
        defaultPlay:true,//默认是否执行效果（默认true）
        returnDefault:true //鼠标从.sideMen移走后返回默认状态（默认false）
    });
</script>
<!--[if lt IE 9]>
<script src="/static/admin/js/jquery1.11.1.min.js"></script>
<script src="/static/admin/js/modernizr.2.8.3.js"></script>
<script src="/static/admin/js/polyfill/rem.min.js"></script>
<script src="/static/admin/js/polyfill/respond.min.js"></script>
<script src="/static/admin/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/static/admin/js/amazeui.min.js"></script>
<!--<![endif]-->