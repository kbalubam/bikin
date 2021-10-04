@extends('back.template.main')




@section('backContent')
     <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title border my-2">
            <h2>{{$titreTestimonials->titre}}</h2>
            <p>{{$titreTestimonials->sousTitre}}</p>
                <div class="d-flex justify-content-center my-2">
                <a href="{{route('titres.show',$titreTestimonials->id)}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
                </div>  
          </div>

          <div class="testimonials-slider swiper-container border" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach ($testimonials as $testimonial )

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{$testimonial->description}}
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="{{asset('img/'.$testimonial->image)}}" class="testimonial-img" alt="">
                  <h3>{{$testimonial->nom}}</h3>
                  <h4>{{$testimonial->poste}}</h4>
                </div>
              </div><!-- End testimonial item -->
              @endforeach


              
            </div>
            <div class="swiper-pagination"></div>
            <div class="d-flex justify-content-center my-4">
            <a href="{{route('sectionsTestimonial')}}" class="btn btn-warning fs-4"><i class="fas fa-eye"></i></a>    
            </div> 
          </div>

        </div>
      </section><!-- End Testimonials Section -->
   
@endsection