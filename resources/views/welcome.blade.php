@extends ('include.header')

@section ('content')


    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('theme/images/landing-bg.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">VATSIM Europe, Middle East and Africa Region</h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
                  <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary py-3 px-5 btn-pill">Get Started Now</a></p>

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    @include ('divisions')

    <div class="br"></div>

    @include ('about')

    <br><br>
    <div class="br"></div>

    @include ('policies')

    <div class="br"></div>

    @include ('staff')

    <div class="br" style="margin-top: -75px;"></div>

    @include ('dashboard')

    @include ('contact')
    
    @include ('include.footer')

  
    
  </div> <!-- .site-wrap -->

  <style>
    .br {
      width: 30%;
      height: 2px;
      background-color: rgb(235, 235, 235);
      margin-left: auto;
      margin-right: auto;
    }
  </style>

  <script src="{{ asset('theme/js/jquery-3.3.1.min.js' ) }}"></script>
  <script src="{{ asset('theme/js/jquery-migrate-3.0.1.min.js' ) }}"></script>
  <script src="{{ asset('theme/js/jquery-ui.js' ) }}"></script>
  <script src="{{ asset('theme/js/popper.min.js' ) }}"></script>
  <script src="{{ asset('theme/js/bootstrap.min.js' ) }}"></script>
  <script src="{{ asset('theme/js/owl.carousel.min.js' ) }}"></script>
  <script src="{{ asset('theme/js/jquery.stellar.min.js' ) }}"></script>
  <script src="{{ asset('theme/js/jquery.countdown.min.js' ) }}"></script>
  <script src="{{ asset('theme/js/bootstrap-datepicker.min.js' ) }}"></script>
  <script src="{{ asset('theme/js/jquery.easing.1.3.js' ) }}"></script>
  <script src="{{ asset('theme/js/aos.js' ) }}"></script>
  <script src="{{ asset('theme/js/jquery.fancybox.min.js' ) }}"></script>
  <script src="{{ asset('theme/js/jquery.sticky.js' ) }}"></script>

  
  <script src="{{ asset('theme/js/main.js' ) }}"></script>
    
  </body>

@endsection