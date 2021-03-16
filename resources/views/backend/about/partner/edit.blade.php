@extends('layouts.backend.master')
@section('title',' Update  Details ')
@section('content')
@include('messages.message')
<div class="container">
    <div class="">
        <section class="card ">
            <header class="card-header">
                Update Business Details
            </header>
            <div class="row">
                <div class="col-md-10">
                    <div class="card-body ">
                        <form action="{{url('partners/'.$data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="project_count" class="control-label col-form-label col-md-3"> Photo </label>
                                <div class="controls col-md-6">
                                    <input type="file" class="form-control border-0" id="image" name="soft_image">
                                </div>
                                <div class="col-md-3">
                                    <img src="{{asset('images/about/'.$data->soft_image)}}" alt="" class="image img-fluid rounded">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="project_count" class="control-label col-form-label col-md-3"> Photo </label>
                                <div class="controls col-md-6">
                                    <input type="file" class="form-control border-0" id="image" name="image">
                                </div>
                                <div class="col-md-3">
                                    <img src="{{asset('images/about/'.$data->image)}}" alt="" class="image img-fluid rounded">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection