@extends('back.template.main')
@section('backContent')

<div class="card" style="width: 18rem;">
<img src="{{asset('img/'.$testi->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$testi->nom}}</h5>
          <h5 class="card-title">{{$testi->poste}}</h5>
        <form action="{{route('testimonials.destroy', $testi->id)}}" method="POST">
            @method('DELETE')
            @csrf
                <button type="button" class="btn btn-danger">DELETE</button>
          </form>
        <a href="{{route('testimonials.index')}}">
                <button type="button" class="btn btn-warning">BACK</button>
          </a>

        </div>
      </div>
@endsection
