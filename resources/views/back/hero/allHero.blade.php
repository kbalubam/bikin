@extends('back.template.main')




@section('backContent')
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      
        

            <h1>{{$titreHero->titre}}</h1>
            <h2>{{$titreHero->sousTitre}}</h2>
            <div class="d-flex justify-content-center my-2">
            <a href="{{route('titres.show',$titreHero->id)}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
            </div>   

      @foreach ($heroes as $hero)
        
      <a href="#about" class="btn-get-started scrollto">{{$hero->btn}}</a>
      <img src="{{asset('img/'.$hero->img)}}" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
      @endforeach
            <div class="d-flex justify-content-center my-2">
            <a href="{{route('sectionsHero')}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
            </div> 
    </div>

  </section><!-- End Hero -->

@endsection