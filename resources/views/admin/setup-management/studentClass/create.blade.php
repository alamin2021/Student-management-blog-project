@extends('layouts.backend.master')

@section('title','Add Class Data')

@section('content')

<section class="container ">


<div class="col-lg-6 ">
    

    @include('messages.message')
    <section class="card ">
        <header class="card-header">
            Classes Add Form
        </header>
        <div class="card-body ">
            <form action="{{url('class')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="departmetName"> Class name </label>
                    <input type="text" class="form-control" id="departmetName"  placeholder="Class name " name="class_name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
         <!-- Go to www.addthis.com/dashboard to customize your tools -->
     <div class="addthis_inline_share_toolbox"></div>
    </section>

</div>

</section>

@endsection