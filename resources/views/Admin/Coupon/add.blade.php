@extends('Admin.AdminPublic.public')

<head>
  <!--pickers css-->
  <link rel="stylesheet" type="text/css" href="/Admin/js/bootstrap-datepicker/css/datepicker-custom.css" />
  <link rel="stylesheet" type="text/css" href="/Admin/js/bootstrap-timepicker/css/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="/Admin/js/bootstrap-colorpicker/css/colorpicker.css" />
  <link rel="stylesheet" type="text/css" href="/Admin/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
  <link rel="stylesheet" type="text/css" href="/Admin/js/bootstrap-datetimepicker/css/datetimepicker-custom.css" />

  <link href="/Admin/css/style.css" rel="stylesheet">
  <link href="/Admin/css/style-responsive.css" rel="stylesheet">
</head>
  @section('js')
  <script type="text/javascript" src="/Admin/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="/Admin/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="/Admin/js/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="/Admin/js/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="/Admin/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="/Admin/js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>

  <!--pickers initialization-->
  <script src="/Admin/js/pickers-init.js"></script>
  @endsection

@section('main')
<html>
 <head></head>
 <body>
  <div class="col-md-12" style="margin-top: 45px"> 
   <section class="panel"> 
    <header class="panel-heading">
      添加优惠券
     <span class="tools pull-right"> <a class="fa fa-chevron-down" href="javascript:;"></a> <a class="fa fa-times" href="javascript:;"></a> </span> 
    </header> 
    <div class="panel-body"> 
     <form action="/coupon" class="form-horizontal" method="post">
     <div class="form-group"> 
       <label class="control-label col-md-3">方案</label> 
       <div class="col-md-4"> 
         <input type="text" class="form-control" name="should" value="" /> 
        </div> 
      </div>  
      <div class="form-group"> 
       <label class="control-label col-md-3">开始时间</label> 
       <div class="col-md-4 col-xs-11"> 
        <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2018-11-10" class="input-append date dpYears"> 
         <input type="text" readonly="" value="" size="16" class="form-control" name="start_time" /> 
         <span class="input-group-btn add-on"> <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button> </span> 
        </div>  
       </div> 
      </div>
      <div class="form-group"> 
       <label class="control-label col-md-3">结束时间</label> 
       <div class="col-md-4 col-xs-11"> 
        <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2018-11-10" class="input-append date dpYears"> 
         <input type="text" readonly="" value="" size="16" class="form-control" name="end_time" /> 
         <span class="input-group-btn add-on"> <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button> </span> 
        </div>  
       </div> 
      </div>  
      <div class="form-group">
       <label class="control-label col-md-3">数量</label> 
       <div class="col-md-4"> 
         <input type="text" class="form-control" name="num" value="" /> 
        </div>
        {{csrf_field()}}  
      </div>
     <div class="form-group" style="margin-top: 40px"> 
            <div class="col-lg-offset-3 col-lg-12"> 
              <button class="btn btn-primary" type="submit">添加</button>
            </div> 
      </div> 
     </form> 
    </div>
    <header class="panel-heading" style="border-bottom: hidden; margin-top: 70px;">
        <div>
          <a href="/coupon" class="btn btn-warning"><<优惠券列表</a>
        </div>
    </header> 
   </section> 
  </div>
 </body>
</html>
@endsection
@section('title','添加优惠券')