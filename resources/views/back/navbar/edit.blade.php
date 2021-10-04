@extends('back.template.main')
@section('backContent')
<form action="{{route('navbars.update',$navbar->id)}}" method="POST">
            @method('PUT')
            @csrf
            <h1 class="text-center">EDIT NAVBAR</h1>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" value="{{$navbar->name}}" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">lien</label>
              <input type="text" value="{{$navbar->lien}}" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" name="lien">
            </div>
<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>
    </form>
@endsection

