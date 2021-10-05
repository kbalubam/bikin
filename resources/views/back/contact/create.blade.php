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

<form action="{{route('contacts.store')}}" method="post">
    @csrf


<div class="mb-3">
    <label for="titre" class="form-label">Titre </label>
    <input type="text" value = "{{old('titre')}}" class="form-control" id="titre" name="titre">
</div>
<div class="mb-3">
    <label for="sousTitre" class="form-label">Sous Titre </label>
    <input type="text" value = "{{old('sousTitre')}}" class="form-control" id="sousTitre" name="sousTitre">
</div>

<div class="mb-3">
    <label for="infos" class="form-label">Infos</label>
    <input type="text" value = "{{old('infos')}}"   class="form-control" id="infos" name="infos" >
</div>

<div class="mb-3">
   <label for="pet-select">Choose an Icon:</label>

<select name="icon_id" id="icon_id-select">
    @foreach ( $icons as $icon )
    
    <option selected value="{{$icon->id}}">{{$icon->name}}</option>
        
        
    @endforeach

</select>
    </div>


</div>


<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>  

</div>   
@endsection