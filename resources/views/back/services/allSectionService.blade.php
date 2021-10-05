@extends('back.template.main')


@section('backContent')
<div class="container mb-5">

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
 <div class="container d-flex justify-content-center">
      
          <a href="{{route('services.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
  </div>

</div>
@endsection