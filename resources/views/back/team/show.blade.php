@extends('back.template.main')
@section('backContent')

<div class="card" style="width: 18rem;">
<img src="{{asset('img/'.$team->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$team->nom}}</h5>
          <p class="card-text">{{$team->poste}}</p>
        <form action="{{route('teams.destroy', $team->id)}}" method="POST">
            @method('DELETE')
            @csrf
                <button type="button" class="btn btn-danger">DELETE</button>
          </form>
        <a href="{{route('teams.index')}}">
                <button type="button" class="btn btn-warning">BACK</button>
          </a>

        </div>
      </div>
@endsection
