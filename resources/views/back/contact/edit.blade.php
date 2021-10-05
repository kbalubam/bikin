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


 <h1 class="text-center my-3"> Update Data Contact</h1>

<form action="{{route('contacts.update',$contact->id)}}" method="post">
    @csrf
    @method('PUT')

<div class="mb-3">
    <label for="titre" class="form-label">Titre </label>
    <input type="text" value = "{{$contact->titre}}" class="form-control" id="titre" name="titre">
</div>
<div class="mb-3">
    <label for="sousTitre" class="form-label">Sous Titre </label>
    <input type="text" value = "{{$contact->sousTitre}}" class="form-control" id="sousTitre" name="sousTitre">
</div>
@if ($contact->infos !== null)
    
<div class="mb-3">
    <label for="infos" class="form-label">Infos</label>
    <input type="text" value = "{{$contact->infos}}"   class="form-control" id="infos" name="infos" >
</div>
@endif

<div class="mb-3">
   <label for="pet-select">Choose an Icon:</label>

<select name="icon_id" id="icon_id-select">
    @foreach ( $icons as $icon )
    @if ($icon->id === $contact->icon->id)
    
    <option selected value="{{$icon->id}}">{{$icon->name}}</option>
    @else
    <option value="{{$icon->id}}">{{$icon->name}}</option>
        
    @endif
        
    @endforeach

</select>
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