  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>{{$titreBikin->titre}}</h3>
            <p>
              @foreach ($adressfooters as $adress )
                
              {{$adress->street}} <br>
              {{$adress->city}} <br>
             {{$adress->country}}  <br><br>
              @endforeach
              @foreach ($infosfooter as $info)
                
              <strong>{{$info->intitule}} : </strong>{{$info->donnee}}<br>
              @endforeach
              {{-- <strong>Email:</strong> info@example.com<br> --}}
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>{{$st1footer->intitule}}</h4>
            <ul>
              @foreach ($usefullinks as $useful )
              <li><i class="bx bx-chevron-right"></i> <a href="{{$useful->link}}">{{$useful->name}}</a></li>
                
              @endforeach
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>{{$st2footer->intitule}}</h4>
            <ul>
             @foreach ($serviceslinks as $service )
              <li><i class="bx bx-chevron-right"></i> <a href="{{$service->link}}">{{$service->name}}</a></li>
                
              @endforeach
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> --}}
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>{{$st3footer->intitule}}</h4>
            @foreach ($newsletterinfo as $info )
              
            <p>{{$info->description}}</p>
            @endforeach
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
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        @foreach ($linksocials as $linksocial )
          
        <a href="#" class="twitter"><i class="bx {{$linksocial->icon->name}}"></i></a>
        @endforeach
        {{-- <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
      </div>
    </div>
  </footer><!-- End Footer -->

  