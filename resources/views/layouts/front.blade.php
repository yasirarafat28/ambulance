<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Lagoon Logistics</title>
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
</head>

<body>
<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="top_menu d-lg-block d-none">
        <div class="container">
            <div class="float-left">
                <ul class="left_side">
                    <li>
                        <a href="login.html">
                            <i class="fa fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa fa-behance"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="float-right">
                <ul class="right_side">
                    <li>
                        <a href="login.html">
                            <i class="lnr lnr-phone-handset"></i>
                            012-6532-568-9746
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="lnr lnr-envelope"></i>
                            emergency@colorlib.com
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
                <a class="navbar-brand logo_h" href="index.html">
                    <img src="/front/img/logo.png" alt="" />
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
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="services.html">Services</a>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                       aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="elements.html">Elements</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item submenu dropdown">
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
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
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
                        If you own an Iphone, you’ve probably already worked out how much fun it is to use it to watch movies-it
                        has
                        that.
                    </p>
                </div>
            </div>
            <div class="col-lg-5  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Newsletter</h6>
                    <p>Stay update with our latest</p>
                    <div class="" id="mc_embed_signup">
                        <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Email Address'" required="" type="email">
                            <button class="click-btn btn btn-default"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>
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
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
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
