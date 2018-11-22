@extends('Home.Indexpublic.public')
@section('main')
<script src="/home/js/jquery-1.8.3.min.js"></script>
<div class="offcanvas-wrapper">
    <div class="container padding-top-1x padding-bottom-3x">
        <div style="margin: 0 auto;width: 700px;margin-top: 100px">
            <!-- <div class="col-md-6"> -->
                <div class="padding-top-3x hidden-md-up"></div>
                <h3 class="margin-bottom-1x padding-top-1x">欢迎注册本网站</h3>
                <form class="row" action="/register" id="fr" method="post">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="reg-fn">用户名</label>
                            <input class="form-control" type="text" id="yh" value="{{old('username')}}" placeholder="请输入4-12位的数字和字母" name="username" pattern="^[a-zA-Z0-9_-]{4,12}$" oninvalid="setCustomValidity('必须填写4-8位数字和字母');"
                oninput="setCustomValidity('');" id="reg-fn" required><p id="err_name" style="font-size:13px"></p>
                    </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="reg-ln">手机号</label>
                            <input class="form-control" type="text" id="sj" value="{{old('phone')}}" placeholder="请输入11位的手机号" name="phone"  id="reg-ln" pattern="^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0,5-9]))\d{8}$" oninvalid="setCustomValidity('必须填写11位的手机号');"
                oninput="setCustomValidity('');" required ><p id="err_phone" style="font-size:13px"></p>
                    </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="reg-email">电子邮箱</label>
                            <input class="form-control" type="email" id="yx" placeholder="请输入正确的邮箱格式" name="email" value="{{old('email')}}" pattern="^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$" oninvalid="setCustomValidity('必须填写正确的邮箱格式');"
                oninput="setCustomValidity('');" id="reg-email" required><p id="err_email" style="font-size:13px"></p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="reg-phone">密码</label>
                            <input class="form-control" type="password" placeholder="请输入8-16位的数字和字母" name="password" id="rep" pattern="^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{8,16}$" oninvalid="setCustomValidity('请输入8-16位的数字和字母');"
                oninput="setCustomValidity('');" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="reg-pass">确认密码</label>
                            <input class="form-control" type="password" placeholder="请输入两次一致的密码" name="repassword" id="rp" required>
                            <p id="err_password" style="font-size:13px"></p>
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
                        <img src="/codes" onclick="this.src=this.src+'?a=1'">
                        
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
<script type="text/javascript">
  m=false;
  s=false;
  x=false;
  p=false;
  //验证用户名
  $('#yh').blur(function(){
    // console.log(1);
    y=$(this);
    h=$(this).val();
    // console.log(h);
    $.get('yh',{h:h},function(data){
      if(data == 1){
        // console.log('存在');
        $("#err_name").css("color",'#f66').html("用户名已存在");
        m= false;
      }else{
        // console.log('可用');
        $("#err_name").css("color",'#f66').html("");
        m=true;
      }
    });
  });
  //验证手机
  $('#sj').blur(function(){
    // console.log(2);
    s=$(this);
    j=$(this).val();
    $.get('sj',{j:j},function(data){
      if(data == 1){
        $("#err_phone").css("color",'#f66').html("手机号已存在");
        s=false;
      }else{
        $("#err_phone").css("color",'#f66').html("");
        s=true;
      }
    });
    
  });
  //验证邮箱
  $('#yx').blur(function(){
    // console.log(3);
    y=$(this);
    x=$(this).val();
    console.log(x);
    $.get('yx',{x:x},function(data){
      if(data == 1){
        $("#err_email").css("color",'#f66').html("邮箱已存在");
        x=false;
      }else{
        $("#err_email").css("color",'#f66').html("");
        x=true;
      }
    });
  });
 
  $('#rep').blur(function(){
    $p=$(this).val();
    // console.log($p);
  });
  $('#rp').blur(function(){
    $r=$(this).val();
    // console.log($r);
    if($r !== $p){
      // console.log(1);
     $("#err_password").css("color",'#f66').html("两次密码不一致");
     p=false;
    }else{
      $("#err_password").css("color",'#f66').html("");
      p=true;
    }
  });
 
$('#fr').submit(function(){
  if(m && s && x && p){

    return true;
  }else{
    return false;
  }
});
</script>
@endsection
@section('title','注册')