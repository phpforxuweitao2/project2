<div class="left-side sticky-left-side">

    <!--logo and iconic logo start-->
    <div class="logo">
        <a href="/bk_index" title="后台首页">
            <img src="/static/admin/images/logo.png" alt="">
        </a>
    </div>

    <div class="logo-icon text-center">
        <a href="/bk_index">
            <img src="/static/admin/images/logo_icon.png" alt="">
        </a>
    </div>
    <!--logo and iconic logo end-->

    <div class="left-side-inner">
        <!-- 手机端显示时右侧的小导航栏 开始 -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="media logged-user">
                <img alt="" src="/static/admin/images/photos/user-avatar.png" class="media-object">
                <div class="media-body">
                    <h4><a href="#">John Doe222</a></h4>
                    <span>"Hello There..."</span>
                </div>
            </div>

            <h5 class="left-nav-title">Account Information</h5>
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li>
                    <a href="#"><i class="fa fa-user"></i> <span>Profile</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out2222</span></a>
                </li>
            </ul>
        </div>
        <!-- 手机端显示时右侧的小导航栏 结束 -->

        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li class="{{$menu_index or ''}}">
                <a href="/bk_index"><i class="fa fa-home"></i> <span>首页</span></a>
            </li>
            <li class="menu-list {{$menu_users or ''}}">
                <a href=""><i class="fa fa-user"></i> <span>会员管理</span></a>
                <ul class="sub-menu-list">
                    <li class="{{$menu_users_index or ''}}"><a href="/bk_users">会员列表</a></li>
                    <li class="{{$menu_users_create or ''}}"><a href="/bk_users/create"> 添加会员</a></li>
                </ul>
            </li>
            <li class="menu-list {{$menu_cates or ''}}">
                <a href=""><i class="fa fa-book"></i> <span>分类管理</span></a>
                <ul class="sub-menu-list">
                    <li class="{{$menu_cates_index or ''}}"><a href="/bk_cates">分类列表</a></li>
                    <li class="{{$menu_cates_add or ''}}"><a href="/bk_cates/add"> 添加分类</a></li>
                </ul>
            </li>

            <li class="menu-list {{$menu_admin or ''}}"><a href=""><i class="fa fa-cogs"></i> <span>管理员管理</span></a>
                <ul class="sub-menu-list">
                    <li class="{{$menu_adminuser_index or ''}}"><a href="/bk_adminuser">管理团队</a></li>
                    <li class="{{$menu_adminuser_create or ''}}"><a href="/bk_adminuser/create">添加管理</a></li>
                    <li class="{{$menu_role_index or ''}}"><a href="/bk_role">角色列表</a></li>
                    <li class="{{$menu_role_create or ''}}"><a href="/bk_role/create">角色添加</a></li>
                    <li class="{{$menu_node_index or ''}}"><a href="/bk_node">权限列表</a></li>
                    <li class="{{$menu_node_create or ''}}"><a href="/bk_node/create">权限添加</a></li>

                </ul>
            </li>

            <li class="menu-list {{$menu_content or ''}}"><a href=""><i class="fa fa-envelope"></i> <span>日记管理</span></a>
                <ul class="sub-menu-list">
                    <li class="{{$menu_content_riji_add or ''}}"><a href="/bk_content/riji/add"> 添加日记</a></li>
                    <li class="{{$menu_content_riji or ''}}"><a href="/bk_content/riji"> 日记列表</a></li>
                    <li class="{{$menu_content_riji_vali or ''}}"><a href="/bk_content/riji/vali"> 日记审核列表</a></li>
                    <li class="{{$menu_content_riji_unpasslist or ''}}"><a href="/bk_content/riji/unpasslist"> 日记审核未通过列表</a></li>
                </ul>
            </li>

            <li class="menu-list"><a href=""><i class="fa fa-envelope"></i> <span>Mail</span></a>
                <ul class="sub-menu-list">
                    <li><a href="mail.html"> Inbox</a></li>
                    <li><a href="mail_compose.html"> Compose Mail</a></li>
                    <li><a href="mail_view.html"> View Mail</a></li>
                </ul>
            </li>

            <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>Forms</span></a>
                <ul class="sub-menu-list">
                    <li><a href="form_layouts.html"> Form Layouts</a></li>
                    <li><a href="form_advanced_components.html"> Advanced Components</a></li>
                    <li><a href="form_wizard.html"> Form Wizards</a></li>
                    <li><a href="form_validation.html"> Form Validation</a></li>
                    <li><a href="editors.html"> Editors</a></li>
                    <li><a href="inline_editors.html"> Inline Editors</a></li>
                    <li><a href="pickers.html"> Pickers</a></li>
                    <li><a href="dropzone.html"> Dropzone</a></li>
                    <li><a href="http://www.weidea.net"> More</a></li>
                </ul>
            </li>
            <li class="menu-list {{$menu_lunbo or ''}}">
                <a href=""><i class="fa fa-bar-chart-o"></i> <span>轮播图</span></a>
                <ul class="sub-menu-list">
                    <li class="{{$menu_lunbo_index or ''}}"><a href="/bk_lunbo"> 轮播图列表</a></li>
                    <li class="{{$menu_lunbo_add or ''}}"><a href="/bk_lunbo/add"> 添加轮播图</a></li>
                </ul>
            </li>
            <li class="menu-list {{$menu_ads or ''}}">
                <a href=""><i class="fa fa-th-list"></i> <span>广告</span></a>
                <ul class="sub-menu-list">
                    <li class="{{$menu_ads_index or ''}}"><a href="/bk_ads"> 广告列表</a></li>
                    <li class="{{$menu_ads_add or ''}}"><a href="/bk_ads/add"> 添加广告</a></li>
                </ul>
            </li>

            <li class="menu-list {{$menu_links or ''}}">
                <a href=""><i class="fa fa-link"></i> <span>友情链接</span></a>
                <ul class="sub-menu-list">
                    <li class="{{$menu_links_index or ''}}"><a href="/bk_links"> 友情链接列表</a></li>
                    <li class="{{$menu_links_add or ''}}"><a href="/bk_links/add"> 添加友情链接</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>
                <ul class="sub-menu-list">
                    <li><a href="profile.html"> Profile</a></li>
                    <li><a href="invoice.html"> Invoice</a></li>
                    <li><a href="pricing_table.html"> Pricing Table</a></li>
                    <li><a href="timeline.html"> Timeline</a></li>
                    <li><a href="blog_list.html"> Blog List</a></li>
                    <li><a href="blog_details.html"> Blog Details</a></li>
                    <li><a href="directory.html"> Directory </a></li>
                    <li><a href="chat.html"> Chat </a></li>
                    <li><a href="404.html"> 404 Error</a></li>
                    <li><a href="500.html"> 500 Error</a></li>
                    <li><a href="registration.html"> Registration Page</a></li>
                    <li><a href="lock_screen.html"> Lockscreen </a></li>
                </ul>
            </li>
            <li><a href="/bk_logout"><i class="fa fa-sign-in"></i> <span>退出</span></a></li>

        </ul>
        <!--sidebar nav end-->
    </div>
</div>
