@extends('Home.Indexpublic.public')
@section('main')
<div class="offcanvas-wrapper">
    <!-- Start Account Access -->
    <div class="container padding-top-1x padding-bottom-3x" style="margin: 0 auto">
        <div style="margin: 0 auto;width: 500px;margin-top: 100px">
            <div>
                <form class="login-box" action="#" method="">
                    <div class="reg_box forget_pwd_box">
                      <p>登录密码已完成修改，请在登录窗口使用新设置密码登录</p>
                      <p><a href="/homelogin">重新登录</a></p>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
    
    <!-- End Footer -->
</div>
@endsection
@section('title','重置密码')
