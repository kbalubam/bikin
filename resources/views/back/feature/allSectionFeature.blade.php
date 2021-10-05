@extends('back.template.main')


@section('backContent')
<div class="container mb-5">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Img1</th>
      <th scope="col">Img2</th>
      <th scope="col">titre1</th>
      <th scope="col">Sous titre 1</th>
      <th scope="col">li1</th>
      <th scope="col">li2</th>
      <th scope="col">li3</th>
      <th scope="col">titre2</th>
      <th scope="col">Sous titre 2</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($features as $feature )
          
      <tr>
        <th scope="row">{{$feature->id}}</th>
        <td>{{$feature->img1}}</td>
        <td>{{$feature->img2}}</td>
        <td>{{$feature->titre1}}</td>
        <td>{{$feature->sousTitre1}}</td>
        <td>{{$feature->li1}}</td>
        <td>{{$feature->li2}}</td>
        <td>{{$feature->li3}}</td>
        <td>{{$feature->titre2}}</td>
        <td>{{$feature->sousTitre2}}</td>
        <td>{{$feature->description}}</td>
        <td>
            <form action="{{route('features.destroy',$feature->id)}}" method="post">
            <a href="{{route('features.edit',$feature->id)}}" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
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
      
          <a href="{{route('features.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
      </div>
</div>  
@endsection