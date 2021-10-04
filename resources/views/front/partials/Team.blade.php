    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>{{$titreTeam->titre}}</h2>
            <p>{{$titreTeam->sousTitre}}</p>
          </div>

          <div class="row">
            @foreach ($team as $team )

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="{{asset('img/team/'.$team->image)}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>{{$team->nom}}</h4>
                    <span>{{$team->poste}}</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>

        </div>
      </section><!-- End Team Section -->
