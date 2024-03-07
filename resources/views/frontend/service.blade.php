@extends('layout.main')
@section('title', 'Service')
@section('content')
@section('breadcrumbs', 'Our Services')
    <!-- breadcrumb -->
        @include('layout.breadcrumb')
    <!-- end breadcrumb -->

     <!-- Our Services -->
     <section>
        <div class="container">
            <div class="wptb-heading">
                <div class="wptb-item--inner text-center">
                    <h6 class="wptb-item--subtitle">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z" fill="#00C6F7"/>
                            </svg>
                        </span>
                        Our Services
                    </h6>
                    <h1 class="wptb-item--title"> <span>Choose Your Services</span></h1>
                </div>
            </div>

            <div class="wptb-service--inner">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="#" class="wptb-item-link"><img src="/assets/img/services/1.jpg" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path> </svg>
                                        <img src="/assets/img/services/icon-1.png" alt="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path> </svg>
                                    </div>
                                    <h4 class="wptb-item--title"><a href="javascript:void()">Student advisory </a></h4>
                                    <div class="wptb-line-paper"></div>
                                    <p class="wptb-item-service-description"> 
                                        At Blue Height Travel, we understand the unique needs and preferences of students embarking on educational journeys. Our student advisory services provide comprehensive guidance and support to help students plan their trips effectively. 
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-image-box1 active highlight wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="#" class="wptb-item-link"><img src="/assets/img/services/2.jpg" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path> </svg>
                                        <img src="/assets/img/services/icon-2.png" alt="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path> </svg>
                                    </div>
                                    <h4 class="wptb-item--title"><a href="javascript:void()">Tourist visa Application</a></h4>
                                    <div class="wptb-line-paper"></div>
                                    <p class="wptb-item-service-description"> 
                                        We specializes in assisting travelers with the tourist visa application process, ensuring a smooth and hassle-free experience. We also provide personalized support tailored to your destination's specific visa requirements, offering expert advice and timely assistance to maximize your chances of approval. 
                                    </p>
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="#" class="wptb-item-link"><img src="/assets/img/services/3.jpg" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path> </svg>
                                        <img src="/assets/img/services/icon-3.png" alt="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path> </svg>
                                    </div>
                                    <h4 class="wptb-item--title"><a href="javascript:void()">Visa Processing</a></h4>
                                    <div class="wptb-line-paper"></div>
                                    <p class="wptb-item-service-description"> 
                                        We offer efficient and reliable visa processing services to streamline your travel preparations. We ensure accuracy and compliance with all visa requirements, saving you time and eliminating the stress of navigating complex procedures.
                                    </p>
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="#" class="wptb-item-link"><img src="/assets/img/services/10.jpg" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path> </svg>
                                        <img src="/assets/img/services/icon-2.png" alt="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path> </svg>
                                    </div>
                                    <h4 class="wptb-item--title"><a href="javascript:void()">Pre departure briefing </a></h4>
                                    <div class="wptb-line-paper"></div>
                                    <p class="wptb-item-service-description"> 
                                        At Blue Height Travel, we understand the importance of thorough preparation for your journey. That's why we offer comprehensive pre-departure briefings to ensure you're fully informed and ready for your adventure. 
                                    </p>
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-image-box1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="#" class="wptb-item-link"><img src="/assets/img/services/12.jpg" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path> </svg>
                                        <img src="/assets/img/services/icon-3.png" alt="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"> <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path> </svg>
                                    </div>
                                    <h4 class="wptb-item--title"><a href="javascript:void()">Accommodation services</a></h4>
                                    <div class="wptb-line-paper"></div>
                                    <p class="wptb-item-service-description">
                                        we are dedicated to providing top-notch accommodation services to ensure your travel experience is comfortable and convenient. From luxurious hotels to charming boutique guesthouses. Our expert team meticulously selects accommodations that meet our high standards of quality, cleanliness, and customer satisfaction. 
                                    </p>
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>

        </div>
    </section>
    
@endsection    