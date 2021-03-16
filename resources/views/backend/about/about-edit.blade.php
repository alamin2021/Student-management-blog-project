@extends('layouts.backend.master')
@section('title','About Details Update ')
@section('content')
@include('messages.message')
<section class="card ">
    <header class="card-header">
       About Details
    </header>
    <div class="row">
       
   <div class="col-md-10">
    <div class="card-body ">
        <form action="{{url('about/'.$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            
           

            <div class="form-group row">
                <label for="details_title" class="control-label col-md-3" > Details Title  </label>
                <div class="controls col-md-9">
                    <input type="text" class="form-control" id="details_title" placeholder="Details Title  " name="title" value="{{$data->title}}" >
                </div>
            </div>

            <div class="form-group row">
                <label for="post_desc" class="control-label col-md-3" >  Description About Us </label>
                <div class="controls col-md-9">
                    <textarea  class="form-control" rows="4" cols="50" id="summernote" placeholder="Describe about yours...." name="description" {!! $data->description !!}></textarea>
                </div>
            </div>

            {{-- <div class="form-group row">
                <label for="post_img" class="control-label col-md-3" > Front Header Image </label>
                <div class="controls col-md-6">
                    <input type="file" name="front_image" class="border-0 form-control">
                </div>
                <div class="controls col-md-3">
                    <img  style="width:60px" src="{{asset('images/about/'.$data->front_image)}}" alt="">
                </div>
            </div> --}}

            <div class="form-group row">
                <label for="post_img" class="control-label col-md-3" > Background Image </label>
                <div class="controls col-md-6">
                    <input type="file" name="back_image" class="border-0 form-control">
                </div>
                <div class="controls col-md-3">
                    <img style="width:100px" src="{{asset('images/about/'.$data->back_image)}}" alt="">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add Details </button>
        </form>

    </div>
    </div>
    </div>
</section>


@endsection