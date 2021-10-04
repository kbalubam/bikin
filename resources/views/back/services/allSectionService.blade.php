@extends('back.template.main')


@section('backContent')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Soustitre</th>
      <th scope="col">Descritpion</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($services as $service )
          
      <tr>
        <th scope="row">{{$service->id}}</th>
        <td>{{$service->soustitre}}</td>
        <td>{{$service->description}}</td>

        <td>
            <form action="{{route('services.destroy',$service->id)}}" method="post">
            <a href="{{route('services.edit',$service->id)}}" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
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