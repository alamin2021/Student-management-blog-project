@extends('layouts.frontend.master')
@section('title',"$data->title post ")
@section('content')
<!--====================  breadcrumb area ====================-->
<div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img" data-bg="{{asset('frontend/assets/img/backgrounds/19.jpg')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="breadcrumb-page-title">{{$data->title}}</h2>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb-page-list text-uppercase">
                    <li class="has-children"><a href="index.html">Home</a></li>
                    <li>{{$data->title}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--====================  End of breadcrumb area  ====================-->

    <!--====================  page content wrapper ====================-->

    <div class="page-content-wrapper section-space--inner--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- blog content wrapper -->
                    <div class="blog-content-wrapper">
                        <div class="single-list-blog-post mb-0">
                            <div class="single-list-blog-post__media section-space--bottom--50">
                                <img src="{{asset('images/post/'.$data->post_image)}}" class="img-fluid" alt="">
                            </div>
                            <div class="single-list-blog-post__content single-list-blog-post__content--style2">
                                <ul class="tag-list">
                                    <li><a href="{{url('blogdetails/'.$data->id)}}">{{$data->tag}}</a></li>
                                    <li><a href="#">Delivery</a></li>
                                </ul>
                                <h1 class="title">{{$data->title}}</h1>
                                <div class="meta-list">
                                    <div class="single-meta">
                                        <p class="date">{{$data->created_at}}</p>
                                    </div>
                                    <div class="single-meta">
                                        <p class="author">BY <a href="#">Admin</a></p>
                                    </div>
                                    <div class="single-meta">
                                        <p class="comment-info"><a href="#">0 COMMENTS</a></p>
                                    </div>
                                    <div class="single-meta">
                                        <p class="view-info">{{$data->view}} VIEWS</p>
                                    </div>
                                </div>
                                <div class="post-text">
                                    {!! $data->description !!}
                                </div>
                            </div>
                        </div>
                        <div class="tag-list-wrapper">
                            <span class="tag-title">TAGS</span>
                            <ul class="tag-list">
                                <li><a href="#">{{$data->tag}}</a></li>
                                
                            </ul>
                        </div>
                        {{--  $comment = App\Frontend\Comments::paginate(2) ?> --}}
                        @foreach($comments as $comment_data )
                        
                        <div class="blog-post-author">
                            <div class="blog-post-author__image">
                                <img src="{{asset('frontend/assets/img/blog/profile.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="blog-post-author__content">
                                <h3 class="author-name">{{$comment_data->name}}</h3>
                                <p class="author-bio"> {{$comment_data->comment}} </p>
                                <div class="social-links social-links--style4">
                                    <ul>
                                        <li><a href="http://facebook.com/" data-tippy="Facebook" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="http://twitter.com/" data-tippy="Twitter" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="http://vimeo.com/" data-tippy="Vimeo" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-social-vimeo"></i></a></li>
                                        <li><a href="http://linkedin.com/" data-tippy="Linkedin" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-social-linkedin"></i></a></li>
                                        <li><a href="http://skype.com/" data-tippy="Skype" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-social-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                        <div> {{$comments->links()}} </div>
                        <div class="blog-post-nav">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="blog-post-nav__prev">
                                        @if($previous)
                                        <a href="{{ URL::to( 'blogdetails/' . $previous ) }}">
                                            <div class="post-nav-link"><i class="ion-chevron-left"></i>Previous </div>
                                            <div class="post-nav-title">{{$data->title}}</div>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="blog-post-nav__next text-left text-md-right">
                                        @if($next)
                                        <a href="{{ URL::to( 'blogdetails/' . $next ) }}">
                                            <div class="post-nav-link">NEXT <i class="ion-chevron-right"></i></div>
                                            <div class="post-nav-title">{{$data->title}}</div>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('messages.message')
                        <div class="blog-post-comment">
                            <div class="comment-title section-space--bottom--60">
                                <h2 class="title">Write a Comment</h2>
                                <p class="subtitle">Your email address will not be published. Required fields are marked *</p>
                            </div>
                            <div class="contact-form-wrapper comment-form-wrapper mb-0">
                                
                                <form  action="{{url('comment')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 comment-icon comment-name section-space--bottom--20">
                                            <input type="text" placeholder="Your Name *" name="name" >
                                        </div>
                                        <div class="col-lg-6 comment-icon comment-email section-space--bottom--20">
                                            <input type="email" placeholder="Your Email *" name="email" >
                                        </div>

                                        <div class="col-lg-12">
                                            <textarea placeholder="Comment" name="comment"></textarea>
                                        </div>
                                        <div>
                                            <input type="hidden" value="{{$data->id}}" name="posts_id">
                                        </div>
                                       
                                    </div>
                                    <div class="col-lg-3">
                                        <button type="submit" value="Submit Now" class="ht-btn ht-btn--default">Submit Now </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ============ Page sidebar ============ --}}
                @include('frontend.blog.sidebar')
                {{-- ============ End Page sidebar ============ --}}

            </div>
        </div>
    </div>
    <!--====================  End of page content wrapper  ====================-->



@endsection