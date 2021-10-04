@extends('back.template.main')
@section('backContent')
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
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
