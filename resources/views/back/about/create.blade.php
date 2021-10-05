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


 <h1 class="text-center my-3"> Update Data about</h1>

<form action="{{route('abouts.store')}}" method="post">
    @csrf


<div class="mb-3">
    <label for="titreSec" class="form-label">Titre </label>
    <input type="text" value = "{{old('titreSec')}}" class="form-control" id="titreSec" name="titreSec">
</div>

<div class="mb-3">
    <label for="descriptionSec" class="form-label">Description</label>
    <input type="text" value = "{{old('descriptionSec')}}"   class="form-control" id="descriptionSec" name="descriptionSec" >
</div>

<div class="mb-3">
   <label for="pet-select">Choose an Icon:</label>

<select name="icon_id" id="icon_id-select">
    @foreach ( $icons as $icon )
    
    <option value="{{$icon->id}}">{{$icon->name}}</option>
        
        
    @endforeach

</select>
    </div>
{{-- <div class="mb-3">
    <label for="btn" class="form-label">Button</label>
    <input type="text" value="{{$about->btn}}"  class="form-control" id="btn" name="btn" >
</div> --}}

</div>


<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>  

</div>   
@endsection