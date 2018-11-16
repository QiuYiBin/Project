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
       <th style="height: 50px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠卷</font></font></th> 
       <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">提交日期</font></font></th> 
       <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">类型</font></font></th> 
       <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优先</font></font></th> 
       <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">状态</font></font></th> 
      </tr> 
     </thead> 
     <tbody> 
      <tr> 
       <td><a class="text-medium navi-link" href="account-single-ticket.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠卷1</font></font></a></td> 
       <td>08/08/2018</td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">网站问题</font></font></td> 
       <td><span class="text-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">高</font></font></span></td> 
       <td><span class="text-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">打开</font></font></span></td> 
      </tr> 
      <tr> 
       <td><a class="text-medium navi-link" href="account-single-ticket.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠卷2</font></font></a></td> 
       <td>07/07/2018</td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运输问题</font></font></td> 
       <td><span class="text-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">介质</font></font></span></td> 
       <td><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关闭</font></font></span></td> 
      </tr> 
      <tr> 
       <td><a class="text-medium navi-link" href="account-single-ticket.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠卷3</font></font></a></td> 
       <td>06/06/2018</td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品问题</font></font></td> 
       <td><span class="text-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">紧急</font></font></span></td> 
       <td><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关闭</font></font></span></td> 
      </tr> 
      <tr> 
       <td><a class="text-medium navi-link" href="account-single-ticket.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠卷4</font></font></a></td> 
       <td>05/05/2018</td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">帐户问题</font></font></td> 
       <td><span class="text-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">低</font></font></span></td> 
       <td><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关闭</font></font></span></td> 
      </tr> 
     </tbody> 
    </table> 
   </div> 
   <hr class="mb-4" /> 
   <div class="text-right"> 
    <button class="btn btn-primary margin-bottom-none" data-toggle="modal" data-target="#openTicket"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠卷</font></font></button> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','我的优惠卷')