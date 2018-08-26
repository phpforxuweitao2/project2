@include('admin.AdminPublic.meta')
<body>
@include('admin.AdminPublic.header')

<div class="am-cf admin-main">

    @include('admin.AdminPublic.menu')

    @section('container')
    @show

</div>

@include('admin.AdminPublic.footer')

</body>
</html>