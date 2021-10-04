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


 <h1 class="text-center my-3"> Update Data Feature</h1>

<form action="{{route('features.update',$feature->id)}}" method="post" enctype="multipart/form-data" class="border" >
    @csrf
    @method('PUT')

<div class="mb-3">
    <label for="img1" class="form-label">Image 1 </label>
    <input type="file"  class="form-control" id="img1" name="img1">
</div>
<div class="mb-3">
    <label for="img2" class="form-label">Image 2 </label>
    <input type="file"  class="form-control" id="img2" name="img2">
</div>

<div class="mb-3">
    <label for="titre1" class="form-label">Titre 1</label>
    <input type="text" value = "{{$feature->titre1}}"   class="form-control" id="titre1" name="titre1" >
</div>

<div class="mb-3">
    <label for="sousTitre1" class="form-label">Sous titre 1</label>
    <input type="text" value = "{{$feature->sousTitre1}}"   class="form-control" id="sousTitre1" name="sousTitre1" >
</div>
<div class="mb-3">
    <label for="li1" class="form-label">Lien 1</label>
    <input type="text" value = "{{$feature->li1}}"   class="form-control" id="li1" name="li1" >
</div>
<div class="mb-3">
    <label for="li2" class="form-label">Lien 2</label>
    <input type="text" value = "{{$feature->li2}}"   class="form-control" id="li2" name="li2" >
</div>

<div class="mb-3">
    <label for="li3" class="form-label">Lien 3</label>
    <input type="text" value = "{{$feature->li3}}"   class="form-control" id="li3" name="li3" >
</div>
<div class="mb-3">
    <label for="titre2" class="form-label">Titre 2</label>
    <input type="text" value = "{{$feature->titre2}}"   class="form-control" id="titre2" name="titre2" >
</div>
<div class="mb-3">
    <label for="sousTitre2" class="form-label">sous Titre 2</label>
    <input type="text" value = "{{$feature->sousTitre2}}"   class="form-control" id="sousTitre2" name="sousTitre2" >
</div>
<div class="mb-3">
    <label for="description" class="form-label">description</label>
    <input type="text" value = "{{$feature->description}}"   class="form-control" id="description" name="description" >
</div>



</div>


<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>  

</div>   
@endsection