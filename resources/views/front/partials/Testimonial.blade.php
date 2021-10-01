    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>{{$titreTestimonials->titre}}</h2>
            <p>{{$titreTestimonials->sousTitre}}</p>
          </div>

          <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach ($testi as $testi )

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{$testi->description}}
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="{{asset('img/'.$testi->image)}}" class="testimonial-img" alt="">
                  <h3>{{$testi->nom}}</h3>
                  <h4>{{$testi->poste}}</h4>
                </div>
              </div><!-- End testimonial item -->
              @endforeach




            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section><!-- End Testimonials Section -->
