    <!-- ======= Features Section ======= -->
    <section id="features" class="features" data-aos="fade-up">
        <div class="container">

          <div class="section-title">
            <h2>{{$titreFeatures->titre}}</h2>
            <p>{{$titreFeatures->sousTitre}}</p>
          </div>
@foreach ($features as $feature )
  
<div class="row content">
  <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
    <img src="{{asset('img/'.$feature->img1)}}" class="img-fluid" alt="">
  </div>
  <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
    <h3>{{$feature->titre1}}</h3>
    <p class="fst-italic">
    {{$feature->sousTitre1}}
    </p>
    <ul>
      <li><i class="bi bi-check"></i> {{$feature->li1}}</li>
      <li><i class="bi bi-check"></i> {{$feature->li2}}</li>
      <li><i class="bi bi-check"></i> {{$feature->li3}}</li>
    </ul>
  </div>
</div>

          <div class="row content">
            @if ($feature->id%2===0)
              
            <div class="col-md-5 order-1 order-md-2" data-aos="fade-right">
              @else
              <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">

            @endif
              <img src="{{asset('img/'.$feature->img2)}}" class="img-fluid" alt="">
            </div>
            @if ($feature->id%2===0)
              
            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-left">
            @else
              
            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            @endif
              <h3>{{$feature->titre2}}</h3>
              <p class="fst-italic">
               {{$feature->sousTitre2}}
              </p>
              <p>
                {{$feature->description}}
              </p>
            </div>
          </div>
@endforeach

          {{-- <div class="row content">
            <div class="col-md-5" data-aos="fade-right">
              <img src="{{asset('img/features-3.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5" data-aos="fade-left">
              <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
              <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
              <ul>
                <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
              </ul>
            </div>
          </div>

          <div class="row content">
            <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
              <img src="{{asset('img/features-4.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
              <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
          </div> --}}

        </div>
      </section><!-- End Features Section -->
