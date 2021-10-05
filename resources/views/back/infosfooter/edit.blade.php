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


 <h1 class="text-center my-3"> Update Data Infosfooter</h1>

<form action="{{route('infosfooters.update',$infosfooter->id)}}" method="post">
    @csrf
    @method('PUT')

<div class="mb-3">
    <label for="intitule" class="form-label">Intitule </label>
    <input type="text" value = "{{$infosfooter->intitule}}" class="form-control" id="intitule" name="intitule">
</div>
<div class="mb-3">
    <label for="donnee" class="form-label">Donnee </label>
    <input type="text" value = "{{$infosfooter->donnee}}" class="form-control" id="donnee" name="donnee">
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