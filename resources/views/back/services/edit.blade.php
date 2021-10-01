@extends('back.template.main')
@section('content')
<form action="{{route('services.update',$service->id)}}">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Soustitre</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="soustitre">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
      </form>


@endsection
