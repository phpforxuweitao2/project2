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
                    <li><a href="leftmenu_collapsed_view.html"> Sidebar Collapsed</a></li>
                    <li><a href="horizontal_menu.html"> Horizontal Menu</a></li>

                </ul>
            </li>
            <li class="menu-list {{$menu_cates or ''}}">
                <a href=""><i class="fa fa-book"></i> <span>分类管理</span></a>
                <ul class="sub-menu-list">
                    <li class="{{$menu_cates_index or ''}}"><a href="/bk_cates">分类列表</a></li>
                    <li class="{{$menu_cates_add or ''}}"><a href="/bk_cates/add"> 添加分类</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>Components</span></a>
                <ul class="sub-menu-list">
                    <li><a href="grids.html"> Grids</a></li>
                    <li><a href="gallery.html"> Media Gallery</a></li>
                    <li><a href="calendar.html"> Calendar</a></li>
                    <li><a href="tree_view.html"> Tree View</a></li>
                    <li><a href="nestable.html"> Nestable</a></li>

                </ul>
            </li>

            <li class="menu-list {{$menu_content or ''}}"><a href=""><i class="fa fa-envelope"></i> <span>内容管理</span></a>
                <ul class="sub-menu-list">
                    <li class="{{$menu_content_riji or ''}}"><a href="/bk_content/riji"> 日记列表</a></li>
                    <li class="{{$menu_content_riji_add or ''}}"><a href="/bk_content/riji/add"> 添加日记</a></li>
                    <li><a href="mail_view.html"> View Mail</a></li>
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
            <li class="menu-list"><a href=""><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a>
                <ul class="sub-menu-list">
                    <li><a href="flot_chart.html"> Flot Charts</a></li>
                    <li><a href="morris.html"> Morris Charts</a></li>
                    <li><a href="chartjs.html"> Chartjs</a></li>
                    <li><a href="c3chart.html"> C3 Charts</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href="#"><i class="fa fa-th-list"></i> <span>Data Tables</span></a>
                <ul class="sub-menu-list">
                    <li><a href="basic_table.html"> Basic Table</a></li>
                    <li><a href="dynamic_table.html"> Advanced Table</a></li>
                    <li><a href="responsive_table.html"> Responsive Table</a></li>
                    <li><a href="editable_table.html"> Edit Table</a></li>
                </ul>
            </li>

            <li class="menu-list"><a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                <ul class="sub-menu-list">
                    <li><a href="google_map.html"> Google Map</a></li>
                    <li><a href="vector_map.html"> Vector Map</a></li>
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