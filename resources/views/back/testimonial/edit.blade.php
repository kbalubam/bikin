@extends('back.template.main')
@section('backContent')
<div class="container d-flex flex-column  mb-2 vw-75">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif


 <h1 class="text-center my-3"> Update Data testimonails</h1>
<form action="{{route('testimonials.update',$testimonial->id)}}" method="POST" enctype="multipart/form-data" class="border">
            @method('PUT')
            @csrf
            <h1 class="text-center">EDIT Testimonial</h1>
            <div class="mb-3 vw-75">
              <label for="exampleInputEmail1" class="form-label">description</label>
              <input type="text" value="{{$testimonial->description}}" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
            </div>
            <div class="mb-3 vw-75">
                <label for="exampleInputEmail1" class="form-label">image</label>
                <input type="file" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" name="image">
            </div>
            <div class="mb-3 vw-75">
                <label for="exampleInputEmail1" class="form-label">nom</label>
                <input type="text" value="{{$testimonial->nom}}" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
            </div>
            <div class="mb-3 vw-75">
                <label for="exampleInputEmail1" class="form-label">poste</label>
                <input type="text" class="form-control w-25" value="{{$testimonial->poste}}"id="exampleInputEmail1" aria-describedby="emailHelp" name="poste">
            </div>

                <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection

