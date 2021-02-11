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
                                <h3 class="text-uppercase">About Us</h3>
                            </div>
                            <div class="banner-right position-relative">
                                <p>
                                    Get ambulance over a phone call to save life
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
                  <img src="/front/img/feature/f1.png" alt="">
                <h4>Online Reservation</h4>
                <p>
                  The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
                <a href="/reservation">Make a reservation</a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="single-feature">
                  <img src="/front/img/feature/f2.png" alt="">
                <h4>Have a Question?</h4>
                <p>
                  The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
                <a href="/contact">Contact Us</a>
              </div>
            </div>
            <div class="col-md-6 offset-md-3">
              <div class="single-feature">
                  <img src="/front/img/feature/f3.png" alt="">
                <h4>Equipments</h4>
                <p>
                  The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
                <a href="/services">Learn More</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-5 offset-md-0 col-md-12 text-left section-title-wrap">
          <h5>About {{setting()->app_name}}</h5>
          <h2>
            We’re committed to save your happiness
          </h2>
          
          <!--

            <h4>24/7 we are ready to hear you. Any time, any where we go to your door or hospital with modern and latest facilities ambulance. Don’t worry about prices or rent fare. We will keep lower rent and lower other costs. We have no hidden charges.</h4>

            <p>Our life support modern ambulances are equipped with life saving machines like ventilator, cardiac monitors, suction machine, infusion pumps etc. and having all emergency life saving medications, hence providing an environment of intensive care unit (ICU) of any hospital.</p>

-->

<h2>ICU, Freezer, AC, Non-Ambulance Service</h2>
<p>We provide different types ambulance service in Dhaka and all districts of Bangladesh. 24 hours any types ambulance is available in Dhaka. 
All lives matter! It is crucial to get the ambulance service when we need it. We provide you with 24/7 emergency ambulance service all over Bangladesh especially in all corners of Dhaka. As Dhaka is the busiest city, it is close to impossible to reach any destination due to terrible traffic. However, we have expert teams to beat the traffic and manage to reach the patients’ destinations on time. You can always rely on us for the quickest response. You can reach us from anywhere in Bangladesh. Besides, we also provide ambulance service from one district to another.  
You will be satisfied with all our arrangements. Our ambulances are full-furnished with all the necessary equipment such as stretchers, wheel chairs, oxygen cylinders etc. Our ambulances are spic and span, i.e. clean bed for the patients and comfortable seats for their companions. We ensure our valuable customers’ all sort of prehospital medical care.
We provide this ambulance service as per your need and patient’s condition. We have different types of ambulances service. They are mainly–
</p>
<ul>
<li>ICU Ambulance Service</li>
 
<li>Freezer Van Ambulance  </li>
<li>AC Ambulance Service</li>
<li>Non-AC Ambulance Service </li>\
</ul>
<p>
The basic service we provide is Non-AC ambulance which is low-priced and affordable for all. The rent of other two-types of ambulances are cost effective too compared to the comfort and overall satisfaction you will get. Make sure, you choose the best ambulance service for your near and dear ones in the quickest possible time with reasonable price. It can save your time, money and most importantly a precious life.
</p>
<br>
<h2>Hamida Ac ambulance service</h2>
<p>This is one of the best ambulance services in Dhaka as well as in the whole Bangladesh. An AC ambulance is mainly used to transfer a patient to the hospital or a recently recovered person to his/her resident. AC ambulances have air conditioning systems. As the temperature is very high in Bangladesh and we have to wait hours after hours in traffic, it can make a normal person fall sick. So it is crucial to maintain a suitable temperature for any patient and the companions.
In our AC ambulance service, we provide neat and clean bed sheets, stretchers, oxygen cylinder and a first-aid box. There is ample room for the patient and his/her companions.
</p>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Feature Area =================-->

@endsection
