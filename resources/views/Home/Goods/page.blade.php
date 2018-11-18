     <div class="gutter-sizer"></div> 
     <div class="grid-sizer"></div> 
     <!-- Start Product #1 -->
     
     @foreach($data as $row)
     <div class="grid-item"> 
      <div class="product-card"> 
       <a class="product-thumb" href="#"><img src="/Uploads/Goods/{{$row->pic}}" style="width:200px;height:150px" alt="Product" /> </a> 
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