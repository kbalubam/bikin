@extends('back.template.main')


@section('backContent')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Icon</th>
      <th scope="col">Titre</th>
      <th scope="col">Sous titre</th>
      <th scope="col">infos</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($contacts as $contact )
          
      <tr>
        <th scope="row">{{$contact->id}}</th>
        <td> <i class="bx {{$contact->icon->name}}"></i></td>
        <td>{{$contact->titre}}</td>
        <td>{{$contact->sousTitre}}</td>
        <td>{{$contact->infos!==null?$contact->infos:"null"}}</td>
        <td>
            <form action="{{route('contacts.destroy',$contact->id)}}" method="post">
            <a href="{{route('contacts.edit',$contact->id)}}" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>
      </tr>
      @endforeach

  </tbody>
</table> 
    
@endsection