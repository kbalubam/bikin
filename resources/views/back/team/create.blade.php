@extends('back.template.main')
@section('backContent')
<form action="{{route('teams.store')}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Image</label>
          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="image">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('nom')}}" name="nom">
        </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Poste</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('poste')}}" name="poste">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
      </form>


@endsection
