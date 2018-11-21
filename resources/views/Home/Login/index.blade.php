@extends('Home.Indexpublic.public')
@section('main')
<div class="offcanvas-wrapper">
    <!-- Start Account Access -->
    <div class="container padding-top-1x padding-bottom-3x" style="margin: 0 auto">
        <div style="margin: 0 auto;width: 500px;margin-top: 100px">
            <div>
                <form class="login-box" action="/homelogin" method="post">
                    <h4 class="margin-bottom-1x">欢迎登陆本网站</h4>
                    <div class="form-group input-group">
                        <input class="form-control" name="username" value="{{old('username')}}"  placeholder="请填写用户名" required><span class="input-group-addon"><i class="icon-mail"></i></span>
                 <div class="form-group" style="color:red">
                           @if(session('error2'))
                          {{session('error2')}}
                           @endif
                         </div>
                    </div>
                    <div class="form-group input-group">
                        <input class="form-control" type="password"  name="password" placeholder="请填写密码"  required><span class="input-group-addon"><i class="icon-lock"></i></span>
                 <div class="form-group" style="color:red">
                           @if(session('error4'))
                          {{session('error4')}}
                           @endif
                         </div>
                    </div>
                    <div class="input-group">
                        <div class="form-group">
                            <label for="reg-pass-confirm"></label>
                            <input class="form-control" type="text" name="vcode"  id="reg-pass-confirm" placeholder="请填写验证码" required>
                            <div class="form-group" style="color:red">
                           @if(session('error1'))
                           {{session('error1')}}
                           @endif
                         </div>
                            {{csrf_field()}}
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="form-group"> 
                        <div class="col-md-12"> 
                        <label>验证码</label> 
                        <img src="/codes" onclick="this.src=this.src+'?a=1'">
                         <div class="form-group" style="color:red">
                           @if(session('error3'))
                          {{session('error3')}}
                           @endif
                         </div>
                    </div> 
                    </div> 
                    </div>
                    <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                        <div class="custom-control custom-checkbox">
                            {{csrf_field()}}
                        </div><a class="navi-link" href="/retrieve">忘记密码?</a>
                    </div>
                    <div class="text-center text-sm-right">
                        <button class="btn btn-primary margin-bottom-none" type="submit">登陆</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    
    <!-- End Footer -->
</div>
<!-- Start Back To Top -->
<a class="scroll-to-top-btn" href="#">
    <i class="icon-arrow-up"></i>
</a>
@endsection
@section('title','登录')
