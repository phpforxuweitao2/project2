<div class="nav-navicon admin-main admin-sidebar">
    <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 10px;">
        <a href="/bk_index" style="color: #cdcdcd;">首页</a>
    </div>
    <div id="menu" class="sideMenu">
        <h3 class="am-icon-flag"><em></em> <a href="#">商品管理</a></h3>
        <ul>
            <li>
                <a href="">商品列表</a>
            </li>
            <li>
                <a href="">添加新商品</a>
            </li>
            <li>
                <a href="">商品分类</a>
            </li>
            <li>
                <a href="">用户评论</a>
            </li>
            <li>
                <a href="">商品回收站</a>
            </li>
            <li>
                <a href="">库存管理</a>
            </li>
        </ul>
        <h3 class="am-icon-cart-plus"><em></em> <a href="#"> 订单管理</a></h3>
        <ul>
            <li>
                <a href="">订单列表</a>
            </li>
            <li>
                <a href="">合并订单</a>
            </li>
            <li>
                <a href="">订单打印</a>
            </li>
            <li>
                <a href="">添加订单</a>
            </li>
            <li>
                <a href="">发货单列表</a>
            </li>
            <li>
                <a href="">换货单列表</a>
            </li>
        </ul>
        <h3 class="am-icon-users"><em></em> <a href="#">会员管理</a></h3>
        <ul>
            <li>
                <a href="">会员列表</a>
            </li>
            <li>
                <a href="">未激活会员</a>
            </li>
            <li>
                <a href="">团队系谱图</a>
            </li>
            <li>
                <a href="">会员推荐图</a>
            </li>
            <li>
                <a href="">推荐列表</a>
            </li>
        </ul>
        <h3 class="am-icon-gears"><em></em> <a href="#">管理员管理</a></h3>
        <ul>
            <li>
                <a href="">数据备份</a>
            </li>
            <li>
                <a href="">邮件/短信管理</a>
            </li>
            <li>
                <a href="">上传/下载</a>
            </li>
            <li>
                <a href="">权限</a>
            </li>
            <li>
                <a href="">网站设置</a>
            </li>
            <li>
                <a href="">第三方支付</a>
            </li>
        </ul>
        <h3 class="am-icon-volume-up"><em></em> <a href="#">信息通知</a></h3>
        <ul>
            <li>
                <a href="">站内消息/留言 </a>
            </li>
            <li>
                <a href="">短信</a>
            </li>
            <li>
                <a href="">邮件</a>
            </li>
        </ul>
        <h3 class="am-icon-gears"><em></em> <a href="#">系统设置</a></h3>
        <ul>
            <li>
                <a href="">数据备份</a>
            </li>
            <li>
                <a href="">邮件/短信管理</a>
            </li>
            <li>
                <a href="">上传/下载</a>
            </li>
            <li>
                <a href="">权限</a>
            </li>
            <li>
                <a href="">网站设置</a>
            </li>
            <li>
                <a href="">第三方支付</a>
            </li>
        </ul>
    </div>
    <!-- sideMenu End -->
</div>
<script>
$("#menu>h3").each(function(){
    $(this).click(function(){
        if ( $(this).next('ul').css('display') === 'block' ) {
            $(this).next('ul').css('display','none');
        } else {
            $("#menu>h3").each(function(){
                $(this).next('ul').css('display','none');
            });
            $(this).next('ul').css('display','block');
        }
    });
});
</script>