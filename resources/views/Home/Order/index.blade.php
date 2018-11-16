@extends('Home.Personal.public')
@section('right')
<html>
 <head></head>
 <body> 
   <div class="col-lg-8"> 
   <div class="padding-top-2x mt-2 hidden-lg-up"></div> 
   <div class="table-responsive"> 
    <table class="table table-hover margin-bottom-none"> 
     <thead> 
      <tr> 
       <th style="height: 50px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单＃</font></font></th> 
       <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买日期</font></font></th> 
       <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">状态</font></font></th> 
       <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">总</font></font></th> 
      </tr> 
     </thead> 
     <tbody> 
      <tr> 
       <td><a class="text-medium navi-link" href="#" data-toggle="modal" data-target="#orderDetails"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">78A643CD409</font></font></a></td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018年4月13日</font></font></td> 
       <td><span class="text-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消</font></font></span></td> 
       <td><span class="text-medium">$450.00</span></td> 
      </tr> 
      <tr> 
       <td><a class="text-medium navi-link" href="#" data-toggle="modal" data-target="#orderDetails"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">34VB5540K83</font></font></a></td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018年3月21日</font></font></td> 
       <td><span class="text-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">进行中</font></font></span></td> 
       <td><span class="text-medium">$125.99</span></td> 
      </tr> 
      <tr> 
       <td><a class="text-medium navi-link" href="#" data-toggle="modal" data-target="#orderDetails"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">112P45A90V2</font></font></a></td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018年3月9日</font></font></td> 
       <td><span class="text-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">延迟</font></font></span></td> 
       <td><span class="text-medium">$230.00</span></td> 
      </tr> 
      <tr> 
       <td><a class="text-medium navi-link" href="#" data-toggle="modal" data-target="#orderDetails"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28BA67U0981</font></font></a></td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018年2月19日</font></font></td> 
       <td><span class="text-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">交付</font></font></span></td> 
       <td><span class="text-medium">$400.00</span></td> 
      </tr> 
      <tr> 
       <td><a class="text-medium navi-link" href="#" data-toggle="modal" data-target="#orderDetails"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">502TR872W2</font></font></a></td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018年2月4日</font></font></td> 
       <td><span class="text-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">交付</font></font></span></td> 
       <td><span class="text-medium">$560.00</span></td> 
      </tr> 
      <tr> 
       <td><a class="text-medium navi-link" href="#" data-toggle="modal" data-target="#orderDetails"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">47H76G09F33</font></font></a></td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018年1月23日</font></font></td> 
       <td><span class="text-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">交付</font></font></span></td> 
       <td><span class="text-medium">$360.00</span></td> 
      </tr> 
     </tbody> 
    </table> 
   </div> 
   <hr /> 
   <div class="text-right">
    <a class="btn btn-link-primary margin-bottom-none" href="#"><i class="icon-download"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;订单详细信息</font></font></a>
   </div> 
  </div>
    </form>
 </body>
</html>

@endsection
@section('title','我的订单')