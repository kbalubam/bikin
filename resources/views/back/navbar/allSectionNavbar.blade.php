@extends('back.template.main')


@section('backContent')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Lien</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($navbars as $nav )
          
      <tr>
        <th scope="row">{{$nav->id}}</th>
        <td> {{$nav->name}}</td>
        <td>{{$nav->lien}}</td>

        <td>
            <form action="{{route('navbars.destroy',$nav->id)}}" method="post">
            <a href="{{route('navbars.edit',$nav->id)}}" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>
      </tr>
      @endforeach

  </tbody>
</table> 
    
@endsection