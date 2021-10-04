@extends('back.template.main')


@section('backContent')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Img</th>
      <th scope="col">Btn</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($heroes as $hero )
          
      <tr>
        <th scope="row">{{$hero->id}}</th>
        <td> <img src="{{asset('img/'.$hero->img)}}" style="height: 100px;width:100px" alt=""> </td>
        <td>{{$hero->btn}}</td>

        <td>
            <form action="{{route('heroes.destroy',$hero->id)}}" method="post">
            <a href="{{route('heroes.edit',$hero->id)}}" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
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