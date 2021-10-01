@extends('back.template.main')
@section('content')
<form action="{{route('portfolios.update', $portfolio->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Image</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="img">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Soustitre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="soustitre">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">soustitre2</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="soustitre2">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">lien</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lien">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
