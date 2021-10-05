@extends('back.template.main')




@section('backContent')
    <h1 class="text-center fs-1">Bienvenue dans le backoffice</h1>

<a href="{{route('users.index')}}">
    <button type="button" class="btn btn-primary">ACCES USER</button>

    </a>
@endsection