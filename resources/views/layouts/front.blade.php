<!DOCTYPE html>
<html lang="en">


@php
 $setting = setting();
@endphp
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>{{$setting->app_name}}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/front/css/bootstrap.css" />
    <link rel="stylesheet" href="/front/vendors/linericon/style.css" />
    <link rel="stylesheet" href="/front/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/front/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/front/vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="/front/vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="/front/vendors/jquery-ui/jquery-ui.css" />
    <!-- main css -->
    <link rel="stylesheet" href="/front/css/style.css" />
    <link rel="stylesheet" href="/front/css/responsive.css" />

    <style>
        .home_banner_area .banner_inner .banner-left h3{
            color: #fff !important;
        }

        .form-control, .form-select{
            height: 48px !important;
        }

        .quote-area .estimated-cost .form-wrap .form-select .nice-select{
            height: 48px !important;
        }
        .single-service .thumb img {
            height: 300px !important;
        }

        .home_banner_area .banner_inner .banner-left {
            background: cadetblue !important;
        }
    </style>
</head>

<body>
<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="top_menu d-lg-block d-none">
        <div class="container">
            <div class="float-left">
                <ul class="left_side">
                    <li>
                        <a href="{{$setting->facebook}}" target="_blank">
                            <i class="fa fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{$setting->twitter}}" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{$setting->linkedin}}" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{$setting->youtube}}" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{$setting->pinterest}}" target="_blank">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="float-right">
                <ul class="right_side">
                    <li>
                        <a href="tel:{{$setting->phone}}">
                            <i class="lnr lnr-phone-handset"></i>
                            {{$setting->phone}}
                        </a>
                    </li>
                    <li>
                        <a href="mailto:{{$setting->email}}">
                            <i class="lnr lnr-envelope"></i>
                            {{$setting->email}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg w-100">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{url('/')}}">
                    <img src="/front/img/logo.png" alt="" style="height: 80px;"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <div class="row w-100">
                        <div class="col-lg-12 pr-lg-0">
                            <ul class="nav navbar-nav ml-auto justify-content-end">
                                <li class="nav-item {{Request::is('/')?'active':''}}">
                                    <a class="nav-link" href="{{url('/')}}">Home</a>
                                </li>
                                <li class="nav-item  {{Request::is('services')?'active':''}}">
                                    <a class="nav-link" href="{{url('services')}}">Essentials</a>
                                </li>
                                <li class="nav-item  {{Request::is('reservation')?'active':''}}">
                                    <a class="nav-link" href="{{url('reservation')}}">Make Reservation</a>
                                </li>
                                <!--<li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                       aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog.html">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog-details.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>-->
                                <li class="nav-item  {{Request::is('about')?'active':''}}">
                                    <a class="nav-link" href="{{url('about')}}">About</a>
                                </li>
                                <li class="nav-item {{Request::is('contact')?'active':''}}">
                                    <a class="nav-link" href="{{url('contact')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->
@yield('content')

<!--================ start footer Area =================-->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Us</h6>
                    <p>
                        24/7 we are ready to hear you. Any time, any where we go to your door or hospital with modern and latest facilities ambulance. Don’t worry about prices or rent fare. We will keep lower rent and lower other costs. We have no hidden charges.
                    </p>
                </div>
            </div>
            <div class="col-lg-5  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Newsletter</h6>
                    <p>Stay update with our latest</p>
                    <div class="" id="mc_embed_signup">
                        <form target="_blank" novalidate="true" action="#"
                              method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Email Address'" required="" type="email">
                            <button class="click-btn btn btn-default"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                <div class="single-footer-widget">
                    <h6>Follow Us</h6>
                    <p>Let us be social</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="{{$setting->linkedin}}" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="row">
            <div class="col-lg-12">
                <p class="footer-text">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

            </div>
        </div>-->
    </div>
</footer>
<!--================ End footer Area =================-->

<!--================ Optional JavaScript =================-->
<!--================ jQuery first, then Popper.js, then Bootstrap JS =================-->
<script src="/front/js/jquery-3.2.1.min.js"></script>
<script src="/front/js/popper.js"></script>
<script src="/front/js/bootstrap.min.js"></script>
<script src="/front/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="/front/vendors/isotope/isotope-min.js"></script>
<script src="/front/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="/front/js/jquery.ajaxchimp.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="/front/js/mail-script.js"></script>
<script src="/front/js/custom.js"></script>
</body>

</html>
