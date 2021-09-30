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



        </div>
      </section><!-- End Features Section -->
