@extends('back.template.main')




@section('backContent')
<div class=" container-fluid d-flex justify-content-center align-items-center vh-100">

    <!-- ======= About Section ======= -->
    <section id="about" class="about m-3 w-100">
        <div class="container">

          <div class="row no-gutters">
            <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
              <div class="content border ml-3">
                <h3>{{$titreAbout->titre}}</h3>
                <p>
                  {{$titreAbout->sousTitre}}
                </p>
                <div class="d-flex justify-content-center">
                <a href="{{route('titres.show',$titreAbout->id)}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
                </div>

                <a href="#" class="about-btn">About us<i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
            <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row mr-2">
                  @foreach ($abouts as $about )
                    
                  <div class="col-md-6 icon-box border " data-aos="fade-up" data-aos-delay="100">
                    <i class="bx {{$about->icon->name}}"></i>
                    <h4>{{$about->titreSec}}</h4>
                    <p>{{$about->descriptionSec}}</p>
                </div>
                @endforeach
                <div class="d-flex justify-content-center mt-3">
                <a href="{{route('sectionsAbout')}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
                </div>

                </div>
              </div><!-- End .content-->
            </div>
          </div>

        </div>
      </section><!-- End About Section -->
</div>

@endsection