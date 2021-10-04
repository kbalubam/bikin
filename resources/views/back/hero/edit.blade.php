@extends('back.template.main')
@section('backContent')
<form action="{{route('heroes.update', $hero->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Image</label>
          <input type="file"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="img">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" value="{{$hero->btn}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="btn">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
