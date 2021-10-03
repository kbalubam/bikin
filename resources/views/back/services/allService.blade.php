@extends('back.template.main')




@section('backContent')
 <!-- ======= Services Section ======= -->
 <section id="services" class="services">
        <div class="container" data-aos="fade-up">

          <div class="section-title border my-2">
            <h2>{{$titreServices->titre}}</h2>
            <p>{{$titreServices->sousTitre}}</p>
                <div class="d-flex justify-content-center my-2">
                <a href="{{route('titres.show',$titreServices->id)}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
                </div>  
          </div>


          <div class="row border pt-2 my-2">
            @foreach ( $service as $serv )
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">{{$serv->soustitre}}</a></h4>
              <p class="description">{{$serv->description}}</p>
              </div>
            </div>
            @endforeach

            <div class="d-flex justify-content-center my-4">
            <a href="{{route('sectionsService')}}" class="btn btn-warning fs-4"><i class="fas fa-eye"></i></a>    
            </div> 
          </div>

        </div>
      </section><!-- End Services Section -->

@endsection