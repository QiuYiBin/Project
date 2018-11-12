        <div class="dataTables_filter" id="dynamic-table_filter"> 
      </div> 
    </form> 
  </div> 
</div>
<div id="uid">
  <table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info"> 
    <thead> 
      <tr role="row"> 
        <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table"  aria-label="Rendering engine: activate to sort column ascending" rowspan="1" colspan="1">ID</th> 
        <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table"  aria-label="Browser: activate to sort column ascending" rowspan="1" colspan="1">用户名</th> 
        <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table" aria-label="Platform(s): activate to sort column ascending" rowspan="1" colspan="1">邮箱</th> 
        <th tabindex="0" class="hidden-phone sorting" role="columnheader" aria-controls="dynamic-table" aria-label="Engine version: activate to sort column ascending" rowspan="1" colspan="1">状态</th> 
        <th tabindex="0" class="hidden-phone sorting" role="columnheader" aria-controls="dynamic-table" aria-label="Engine version: activate to sort column ascending" rowspan="1" colspan="1">电话</th> 
        <th tabindex="0" class="hidden-phone sorting_desc" role="columnheader" aria-controls="dynamic-table" aria-label="CSS grade: activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">操作</th> 
      </tr> 
    </thead> 
    <tbody class=".table-striped">
      @foreach($data as $row)
      <tr class="odd"> 
        <td class="">{{$row->id}}</td> 
        <td class="">{{$row->username}}</td> 
        <td class="">{{$row->email}}</td> 
        <td class="">{{$row->status == '0' ? '启用' : '禁用'}}</td> 
        <td class="">{{$row->phone}}</td> 
        <td class="">
          <a href="/adminuser/{{$row->id}}/edit" class="btn btn-warning">修改</a>
          <a href="/adminusersaddres/{{$row->id}}" class="btn btn-success">收货地址</a>
          <a href="/adminuser/{{$row->id}}" class="btn btn-info">用户详情</a>
        </td>
      </tr> 
      @endforeach
    </tbody> 
  </table>
</div>