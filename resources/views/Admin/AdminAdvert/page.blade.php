<table class="display table table-hover table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info"> 
  <thead> 
    <tr role="row">
    <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">ID</th>
    <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">广告名称</th>
    <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">广告图片</th>
    <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">广告状态</th>
    <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">链接地址</th>
    <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">内容描述</th>
    <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">操作</th>
    </tr>
  </thead> 
  <tbody class=".table-striped">
  @foreach($data as $row)
    <tr class="odd"> 
    <td class="">{{$row->id}}</td> 
    <td class="">{{$row->name}}</td> 
      <td class=""><img src="/Uploads/Advert_img/{{$row->pic}}" width="100"></td> 
    <td class="">@if($row->status==0)有效@else过期@endif</td> 
    <td class="">{{$row->url}}</td> 
    <td class="">{{$row->title}}</td>
    <td class=""><a href="/advert/{{$row->id}}/edit" class="btn btn-warning">修改</a>|<a href="javascript:void(0)" class="btn btn-warning del">Ajax删除</a>|
    <form action="/advert/{{$row->id}}" class="form-group" method="post">
      {{csrf_field()}}
      {{method_field('DELETE')}}
      <button class="btn btn-danger">删除</button>
    </form>
    </td> 
    </tr>
    @endforeach
  </tbody>
  </table>
  <script>
    $('.del').click(function(){
      id=$(this).parents("tr").find("td:first").html();
      s=$(this).parents('tr');
      $.get("/del",{id:id},function(data){
          if(data==1){
            alert('删除成功');
            s.remove();
          }else{
            alert('删除失败');
          }
          // alert(data);
      });
    });
 </script>