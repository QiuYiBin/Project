@extends('Home.Indexpublic.public')
@section('main')
<body>
<div class="offcanvas-wrapper">
    <!-- Start Account Access -->
    <div class="container padding-top-1x padding-bottom-3x" style="margin: 0 auto">
        <div style="margin: 0 auto;width: 500px;margin-top: 100px">
            <div>
                <form class="login-box" action="/reset" method="post">
                    <h4 class="margin-bottom-1x">重置密码</h4>
                    <div class="form-group" style="color:red">
                           @if(session('error10'))
                          {{session('error10')}}
                           @endif
                    </div>
                     <div class="form-group input-group">
                        <input class="form-control" type="disabled" name="phone" value="{{$value}}" readonly="readonly" required>
                    </div>
                    <div class="form-group input-group">
                        <input class="form-control" type="password" id="pw" name="password" placeholder="请重置密码" pattern="^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{8,16}$" oninvalid="setCustomValidity('请输入8-16位的数字和字母');"
                oninput="setCustomValidity('');" required><span class="input-group-addon"><i class="icon-lock"></i></span>
                {{csrf_field()}}
                    </div>
                    <div class="form-group input-group">
                        <input class="form-control" type="password" id="rd" name="repassword" placeholder="请输入两次一致的密码" pattern="^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{8,16}$" oninvalid="setCustomValidity('请输入8-16位的数字和字母');"
                oninput="setCustomValidity('');" required><span class="input-group-addon"><i class="icon-lock"></i></span>
                 
                    </div>
                    <div class="text-center text-sm-right">
                        <button class="btn btn-primary margin-bottom-none" type="submit">重置</button>
                    </div>
                </form>
            </div>  
        </div>
    </div>
</div>
</body>
@endsection
@section('title','重置密码')
