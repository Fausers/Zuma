@extends('layouts.zuma')

@section('content')
    <!-- Main Header-->

    @include('includes.header2')

    <!--End Main Header -->
    @include('includes.appointment')

    <!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/11.jpg);">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
                <h1>About Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Section Two -->
    <section class="about-section-two">
        <div class="anim-icons">
            <span class="icon icon-circle-3"></span>
            <span class="icon icon-circle-4"></span>
        </div>

        <div class="auto-container">
            <div class="row">
                 <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Get the latest info about</span>
                            <h2>Conference For Solving <br>Problems For Your Business</h2>
                            <span class="divider"></span>
                            <div class="text">Influential media, entertainment & technology show inspirational speakers including game changing not just a large-scale conference, but a large educational hub on digital technologies for business, where people communicate, get inspired and find ready-made.</div>
                        </div>
                    </div>
                </div>

                <!-- Date Column -->
                <div class="date-column col-lg-4 col-md-12 col-sm-12">
                    <div class="date-box-outer">
                        <!-- Date Box Two / Yellow  -->
                        <div class="date-box-one bg_yellow order-2">
                            <span class="day">18</span>
                            <span class="month">September</span>
                            <span class="title">Conferance Day Now </span>
                        </div>

                        <!-- Date Box One / Blue  -->
                        <div class="date-box-one">
                            <span class="day">17</span>
                            <span class="month">September</span>
                            <span class="title">Exhibition and Side Events</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fact Counter Two -->
            <div class="fact-counter-two">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="count-box">
                                <span class="count-text" data-speed="3000" data-stop="54">0</span>
                                <span class="counter-title">Speakers</span>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12" data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="count-box">
                                <span class="count-text" data-speed="3000" data-stop="600">0</span>
                                <span class="counter-title">Tickets</span>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="600ms">
                        <div class="inner-box">
                            <div class="count-box">
                                <span class="count-text" data-speed="3000" data-stop="18">0</span>
                                <span class="counter-title">Sponsors</span>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="900ms">
                        <div class="inner-box">
                            <div class="count-box">
                                <span class="count-text" data-speed="3000" data-stop="35">0</span>
                                <span class="counter-title">Sessions</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Box Outer -->
            <div class="video-box-outer">
                <!-- Video Box -->
                <div class="video-box-one order-2">
                    <figure class="image"><img src="images/resource/image-1.jpg" alt=""></figure>
                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-btn wow fadeIn" data-wow-delay="500ms"><i class="icon flaticon-play-button-1"></i></a>
                </div>

                <!-- Info Box -->
                <div class="info-box-one">
                    <div class="inner-box">
                        <h4>Mind Blowing Was Last Year 2020</h4>
                        <p>We have dedicated tracks for every industry Whether you want to hire tech’s top talent meet with the policymakers.</p>
                        <a href="buy-ticket.html" class="theme-btn btn-style-two"><span class="btn-title">Book Ticket</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section Two -->

    <!-- Fun Fact Section -->
    <section class="fun-fact-section">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow zoomIn">
                        <div class="inner-box">
                            <div class="count-box">
                                <span class="icon bg-1"></span>
                                <span class="count-text" data-speed="3000" data-stop="94">0</span>
                            </div>
                            <span class="counter-title">Meeting Tickets Affirmed </span>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="count-box">
                                <span class="icon bg-2"></span>
                                <span class="count-text" data-speed="3000" data-stop="28">0</span>
                            </div>
                            <span class="counter-title">Universally Capable Speakers </span>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="600ms">
                        <div class="inner-box">
                            <div class="count-box">
                                <span class="icon bg-3"></span>
                                <span class="count-text" data-speed="3000" data-stop="35">0</span>
                            </div>
                            <span class="counter-title">Food Espresso and Studio Breaks </span>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="900ms">
                        <div class="inner-box">
                            <div class="count-box">
                                <span class="icon bg-4"></span>
                                <span class="count-text" data-speed="3000" data-stop="65">0</span>
                            </div>
                            <span class="counter-title">Supporters Prepared To Take an interest</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Fun Fact Section -->

    <!-- Feature Section Three-->
    <section class="feature-section-three">
        <div class="auto-container">
            <div class="row">
                <!--Feature Block-->
                <div class="feature-block-five col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon flaticon-certificate-1"></i></div>
                        <h4>Confirm Speakers</h4>
                        <p>Dolor sit amet consectetur elit sed eiusmod tempor in idunt labore cdet dolore magna aliqua.</p>
                        <a href="schedule-detail.html" class="theme-btn btn-style-one"><span class="btn-title">More Detail <i class="fa fa-angle-double-right"></i></span></a>
                    </div>
                </div>

                <!--Feature Block-->
                <div class="feature-block-five col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon flaticon-idea"></i></div>
                        <h4>Best Digital Ideas</h4>
                        <p>Dolor sit amet consectetur elit sed eiusmod tempor in idunt labore cdet dolore magna aliqua.</p>
                        <a href="schedule-detail.html" class="theme-btn btn-style-one"><span class="btn-title">More Detail <i class="fa fa-angle-double-right"></i></span></a>
                    </div>
                </div>

                <!--Feature Block-->
                <div class="feature-block-five col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon flaticon-meeting"></i></div>
                        <h4>Networking People</h4>
                        <p>Dolor sit amet consectetur elit sed eiusmod tempor in idunt labore cdet dolore magna aliqua.</p>
                        <a href="schedule-detail.html" class="theme-btn btn-style-one"><span class="btn-title">More Detail <i class="fa fa-angle-double-right"></i></span></a>
                    </div>
                </div>

                <!--Feature Block-->
                <div class="feature-block-five col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon flaticon-inspiration"></i></div>
                        <h4>Inspiring Keynotes</h4>
                        <p>Dolor sit amet consectetur elit sed eiusmod tempor in idunt labore cdet dolore magna aliqua.</p>
                        <a href="schedule-detail.html" class="theme-btn btn-style-one"><span class="btn-title">More Detail <i class="fa fa-angle-double-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature Section -->

    <section class="testimonial-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Testimonial</span>
                <h2>Why Our Customer Love Volia</h2>
                <span class="divider"></span>
                <div class="text">Fixomiz has 18+ years of experience with providing wide <br>area of specialty services works listed below</div>
            </div>

            <div class="outer-box">
                <div class="testimonial-carousel owl-carousel owl-theme disable-nav">
                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text-box">
                                <p>Lorem ipsum dolor sit amet consectur adipisicing elit eiusmod tempor incididunt ut labore dolore magna.enim minim veniam.quis nostrud exercitation.</p>
                            </div>
                            <div class="info-box">
                                <div class="thumb"><img src="images/resource/testi-thumb-1.jpg" alt=""></div>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <h5 class="name">Monika Vance</h5>
                                <span class="designation">Development Expert</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text-box">
                                <p>Lorem ipsum dolor sit amet consectur adipisicing elit eiusmod tempor incididunt ut labore dolore magna.enim minim veniam.quis nostrud exercitation.</p>
                            </div>
                            <div class="info-box">
                                <div class="thumb"><img src="images/resource/testi-thumb-2.jpg" alt=""></div>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <h5 class="name">Thomas Jakson</h5>
                                <span class="designation">Development Expert</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text-box">
                                <p>Lorem ipsum dolor sit amet consectur adipisicing elit eiusmod tempor incididunt ut labore dolore magna.enim minim veniam.quis nostrud exercitation.</p>
                            </div>
                            <div class="info-box">
                                <div class="thumb"><img src="images/resource/testi-thumb-3.jpg" alt=""></div>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <h5 class="name">Thomas Jakson</h5>
                                <span class="designation">Development Expert</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text-box">
                                <p>Lorem ipsum dolor sit amet consectur adipisicing elit eiusmod tempor incididunt ut labore dolore magna.enim minim veniam.quis nostrud exercitation.</p>
                            </div>
                            <div class="info-box">
                                <div class="thumb"><img src="images/resource/testi-thumb-3.jpg" alt=""></div>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <h5 class="name">Thomas Jakson</h5>
                                <span class="designation">Development Expert</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Testimonial Section -->

    <!-- Call to Action Two -->
    <section class="call-to-action-two" style="background-image: url(images/background/5.png);">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 offset-lg-6">
                    <div class="content-box wow fadeInUp">
                        <span class="sub-title">GET EXPERIENCE</span>
                        <h2>Shift Your Perspective on Digital Business</h2>
                        <span class="text">How you transform your business as technology, consumer, habits industry dynamic s change? Find out from those leading the charge.</span>
                        <a href="buy-ticket.html" class="theme-btn btn-style-two"><span class="btn-title">Buy Ticket</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call to Action Two -->

    <!--Clients Section-->
    <section class="clients-section alternate2">
        <div class="auto-container">
            <div class="row">
                <!-- Title Column -->
                <div class="title-column col-xl-3 col-lg-4 col-md-12">
                    <div class="sec-title">
                        <span class="sub-title">Clients</span>
                        <h2>Our Official <br>Sponsors</h2>
                        <div class="divider"></div>
                        <div class="text">We have dedicated tracks for every industry Whether you want to hire tech’s top talent.</div>
                        <a href="buy-ticket.html" class="theme-btn btn-style-one mt-4"><span class="btn-title">Buy Ticket</span></a>
                    </div>
                </div>

                <!-- Title Column -->
                <div class="title-column col-xl-9 col-lg-8 col-md-12">
                    <div class="sponsors-outer">
                        <div class="row">
                            <!-- Client Block -->
                            <div class="client-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                                <figure class="image-box"><a href="#"><img src="images/clients/1.jpg" alt=""></a></figure>
                            </div>

                            <!-- Client Block -->
                            <div class="client-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="300ms">
                                <figure class="image-box"><a href="#"><img src="images/clients/2.jpg" alt=""></a></figure>
                            </div>

                            <!-- Client Block -->
                            <div class="client-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="600ms">
                                <figure class="image-box"><a href="#"><img src="images/clients/3.jpg" alt=""></a></figure>
                            </div>

                            <!-- Client Block -->
                            <div class="client-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="900ms">
                                <figure class="image-box"><a href="#"><img src="images/clients/4.jpg" alt=""></a></figure>
                            </div>

                            <!-- Client Block -->
                            <div class="client-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="1200ms">
                                <figure class="image-box"><a href="#"><img src="images/clients/5.jpg" alt=""></a></figure>
                            </div>

                            <!-- Client Block -->
                            <div class="client-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="1500ms">
                                <figure class="image-box"><a href="#"><img src="images/clients/6.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Clients Section-->


@endsection
