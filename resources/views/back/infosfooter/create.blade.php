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


 <h1 class="text-center my-3"> Create Contact</h1>

<form action="{{route('infosfooters.store')}}" method="post">
    @csrf


<div class="mb-3">
    <label for="intitule" class="form-label">Intitule </label>
    <input type="text" value = "{{old('intitule')}}" class="form-control" id="intitule" name="intitule">
</div>
<div class="mb-3">
    <label for="donnee" class="form-label">Donnee </label>
    <input type="text" value = "{{old('donnee')}}" class="form-control" id="donnee" name="donnee">
</div>






</div>


<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>  

</div>   
@endsection