@extends('Home.Personal.public')
@section('right')
<html>
 <head></head>
 <body>
  <script type="text/javascript" src="/Home/js/jquery-1.8.3.min.js"></script>
  <div class="col-lg-8"> 
   <div class="padding-top-2x mt-2 hidden-lg-up"></div> 
   <!-- Wishlist Table--> 
   <div class="table-responsive wishlist-table margin-bottom-none"> 
    <table class="table"> 
     <thead> 
      <tr> 
       <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的收藏</font></font></th> 
       <th class="text-center"></th> 
      </tr> 
     </thead> 
     <tbody> 
       @foreach($data as $row)
      <tr> 
       <td> 
         <input type="hidden" name="id" value="{{$row->id}}">
        <div class="product-item">
         <a class="product-thumb" href="shop-single-1.html"><img src="/Uploads/Goods/{{$row->pic}}" alt="产品" /></a> 
         <div class="product-info"> 
          <h4 class="product-title"><a href="shop-single-1.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$row->name}}</font></font></a></h4> 
          <div class="text-lg text-medium text-muted">
           ￥{{$row->price}}
          </div> 
          <div>
           <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">可用性： </font></font>
           <div class="d-inline text-success">
            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$row->status}}</font></font>
           </div> 
          </div> 
         </div> 
        </div>
        </td> 
        <td class="text-center"><a class="remove-from-cart del" href="javascript:void(0)" data-toggle="tooltip" title=""><i class="icon-cross"></i></a></td> 
      </tr>
     </tbody> 
      @endforeach
    </table> 
   </div> 
   <hr class="mb-4" /> 
   <div class="custom-control custom-checkbox"> 
    <input class="custom-control-input" type="checkbox" id="inform_me" checked="" /> 
   </div> 
  </div>
 </body>
 <script>

    $('.del').click(function(){
      id = $(this).parent().prev().find('input:first').val();
      // console.log(id);
      s=$(this).parents('tr');
      $.get("/homewishdel",{id:id},function(data){
      if(data.msg==1){
          //删除数据所在的tr
          s.remove();
          Load();
        }else{
          alert("删除失败");
        }
    },'json');

    });
 </script>
</html>
@endsection
@section('title','我的心愿')