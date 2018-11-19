@extends('Home.Indexpublic.public')
@section('main')
<div class="offcanvas-wrapper">
    <div class="container padding-top-1x padding-bottom-3x">
        <div style="margin: 0 auto;width: 700px;margin-top: 100px">
            <!-- <div class="col-md-6"> -->
                <div class="padding-top-3x hidden-md-up"></div>
                <h3 class="margin-bottom-1x padding-top-1x">欢迎注册本网站</h3>
                @if(count($errors) > 0)
                    <div style="color:red">
                     <ul>
                          @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                         @endforeach
                     </ul>
                     </div>
                @endif
                <form class="row" action="/register" method="post">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="reg-fn">用户名</label>
                            <input class="form-control" type="text" value="{{old('username')}}" placeholder="请输入4-12位的数字和字母" name="username" pattern="^[a-zA-Z0-9_-]{4,12}$" oninvalid="setCustomValidity('必须填写4-8位数字和字母');"
                oninput="setCustomValidity('');" id="reg-fn" required>
                    </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="reg-ln">手机号</label>
                            <input class="form-control" type="text" value="{{old('phone')}}" placeholder="请输入11位的手机号" name="phone"  id="reg-ln" pattern="^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0,5-9]))\d{8}$" oninvalid="setCustomValidity('必须填写11位的手机号');"
                oninput="setCustomValidity('');" required >
                    </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="reg-email">电子邮箱</label>
                            <input class="form-control" type="email" placeholder="请输入正确的邮箱格式" name="email" value="{{old('email')}}" pattern="^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$" oninvalid="setCustomValidity('必须填写正确的邮箱格式');"
                oninput="setCustomValidity('');" id="reg-email" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="reg-phone">密码</label>
                            <input class="form-control" type="password" placeholder="请输入8-16位的数字和字母" name="password" id="reg-phone" pattern="^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{8,16}$" oninvalid="setCustomValidity('请输入8-16位的数字和字母');"
                oninput="setCustomValidity('');" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="reg-pass">确认密码</label>
                            <input class="form-control" type="password" placeholder="请输入两次一致的密码" name="repassword"id="reg-pass" required>
                            <div class="form-group" style="color:red">
                           @if(session('error'))
                          {{session('error')}}
                           @endif
                         </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="reg-pass-confirm">输入验证码</label>
                            <input class="form-control" type="text" name="vcode"  id="reg-pass-confirm" required>
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
                        <img src="/code" onclick="this.src=this.src+'?a=1'">
                        
                    </div> 
                    </div> 
                    </div>
                    <div class="form-group" style="color:red">
                           @if(session('error2'))
                           {{session('error2')}}
                           @endif
                         </div>
                    <div class="col-12 text-center text-sm-right">
                        <button class="btn btn-primary margin-bottom-none" type="submit">注册</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Footer -->
</div>
@endsection
@section('title','注册')