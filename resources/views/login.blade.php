<!DOCTYPE html>
<html lang="en">
<link href="{{asset('/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('/css/admin-style.css')}}" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="{{asset('/js/html5shiv.min.js')}}"></script>
<script src="{{asset('/js/respond.min.js')}}"></script>
<![endif]-->

<script src="http://wx.fszi.org/js/jquery.min.js" type="text/javascript"></script>
<head>
    <title>Login</title>
</head>

<body class="light-gray-bg">
<div class="templatemo-content-widget templatemo-login-widget white-bg">
    <header class="text-center">
        <div class="square"></div>
        <h1>Gydj Admin</h1>
    </header>
    <form action="/admin/doLogin" class="templatemo-login-form" method="post">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user fa-fw" style="float:left"></i></div>
                <input type="text" name="user_name" class="form-control" placeholder="用户名">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-key fa-fw"  style="float:left"></i></div>
                <input type="password" name="password" class="form-control" placeholder="请输入密码">
            </div>
        </div>
        @if(session('status'))
        <div class="form-group" style="color:red;text-align: center">
            <span> {{session('status')}}</span>
        </div>
        @endif
        <div class="form-group">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <button type="submit" class="templatemo-blue-button width-100">提交</button>
        </div>

    </form>

</div>
</body>
</html>
