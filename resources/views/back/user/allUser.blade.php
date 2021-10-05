@extends('back.template.main')
@section('backContent')
<div class="container mb-5">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">role</th>
      <th scope="col">actions</th>

    </tr>
  </thead>
  <tbody>
      @foreach ($allUser as $user )

      <tr>
        <th scope="row">{{$user->id}}</th>
        <td> {{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->nom}}</td>





      <td >
        <form action="{{route('users.destroy',$user->id)}}" method="post">
          @can('update',$user)
            <a href="{{route('users.edit',$user->id)}}" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
            
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            @endcan
            <a href="{{route('users.show',$user->id)}}" class="btn btn-success mx-1"><i class="fas fa-eye"></i></a>
          </form>
        </td>

      </tr>
      @endforeach

  </tbody>
</table>
@can('user_create')
<div class="container d-flex justify-content-center">
<a href="{{route('users.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
</div>
@endcan
</div>

@endsection


