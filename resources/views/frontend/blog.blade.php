@extends('layout.main')
@section('title', 'Blog')
@section('content')
@section('breadcrumbs', 'Blog')
    <!-- breadcrumb -->
        @include('layout.breadcrumb')
    <!-- end breadcrumb -->

    <!-- Blog Grid -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="wptb-blog-grid1 style2 active highlight wow fadeInLeft">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--image">
                                        <a href="blog-details.html" class="wptb-item-link"><img src="/assets/img/blog/5.jpg" alt="img"></a>
                                    </div>
                                    <div class="wptb-item--holder">
                                        <div class="wptb-item--meta">
                                            <div class="wptb-item--date">October 19, 2023</div>
                                            <div class="wptb-item-comment"><a href="#comments">0</a></div>
                                        </div>
                                        
                                        <h5 class="wptb-item--title"><a href="blog-details.html">We help Making your dream
                                            into Reality when you want to
                                            study abroad</a></h5>
                                        <p class="wptb-item--description">  Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly</p>
                                        
                                        <div class="wptb-item--button"> 
                                            <a class="btn--readmore" href="blog-details.html"> 
                                                <span class="btn-readmore--text"> Read More </span> 
                                                <span class="btn-readmore--icon"> <i class="bi bi-arrow-right"></i> </span> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Sidebar  -->
                <div class="col-lg-4 col-md-5 mt-5 mt-md-0 ps-md-5">

                    <div class="sidebar">
                        
                        {{-- <div class="widget widget_block widget_search">
                            <form method="get" class="wp-block-search">
                                <div class="wp-block-search__inside-wrapper ">
                                    <input type="search" class="wp-block-search__input" name="search" value="" placeholder="Search" required="">
                                    <button type="submit" class="wp-block-search__button"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div> --}}
                        <!-- end widget -->

                        <div class="widget widget_block">
                            <div class="wp-block-group__inner-container">
                                <h2 class="widget-title">Recent Posts</h2>
                                <ul class="wp-block-latest-posts__list wp-block-latest-posts">
                                    <li>
                                        <div class="latest-posts-image">
                                            <img src="/assets/img/blog/8.jpg" alt="img">
                                        </div>
                                        <div class="latest-posts-content">
                                            <h5><a href="blog-details.html">How consultation in business is affecting new ventures</a></h5>
                                            <h6>January 11, 2023</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="latest-posts-image">
                                            <img src="/assets/img/blog/9.jpg" alt="img">
                                        </div>
                                        <div class="latest-posts-content">
                                            <h5><a href="blog-details.html">Challenges of consultation new Business Firms</a></h5>
                                            <h6>January 01, 2023</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="latest-posts-image">
                                            <img src="/assets/img/blog/10.jpg" alt="img">
                                        </div>
                                        <div class="latest-posts-content">
                                            <h5><a href="blog-details.html">Changes in recent consultancy styles now a days</a></h5>
                                            <h6>January 21, 2023</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end widget -->

                        <div class="widget widget_block">
                            <div class="wp-block-group__inner-container">
                                <h2 class="widget-title">Categories</h2>
                                <ul class="wp-block-categories-list wp-block-categories">
                                    <li class="cat-item"><a href="#">Consultaion</a> (10)</li>
                                    <li class="cat-item"><a href="#">Business</a> (12)</li>
                                    <li class="cat-item"><a href="#">Marketing</a> (08)</li>
                                    <li class="cat-item"><a href="#">Finance</a> (15)</li>
                                    <li class="cat-item"><a href="#">Campaign</a> (21)</li>
                                </ul>
                            </div>
                        </div>
                        <!-- end widget -->

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection