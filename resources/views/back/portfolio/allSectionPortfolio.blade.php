@extends('back.template.main')


@section('backContent')
<div class="container mb-5">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Img</th>
      <th scope="col">Soustitre</th>
      <th scope="col">Soustitre2</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($portfolios as $portfolio )
          
      <tr>
        <th scope="row">{{$portfolio->id}}</th>
        <td>  <img src="{{asset('img/portfolio/'.$portfolio->img)}}" class="fitContent" alt=""></td>
        <td>{{$portfolio->soustitre}}</td>
        <td>{{$portfolio->soustitre2}}</td>

        <td>
            <form action="{{route('portfolios.destroy',$portfolio->id)}}" method="post">
            <a href="{{route('portfolios.edit',$portfolio->id)}}" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
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
      
          <a href="{{route('portfolios.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
      </div>
</div>
@endsection