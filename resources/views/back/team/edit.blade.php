@extends('back.template.main')
@section('backContent')
<div class="container d-flex flex-column  justify-content-center align-items-center h-100 mb-2 w-75">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif


 <h1 class="text-center my-3"> Update Data Team</h1>
<form action="{{route('teams.update', $team->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Image</label>
          <input type="file"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" value="{{$team->nom}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Poste</label>
            <input type="text" class="form-control" value="{{$team->poste}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="poste">
        </div>
<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>
      </form>
</div>
@endsection
