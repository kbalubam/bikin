@extends('back.template.main')








@section('backContent')
<div class="container d-flex flex-column mb-5 w-75">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>  
        @endforeach
    </ul>
</div>
@endif


 <h1 class="text-center my-3"> Update Data Adressfooter</h1>

<form action="{{route('adressfooters.update',$adressfooter->id)}}" method="post">
    @csrf
    @method('PUT')

<div class="mb-3">
    <label for="street" class="form-label">Street </label>
    <input type="text" value = "{{$adressfooter->street}}" class="form-control" id="street" name="street">
</div>
<div class="mb-3">
    <label for="city" class="form-label">City </label>
    <input type="text" value = "{{$adressfooter->city}}" class="form-control" id="city" name="city">
</div>

<div class="mb-3">
    <label for="country" class="form-label">Country</label>
    <input type="text" value = "{{$adressfooter->country}}"   class="form-control" id="country" name="country" >
</div>



{{-- <div class="mb-3">
    <label for="btn" class="form-label">Button</label>
    <input type="text" value="{{$contact->btn}}"  class="form-control" id="btn" name="btn" >
</div> --}}

</div>


<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>  

</div>   
@endsection