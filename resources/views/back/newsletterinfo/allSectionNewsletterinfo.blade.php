@extends('back.template.main')


@section('backContent')
<div class="container mb-5">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">description</th>

      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($newsletterinfos as $newsletterinfo )
          
      <tr>
        <th scope="row">{{$newsletterinfo->id}}</th>
        <td>{{$newsletterinfo->description}}</td>
        <td>
            <form action="{{route('newsletterinfos.destroy',$newsletterinfo->id)}}" method="post">
            <a href="{{route('newsletterinfos.edit',$newsletterinfo->id)}}" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
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
      
          <a href="{{route('newsletterinfos.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
      </div>
</div>   
@endsection