@extends('Home.Personal.public')
@section('right')
  @if($data == '')
    <div class="col-lg-8"> 
      <div class="padding-top-2x mt-2 hidden-lg-up"></div> 
      <form class="row" role="form" action="/homepersonal" method="post" enctype="multipart/form-data"> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-fn"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">名字</font></font></label> 
         <input class="form-control" type="text" name="name" id="account-fn" value="" required="" /> 
        </div>
       </div> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-ln"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">姓别</font></font></label> 
         <input class="form-control" type="text" name="sex" id="account-ln" value="" required="" /> 
        </div> 
       </div> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-pass"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">年龄</font></font></label> 
         <input class="form-control" type="text"  name="age"id="account-pass" value="" /> 
        </div> 
       </div> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电子邮件地址</font></font></label> 
         <input class="form-control" type="email" name="email" id="account-email" value="" /> 
        </div> 
       </div> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-phone"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电话号码</font></font></label> 
         <input class="form-control" type="text" name="phone" id="account-phone" value="" required="" /> 
        </div> 
       </div> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-confirm-pass"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">兴趣爱好</font></font></label> 
         <input class="form-control" type="text" name="hobby" id="account-confirm-pass" value="" /> 
        </div> 
       </div> 
       <div class="col-12"> 
        <hr class="mt-2 mb-3" /> 
        <div class="d-flex flex-wrap justify-content-between align-items-center"> 
         <div class="custom-control custom-checkbox d-block"> 
          <input type="hidden" name="user_id" value="{{$id}}">
          <input class="custom-control-input" type="checkbox" id="subscribe_me" checked="" />
         </div> 
         <button class="btn btn-primary margin-right-none" "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">保存</font></font></button> 
        </div> 
       </div> 
        {{csrf_field()}} 
      </form> 
    </div>
    @else
    <div class="col-lg-8"> 
      <div class="padding-top-2x mt-2 hidden-lg-up"></div> 
      <form class="row" role="form" action="/homepersonal/{{$data->id}}" method="post" enctype="multipart/form-data"> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-fn"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">名字</font></font></label> 
         <input class="form-control" type="text" name="name" id="account-fn" value="{{$data->name}}" required="" /> 
        </div> 
       </div> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-ln"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">姓别</font></font></label> 
         <input class="form-control" type="text" name="sex" id="account-ln" value="{{$data->sex}}" required="" /> 
        </div> 
       </div> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-pass"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">年龄</font></font></label> 
         <input class="form-control" type="text"  name="age"id="account-pass" value="{{$data->age}}" /> 
        </div> 
       </div> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电子邮件地址</font></font></label> 
         <input class="form-control" type="email" name="email" id="account-email" value="{{$data->email}}" /> 
        </div> 
       </div> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-phone"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电话号码</font></font></label> 
         <input class="form-control" type="text" name="phone" id="account-phone" value="{{$data->phone}}" required="" /> 
        </div> 
       </div> 
       <div class="col-md-6"> 
        <div class="form-group"> 
         <label for="account-confirm-pass"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">兴趣爱好</font></font></label> 
         <input class="form-control" type="text" name="hobby" id="account-confirm-pass" value="{{$data->hobby}}" /> 
        </div> 
       </div> 
       <div class="col-12"> 
        <hr class="mt-2 mb-3" /> 
        <div class="d-flex flex-wrap justify-content-between align-items-center"> 
         <div class="custom-control custom-checkbox d-block"> 
          <input class="custom-control-input" type="checkbox" id="subscribe_me" checked="" />
         </div> 
         <button class="btn btn-primary margin-right-none" "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">保存</font></font></button> 
        </div> 
       </div>
       {{ method_field('PUT') }}
       {{csrf_field()}}  
      </form> 
    </div>
    @endif
@endsection
@section('title','个人中心')