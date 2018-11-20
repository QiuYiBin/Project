<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>后台登录</title>

    <link href="/Admin/css/style.css" rel="stylesheet">
    <link href="/Admin/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">
		
    <form class="form-signin" action="/adminlogin" method="post">

        <div class="form-signin-heading text-center">
            <h1 class="sign-title">登录</h1>
            <img src="/Admin/images/login-logo.png" alt=""/>
        </div>
        @if (count($errors) > 0)
        <div class="alert alert-warning fade in">
            <button type="button" class="close close-sm" data-dismiss="alert">
                <i class="fa fa-times"></i>
            </button>
            @foreach ($errors->all() as $error)
                <p><strong>{{ $error }}</strong></p>
            @endforeach
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-block alert-danger fade in">
            {{session('error')}}
        </div>
        @endif
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="用户名" autofocus name="name" value="{{old('name')}}">
            <input type="password" class="form-control" placeholder="密码" name="password">
            <!-- 验证码 -->
            <input type="text" class="form-control {{$errors->has('captcha')?'parsley-error':''}}" placeholder="请输入验证码" name="captcha">
            <img src="{{captcha_src()}}" style="cursor: pointer" onclick="this.src='{{captcha_src()}}'+Math.random()">
            @if($errors->has('captcha'))
                <div class="col-md-12">
                    <p class="text-danger text-left"><strong>{{$errors->first('captcha')}}</strong></p>
                </div>
            @endif
            <!-- 验证码结束 -->
            <button class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>

        </div>
            

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-primary" type="button" value="login">Submit</button>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- modal -->
        {{csrf_field()}}
    </form>

</div>

<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="/Admin/js/jquery-1.10.2.min.js"></script>
<script src="/Admin/js/bootstrap.min.js"></script>
<script src="/Admin/js/modernizr.min.js"></script>

</body>
</html>
