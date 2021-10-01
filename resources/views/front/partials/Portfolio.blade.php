
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>{{$titrePortfolio->titre}}</h2>
                <p>{{$titrePortfolio->soustitre}}</p>
              </div>

              <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                  <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                  </ul>
                </div>
              </div>

              <div class="row portfolio-container">
                @foreach ($portfolio as $port )


                <div class="col-lg-4 col-md-6 portfolio-item filter-{{$port->soustitre2}}">
                  <div class="portfolio-wrap">
                    <img src="{{asset('img/'.$port->img)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>{{$port->soustitre}}</h4>
                      <p>{{$port->soustitre2}}</p>
                      <div class="portfolio-links">
                        <a href="{{asset('img/'.$port->img)}})" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$port->soustitre}}"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach


              </div>

            </div>
          </section><!-- End Portfolio Section -->
