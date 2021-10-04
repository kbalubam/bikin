@extends('back.template.main')
@section('backContent')
<form action="{{route('testimonials.update',$testimonial->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <h1 class="text-center">EDIT Testimonial</h1>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">description</label>
              <input type="text" value="{{}}" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">image</label>
                <input type="file" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" name="image">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nom</label>
                <input type="text" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">poste</label>
                <input type="text" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" name="poste">
            </div>
           <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

