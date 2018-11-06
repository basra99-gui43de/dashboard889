@extends('layouts.app')
@section('content')

<div class="row" style="margin-right: 130px;">

<form action="/editcompany/{{$company->id}}" method="post" enctype="multipart/form-data" >
      
       <div class="form-group col-md-10">
           <label for="" class="control-label"> الاسم الرئيسي </label>
           <input type="text" name="company_name" class="form-control" value="{{$company->company_name}}">
          
       </div>
       <div class="form-group col-md-10">
           <label for="" class="control-label"> الايميل </label>
           <input type="text" name="email" class="form-control"value="{{$company->email}}" >
          
       </div>
    
       <div class="form-group col-md-10">
           <label for="" class="control-label"> رقم الهاتف </label>
           <input type="text" name="tele" class="form-control" value="{{$company->tele}}">
          
       </div>
   
       <div class="form-group col-md-10">
           <label for="" class="control-label">العنوان</label>
           <input type="text" name="location" class=" form-control" value="{{$company->location}}">
       </div>
       <div class="form-group col-md-10">
           <label for="" class="control-label">الموقع على الخريطة</label>
           <input type="text" name="location_map" class=" form-control" value="{{$company->location_map}}">
       </div>
       <div class="form-group col-md-10">
           <label for="" class="control-label">تفاصيل </label>
           <textarea  name="company_details" class=" form-control"  >"{{$company->company_name}}</textarea>
       </div>
      <input type="submit" value="حفظ" class="btn btn-success form-control" style="width: 82%;">
      <input type="hidden" value="{{ csrf_token() }}" name="_token">
   
       </form>
   
</div>
@endsection