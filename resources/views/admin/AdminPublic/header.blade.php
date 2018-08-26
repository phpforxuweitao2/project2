<header class="am-topbar admin-header">
    <div class="am-topbar-brand"><img src="/static/admin/i/logo.png"></div>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav admin-header-list">

            <li class="am-dropdown tognzhi" data-am-dropdown>
                <button style="padding-right: 14px;" class="am-btn am-btn-primary am-dropdown-toggle am-btn-xs" data-am-dropdown-toggle> 用户名是发 <i class="am-icon-sort-desc"></i>
                </button>
                <ul class="am-dropdown-content">
                    <li><a href="#">个人信息</a></li>
                    <li><a href="#">修改密码</a></li>
                    <li><a href="#">退出登录</a></li>
                </ul>
            </li>

            <li class="kuanjie">
                <a href="#">会员管理</a>
                <a href="#">奖金管理</a>
                <a href="#">订单管理</a>
                <a href="#">产品管理</a>
                <a href="#">个人中心</a>
                <a href="#">系统设置</a>
            </li>

            <li class="soso">
                <p>
                    <select data-am-selected="{btnWidth: 70, btnSize: 'sm', btnStyle: 'default'}">
                        <option value="b">全部</option>
                        <option value="o">产品</option>
                        <option value="o">会员</option>
                    </select>
                </p>

                <p class="ycfg"><input type="text" class="am-form-field am-input-sm" placeholder="圆角表单域" /></p>
                <p><button class="am-btn am-btn-xs am-btn-default am-xiao"><i class="am-icon-search"></i></button></p>
            </li>

            <li class="am-hide-sm-only" style="float: right;"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
</header>