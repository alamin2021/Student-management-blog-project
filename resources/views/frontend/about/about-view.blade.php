@extends('layouts.frontend.master')
@section('title','About Us ')
@section('content')

    <!--====================  page content wrapper ====================-->
    <div class="page-content-wrapper">

        
           <!-- ====================  hero slider area ====================-->
    <div class="hero-slider-area">

        <div id="rev_slider_7_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-04" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
            <div id="rev_slider_7_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
                <ul>
                    
                    @foreach($slider as $key=>$data)
                    <!-- SLIDE  -->
                    <li data-index="rs-{{$key++}}" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{asset('images/about/'.$data->back_image)}}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('images/about/'.$data->back_image)}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption     rev_group" id="slide-19-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-28','-5','-15','-10']" data-width="['862','862','761','761']" data-height="['520','520','518','518']" data-whitespace="nowrap" data-type="group" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; min-width: 862px; max-width: 862px; max-width: 520px; max-width: 520px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption  " id="slide-19-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','top','middle']" data-voffset="['-90','-103','121','-108']" data-fontsize="['24','24','18','18']" data-lineheight="['34','34','28','28']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+700","speed":800,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 24px; line-height: 34px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:Roboto;"> {{$data->title}}</div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption  " id="slide-19-layer-2" data-x="['center','center','center','center']" data-hoffset="['37','75','75','52']" data-y="['top','top','top','top']" data-voffset="['361','383','403','325']" data-fontsize="['30','30','60','50']" data-lineheight="['40','40','30','33']" data-width="['881','881','600','400']" data-height="none" data-whitespace="['normal']" data-type="text" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":"+540","speed":800,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 80px; line-height: 94px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Roboto;">
                                {!! $data->description !!}  </div>
                            <!-- LAYER NR. 4 -->
                            <a class="tp-caption rev-btn-01 rev-btn   primary-background-color-important secondary-background-color-hover-important" href="#" target="_self" id="slide-19-layer-3" data-x="['center','center','center','center']" data-hoffset="['-90','-72','-82','-80']" data-y="['middle','middle','top','middle']" data-voffset="['130','102','371','140']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+1150","speed":800,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(34,34,34);bs:solid;bw:0 0 0 0;"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[20,20,20,20]" data-paddingright="[30,30,30,30]" data-paddingbottom="[20,20,20,20]" data-paddingleft="[30,30,30,30]" style="z-index: 8; white-space: nowrap; color: #ffffff; letter-spacing: 0.5px;text-transform:uppercase;background-color:rgb(12,149,236);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">our services </a>

                            <!-- LAYER NR. 5 -->
                            <a class="tp-caption rev-btn-01 rev-btn primary-background-color-important   primary-color-hover-important" href="#" target="_self" id="slide-19-layer-4" data-x="['center','center','center','center']" data-hoffset="['90','82','88','80']" data-y="['middle','middle','top','middle']" data-voffset="['130','102','371','140']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+1150","speed":800,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgba(34,34,34,0);bs:solid;bw:0 0 0 0;"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[20,20,20,20]" data-paddingright="[30,30,30,30]" data-paddingbottom="[20,20,20,20]" data-paddingleft="[30,30,30,30]" style="z-index: 9; white-space: nowrap; color: #ffffff; letter-spacing: 0.5px;text-transform:uppercase;background-color:rgba(255,194,70,0);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none; background-color:rgb(233, 160, 25)"><i class="ion-play primary-color" style="margin-right: 5px;"></i> how we do it </a>
                        </div>
                    </li>
                    @endforeach
                    
                    
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </div> 
    <!--====================  End of hero slider area  ====================-->  

        <!--====================  about text content ====================-->
        <div class="about-text-area section-space--inner--top--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-text-wrapper">
                            <p>Tractor Inc. was founded in 1890 in St. Rosemary, California, as a manufacturing company of chemicals and constructional materials. Over the past 55 years, we have grown from a small-sized local company into a global technological corporate.</p>
                            <p class="mb-3 mb-md-0">Tractor’s manufacturing capabilities are called upon by the U.S. Commercial Department in 1990. During the next seven years, the company had produced more than 10 million tons of constructional chemicals and materials.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-text-wrapper">
                            <p>Much of Tractor’s spectacular growth in the last 20 years resulted from the booming population and the increasing needs for a place to live of the citizens. We have the determination to assist our people with the best facilities.</p>
                            <a href="#" class="see-more-link see-more-link--dark see-more-link--dark--style2">BUTTON TEXT <i class="ion-arrow-right-c"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of about text content  ====================-->
        <!--====================  project counter area ====================-->
        <div class="project-counter-area section-space--inner--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-counter-single-content-wrapper">
                            <div class="row">
                                @foreach($project as $key => $data )
                                <div class="col-lg-3 col-sm-6">
                                    <!-- project counter single content -->
                                    <div class="project-counter-single-content project-counter-single-content--style2">
                                        <div class="project-counter-single-content__image">
                                            <img width="62px" src="{{asset('images/project/'.$data->image)}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="project-counter-single-content__content">
                                            <span class="project-counter-single-content__project-count counter">{{$data->project_count}}</span>
                                            <h5 class="project-counter-single-content__project-title">
                                                {{$data->project_title}}
                                            </h5>
                                            <p class="project-counter-single-content__subtext">{!! $data->project_description !!}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of project counter area  ====================-->

        <!--====================  progress bar area ====================-->
        @foreach($skilldetails as $value)
        <div class="progress-bar-area grey-bg position-relative">
            <div class="half-bg-image bg-img" data-bg="{{asset('images/project/'.$value->image)}}"></div>
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-6">
                        <div class="progress-bar-content section-space--inner--120">
                            <div class="career-title-area section-space--bottom--50">
                                <h2 class="title">{{$value->title}}</h2>
                                <p class="subtitle">{!! $value->description !!}</p>
                            </div>
                            @foreach($skill as $data)
                            <div class="skill-wrapper">
                                <!-- Start Skills Item #1 -->
                                <div class="progress-bar-item">
                                    <div class="progress-info">
                                        <span class="progress-info__title">{{$data->skill}}</span>
                                        <span class="progress-info__percent percent"></span>
                                    </div>

                                    <div class="progress-line">
                                        <div class="progress-line-bar" data-percent="{{$data->skill_value}}%"></div>
                                        <span class="progress-line-dot"></span>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        @endforeach
        <!--====================  End of progress bar area  ====================-->
        <!--====================  cta area ====================-->
        <div class="cta-area section-space--inner--60 default-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <!-- cta text -->
                        <h2 class="cta-text text-center text-lg-left">Looking for a reliable & stable partner?</h2>
                    </div>
                    <div class="col-lg-4 text-center text-lg-right">
                        <a href="page-contact.html" class="ht-btn ht-btn--transparent ht-btn--transparent--alt-dark">GET A QUOTE</a>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of cta area  ====================-->
        <!--====================  team member slider area ====================-->
        <div class="team-member-slider-area section-space--inner--top--100 section-space--inner--bottom--50">
            <div class="container">
                @foreach($teamdetails as $value)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="career-title-area text-center section-space--bottom--50">
                            <h2 class="title">{{$value->title}}</h2>
                            <p class="subtitle">{!! $value->description !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="row">
                    <div class="col-lg-12">
                        <div class="team-slider">
                            <div class="swiper-container team-slider__container">
                                <div class="swiper-wrapper team-slider__wrapper">

                                    @foreach ($team as $data)

                                    <div class="swiper-slide">
                                        <div class="team-slider__single">
                                            <div class="image">
                                                <img src="{{asset('images/team/'.$data->image)}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="identity-wrapper has-border-left">
                                                    <h3 class="name">{{$data->title}}</h3>
                                                    <span class="designation">{{$data->sub_title}}</span>
                                                </div>
                                                <div class="social-links social-links--white-topbar d-inline-block">
                                                    <ul>
                                                        <li><a href="{{$data->fb}}"><i class="ion-social-facebook"></i></a></li>
                                                        <li><a href="{{$data->twitter}}"><i class="ion-social-twitter"></i></a></li>
                                                        <li><a href="{{$data->linkdin}}"><i class="ion-social-linkedin"></i></a></li>
                                                        <li><a href="{{$data->skype}}"><i class="ion-social-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>
                            </div>
                            <div class="ht-swiper-button-prev ht-swiper-button-prev-14 ht-swiper-button-nav"><i class="ion-chevron-left"></i></div>
                            <div class="ht-swiper-button-next ht-swiper-button-next-14 ht-swiper-button-nav"><i class="ion-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of team member slider area  ====================-->
        <!--====================  about content row ====================-->
        <div class="about-content-row__wrapper grey-bg">
            <div class="row no-gutters align-items-center">
                @foreach($job as $data )
                <div class="col-xl-2 col-md-6 order-md-1 order-xl-1">
                    <div class="about-content-row__image bg-img" data-bg="{{asset('images/about/'.$data->image)}}"></div>
                </div>
                <div class="col-xl-4 col-md-6 order-md-2 order-xl-2">
                    <div class="about-content-row__content">
                        <h2 class="title">{{$data->title}}</h2>
                        <p class="text">{!! substr($data->description,0,300) !!}</p>
                        <a href="{{url('aboutdetails/'.$data->id)}}" class="ht-btn ht-btn--transparent ht-btn--transparent--yellow">READ MORE</a>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-xl-2 col-md-6 order-md-4 order-xl-3">
                    <div class="about-content-row__image bg-img" data-bg="assets/img/backgrounds/23.jpg"></div>
                </div>
                <div class="col-xl-4 col-md-6 order-md-3 order-xl-4">
                    <div class="about-content-row__content">
                        <h2 class="title">Let’s become a business partner</h2>
                        <p class="text">We seek for cooperation in various areas in order to achieve the purpose of diversifying and expanding our company's operating fields.</p>
                        <a href="#" class="ht-btn ht-btn--transparent ht-btn--transparent--yellow">READ MORE</a>
                    </div>
                </div> --}}
            </div>
        </div>
        <!--====================  End of about content row  ====================-->


    </div>
    <!--====================  End of page content wrapper  ====================-->

    <!--====================  brand logo slider area ====================-->
    <div class="brand-logo-slider-area section-space--inner--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- brand logo slider -->
                    <div class="brand-logo-slider__container-area">
                        <div class="swiper-container brand-logo-slider__container">
                            <div class="swiper-wrapper brand-logo-slider__wrapper">
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <img src="{{asset('frontend/assets/img/brand-logo/1.png')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="image-hover">
                                        <img src="{{asset('frontend/assets/img/brand-logo/1b.png')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <img src="assets/img/brand-logo/2.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="image-hover">
                                        <img src="assets/img/brand-logo/2b.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <img src="assets/img/brand-logo/3.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="image-hover">
                                        <img src="assets/img/brand-logo/3b.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <img src="assets/img/brand-logo/4.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="image-hover">
                                        <img src="assets/img/brand-logo/4b.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <img src="assets/img/brand-logo/5.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="image-hover">
                                        <img src="assets/img/brand-logo/5b.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <img src="assets/img/brand-logo/6.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="image-hover">
                                        <img src="assets/img/brand-logo/6b.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <img src="assets/img/brand-logo/7.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="image-hover">
                                        <img src="assets/img/brand-logo/7b.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <img src="assets/img/brand-logo/8.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="image-hover">
                                        <img src="assets/img/brand-logo/8b.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <img src="assets/img/brand-logo/9.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="image-hover">
                                        <img src="assets/img/brand-logo/9b.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of brand logo slider area  ====================-->
    

@endsection