@extends('Home.Personal.public')
@section('right')
 <script type="text/javascript" src="/Home/js/jquery-1.8.3.min.js"></script>
    <div class="col-lg-8"> 
      <div class="padding-top-2x mt-2 hidden-lg-up"></div> 
      <form class="row" role="form" action="/homeaddres/{{$admin->id}}" method="post" enctype="multipart/form-data"> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-fn"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收货人</font></font></label> 
         <input class="form-control" type="text" name="name" id="account-fn" value="{{$admin->name}}" required="" /> 
        </div> 
       </div> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-ln"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收获人电话</font></font></label> 
         <input class="form-control" type="text" name="phone" id="account-ln" value="{{$admin->phone}}" required="" /> 
        </div> 
       </div> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-pass"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">地址</font></font></label> 
          <select class="form-control" id="sid">
              <option class="ss" >--请选择--</option>
          </select>
          <input type="hidden" name="huo">
        </div> 
       </div> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">详细地址</font></font></label> 
         <input class="form-control" type="text" name="adds" id="account-email" value="{{$admin->adds}}" required=""/> 
        </div> 
       </div> 
      
       <div class="col-12"> 
        <hr class="mt-2 mb-3" /> 
        <div class="d-flex flex-wrap justify-content-between align-items-center"> 
         <div class="custom-control custom-checkbox d-block"> 
          <input class="custom-control-input" type="checkbox" id="subscribe_me" checked="" />
         </div> 
         <button class="btn btn-primary margin-right-none" "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button> 
        </div> 
       </div>
       {{ method_field('PUT') }}
       {{csrf_field()}}  
      </form> 
    </div>
    <script type="text/javascript">
  // alert($);
    // 第一级别获取
    $.get('/homeaddress',{upid:0},function(result){
      console.log(result);
      // 禁止请选择选中
      $('.ss').attr('disabled','true');

      // 得到的数据数组内容，要遍历得到里面的每个对象
      for(var i = 0; i < result.length; i++){
        // console.log(result[i].name);
        // 将得到的地址名称卸载option标签中
        var info = $('<option value="'+result[i].id+'">'+result[i].name+'</option>');
        // 将得到的option标签放入到select对象中;
        $('#sid').append(info);
      }
    },'json');

    // 其他级别内容
    // live事件委派，可以帮助将动态生成的内容只要选择器相同就可以有相应的事件
    $('select').live('change',function(){
      // 将当期的对象存储起来
      obj = $(this);
      // 通过id来查找下一个
      id = $(this).val();

      // 清除所有其他的select
      obj.nextAll('select').remove();

      $.getJSON('/homeaddress',{upid:id},function(result){
        if(result != ''){
          // 创建一个select标签对象
          var select = $('<select class="form-control"></select>');
          // 防止当期城市没有办法选择，所有先写上一个请选择option标签
          var op = $('<option class="mm">--请选择--</option>');
          select.append(op);

          // 循环得到的数组里面的option标签添加到select
          for(var i = 0; i < result.length; i++){
            var info = $('<option value="'+result[i].id+'">'+result[i].name+'</option>');
            // 将option标签添加到select标签中
            select.append(info);
          }

          // 将select标签添加到当前标签的后面
          obj.after(select);
          // console.log(result);

          // 把其他级别的选择禁用
          $('.mm').attr('disabled','true');
        }
      })
    })

    // 获取选中的数据提交到操作页面
    $('button').click(function(){
      arr = [];
      // console.log($('select'));
      $('select').each(function(){
        // 获取当前select被选中的option标签里面的中文文本
        opdata = $(this).find('option:selected').html();
        // 将得到的每个值放置到数组中 push() 将数组添加到数组中
        arr.push(opdata);
      })
      // 将得到的数组直接赋值给隐藏域的value值即可
      $('input[name=huo]').val(arr);
    })
  </script>
@endsection
@section('title','个人中心')