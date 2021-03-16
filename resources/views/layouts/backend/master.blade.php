@include('layouts.backend.header')

<section id="main-content" class="pt-5">
    <div class="pt-5">

    

    @yield('content')
</div>
    
</section>
@yield('js')
@include('layouts.backend.footer')