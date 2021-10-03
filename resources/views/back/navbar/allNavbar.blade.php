@extends('back.template.main')




@section('backContent')

  <!-- ======= Header ======= -->
  <div class="container vh-100 d-flex justify-content-center align-items-center border border-warning">

      <header id="header" class="">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="border mr-1">

                <h1 class="logo"><a href="index.html">{{$titreBikin->titre}}</a></h1>
            <div class="d-flex justify-content-center my-2">
            <a href="{{route('titres.show',$titreBikin->id)}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
            </div>
            </div>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <div class="border">

                <nav id="navbar" class="navbar">
                <ul class=" my-1" >
                    @foreach ($navbars as $nav )
                    @if ($nav->id === 1)
        
                    <li><a class="nav-link scrollto active" href="{{$nav->lien}}">{{$nav->name}}</a></li>
                    @else
        
                <li><a class="nav-link scrollto" href="{{$nav->lien}}">{{$nav->name}}</a></li>
                @endif
                @endforeach
                
                <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            </ul>
            <div class="d-flex justify-content-center my-2">
            <a href="{{route('sectionsNavbar')}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
            </div> 
            </div>
    
        </div>
      </header><!-- End Header -->
  </div>
  
@endsection