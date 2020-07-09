@extends('layouts.front')
@section('content')

    <!--================ Home Banner Area =================-->
    <section class="home_banner_area banner-area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner_content d-flex flex-md-row flex-column">
                            <div class="banner-left text-md-right">
                                <h3 class="text-uppercase">Contact Us</h3>
                            </div>
                            <div class="banner-right position-relative">
                                <p>
                                    Get ambulance to save life over a phone call
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->
  <!--================ Feature Area =================-->
  <section class="feature-area section_gap_top">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="single-feature">
                <h4>Shipment Tracking</h4>
                <p>
                  The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
                <a href="#">Find your cargo</a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="single-feature">
                <h4>Have a Question?</h4>
                <p>
                  The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
                <a href="#">Contact Us</a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="single-feature">
                <h4>Get a Quote</h4>
                <p>
                  The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
                <a href="#">Start a quote</a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="single-feature">
                <h4>Shipping Calculator</h4>
                <p>
                  The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
                <a href="#">Get Estimate</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-5 offset-md-0 col-md-12 text-left section-title-wrap">
          <h5>About {{setting()->app_name}}</h5>
          <h2>
            We’re Carefully <br>
            Delivering your <br>
            happiness.
          </h2>

          <h4>f you are looking at blank cassettes on the web lorem ipsum dolor sit consectetur adipisicing elit,
            eiusmod tempor incididunt.</h4>
          <p>
            If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Eiusmod tempor
            incididunt ut labore et dolore magna aliqua consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua.
          </p>
          <a href="#" class="main_btn">Learn More About Us</a>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Feature Area =================-->

@endsection
