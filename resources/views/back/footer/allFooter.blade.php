@extends('back.template.main')




@section('backContent')
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>{{$titreBikin->titre}} <a href="{{route('titres.show',$titreBikin->id)}}" class="text-warning"><i class="fas fa-eye"></i></a></h3>
            <p>
                <div class="d-flex justify-content-center border my-2">
                    <div>

                        @foreach ($adressfooters as $adress )
                          
                        {{$adress->street}} <br>
                        {{$adress->city}} <br>
                       {{$adress->country}}  <br><br>
                        @endforeach
                        <div class="d-flex justify-content-center ">
                        <a href="" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
                        </div>
                    </div>
                </div>
                <div class="border my-2">

                    @foreach ($infosfooter as $info)
                      
                    <strong>{{$info->intitule}} : </strong>{{$info->donnee}}<br>
                    @endforeach
                    <div class="d-flex justify-content-center mt-1">
                    <a href="" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
                    </div>
                </div>
              {{-- <strong>Email:</strong> info@example.com<br> --}}
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>{{$st1footer->intitule}} <a href="{{route('titres.show',$titreBikin->id)}}" class="text-warning"><i class="fas fa-eye"></i></a></h4>
            <ul class="border my-1">
              @foreach ($usefullinks as $useful )
              <li><i class="bx bx-chevron-right"></i> <a href="{{$useful->link}}">{{$useful->name}}</a></li>
                
              @endforeach
                <div class="d-flex justify-content-center mt-1">
                <a href="{{route('usefullinks.index')}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
                </div>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>{{$st2footer->intitule}} <a href="{{route('titres.show',$titreBikin->id)}}" class="text-warning"><i class="fas fa-eye"></i></a></h4>
            <ul class="border my-1">
             @foreach ($serviceslinks as $service )
              <li><i class="bx bx-chevron-right"></i> <a href="{{$service->link}}">{{$service->name}}</a></li>
                
              @endforeach
                <div class="d-flex justify-content-center mt-1">
                <a href="{{route('serviceslinks.index')}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
                </div>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>{{$st3footer->intitule}} <a href="{{route('titres.show',$titreBikin->id)}}" class="text-warning"><i class="fas fa-eye"></i></a></h4>
            <div class="border my-2">

                @foreach ($newsletterinfo as $info )
                  
                <p>{{$info->description}}</p>
                @endforeach
                <div class="d-flex justify-content-center mt-1">
                <a href="" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
                </div>
            </div>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>{{$titreBikin->titre}}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bikin-free-simple-landing-page-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0 border my-2">
          <div >

              @foreach ($linksocials as $linksocial )
                
              <a href="#" class="twitter"><i class="bx {{$linksocial->icon->name}}"></i></a>
              @endforeach
            </div>
            <div class="d-flex justify-content-center mt-1">
            <a href="{{route('linksocials.index')}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>    
            </div>

      </div>
    </div>
  </footer><!-- End Footer -->

    
@endsection