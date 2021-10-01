@extends('back.template.main')




@section('backContent')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Icon</th>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($abouts as $about )
          
      <tr>
        <th scope="row">{{$about->id}}</th>
        <td> <i class="bx {{$about->icon}}"></i></td>
        <td>{{$about->titreSec}}</td>
        <td>{{$about->descriptionSec}}</td>
        <td>
            <form action="{{route('abouts.destroy',$about->id)}}" method="post">
            <a href="{{route('abouts.edit',$about->id)}}" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
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