@extends('back.template.main')








@section('backContent')
<div class="container d-flex flex-column mb-5 w-75">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>  
        @endforeach
    </ul>
</div>
@endif


 <h1 class="text-center my-3"> Create NewsletterInfo</h1>

<form action="{{route('newsletterinfos.store')}}" method="post">
    @csrf


<div class="mb-3">
    <label for="description" class="form-label">Description </label>
    <input type="text" value = "{{old('description')}}" class="form-control" id="description" name="description">
</div>







</div>


<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>  

</div>   
@endsection