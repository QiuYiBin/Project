@extends('Home.Personal.public')
<script type="text/javascript" src="/Home/js/jquery-1.8.3.min.js"></script>

<div class="modal fade" id="mymodal" style="display:none;" >
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- 这是模态框的头 -->
        <div class="modal-header">
        <!-- 关闭modal框的 data-dismiss -->
          <h3>添加收货地址</h3>
          <button class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="/homeaddres" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>收货人:</label>
              <input type="text"  name="name" class="form-control">
            </div>
            <div class="form-group">
              <label>电话:</label>
              <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
              <label>地址:</label>
              <select id="sid">
                <option  class="ss">--请选择--</option>
              </select>
              <input type="hidden" name="huo">
            </div>
             <div class="form-group">
              <label>详细地址:</label>
              <input type="text" name="adds" class="form-control">
            </div>
             <input type="hidden" name="user_id" value="{{$id}}" class="form-control">
            {{csrf_field()}}
            <button type="submit" class="btn btn-success">提交</button>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn  btn-info" data-dismiss="modal">关闭</button>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
  // alert($);
    // 第一级别获取
    $.get('/homeaddress',{upid:0},function(result){
      // console.log(result);
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
          var select = $('<select></select>');
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
@section('right')
          <div class="col-lg-8">
                <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                 <button class="btn btn-success" data-toggle="modal" data-target="#mymodal">+添加收货地址</button>
                <div class="row">
                    <div class="col-12 padding-top-1x">
                        <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收货地址</font></font></h4>
                        @foreach($data as $value)
                        <hr class="padding-bottom-1x">
                        
                        <div class="custom-control custom-checkbox d-block">
                            <font style="vertical-align: inherit; height: 30px;line-height: 30px">
                              <font style="vertical-align: inherit;">收货人：{{$value->name}}<br/>收货人电话：{{$value->phone}}<br/>收货地址:{{$value->huo}}<!-- <br/>详细地址： -->{{$value->adds}}
                              </font>
                            </font>
                            <div style="float:right;margin-top: -38px; "> 
                              <input type="hidden" name="id" value="{{$value->id}}">
                              @if($value->status == 0)
                              <a class="btn btn-success btn-sm" style="width: 100px" href="/homeaddres/{{$value->id}}" >设为默认</a>
                              @else
                              <span class="btn btn-success btn-sm" style="width: 100px">默认</span>
                              @endif
                              <a class="btn btn-info btn-sm" style="width: 100px" href="/homeaddres/{{$value->id}}/edit">修改</a>
                              <input class="btn btn-danger btn-sm del" style="width: 100px" value="删除">
                            </div>
                        </div> 
                        @endforeach
                        <hr class="margin-top-1x margin-bottom-1x">
                    </div>
                </div>
            </div>
    <script type="text/javascript">
      // alert($);
      $(".del").click(function(){
        //获取id
        id = $(this).parent("div").find("input:first").val();
        //获取删除数据所在的tr
        s = $(this).parent("div").parent("div");
        // 获取下划线
        bottom = $(this).parent("div").parent("div").next('hr');
        //Ajax
        $.get('/homeaddresdel',{id:id},function(data){
            // alert(data);
            if(data.msg == 1){  
            //移除删除数据所在的tr 
            s.remove(); 
            bottom.remove(); 
        }else{
          //终止请求动作
          request.abort();
        }
      },'json')
    });
    </script>
@endsection
@section('title','收货地址管理')