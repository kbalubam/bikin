@extends('back.template.main')










@section('backContent')
<div class="d-flex flex-wrap justify-content-evenly m-5">
@foreach ($teams as $team )
    
<div class="card my-3" style="width: 18rem;">
  <img src="{{asset("img/team/".$team->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$team->nom}}</h5>
    <p class="card-text">
        {{$team->poste}}
    </p>
    <p class="card-text">
        <ul class="d-flex justify-content-between w-75 my-3" >
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
        </ul>
    </p>
    <div class="d-flex justify-content-center">
            <a href="{{route('teams.edit',$team->id)}}" class="btn btn-warning me-3 mb-3"><i class="fas fa-edit"></i></a>
            <form action="{{route('teams.destroy',$team->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger  "><i class="fas fa-trash-alt"></i></button>
            </form>
    </div>
  </div>
</div>
@endforeach
      <div class="container d-flex justify-content-center">
      
          <a href="{{route('teams.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
      </div>
</div>
@endsection