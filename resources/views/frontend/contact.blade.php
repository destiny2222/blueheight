@extends('layout.main')
@section('title', 'Contact')
@section('content')
@section('breadcrumbs', 'Contact')
    <!-- breadcrumb -->
        @include('layout.breadcrumb')
    <!-- end breadcrumb -->

    <!-- Contact Us -->
    <section class="wptb-contact-page-wrapper">
        <div class="container">
            <div class="wptb-contact-infos">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="/assets/img/more/4.jpg" alt="img">
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <img src="/assets/img/more/mail.png" alt="icon">
                                    </div>
                                    <h4 class="wptb-item--title">Send Us Mail</h4>
                                    <p class="wptb-item--description"> 
                                        <a href="mailto:support@blueheightconsult.com">support@blueheightconsult.com</a> <br>
                                        <a href="mailto:info@blueheightconsult.com">info@blueheightconsult.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="/assets/img/more/5.jpg" alt="img">
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <img src="/assets/img/more/phone.png" alt="icon">
                                    </div>
                                    <h4 class="wptb-item--title">Call Us Anytime</h4>
                                    <p class="wptb-item--description"> 
                                        <a href="tel:+2349138640554">+2349138640554</a> <br>
                                        <a href="tel:+2349138640554">+2349138640554</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="/assets/img/more/6.jpg" alt="img">
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <img src="/assets/img/more/map-pin.png" alt="icon">
                                    </div>
                                    <h4 class="wptb-item--title">Visit Our Office</h4>
                                    <p class="wptb-item--description"> 
                                        12, Boundary Road, off Airport Road, GRA, Benin City, Edo State.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="wptb-contact-form-one">
                <div class="wptb-form--wrapper">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1">
                            <form class="wptb-form" action="/message" method="post">
                                @csrf
                                <div class="wptb-form--inner">
                                    <div class="wptb-heading">
                                        <div class="wptb-item--inner text-center">
                                            <h2 class="wptb-item--title"> <span>Drop Us A line</span></h2>
                                            <p class="wptb-item--description"> Blue Height Consult Visa Agency will help you to solve your problem</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Name*" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="number" name="phone" class="form-control" placeholder="Phone No">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12 mb-4">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="Text"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12">
                                            <div class="wptb-item--button text-center">
                                                <input class="btn" type="submit" value="Contact Us">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>					
        </div>
    </section>
@endsection    