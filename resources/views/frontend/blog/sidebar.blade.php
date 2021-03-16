<div class="col-lg-4">
    <!-- page sidebar -->
    <div class="page-sidebar">
        <!-- single sidebar widget -->
        <div class="single-sidebar-widget">
            <h2 class="widget-title">Search</h2>
            <div class="sidebar-search">
                <form action="#">
                    <input type="text" placeholder="Keyword search ...">
                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                </form>
            </div>
        </div>
        <!-- single sidebar widget -->
        <div class="single-sidebar-widget">
            <h2 class="widget-title">Categories</h2>
            <ul class="sidebar-category">
                @foreach(App\admin\Categories::all() as $data )
                    <li><a href="{{url('category/'.$data->id)}}"> {{$data->category_name }}<span class="counter">{{ $data->posts->count() }}</span></a></li>
                @endforeach
            </ul>
        </div>
        <!-- single sidebar widget -->

        <!-- single sidebar widget -->
        <div class="single-sidebar-widget">
            <h2 class="widget-title">Popular Post </h2>
            <ul class="sidebar-category">
                @foreach( App\admin\Posts::orderBy('view','desc')->take(5)->get()  as $data )
                    <li><a href="{{url('blogdetails/'.$data->id)}}"> {{$data->title }} <span class="counter">{{$data->view}}</span></a></li>
                @endforeach
            </ul>
        </div>
        <!-- single sidebar widget -->
        <div class="single-sidebar-widget">
            <h2 class="widget-title">Recent News</h2>
            <div class="sidebar-recent-post-list">
                @foreach( App\admin\Posts::orderBy('id','desc')->take(5)->get()  as $data )
                <div class="sidebar-recent-post">
                    <div class="sidebar-recent-post__image">
                        <a href="{{url('blogdetails/'.$data->id)}}">
                            <img src="{{asset('images/post/'.$data->post_image)}}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="sidebar-recent-post__content">
                        <h3 class="title">
                            <a href="{{url('blogdetails/'.$data->id)}}">{{$data->title }} </a>
                        </h3>
                        <p class="post-date">{{$data->created_at}} </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- single sidebar widget -->
        <div class="single-sidebar-widget">
            <h2 class="widget-title">Tag Cloud</h2>
            <ul class="sidebar-tag-list">
                <li><a href="#">Engineering (6)</a></li>
                <li><a href="#">Transport (6)</a></li>
            </ul>
        </div>
    </div>
</div>