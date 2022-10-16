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
                          
                        </ul>
                    </div>
                </div> 
                <!-- end col -->
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="info-menu">
                        <ul>
                            <li><a href="{{ route('loguin') }}">Login </a></li>
                            <li><a href="#">Register </a></li>
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
                        <a href="#">
                           <img class="img-fluid" src="{{ asset('img/icare_logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="header-info-box">
                        <div class="header-info-icon"></div>
                        <p>Customer support & sales</p>
                        <h6>123-456-0975</h6>
                    </div>
                    <div class="header-info-box">
                        <div class="header-info-icon"></span></div>
                        <p>Opening hours</p>
                        <h6>Mon - Sun : 09:00 - 18:00</h6>
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
                                <li class="active dropdown"><a href="#  " class="nav-link">Home</a></li>
                               
                              
                             
                               	
                            </ul>
                        </nav>	
                    </div>
                    <div class="col-lg-3 col-md-12 d-lg-block d-md-none d-none">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <ul class="navbar-nav">
                                <li class="active dropdown quick-search"><a  class="nav-link">I want To</a>
                                   
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
                                <li><a href="#">Home</a>
                                    <ul>
                                      
                                    </ul>
                                </li>
                                
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
                                <h2>controls whether patients receive </h2>
                                <h2>the necessary medical attention from the EPS</h2>
                                <span> CARING YOUR REPORTS</span>
                                <a href="#" class="home-btn-1">GET APPOINTMENT</a>
                                <a href="#" class="home-btn-2">LAB REPORTS</a>
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
                                <span> WE ARE CARING</span>
                                <a href="#" class="home-btn-1">OUR SERVICES</a>
                                <a href="#" class="home-btn-2">CONTACT US</a>
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

<!-- END ABOUT SECTION -->


<!-- START ABOUT SERVICE SECTION -->

<!-- END ABOUT SERVICE SECTION -->


<!-- START PORTFOLIO SECTION -->

<!-- END PORTFOLIO SECTION -->


<!-- START COUNTER SECTION -->

<!-- END COUNTER SECTION -->


<!-- START SERVICE SECTION -->
<section id="services" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>Our<span> Services</span></h3>
                    <span class="line"></span>
                    <p>The app provides solutions to patient problems through a Botcall in which the patient interacts with it. The data will be analyzed by making their respective report of each EPS. This will be done through the use of statistics and number of patients affected with respect to time.</p>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row mt-4">
            <div class="service-slider owl-carousel owl-theme">
                <div class="single-service-item">
                    <div class="single-service">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/service/1.jpg') }}" alt="" />
                        <h5>National Health Superintendence</h5>
                        <p>Monthly Fee per report sent.</p>
                        <p>Eps monitoring fee.</p>
                        <a class="serv-rmbtn" href="#">Read More</a>
                    </div>	
                </div>
                <!-- end single service -->
                <div class="single-service-item">
                    <div class="single-service">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/service/2.jpg') }}" alt="" />
                        <h5>Free Plan</h5>
                        <p>Information about your health problem.</p>
                        <a class="serv-rmbtn" href="#">Read More</a>
                    </div>	
                </div>
                <!-- end single service -->
                <div class="single-service-item">
                    <div class="single-service">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/service/3.jpg') }}" alt="" />
                        <h5>Premium Plan</h5>
                        <p>	Information about of the Eps.</p>
                            <p>Monitoring of your problem.</p>
                            <p>Information  and recommendations.</p>
                        <a class="serv-rmbtn" href="#">Read More</a>
                    </div>	
                </div>
                <!-- end single service -->
                <div class="single-service-item">
                    <div class="single-service">
                        <img class="img-fluid" src="{{ asset('img/fanpageImage/service/4.jpg') }}" alt="" />
                        <h5>Reports</h5>
                        <p>analyzed by making their respective report of each EPS.</p>
                        <a class="serv-rmbtn" href="#">Read More</a>
                    </div>	
                </div>
                <!-- end single service -->
                
                <!-- end single service -->		
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END SERVICE SECTION -->


<!-- START DOCTOR SECTION -->

<!-- END DOCTOR SECTION -->


<!-- START APPOINTMENT SECTION -->



<!-- START CALL TO ACTION -->
<section id="calltoaction" class="section-padding overlay section-back-image" data-background="{{ asset('img/fanpageImage/bg/promo-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="calltoaction-wrap">
                    <h4>In addition, we will monitor the patients after 30 days to see if the patients’ problems  <span>were resolved</span></h4>
                   
                </div>
            </div>	
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END CALL TO ACTION  -->


<!-- START TESTIMONIAL & FAQ -->

<!-- END TESTIMONIAL & FAQ -->


<!-- START BLOG SERCTION -->

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
                        <li><a href="#"> 10004, Battery Park, New York</a></li>
                        <li><a href="#"></i> info@yoursite.com</a></li>
                        <li><a href="#"> +0 123-456-7890</a></li>	
                        <li><a href="#"></i> Open: Mon to Sat: 9AM to 5PM</a></li>
                    </ul>
                    
                    <div class="foo-news">
                        
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