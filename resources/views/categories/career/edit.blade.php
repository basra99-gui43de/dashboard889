@extends('layouts.app')
@section('content')

<div class="row" style="margin-right: 130px;"><br> <br>
<h2 style="text-align: right">تعديل الوظيفة </h2>
@foreach ($career as $value)
{{$career}}
{{$careerdetails}}
  @foreach ($careerdetails as $value2)
<form action="edit_career/{{$value->id}}" method="post" enctype="multipart/form-data" >
       
<div class="form-group col-md-12">
    <label for="" class="control-label">   العنوان العمل   </label>
    <input type="text" name="title" class="form-control" style="width: 49%;" value="{{$value->title}}">
   
</div>

<div class="form-group col-md-12">
    <label for="" class="control-label"> موقع العمل </label>
    <input type="text" name="location" class="form-control" style="width: 49%;" value="{{$value2->location}}">
   
</div>

<div class="form-group col-md-12">
    <label for="" class="control-label"> رقم الهاتف </label>
    <input type="number" name="tele" class="form-control" style="width: 49%;"  value="{{$value2->location}}">
   
</div>

<div class="form-group col-md-12">
    <label for="" class="control-label">صورة </label>
    <input type="file" name="image" class=" form-control" style="width: 49%;" value="{{$value2->location}}" >
</div>
@endforeach


<div class="form-group col-md-12">
    <label for="" class="control-label">تفاصيل </label>
    <textarea  name="subject" class=" form-control" style="width: 49%;" >{{$value->subject}}</textarea>
</div>
<input type="submit" value="حفظ" class="btn btn-success form-control" style="width: 49%;">
<input type="hidden" value="{{ csrf_token() }}" name="_token">

</form>
       @endforeach 
      
</div>
@endsection