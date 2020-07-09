<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>

        @if(isset($meta_keyword))
            {{$meta_keyword}} || {{\App\Setting::setting()->app_name}}
        @else
            {{\App\Setting::setting()->app_name}} || {{\App\Setting::setting()->tagline}}
        @endif
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="
    @if(isset($meta_description))
        {{$meta_description}}
    @else
        {{\App\Setting::setting()->meta_description}}
    @endif

        ">

    <!-- Favicons -->
    <link href="{{asset('front/img/favicon.png')}}')}}" rel="icon">
    <link href="{{asset('front/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('front/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('front/lib/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/owlcarousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/owlcarousel/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/venobox/venobox.css')}}" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="{{asset('front/css/nivo-slider-theme.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="{{asset('front/css/responsive.css')}}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">

<div id="preloader"></div>

<header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <!-- Navigation -->
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll sticky-logo" href="{{url('/')}}">
                                <!-- Uncomment below if you prefer to use an image logo -->
                                <img src="{{asset('images/logo.png')}}" alt="" title="">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a class="page-scroll" href="#home">Home</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#about">About</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#services">Services</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#team">Team</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="#blog">Blog</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- navbar-collapse -->
                    </nav>
                    <!-- END: Navigation -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
</header>
<!-- header end -->
