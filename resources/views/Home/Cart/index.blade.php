@extends('Home.Personal.public')
@section('right')
<html>
 <head></head>
 <body>
  <div class="col-lg-8"> 
   <div class="padding-top-2x mt-2 hidden-lg-up"></div> 
   <!-- Wishlist Table--> 
   <div class="table-responsive wishlist-table margin-bottom-none"> 
    <table class="table"> 
     <thead> 
      <tr> 
       <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品名称</font></font></th> 
       <th class="text-center"><a class="btn btn-sm btn-outline-danger" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">空的愿望清单</font></font></a></th> 
      </tr> 
     </thead> 
     <tbody> 
      <tr> 
       <td> 
        <div class="product-item">
         <a class="product-thumb" href="shop-single-1.html"><img src="/Home/images/shop/cart/01.jpg" alt="产品" /></a> 
         <div class="product-info"> 
          <h4 class="product-title"><a href="shop-single-1.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">iPhone X黑色</font></font></a></h4> 
          <div class="text-lg text-medium text-muted">
           $649.00
          </div> 
          <div>
           <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">可用性： </font></font>
           <div class="d-inline text-success">
            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">有现货</font></font>
           </div> 
          </div> 
         </div> 
        </div> </td> 
       <td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="" data-original-title="Remove item"><i class="icon-cross"></i></a></td> 
      </tr> 
      <tr> 
       <td> 
        <div class="product-item">
         <a class="product-thumb" href="shop-single-1.html"><img src="/Home/images/shop/cart/02.jpg" alt="产品" /></a> 
         <div class="product-info"> 
          <h4 class="product-title"><a href="shop-single-1.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">松下TX-32</font></font></a></h4> 
          <div class="text-lg text-medium text-muted">
           $800.00
          </div> 
          <div>
           <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">可用性： </font></font>
           <div class="d-inline text-warning">
            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 - 3天</font></font>
           </div> 
          </div> 
         </div> 
        </div> </td> 
       <td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="" data-original-title="Remove item"><i class="icon-cross"></i></a></td> 
      </tr> 
      <tr> 
       <td> 
        <div class="product-item">
         <a class="product-thumb" href="shop-single-1.html"><img src="/Home/images/shop/cart/03.jpg" alt="产品" /></a> 
         <div class="product-info"> 
          <h4 class="product-title"><a href="shop-single-1.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">宏碁Aspire 15.6 i3</font></font></a></h4> 
          <div class="text-lg text-medium text-muted">
           $549.00
          </div> 
          <div>
           <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">可用性： </font></font>
           <div class="d-inline text-danger">
            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">缺货</font></font>
           </div> 
          </div> 
         </div> 
        </div> </td> 
       <td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="" data-original-title="Remove item"><i class="icon-cross"></i></a></td> 
      </tr> 
     </tbody> 
    </table> 
   </div> 
   <hr class="mb-4" /> 
   <div class="custom-control custom-checkbox"> 
    <input class="custom-control-input" type="checkbox" id="inform_me" checked="" /> 
    <label class="custom-control-label" for="inform_me"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">当我的心愿单中的项目可用时通知我</font></font></label> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','我的心愿')