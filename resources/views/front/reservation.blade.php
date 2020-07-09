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
                                <h3 class="text-uppercase">Reservation</h3>
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


    <!--================ Start Quote Area =================-->
    <section class="quote-area section_gap_top section_gap_bottom">
      <div class="container">
        <div class="row justify-content-center text-left section-title-wrap">
          <div class="col-lg-12">
            <h5>Get a quote now!</h5>
            <h2 class="">
              Check the estimated cost for <br>
              your requesting goods
            </h2>
          </div>
        </div>
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-12">
            <div class="estimated-cost">
              <form class="form-wrap" action="#">
                <nav>
                  <div class="nav nav-tabs justify-content-md-start justify-content-center" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-getEstimation-tab" data-toggle="tab" href="#nav-getEstimation"
                      role="tab" aria-controls="nav-getEstimation" aria-selected="true">Get an estimation</a>
                  </div>
                </nav>

                <!-- Tab Content -->
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-getEstimation" role="tabpanel" aria-labelledby="nav-getEstimation-tab">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="firstName">Name</label>
                          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter  name"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter  name'" />
                        </div>
                      </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailAddress">Email Address</label>
                                <input type="email" class="form-control " id="emailAddress" placeholder="Enter email address"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" />
                            </div>
                        </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="lastName">Date</label>
                          <input type="date" class="form-control" value="{{date('Y-m-d')}}" id="date" placeholder="Enter reservation date" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter reservation date'" />
                        </div>
                      </div>

                        <div class="col-md-6">
                            <div class="form-group form-select" id="default-select">
                                <label for="speciality">Type</label>
                                <select  name="type" id="type" class="" required="">
                                    <option value="">Select Type</option>
                                    <option value="NICU Ambulance">NICU Ambulance</option>
                                    <option   value="Air Ambulance">Air Ambulance</option>
                                    <option  value="Freezer Van">Freezer Van</option>
                                    <option  value="ICU Ambulance">ICU Ambulance</option>
                                    <option  value="Non-AC Ambulance">Non-AC Ambulance</option>
                                    <option  value="AC Ambulance">AC Ambulance</option>
                                </select>
                            </div>
                        </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="pickup">Pickup Location</label>
                          <input type="text" class="form-control" id="pickup" placeholder="Enter pickup location"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter pickup location'" />
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="destination">Destination</label>
                          <input type="text" class="form-control" id="destination" placeholder="Enter destination"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter destination'" />
                        </div>
                      </div>
                      <div class="col-lg-12 mt-4">
                        <div class="text-center confirm_btn_box">
                          <button class="main_btn text-uppercase">Request for Reservation</button>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Quote Area =================-->
@endsection
