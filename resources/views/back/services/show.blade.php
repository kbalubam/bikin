@extends('back.template.main')
@section('backContent')

<div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$services->soustitre}}</h5>
          <h5 class="card-title">{{$services->description}}</h5>
        <form action="{{route('services.show', $tservices->id)}}" method="POST">
            @method('DELETE')
            @csrf
                <button type="button" class="btn btn-danger">DELETE</button>
          </form>
          <a href="">
                <button type="button" class="btn btn-danger">BACK</button>
          </a>

        </div>
      </div>
@endsection
