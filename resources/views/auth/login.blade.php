@extends('layouts.fanpage')

@section('content')
<div id="page-preloader">
    <div class="preloader-wrench"></div>
</div>
<!-- END PRELOADER --> 

<!-- START HEADER SECTION -->
<header class="main-header header-1">
    <!-- START TOP AREA -->
    <div class="top-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="header-social">
                        <ul>
                           <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                           <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                           <li><a href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
                           <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                           <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div> 
                <!-- end col -->
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="info-menu">
                        <ul>
                            <li><a href="{{ route('loguin') }}">Login </a></li>
                            <li><a href="#">Register </a></li>
                            <li><a href="#">Appinmnet </a></li>
                            <li><a href="#">Contact </a></li>
                        </ul>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
    <!-- END TOP AREA -->

    <!-- START LOGO AREA -->
    <div class="logo-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-7 mx-md-auto mx-sm-auto mx-auto pl-0">
                    <div class="logo">
                        <a href="index.html">
                           <img class="img-fluid" src="{{ asset('img/fanpageImage/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="header-info-box">
                        <div class="header-info-icon"><span class="lnr lnr-phone-handset"></span></div>
                        <p>Customer support & sales</p>
                        <h6>123-456-0975</h6>
                    </div>
                    <div class="header-info-box">
                        <div class="header-info-icon"><span class="lnr lnr-map-marker"></span></div>
                        <p>Opening hours</p>
                        <h6>Mon - Sun : 09:00 - 18:00</h6>
                    </div>
                    <div class="header-info-box">
                        <a class="header-quote-btn" href="#">Get a Quote <i class="icofont icofont-caret-right"></i></a>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
    <!-- END LOGO AREA -->

    <!-- START NAVIGATION AREA -->
    <div class="sticky-menu">
        <div class="mainmenu-area">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-9 d-lg-block d-md-none d-sm-none d-none ">
                        <nav class="navbar navbar-expand-lg justify-content-left">
                            <ul class="navbar-nav">
                                <li class="active dropdown"><a href="index.html" class="nav-link">Home</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="services.html" class="nav-link">Services</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="services.html">Our All Services</a></li>
                                        <li><a href="single-service.html">Accident & Emergency</a></li>
                                        <li><a href="single-service.html">Health checks</a></li>
                                        <li><a href="single-service.html">Home Care</a></li>
                                        <li><a href="single-service.html">Diabetes & Endocrinology</a></li>
                                    </ul>
                                </li>	
                                <li><a href="gallery.html" class="nav-link">Gallery</a></li>
                                <li class="dropdown"><a href="#" class="nav-link">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">About Sensiv</a></li>
                                        <li><a href="doctors.html">Our Doctors</a></li>
                                        <li><a href="single-doctor.html">Single doctor</a></li>
                                        <li><a href="appointment.html">Appointment</a></li>
                                        <li><a href="testimonial.html">Testimonial</a></li>
                                        <li><a href="new-patient.html">New Patient</a></li>
                                        <li><a href="faq.html">Faq's</a></li>
                                        <li><a href="reports.html">Lab Reports</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>	
                                <li class="dropdown"><a href="shop.html" class="nav-link">Shop</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop.html">Sensiv Shop</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                        <li><a href="shop-checkout.html">Shop Checkout</a></li>
                                        <li><a href="shop-cart.html">Shop Cart</a></li>
                                    </ul>
                                </li>	
                                <li class="dropdown"><a href="blog.html" class="nav-link">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>	
                                <li><a href="contact.html" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>	
                    </div>
                    <div class="col-lg-3 col-md-12 d-lg-block d-md-none d-none">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <ul class="navbar-nav">
                                <li class="active dropdown quick-search"><a href="#" class="nav-link">I want To</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="icofont icofont-doctor-alt"></i> Find a Doctor</a></li>
                                        <li><a href="#"><i class="icofont icofont-ui-calendar"></i> Request an Appointment</a></li>
                                        <li><a href="#"><i class="icofont icofont-medical-sign"></i> Book a Healthcheck</a></li>
                                        <li><a href="#"><i class="icofont icofont-prescription"></i> Access Lab Reports </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>	
                    </div>
                </div>
            </div>
            <!--- END CONTAINER -->
        </div>
        <!-- END NAVIGATION AREA -->

        <!-- MOBILE-MENU-AREA START -->
        <div class="mobile-menu-area d-lg-none d-md-block d-sm-block d-block">
            <div class="col-md-9">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="navbar-nav">
                                <li><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="services.html">Services</a>
                                    <ul>
                                        <li><a href="services.html">Our All Services</a></li>
                                        <li><a href="single-service.html">Accident & Emergency</a></li>
                                        <li><a href="single-service.html">Health checks</a></li>
                                        <li><a href="single-service.html">Home Care</a></li>
                                        <li><a href="single-service.html">Diabetes & Endocrinology</a></li>
                                    </ul>
                                </li>	
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about.html">About Sensiv</a></li>
                                        <li><a href="doctors.html">Our Doctors</a></li>
                                        <li><a href="single-doctor.html">Single doctor</a></li>
                                        <li><a href="appointment.html">Appointment</a></li>
                                        <li><a href="testimonial.html">Testimonial</a></li>
                                        <li><a href="new-patient.html">New Patient</a></li>
                                        <li><a href="faq.html">Faq's</a></li>
                                        <li><a href="reports.html">Lab Reports</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>	
                                <li><a href="shop.html" class="nav-link">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Sensiv Shop</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                        <li><a href="shop-checkout.html">Shop Checkout</a></li>
                                        <li><a href="shop-cart.html">Shop Cart</a></li>
                                    </ul>
                                </li>	
                                <li><a href="blog.html" class="nav-link">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>	
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
              </div>
        </div>
        <!-- MOBILE-MENU-AREA END -->
    </div>		
</header>
<!-- END HEADER SECTION -->

<!-- START SLIDER SECTION -->
<section class="slider-section">
    <div class="home-slides owl-carousel owl-theme ">
        <div class="home-single-slide" data-background="{{ asset('img/fanpageImage/bg/slide2.jpg') }}">
            <div class="home-slide-overlay"></div>
            <div class="home-single-slide-inner">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-lg-7 col-md-8 col-sm-8 col-12">
                            <div class="home-single-slide-dec">
                                <p>WELL CARE</p>
                                <h2>PROVIDING</h2>
                                <h2>TOTAL LAB SOLUTION</h2>
                                <span><i class="icofont icofont-plus"></i> CARING YOUR REPORTS</span>
                                <a href="appointment.html" class="home-btn-1">GET APPOINTMENT</a>
                                <a href="reports.html" class="home-btn-2">LAB REPORTS</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4 col-sm-4 col-12 d-lg-block d-md-block d-sm-block d-none">
                            <img class="img-fluid" src="{{ asset('img/fanpageImage/bg/single-doc1.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single slider -->
        <div class="home-single-slide" data-background="{{ asset('img/fanpageImage/bg/slide1.jpg') }}">
            <div class="home-slide-overlay"></div>
            <div class="home-single-slide-inner">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-lg-7 col-md-8 col-sm-8 col-12">
                            <div class="home-single-slide-dec">
                                <p>TOTAL CARE</p>
                                <h2>PROVIDING</h2>
                                <h2>HEALTH SOLUTION</h2>
                                <span><i class="icofont icofont-plus"></i> WE ARE CARING</span>
                                <a href="services.html" class="home-btn-1">OUR SERVICES</a>
                                <a href="services.html" class="home-btn-2">CONTACT US</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4 col-sm-4 col-12 d-lg-block d-md-block d-sm-block d-none">
                            <img class="home-single-slide--img img-fluid" src="{{ asset('img/fanpageImage/bg/single-doc2.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single slider -->
    </div>
</section>
<!-- END SLIDER SECTION  -->

<!-- START ABOUT SECTION -->
<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>Welcome to <span>Cleveland</span></h3>
                    <span class="line"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-about">
                    <div class="single-about-icon">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/bg/icon-2.png') }}" alt="" />
                    </div>
                    <h5>Our Mission</h5>
                    <p>Lorem ipsum dolor sit consectetur adipiscing elit sed do.</p>
                </div>
            </div>
            <!-- end single about -->
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-about">
                    <div class="single-about-icon">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/bg/icon-1.png') }}" alt="" />
                    </div>
                    <h5>Our History</h5>
                    <p>Lorem ipsum dolor sit consectetur adipiscing elit sed do.</p>
                </div>
            </div>
            <!-- end single about -->
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-about">
                    <div class="single-about-icon">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/bg/icon-4.png') }}" alt="" />
                    </div>
                    <h5>Our Vision</h5>
                    <p>Lorem ipsum dolor sit consectetur adipiscing elit sed do.</p>
                </div>
            </div>
            <!-- end single about -->
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-about">
                    <div class="single-about-icon">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/bg/icon-3.png') }}" alt="" />
                    </div>
                    <h5>Our Success</h5>
                    <p>Lorem ipsum dolor sit consectetur adipiscing elit sed do.</p>
                </div>
            </div>
            <!-- end single about -->
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END ABOUT SECTION -->


<!-- START ABOUT SERVICE SECTION -->
<section id="service" class="section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>Our <span>Facilities</span></h3>
                    <span class="line"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="service-tab">
            <div class="row">
                 <div class="col-lg-3 col-md-12 c0l-sm-12 col-xs-12">
                     <ul id="tabsJustified" class="nav nav-tabs text-center">
                        <li class="nav-item">
                            <a href="#" data-target="#one" data-toggle="tab" class="nav-link">
                                 <h6>Dental Medicine </h6>
                                 <span>Skill-95%</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#two" data-toggle="tab" class="nav-link active">
                                 <h6>Organ Transplant</h6>
                                 <span>Skill-85%</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#three" data-toggle="tab" class="nav-link">
                                 <h6>Anaesthesiology </h6>
                                 <span>Skill-90%</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#four" data-toggle="tab" class="nav-link">
                                 <h6>Renal Sciences</h6>
                                 <span>Skill-80%</span>
                            </a>
                        </li>	
                    </ul>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div id="tabsJustifiedContent" class="tab-content">
                        <div id="one" class="tab-pane animated fadeInRight">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                    <h5>Treatment & Procedures</h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis eges vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                                    <div class="skill">
                                        <div class="progress">
                                            <div class="lead">Skill</div>
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" data-progress="95%" style="width: 95%;"></div>
                                            <span>95%</span>
                                        </div>
                                    </div>
                                    <div class="service-tab-list">	
                                        <h5>Features List</h5>	
                                        <div class="row mt-3">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <ul>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <ul>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                </ul>
                                            </div> 
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="single-doctor single-doctor-warp">
                                        <img class="img-fluid" src="{{ asset('img/fanpageImage/team/1.jpg') }}" alt="" />
                                        <div class="single-doctor-info">
                                            <h4>Williums Kevins</h4>
                                            <span>Dermatologist</span> 
                                        </div>
                                        <div class="single-doctor-mask">
                                            <div class="single-doctor-mask-inner">
                                                <h5>About Doctor</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                <ul>
                                                   <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                                   <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                                   <li><a href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
                                                   <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                            </div>	
                        </div>
                        <div id="two" class="tab-pane animated fadeInRight active show">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                    <h5>Kidney Transplant Procedures</h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis eges vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                                    <div class="skill">
                                        <div class="progress">
                                            <div class="lead">Skill</div>
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" data-progress="85%" style="width: 85%;"></div>
                                            <span>85%</span>
                                        </div>
                                    </div>
                                    <div class="service-tab-list">	
                                        <h5>Features List</h5>	
                                        <div class="row mt-3">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <ul>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <ul>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                </ul>
                                            </div> 
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="single-doctor single-doctor-warp">
                                        <img class="img-fluid" src="{{ asset('img/fanpageImage/team/2.jpg') }}" alt="" />
                                        <div class="single-doctor-info">
                                            <h4>Williums Kevins</h4>
                                            <span>Urologist</span> 
                                        </div>
                                        <div class="single-doctor-mask">
                                            <div class="single-doctor-mask-inner">
                                                <h5>About Doctor</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                <ul>
                                                   <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                                   <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                                   <li><a href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
                                                   <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                            </div>
                        </div>
                        <div id="three" class="tab-pane animated fadeInRight">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                    <h5>Department of Anesthesiology</h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis eges vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                                    <div class="skill">
                                        <div class="progress">
                                            <div class="lead">Skill</div>
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" data-progress="90%" style="width: 90%;"></div>
                                            <span>90%</span>
                                        </div>
                                    </div>
                                    <div class="service-tab-list">	
                                        <h5>Features List</h5>	
                                        <div class="row mt-3">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <ul>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <ul>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                </ul>
                                            </div> 
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="single-doctor single-doctor-warp">
                                        <img class="img-fluid" src="{{ asset('img/fanpageImage/team/3.jpg') }}" alt="" />
                                        <div class="single-doctor-info">
                                            <h4>Williums Kevins</h4>
                                            <span>Anaesthesiologist</span> 
                                        </div>
                                        <div class="single-doctor-mask">
                                            <div class="single-doctor-mask-inner">
                                                <h5>About Doctor</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                <ul>
                                                   <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                                   <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                                   <li><a href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
                                                   <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                            </div>
                        </div>
                        <div id="four" class="tab-pane animated fadeInRight">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                    <h5>Institute of Nephrology & Urology:</h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis eges vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                                    <div class="skill">
                                        <div class="progress">
                                            <div class="lead">Skill</div>
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" data-progress="80%" style="width: 80%;"></div>
                                            <span>80%</span>
                                        </div>
                                    </div>
                                    <div class="service-tab-list">	
                                        <h5>Features List</h5>	
                                        <div class="row mt-3">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <ul>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <ul>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                    <li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
                                                </ul>
                                            </div> 
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="single-doctor single-doctor-warp">
                                        <img class="img-fluid" src="{{ asset('img/fanpageImage/team/4.jpg') }}" alt="" />
                                        <div class="single-doctor-info">
                                            <h4>Williums Kevins</h4>
                                            <span>Nephrologist</span> 
                                        </div>
                                        <div class="single-doctor-mask">
                                            <div class="single-doctor-mask-inner">
                                                <h5>About Doctor</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                <ul>
                                                   <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                                   <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                                   <li><a href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
                                                   <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END ABOUT SERVICE SECTION -->


<!-- START PORTFOLIO SECTION -->
<section id="portfolio" class="section-padding pb-0">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h3>Cleveland <span>Gallery</span></h3>
                        <span class="line"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <!-- end section title -->
            </div>
        </div>
        <div class="row text-center ">
            <div class="portfolio-slider owl-carousel owl-theme">
                <div class="single-gallery-item">
                    <div class="single-gallery single-gallery-first">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/gallery/1.jpg') }}" alt="" />
                        <div class="single-gallery">
                            <div class="single-gallery-inner">
                                <h5>Gallery Title</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                <a href="#" class="info"><i class="icofont icofont-link"></i></a>
                                <a href="assets/img/gallery/1.jpg" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont icofont-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single portfolio -->
                <div class="single-gallery-item">
                    <div class="single-gallery single-gallery-first">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/gallery/4.jpg') }}" alt="" />
                        <div class="single-gallery">
                            <div class="single-gallery-inner">
                                <h5>Youtube Demo</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                <a href="#" class="info"><i class="icofont icofont-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=U6tSjIAGaTU" data-title="PORTFOLIO YOUTUBE VIDEO" data-vbtype="youtube" class="venobox info vbox-item" data-gall="gall1"><i class="icofont icofont-expand"></i></a>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single portfolio -->
                <div class="single-gallery-item">
                    <div class="single-gallery single-gallery-first">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/gallery/3.jpg') }}" alt="" />
                        <div class="single-gallery">
                            <div class="single-gallery-inner">
                                <h5>Vimeo Demo</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                <a href="#" class="info"><i class="icofont icofont-link"></i></a>
                                <a href="https://vimeo.com/75976293" class="venobox info vbox-item" data-autoplay="true" data-title="PORTFOLIO VIMEO VIDEO" data-vbtype="vimeo" data-gall="gall1"><i class="icofont icofont-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single portfolio -->
                <div class="single-gallery-item">
                    <div class="single-gallery single-gallery-first">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/gallery/5.jpg') }}" alt="" />
                        <div class="single-gallery">
                            <div class="single-gallery-inner">
                                <h5>Gallery Title</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                <a href="#" class="info"><i class="icofont icofont-link"></i></a>
                                <a href="{{ asset('img/fanpageImage/gallery/5.jpg') }}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont icofont-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single portfolio -->
                <div class="single-gallery-item">
                    <div class="single-gallery single-gallery-first">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/gallery/2.jpg') }}" alt="" />
                        <div class="single-gallery">
                            <div class="single-gallery-inner">
                                <h5>Gallery Title</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                <a href="#" class="info"><i class="icofont icofont-link"></i></a>
                                <a href="{{ asset('img/fanpageImage/gallery/2.jpg') }}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont icofont-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single portfolio -->				
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END PORTFOLIO SECTION -->


<!-- START COUNTER SECTION -->
<section id="counter" class="counter-section overlay section-back-image" data-background="{{ asset('img/fanpageImage/bg/counter-bg.jpg') }}">
    <div class="container">
        <div class="row wow fadeInDown">
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-counter">
                    <div class="single-counter-icon">
                        <i class="icofont icofont-users-alt-2"></i>
                    </div>
                    <div class="single-counter-text">
                        <h5 class="timer">1250</h5>
                        <p>Happy Patients</p>
                    </div>
                </div>
            </div>
            <!-- end single counter -->
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-counter">
                    <div class="single-counter-icon">
                        <i class="icofont icofont-nurse-alt"></i>
                    </div>
                    <div class="single-counter-text">
                        <h5 class="timer">1350</h5>
                        <p>Medical Workers</p>
                    </div>
                </div>
            </div>
            <!-- end single counter -->
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-counter">
                    <div class="single-counter-icon">
                        <i class="icofont icofont-doctor-alt"></i>
                    </div>
                    <div class="single-counter-text">
                        <h5 class="timer">1560</h5>
                        <p>Total Doctors</p>
                    </div>
                </div>
            </div>
            <!-- end single counter -->
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-counter">
                    <div class="single-counter-icon">
                        <i class="icofont icofont-hat-alt"></i>
                    </div>
                    <div class="single-counter-text">
                        <h5 class="timer">1670</h5>
                        <p>Medical Experience</p>
                    </div>
                </div>
            </div>
            <!-- end single counter -->				
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END COUNTER SECTION -->


<!-- START SERVICE SECTION -->
<section id="services" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>Our<span> Services</span></h3>
                    <span class="line"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row mt-4">
            <div class="service-slider owl-carousel owl-theme">
                <div class="single-service-item">
                    <div class="single-service">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/service/1.jpg') }}" alt="" />
                        <h5>CANCER CARE</h5>
                        <p>Lorem ipsum dolor sit consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        <a class="serv-rmbtn" href="#">Read More</a>
                    </div>	
                </div>
                <!-- end single service -->
                <div class="single-service-item">
                    <div class="single-service">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/service/2.jpg') }}" alt="" />
                        <h5>HEALTH CHECK</h5>
                        <p>Lorem ipsum dolor sit consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        <a class="serv-rmbtn" href="#">Read More</a>
                    </div>	
                </div>
                <!-- end single service -->
                <div class="single-service-item">
                    <div class="single-service">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/service/3.jpg') }}" alt="" />
                        <h5>HOME CARE</h5>
                        <p>Lorem ipsum dolor sit consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        <a class="serv-rmbtn" href="#">Read More</a>
                    </div>	
                </div>
                <!-- end single service -->
                <div class="single-service-item">
                    <div class="single-service">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/service/4.jpg') }}" alt="" />
                        <h5>GENERAL SURGERY</h5>
                        <p>Lorem ipsum dolor sit consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        <a class="serv-rmbtn" href="#">Read More</a>
                    </div>	
                </div>
                <!-- end single service -->
                <div class="single-service-item">
                    <div class="single-service">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/service/5.jpg') }}" alt="" />
                        <h5>Dental Medicine</h5>
                        <p>Lorem ipsum dolor sit consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        <a class="serv-rmbtn" href="#">Read More</a>
                    </div>	
                </div>
                <!-- end single service -->		
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END SERVICE SECTION -->


<!-- START DOCTOR SECTION -->
<section id="doctor" class="section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>Our<span> Specialities</span></h3>
                    <span class="line"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row">
            <div class="team-slider owl-carousel owl-theme">
                <div class="single-doctor single-doctor-warp">
                    <img class="img-fluid" src="{{ asset('img/fanpageImage/team/1.jpg') }}" alt="" />
                    <div class="single-doctor-info">
                        <h4>Stevest Henry</h4>
                        <span>Ophthalmologist</span> 
                    </div>
                    <div class="single-doctor-mask">
                        <div class="single-doctor-mask-inner">
                            <h5>About Doctor</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <ul>
                               <li><a href="#">Get Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end single doctor -->
                <div class="single-doctor single-doctor-warp">
                    <img class="img-fluid" src="{{ asset('img/fanpageImage/team/2.jpg') }}" alt="" />
                    <div class="single-doctor-info">
                        <h4>Williums Kevins</h4>
                        <span>Dermatologist</span> 
                    </div>
                    <div class="single-doctor-mask">
                        <div class="single-doctor-mask-inner">
                            <h5>About Doctor</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <ul>
                               <li><a href="#">Get Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end single doctor -->
                <div class="single-doctor single-doctor-warp">
                    <img class="img-fluid" src="{{ asset('img/fanpageImage/team/3.jpg') }}" alt="" />
                    <div class="single-doctor-info">
                        <h4>Kewillues Jenifer</h4>
                        <span>Radiologist</span> 
                    </div>
                    <div class="single-doctor-mask">
                        <div class="single-doctor-mask-inner">
                            <h5>About Doctor</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <ul>
                               <li><a href="#">Get Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end single doctor -->
                <div class="single-doctor single-doctor-warp">
                    <img class="img-fluid" src="{{ asset('img/fanpageImage/team/4.jpg') }}" alt="" />
                    <div class="single-doctor-info">
                        <h4>Marquis Williums</h4>
                        <span>Urologist</span> 
                    </div>
                    <div class="single-doctor-mask">
                        <div class="single-doctor-mask-inner">
                            <h5>About Doctor</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <ul>
                               <li><a href="#">Get Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end single doctor -->
                <div class="single-doctor single-doctor-warp">
                    <img class="img-fluid" src="{{ asset('img/fanpageImage/team/5.jpg') }}" alt="" />
                    <div class="single-doctor-info">
                        <h4>Revenna Warner</h4>
                        <span>Neurologist</span> 
                    </div>
                    <div class="single-doctor-mask">
                        <div class="single-doctor-mask-inner">
                            <h5>About Doctor</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <ul>
                               <li><a href="#">Get Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end single doctor -->	
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END DOCTOR SECTION -->


<!-- START APPOINTMENT SECTION -->
<section id="appointment" class="appointment-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 d-lg-block d-md-block d-sm-none d-none">
                <div class="appointment-image">
                    <img src="{{ asset('img/fanpageImage/bg/single-doc3.png') }}" alt="">
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-12 pr-5">
                        <h4>Book Appointment</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed.</p>
                        <div class="single-quote">
                            <i class="icofont icofont-paralysis-disability"></i>
                            <h5>Health Check</h5>
                            <p>Lorem ipsum dolor consectetur adipiscing elit sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="single-quote">
                            <i class="icofont icofont-stethoscope"></i>
                            <h5>Get Directions</h5>
                            <p>Lorem ipsum dolor consectetur adipiscing elit sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                        <h4>Send Us Message</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt.</p>
                        <div class="appointment-form">
                            <form action="#">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <input name="aname" class="form-control" id="afirst-name" placeholder="Your Name" required="required" type="text">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input name="aemail" class="form-control" id="aemail" placeholder="Your Email" required="required" type="email">
                                    </div>
                                    <div class="form-group col-lg-12">
                                    <textarea rows="6" name="rmessage" class="form-control" id="adescription" placeholder="Your Message Here..." required="required"></textarea>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <a title="Click here to submit your message!" class="btn btn-lg btn-app-form">Send Message</a>
                                    </div>
                                </div>
                            </form>
                        </div>	
                    </div>
                    <!-- end col -->		
                </div>
            </div>
            <!-- end col -->	
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END APPOINTMENT SECTION -->


<!-- START CALL TO ACTION -->
<section id="calltoaction" class="section-padding overlay section-back-image" data-background="{{ asset('img/fanpageImage/bg/promo-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="calltoaction-wrap">
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do<br>incididunt ut labore et dolore <span>magna aliqua</span></h4>
                    <a href="https://www.youtube.com/watch?v=U6tSjIAGaTU" class="venobox vbox-item promo-icon" data-autoplay="true" data-title="PROMO YOUTUBE VIDEO" data-vbtype="youtube" data-gall="gallpromo"><i class="icofont icofont-play"></i></a>
                    <a class="wow fadeInDown promo-rmbtn" href="#">Read More</a>	
                </div>
            </div>	
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END CALL TO ACTION  -->


<!-- START TESTIMONIAL & FAQ -->
<section id="testimonialfaq" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                <div class="text-left">
                    <div class="section-title section-title-left">
                        <h3>Frequently <span>Asked Question</span></h3>
                        <span class="line"></span>
                    </div>
                </div>
                <!-- end section title -->
                <div class="panel-group faq-home-accor" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <h5 class="panel-title">
                            <i class="icofont icofont-thin-down"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel1">What are the lab charges ?</a>
                        </h5>
                        </div>
                        <div id="panel1" class="panel-collapse collapse show">
                            <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <h5 class="panel-title">
                            <i class="icofont icofont-thin-right"></i> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#panel2">How to get appointment?</a>
                        </h5>
                        </div>
                        <div id="panel2" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <h5 class="panel-title">
                            <i class="icofont icofont-thin-right"></i> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#panel3">How to book health check?</a>
                        </h5>
                        </div>
                        <div id="panel3" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud.</p>
                            </div>
                        </div>
                    </div>	
                </div>	
            </div>
            <!-- end col -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="text-left">
                    <div class="section-title section-title-left">
                        <h3>What Our <span>Patients Says </span></h3>
                        <span class="line"></span>
                    </div>
                </div>
                <!-- end section title -->
                <div class="single-testimonial mb-4">
                    <div class="single-testimonial-img">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/team/tes1.jpg') }}" alt="">
                    </div>
                    <div class="single-testimonial-text-warp">
                        <div class="single-testimonial-text-inner">
                            <p>Lorem ipsum dolor sit amet consectetured adipiscing elit, sed do eiusmod temporinci incididunt ut labore et dolore magna aliqua.</p>
                            <footer class="blockquote-footer">Jone Doee , <cite title="Source Title">Hash Theme</cite></footer>
                        </div>
                        <div class="single-testimonial-text-icon">
                            <i class="icofont icofont-quote-left"></i>
                        </div>
                    </div>	
                </div>
                <!-- end single testimonial -->
                <div class="single-testimonial">
                    <div class="single-testimonial-img">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/team/tes2.jpg') }}" alt="">
                    </div>
                    <div class="single-testimonial-text-warp">
                        <div class="single-testimonial-text-inner">
                            <p>Lorem ipsum dolor sit amet consectetured adipiscing elit, sed do eiusmod temporinci incididunt ut labore et dolore magna aliqua.</p>
                            <footer class="blockquote-footer">Mark Doee , <cite title="Source Title">Hash Theme</cite></footer>
                        </div>
                        <div class="single-testimonial-text-icon">
                            <i class="icofont icofont-quote-left"></i>
                        </div>
                    </div>	
                </div>
                <!-- end single testimonial -->	
            </div>
            <!-- end col -->	
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END TESTIMONIAL & FAQ -->


<!-- START BLOG SERCTION -->
<section id="blog" class="section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>Today's<span> News</span></h3>
                    <span class="line"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-blog-home">
                    <div class="single-blog-home-img">
                        <a href="#"><img class="img-fluid" src="{{ asset('img/fanpageImage/blog/1.jpg') }}" alt=""></a>
                        <div class="single-blog-home-meta">
                            <span class="post-date"><i class="lnr lnr-calendar-full"></i> 15 Dec</span>
                            <span class="post-user"><i class="lnr lnr-user"></i> Admin</span>
                            <span class="post-comment"><i class="lnr lnr-bubble"></i> 5 comments</span>
                        </div>
                    </div>
                    <a href="#"><h5>Digital Bariatric Surgery</h5></a>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis eges vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    <a href="#" class="blog-home-rmbtn">Continue <i class="icofont icofont-long-arrow-right"></i></a>	
                </div>
            </div>
            <!-- end single blog -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-blog-home">
                    <div class="single-blog-home-img">
                        <a href="#"><img class="img-fluid" src="{{ asset('img/fanpageImage/blog/3.jpg') }}" alt=""></a>
                        <div class="single-blog-home-meta">
                            <span class="post-date"><i class="lnr lnr-calendar-full"></i> 16 Dec</span>
                            <span class="post-user"><i class="lnr lnr-user"></i> Jone</span>
                            <span class="post-comment"><i class="lnr lnr-bubble"></i> 6 comments</span>
                        </div>
                    </div>
                    <a href="#"><h5>Obesity: A Growing Epidemic</h5></a>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis eges vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    <a href="#" class="blog-home-rmbtn">Continue <i class="icofont icofont-long-arrow-right"></i></a>	
                </div>
            </div>
            <!-- end single blog -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="single-blog-home">
                    <div class="single-blog-home-img">
                        <a href="#"><img class="img-fluid" src="{{ asset('img/fanpageImage/blog/2.jpg') }}" alt=""></a>
                        <div class="single-blog-home-meta">
                            <span class="post-date"><i class="lnr lnr-calendar-full"></i> 17 Dec</span>
                            <span class="post-user"><i class="lnr lnr-user"></i> Admin</span>
                            <span class="post-comment"><i class="lnr lnr-bubble"></i> 7 comments</span>
                        </div>
                    </div>
                    <a href="#"><h5>After Surgery Bed Rest</h5></a>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis eges vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    <a href="#" class="blog-home-rmbtn">Continue <i class="icofont icofont-long-arrow-right"></i></a>	
                </div>
            </div>
            <!-- end single blog -->
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END BLOG SERCTION -->


<!-- START CLIENT SECTION -->
<div id="client" class="client-section bg-gray">
    <div class="container">
        <div class="row">
            <div class="client-slider owl-carousel owl-theme">
                <div class="single-client">
                    <a href="#"><img class="img-fluid" src="{{ asset('img/fanpageImage/clients/1.png') }}" alt=""></a>
                </div>
                <!-- end single client -->
                <div class="single-client">
                    <a href="#"><img class="img-fluid" src="{{ asset('img/fanpageImage/clients/2.png') }}" alt=""></a>
                </div>
                <!-- end single client -->
                <div class="single-client">
                    <a href="#"><img class="img-fluid" src="{{ asset('img/fanpageImage/clients/3.png') }}" alt=""></a>
                </div>
                <!-- end single client -->
                <div class="single-client">
                    <a href="#"><img class="img-fluid" src="{{ asset('img/fanpageImage/clients/4.png') }}" alt=""></a>
                </div>
                <!-- end single client -->
                <div class="single-client">
                    <a href="#"><img class="img-fluid" src="{{ asset('img/fanpageImage/clients/1.png') }}" alt=""></a>
                </div>
                <!-- end single client -->
                <div class="single-client">
                    <a href="#"><img class="img-fluid" src="{{ asset('img/fanpageImage/clients/2.png') }}" alt=""></a>
                </div>
                <!-- end single client -->
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</div>
<!-- END CLIENT SECTION -->


<!-- START FOOTER -->
<footer>
    <!--Footer top -->
     <div class="footer-top overlay-2 section-back-image-2" data-background="{{ asset('img/fanpageImage/bg/counter-bg.jpg') }}">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>About Us</h5>
                    </div>
                    <!-- end widget title -->
                    <div class="about">
                        <p>Cleveland Hospitals is one of the most multi-specialty healthcare provider catering to both native & foreigner patients.</p>
                        <p>Manage your health the easier way with the Cleveland Hospital mobile app. Download it today! Available on.</p>
                    </div>
                    <div class="footer-logo">
                        <a href="#">
                           <img class="img-fluid" src="{{ asset('img/fanpageImage/bg/app-google.png') }}" alt="">
                        </a>
                        <a href="#">
                           <img class="img-fluid" src="{{ asset('img/fanpageImage/bg/app-apple.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <!-- End Widget -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>Our Associates</h5>
                    </div>
                    <!-- end widget title -->
                    <ul class="quick-link-list">
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Healthcare Services</a></li>
                        <li><a href="#">Cleveland Foundation</a></li>
                    </ul>
                    <div class="footer-section-title col-12 p-0 mt-4 mb-4">
                        <h5>Get Connected</h5>
                    </div>
                    <!-- end widget title -->
                    <div class="footer-social">
                        <ul>
                           <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                           <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                           <li><a href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
                           <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                        </ul>
                    </div>	
                </div>
                <!-- End Widget -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-0 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>What's new</h5>
                    </div>
                    <!-- end widget title -->
                    <div class="single-wn-slider owl-carousel owl-theme">
                        <div class="single-wn-item">
                            <p>How to Prevent Eye Injuries?</p>
                            <p>People at work are equally at risk of eye injuries as those at home. Fortunately, 90 percent of all eye injuries are preventable. Learn how to prevent eye injuries.</p>
                        </div>
                        <div class="single-wn-item">
                            <p>Need To Know About Scoliosis?</p>
                            <p>Scoliosis is a sideward bend of the spine which usually occurs in children, but can also sometimes affect adults. A normal spine is curved on the top of the shoulder.</p>
                        </div>
                    </div>
                    <a class="wn-readm" href="#">Know more</a>
                </div>
                <!-- End Widget -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>Stay With us</h5>
                    </div>
                    <!-- end widget title -->
                    <ul class="quick-link-list">
                        <li><a href="#"><i class="lnr lnr-map-marker"></i> 10004, Battery Park, New York</a></li>
                        <li><a href="#"><i class="lnr lnr-envelope "></i> info@yoursite.com</a></li>
                        <li><a href="#"><i class="lnr lnr-phone "></i> +0 123-456-7890</a></li>	
                        <li><a href="#"><i class="icofont icofont-clock-time"></i> Open: Mon to Sat: 9AM to 5PM</a></li>
                    </ul>
                    <div class="footer-section-title col-12 p-0 mt-4 mb-4">
                        <h5>Get Updated</h5>
                    </div>
                    <!-- end widget title -->
                    <div class="foo-news">
                        <form action="#" method="post">
                            <div class="row m-0">
                                <div class="form-group col-lg-10 col-md-10 col-sm-10 col-10 p-0">
                                    <input name="fnews"  type="email" class="form-control" placeholder="Your email here...">
                                </div>
                                <div class="form-group col-lg-2 col-md-2 col-sm-2 col-2 p-0">
                                    <button type="submit" class="btn fnews-btn"><i class="icofont icofont-location-arrow"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Widget -->	
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 copyright-text">
                    <p>Copyright © 2018 <a href="#"> Cleveland.</a> | All Rights Reserved</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 footer-menu">
                    <ul>
                        <li><a href="#">Make an Enquiry</a> </li>
                        <li><a href="#">Book an Appointment</a> </li>
                        <li><a href="#">Terms and Conditions</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>	
</footer>

@endsection