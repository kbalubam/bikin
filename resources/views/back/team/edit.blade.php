@extends('back.template.main')
@section('content')
<form action="{{route('teams.update', $team->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Image</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Poste</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="poste">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
