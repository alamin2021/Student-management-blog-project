@extends('layouts.frontend.master')
@section('title',"cat")
@section('content')

<!--====================  breadcrumb area ====================-->
<div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img" data-bg="{{asset('frontend/assets/img/backgrounds/19.jpg')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="breadcrumb-page-title">{{$category->category_name}}</h2>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb-page-list text-uppercase">
                    <li class="has-children"><a href="/">Home</a></li>
                    <li>{{$category->category_name}}</li>
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
                    <div class="single-list-blog-post-wrapper">
{{-- ==================== For each Loop for Daynamic post ============== --}}
                        
                        @foreach($post as $data )

                        <div class="single-list-blog-post">
                            <div class="single-list-blog-post__image section-space--bottom--50">
                                <a href="blog-post-image.html">
                                    <img src="{{asset('images/post/'.$data->post_image)}}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="single-list-blog-post__content">
                                <ul class="tag-list">
                                    <li><a href="#">{{$data->tag}} </a></li>
                                    <li><a href="#">Delivery</a></li>
                                </ul>
                                <h1 class="title"> <a href="blog-post-image.html">{{$data->title}}</a></h1>
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
                                </div>
                                <div class="post-excerpt">
                                    {{substr($data->description,0 ,300)}}
                                </div>
                                <a href="{{url('blogdetails/'.$data->id)}}" class="ht-btn ht-btn--default">READ MORE</a>
                            </div>
                        </div>
                        
                        @endforeach
{{-- ==================== End for each loop of Daynamic post ================= --}}
                    </div>
                </div>

                <!--====================  pagination ====================-->

                <div class="pagination-wrapper section-space--inner--top--40">
                 
                    <ul class="page-pagination">
                        <li>{{$post->links() }}</li>
                    </ul>
                </div>

                <!--====================  End of pagination ====================-->
            </div>
            {{-- -============ sidebar ================ --}}
            @include('frontend.blog.sidebar')
            {{-- -============ End sidebar ================ --}}
        </div>
    </div>
</div>
<!--====================  End of page content wrapper  ====================-->

@endsection