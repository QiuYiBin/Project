@extends('Home.Indexpublic.public')
@section('main')
<html>
 <head>
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
 </head>
  <script src="/Home/js/jquery-1.8.3.min.js"></script>
 <body>
  <div class="offcanvas-wrapper"> 
   <!-- Start Page Title --> 
   <div class="page-title"> 
    <div class="container"> 
     <div class="column"> 
      <h1>商品列表</h1> 
     </div> 
     <div class="column"> 
      <ul class="breadcrumbs"> 
       <li><a href="/">首页</a></li> 
       <li class="separator">&nbsp;</li>
       <li>商品列表</li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <!-- End Page Title --> 
   <!-- Start Page Content --> 
   <div class="container padding-top-1x padding-bottom-3x"> 
    <!-- Start Toolbar --> 
    <div class="shop-toolbar mb-30"> 
     <div class="column"> 
      <div class="shop-sorting"> 
       <label for="sorting">排序方式:</label> 
       <select class="form-control" id="sorting"> <option>Item Popularity</option> <option>Avarage Rating</option> <option>Low - High Price</option> <option>High - Low Price</option> <option>Name A - Z Order</option> <option>Name Z - A Order</option> </select>
       <span class="text-muted">显示: </span>
       <span> 1 - 12项</span> 
      </div> 
     </div> 
     <div class="column"> 
      <div class="shop-view"> 
       <a class="grid-view active" href="shop-grid-1.html"> <span></span> <span></span> <span></span> </a> 
       <a class="list-view" href="shop-list-1.html"> <span></span> <span></span> <span></span> </a> 
      </div> 
     </div> 
    </div> 
    <!-- End Toolbar --> 
    <!-- Start Products Grid --> 

    <div class="isotope-grid cols-4" id="uid">   
     <div class="gutter-sizer"></div> 
     <div class="grid-sizer"></div> 
     <!-- Start Product #1 -->
     
     @foreach($data as $row)
     <div class="grid-item"> 
      <div class="product-card"> 
       <a class="product-thumb" href="/shopsingle/{{$row->id}}"><img src="/Uploads/Goods/{{$row->pic}}" style="width:200px;height:150px" alt="Product" /> </a> 
       <h3 class="product-title"><a href="#">{{$row->name}}</a></h3> 
       <h4 class="product-price"> 
        <del>
         {{($row->price)+100}}
        </del>{{$row->price}}</h4> 
       <div class="product-buttons"> 
        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"> <i class="icon-heart"></i> </button> 
        <button class="btn btn-outline-primary btn-sm" data-toast="" data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">添加到购物车</button> 
       </div> 
      </div> 
     </div>
    @endforeach
     <!-- End Product #1 --> 
     <!-- Start Product #2 --> 
     <!-- End Product #12 --> 
      </div>

    <!-- End Products Grid --> 
    <!-- Start Pagination --> 
    <!-- <nav class="pagination">  -->
      <div style="float:right"> 
          {{$data->appends($request)->render()}}
    </div>
    <!-- </nav>  -->
    <!-- End Pagination --> 
   </div>
  </div>
 </body>
</html>
<script>
    // function fun (page){
    //   $.get('/goods',{page:page},function(pages){
    //     $('#uid').html(pages);
    //   });
    // }
</script>
@endsection
@section('title','商品列表')