 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      <h1>{{$titreHero->titre}}</h1>
      <h2>{{$titreHero->sousTitre}}</h2>
      @foreach ($heroes as $hero)
        
      <a href="#about" class="btn-get-started scrollto">{{$hero->btn}}</a>
      <img src="{{asset('img/'.$hero->img)}}" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
      @endforeach
    </div>

  </section><!-- End Hero -->
