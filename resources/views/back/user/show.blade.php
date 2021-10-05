@extends('back.template.main')
@section('backContent')
<div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Name : {{$user->name}}</h5>
          <h5 class="card-title">Email : {{$user->email}}</h5>
          <h5 class="card-title">Role :  {{$user->role->nom}}</h5>

          @can('user_create')

          <form action="{{route('users.destroy', $user->id)}}" method="POST">
              @method('DELETE')
              @csrf
                  <button type="button" class="btn btn-danger">DELETE</button>
            </form>
          @endcan
        <a href="{{route('users.index')}}">
                <button type="button" class="btn btn-warning">BACK</button>
          </a>

        </div>
      </div>
@endsection
