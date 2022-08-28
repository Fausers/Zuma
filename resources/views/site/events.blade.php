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
                        @foreach($events as $event)
                        <!-- Events Block Four -->
                        <div class="news-block style-four wow fadeInRight">
                            <div class="inner-box">
                                <div class="image-box">
{{--                                    <span class="tag">Participants</span>--}}
                                    <figure class="image"><a href="blog-single.html"><img src="images/resource/blog-1.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="author">
                                        <figure class="thumb"><img src="{{$event->host_image}}" alt=""></figure>
                                        <h5 class="name">{{$event->host}}</h5>
                                    </div>
                                    <ul class="post-info">
                                        <li><span class="far fa-calendar"></span> {{date('d M Y ',strtotime($event->event_date))}}</li>
{{--                                        <li><span class="far fa-comments"></span> 02 Comments</li>--}}
                                    </ul>
                                    <h4><a href="blog-single.html">{{$event->title}}</a></h4>
                                    <div class="text">
                                        {{$event->short_desc}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


{{--                        <div class="styled-pagination">--}}
{{--                            <ul>--}}
{{--                                <li class="prev-post"><a href="#"><span class="fa fa-angle-left"></span></a></li>--}}
{{--                                <li><a href="#">1</a></li>--}}
{{--                                <li class="active"><a href="#">2</a></li>--}}
{{--                                <li><a href="#">3</a></li>--}}
{{--                                <li class="next-post"><a href="#"><span class="fa fa-angle-right"></span> </a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
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
                            <h5 class="sidebar-title">Recent Events</h5>
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

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection
