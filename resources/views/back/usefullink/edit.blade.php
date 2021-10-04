@extends('back.template.main')








@section('backContent')
<div class="container d-flex flex-column  mb-2 w-75">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>  
        @endforeach
    </ul>
</div>
@endif


 <h1 class="text-center my-3"> Update Data Usefullink</h1>

<form action="{{route('usefullinks.update',$usefullinkfooter->id)}}" method="post" enctype="multipart/form-data" class="border" >
    @csrf
    @method('PUT')



<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" value = "{{$usefullinkfooter->name}}"   class="form-control" id="name" name="name" >
</div>

<div class="mb-3">
    <label for="link" class="form-label">Link</label>
    <input type="text" value = "{{$usefullinkfooter->link}}"   class="form-control" id="link" name="link" >
</div>






<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>  

</div>   
@endsection