<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from live.hasthemes.com/html/3/megan-preview/megan/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2020 15:04:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend/assets/img/favicon.png')}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/bootstrap.min.css')}}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/font-awesome.min.css')}}">

    <!-- Ionicons CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/ionicons.min.css')}}">

    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/flaticon.min.css')}}">

    <!-- Icomoon CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/icomoon.min.css')}}">

    <!-- Tractor icon CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/tractor-icon.min.css')}}">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/swiper.min.css')}}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/animate.min.css')}}">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/lightgallery.min.css')}}">



    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">


    <!-- Revolution Slider CSS -->
    <link href="{{asset('frontend/assets/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/revolution/css/navigation.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/revolution/custom-setting.css')}}" rel="stylesheet">


</head>

<body>
    <!--====================  preloader ====================-->
    {{-- <div class="preloader-activate preloader-active">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <img src="{{asset('frontend/assets/img/preloader.gif')}}" alt="">
            </div>
        </div>
    </div> --}}
    <!--====================  End of preloader  ====================-->
    <!--====================  header area ====================-->
    
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
    <div class="header-area header-sticky header-sticky--default">
        <div class="header-area__desktop header-area__desktop--default">
            <!--=======  header top bar  =======-->
            <div class="header-top-bar header-top-bar--white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <!-- top bar left -->
                            <div class="top-bar-left-wrapper">
                                <ul class="topbar-menu">
                                    @if(Sentinel::check())
                                    <li><a href="{{url('logout')}}">logout</a></li>
                                    @else
                                    <li><a href="{{url('login')}}">Login</a></li>
                                    <li><a href="{{url('register')}}">Sign Up</a></li>
                                    @endif
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <!-- top bar right -->
                            <div class="top-bar-right-wrapper">
                                <div class="social-links social-links--white-topbar d-inline-block">
                                    <ul>
                                        <li><a href="http://facebook.com/"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="http://twitter.com/"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="http://vimeo.com/"><i class="ion-social-vimeo"></i></a></li>
                                        <li><a href="http://linkedin.com/"><i class="ion-social-linkedin"></i></a></li>
                                        <li><a href="http://skype.com/"><i class="ion-social-skype"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="ht-btn ht-btn--default d-inline-block">GET A QUOTE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======  End of header top bar  =======-->
            <!--=======  header info area  =======-->
            <div class="header-info-area border-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="header-info-wrapper align-items-center">
                                <!-- logo -->
                                <div class="logo">
                                    <a href="/">
                                        <strong style="font-size: 28px;font-family: monospace;"> 
                                            <span class="s" style="color: #ec24f9;">
                                                Student
                                            </span>  
                                            <span class="m" style="color: #ec0f38;">
                                                Management
                                            </span> 
                                        </strong>
                                        
                                        {{-- <img src="assets/img/logo/logo-dark.png" class="img-fluid" alt=""> --}}
                                    </a>
                                </div>

                                <!-- header contact info -->
                                <div class="header-contact-info">
                                    <div class="swiper-container header-info-slider">
                                        <div class="swiper-wrapper header-info-slider-wrapper">
                                            <div class="swiper-slide">
                                                <div class="header-info-single-item">
                                                    <div class="header-info-single-item__icon">
                                                        <i class="ion-ios-location-outline"></i>
                                                    </div>
                                                    <div class="header-info-single-item__content">
                                                        <h6 class="header-info-single-item__title">183 Donato Parkways</h6>
                                                        <p class="header-info-single-item__subtitle">CA, United State</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="header-info-single-item">
                                                    <div class="header-info-single-item__icon">
                                                        <i class="ion-ios-chatboxes-outline"></i>
                                                    </div>
                                                    <div class="header-info-single-item__content">
                                                        <h6 class="header-info-single-item__title">+122 123 4567</h6>
                                                        <p class="header-info-single-item__subtitle">Sales Department</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="header-info-single-item">
                                                    <div class="header-info-single-item__icon">
                                                        <i class="ion-ios-telephone-outline"></i>
                                                    </div>
                                                    <div class="header-info-single-item__content">
                                                        <h6 class="header-info-single-item__title">(+00)888.666.88</h6>
                                                        <p class="header-info-single-item__subtitle">Free Call</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="header-info-single-item">
                                                    <div class="header-info-single-item__icon">
                                                        <i class="ion-ios-clock-outline"></i>
                                                    </div>
                                                    <div class="header-info-single-item__content">
                                                        <h6 class="header-info-single-item__title">08:00 AM - 06:00 PM</h6>
                                                        <p class="header-info-single-item__subtitle">Monday - Friday</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- mobile menu -->
                                <div class="mobile-navigation-icon" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======  End of header info area =======-->
            <!--=======  header navigation area  =======-->
            <div class="header-navigation-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- header navigation -->
                            <div class="header-navigation header-navigation--header-default position-relative">
                                <div class="header-navigation__nav position-static">
                                    <nav>
                                        <ul>
                                            
                                            <li class="">
                                                <a href="/">HOME</a>
                                                
                                            </li>
                                            <li class="">
                                                <a href="{{url('about')}}">ABOUT</a>
                                                
                                            </li>
                                            <li class="">
                                                <a href="#">INDUSTRIES</a>
                                                
                                            </li>
                                            <li class="">
                                                <a href="#">CASE STUDIES</a>
                                                
                                            </li>
                                            <li class=" active">
                                                <a href="{{url('blog-post')}}">BLOG</a>
                                                
                                            </li>
                                            <li class="">
                                                <a href="#">SHOP</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                                <div class="header-navigation__icon">
                                    <div class="header-navigation__icon__search">
                                        <a href="javascript:void(0)" id="search-overlay-trigger"> <i
                                            class="ion-ios-search-strong"></i> </a>
                                    </div>
                                    <div class="header-navigation__icon__cart" data-count="3">
                                        <a href="javascript:void(0)"> <i class="ion-bag" id="minicart-trigger"></i> </a>

                                        <!-- minicart -->
                                        <div class="minicart-box" id="minicart-box">
                                            <div class="minicart-product-wrapper">
                                                <div class="single-minicart-product">
                                                    <div class="single-minicart-product__image">
                                                        <a href="shop-product.html">
                                                            <img src="assets/img/products/1-mini.jpg" class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="single-minicart-product__content">
                                                        <a href="#" class="close-icon"><i class="ion-android-close"></i></a>
                                                        <a href="shop-product.html" class="title">Fiberglass Stepladder</a>
                                                        <p class="quantity">1 x <span class="price">$ 80.00</span></p>
                                                    </div>
                                                </div>
                                                <div class="single-minicart-product">
                                                    <div class="single-minicart-product__image">
                                                        <a href="shop-product.html">
                                                            <img src="assets/img/products/2-mini.jpg" class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="single-minicart-product__content">
                                                        <a href="#" class="close-icon"><i class="ion-android-close"></i></a>
                                                        <a href="shop-product.html" class="title">Lithium Ion XR Brushless
                                                            Blower</a>
                                                        <p class="quantity">1 x <span class="price">$ 90.00</span></p>
                                                    </div>
                                                </div>
                                                <div class="single-minicart-product">
                                                    <div class="single-minicart-product__image">
                                                        <a href="shop-product.html">
                                                            <img src="assets/img/products/3-mini.jpg" class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="single-minicart-product__content">
                                                        <a href="#" class="close-icon"><i class="ion-android-close"></i></a>
                                                        <a href="shop-product.html" class="title">Small Trigger Clamp</a>
                                                        <p class="quantity">1 x <span class="price">$ 70.00</span></p>
                                                    </div>
                                                </div>


                                            </div>
                                            <p class="minicart-calculations">Total: <span class="value">$1100.00</span></p>
                                            <div class="minicart-buttons">
                                                <a href="shop-cart.html" class="minicart-link minicart-link--cart">VIEW
                                                    CART</a>
                                                <a href="shop-checkout.html" class="minicart-link minicart-link--checkout">CHECKOUT</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======  End of header navigation area =======-->
        </div>
    </div>
    <!--====================  End of header area  ====================-->
