@extends('back.template.main')








@section('backContent')
<div class="container d-flex flex-column  mb-2 w-75">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif


 <h1 class="text-center my-3"> Update Data Linksocial</h1>

<form action="{{route('linksocials.update',$linksocial->id)}}" method="post"  class="border" >
    @csrf
    @method('PUT')



<div class="mb-3">
    <label for="name" class="form-label">Name icon</label>

<select name="name" id="name-select">
    @foreach ( $icons as $icon )
    @if ($icon->id === $linksocial->icon->id)
    
    <option selected value="{{$icon->id}}">{{$icon->linksocial->name}}</option>
    @else
    <option value="{{$icon->id}}">{{$icon->linksocial->name}}</option>
        
    @endif
        
    @endforeach

</select>
</div>


<div class="mb-3">
    <label for="link" class="form-label">Link</label>
    <input type="text" value = "{{$linksocial->link}}"   class="form-control" id="link" name="link" >
</div>






<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>
@endsection
