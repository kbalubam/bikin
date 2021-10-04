@extends('back.template.main')










@section('backContent')
<div class="d-flex flex-wrap justify-content-evenly m-5">
@foreach ($testimonials as $testimonial )
    
<div class="card my-3" style="width: 18rem;">
  <img src="{{asset("img/testimonials/".$testimonial->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$testimonial->nom}}</h5>
    <p class="card-text">
        {{$testimonial->poste}}
    </p>
    <p class="card-text">
        {{$testimonial->description}}
    </p>

    <div class="d-flex justify-content-center">
            <a href="{{route('testimonials.edit',$testimonial->id)}}" class="btn btn-warning me-3 mb-3"><i class="fas fa-edit"></i></a>
            <form action="{{route('testimonials.destroy',$testimonial->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger  "><i class="fas fa-trash-alt"></i></button>
            </form>
    </div>
  </div>
</div>
@endforeach
      <div class="container d-flex justify-content-center">
      
          <a href="{{route('testimonials.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
      </div>
</div>
@endsection