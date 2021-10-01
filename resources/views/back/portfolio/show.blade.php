@extends('back.template.main')
@section('backContent')

<div class="card" style="width: 18rem;">
<img src="{{asset('img/'.$portfolio->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$portofolio->soustitre}}</h5>
          <h5 class="card-title">{{$portfofolio->soustitre2}}</h5>
        <form action="{{route('teams.destroy', $portfolio->id)}}" method="POST">
            @method('DELETE')
            @csrf
                <button type="button" class="btn btn-danger">DELETE</button>
          </form>
        <a href="{{route('portfolios.index')}}">
                <button type="button" class="btn btn-warning">BACK</button>
          </a>

        </div>
      </div>
@endsection
