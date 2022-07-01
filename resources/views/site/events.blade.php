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
                <h1>Our Latest Events</h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Events</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

     <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Sidebar-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-sidebar">
                        <!-- Events Block Four -->
                        <div class="news-block style-four wow fadeInRight">
                            <div class="inner-box">
                                <div class="image-box">
                                    <span class="tag">Participants</span>
                                    <figure class="image"><a href="blog-single.html"><img src="images/resource/blog-1.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="author">
                                        <figure class="thumb"><img src="images/resource/author-thumb-1.jpg" alt=""></figure>
                                        <h5 class="name">Thomas Albart</h5>
                                    </div>
                                    <ul class="post-info">
                                        <li><span class="far fa-calendar"></span> 21/08/2021</li>
                                        <li><span class="far fa-comments"></span> 02 Comments</li>
                                    </ul>
                                    <h4><a href="blog-single.html">Chances are Good That There’s a Cloud Software as </a></h4>
                                    <div class="text">Single stroke at the present moment and yet I feel that lorem quis bibendum auctor. Elitm sed eiusmod tempor incididunt umst etsu dolore magna aliquatenim ad.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Events Block Four -->
                        <div class="news-block style-four wow fadeInRight">
                            <div class="inner-box">
                                <div class="image-box">
                                    <span class="tag">Virtual</span>
                                    <figure class="image"><a href="blog-single.html"><img src="images/resource/blog-2.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="author">
                                        <figure class="thumb"><img src="images/resource/author-thumb-2.jpg" alt=""></figure>
                                        <h5 class="name">Jamika Lora</h5>
                                    </div>
                                    <ul class="post-info">
                                        <li><span class="far fa-calendar"></span> 21/08/2021</li>
                                        <li><span class="far fa-comments"></span> 02 Comments</li>
                                    </ul>
                                    <h4><a href="blog-single.html">Chances are Good That There’s a Cloud Software as </a></h4>
                                    <div class="text">Single stroke at the present moment and yet I feel that lorem quis bibendum auctor. Elitm sed eiusmod tempor incididunt umst etsu dolore magna aliquatenim ad.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Events Block Four -->
                        <div class="news-block style-four wow fadeInRight">
                            <div class="inner-box">
                                <div class="image-box">
                                    <span class="tag">Marketing</span>
                                    <figure class="image"><a href="blog-single.html"><img src="images/resource/blog-3.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="author">
                                        <figure class="thumb"><img src="images/resource/author-thumb-3.jpg" alt=""></figure>
                                        <h5 class="name">Nicky Monitor</h5>
                                    </div>
                                    <ul class="post-info">
                                        <li><span class="far fa-calendar"></span> 21/08/2021</li>
                                        <li><span class="far fa-comments"></span> 02 Comments</li>
                                    </ul>
                                    <h4><a href="blog-single.html">We Have Top Executive and Start Up Here Event 2021</a></h4>
                                    <div class="text">Single stroke at the present moment and yet I feel that lorem quis bibendum auctor. Elitm sed eiusmod tempor incididunt umst etsu dolore magna aliquatenim ad.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Events Block Four -->
                        <div class="news-block style-four wow fadeInRight">
                            <div class="inner-box">
                                <div class="image-box">
                                    <span class="tag">Marketing</span>
                                    <figure class="image"><a href="blog-single.html"><img src="images/resource/blog-4.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="author">
                                        <figure class="thumb"><img src="images/resource/author-thumb-3.jpg" alt=""></figure>
                                        <h5 class="name">Nicky Monitor</h5>
                                    </div>
                                    <ul class="post-info">
                                        <li><span class="far fa-calendar"></span> 21/08/2021</li>
                                        <li><span class="far fa-comments"></span> 02 Comments</li>
                                    </ul>
                                    <h4><a href="blog-single.html">Why Lead Generation Is Key For Business Growth.</a></h4>
                                    <div class="text">Single stroke at the present moment and yet I feel that lorem quis bibendum auctor. Elitm sed eiusmod tempor incididunt umst etsu dolore magna aliquatenim ad.</div>
                                </div>
                            </div>
                        </div>



                        <div class="styled-pagination">
                            <ul>
                                <li class="prev-post"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next-post"><a href="#"><span class="fa fa-angle-right"></span> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar padding-left">

                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="https://themecraze.net/html/volia/contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search..." required>
                                    <button type="submit"><i class="icon flaticon-search"></i></button>
                                </div>
                            </form>
                        </div>

                        <!-- Category Widget -->
                        <div class="sidebar-widget categories">
                            <h5 class="sidebar-title">Categories</h5>
                            <div class="widget-content">
                                <!-- Blog Category -->
                                <ul class="blog-categories">
                                    <li><a href="blog-single.html">Business <span>03</span></a></li>
                                    <li><a href="blog-single.html">Conference <span>07</span></a></li>
                                    <li><a href="blog-single.html">Digital <span>06</span></a></li>
                                    <li><a href="blog-single.html">Music <span>02</span></a></li>
                                    <li><a href="blog-single.html">Startup <span>06</span></a></li>
                                    <li><a href="blog-single.html">Workshop <span>09</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Author Widget -->
                        <div class="sidebar-widget author-widget">
                            <div class="widget-content">
                                <!-- Author Block -->
                                <div class="author-block">
                                    <div class="inner-box">
                                        <figure class="author-image"><img src="images/resource/author-img.jpg" alt=""></figure>
                                        <div class="social-links">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-dribbble"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                        </div>
                                        <h5>Thomas May</h5>
                                        <p>Hear 9 inspiring talks, meet the best product people in Europe, and party together after the event!</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Gallery Widget -->
                        <div class="sidebar-widget gallery-widget">
                            <h5 class="sidebar-title">Instagram</h5>
                            <div class="widget-content">
                               <div class="widget-content">
                                    <div class="outer clearfix">
                                        <figure class="image">
                                            <a href="images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-2-1.jpg" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="images/gallery/2.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-2-2.jpg" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="images/gallery/3.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-2-3.jpg" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="images/gallery/4.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-2-4.jpg" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="images/gallery/5.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-2-5.jpg" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-2-6.jpg" alt=""></a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <!-- Post Widget -->
                        <div class="sidebar-widget popular-posts">
                            <h5 class="sidebar-title">Recent Posts</h5>
                            <div class="widget-content">

                                <article class="post">
                                    <div class="post-inner">
                                        <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></figure>
                                        <div class="post-info"><i class="fa fa-calendar-alt"></i> 21/08/2021</div>
                                        <h6 class="text"><a href="blog-single.html">Chances are Good That There’s a Cloud Software</a></h6>
                                    </div>
                                </article>

                                <article class="post">
                                    <div class="post-inner">
                                        <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></figure>
                                        <div class="post-info"><i class="fa fa-calendar-alt"></i> 21/08/2021</div>
                                        <h6 class="text"><a href="blog-single.html">We Have Top Executive and Start Up Here Event 2021</a></h6>
                                    </div>
                                </article>

                                <article class="post">
                                    <div class="post-inner">
                                        <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a></figure>
                                        <div class="post-info"><i class="fa fa-calendar-alt"></i> 21/08/2021</div>
                                        <h6><a href="blog-single.html">Why Lead Generation is Key For Business Growth.</a></h6>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <!-- Tags Widget -->
                        <div class="sidebar-widget popular-tags">
                            <h5 class="sidebar-title">Tags</h5>
                            <div class="widget-content">
                                <a href="#">Business</a>
                                <a href="#">Conference</a>
                                <a href="#">Speaker</a>
                                <a href="#">Digital</a>
                                <a href="#">Development</a>
                                <a href="#">Venue</a>
                                <a href="#">Tech</a>
                                <a href="#">Workshop</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->

@endsection
