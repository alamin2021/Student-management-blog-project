@extends('layouts.backend.master')
@section('title',' Add Business Partner Details ')
@section('content')
@include('messages.message')
<div class="container">
    <div class="">
        <section class="card ">
            <header class="card-header">
                Business Partner Details
            </header>
            <div class="row">
                <div class="col-md-10">
                    <div class="card-body ">
                        <form action="{{url('/partners')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="project_count" class="control-label col-form-label col-md-3"> Soft Image  </label>
                                <div class="controls col-md-9">
                                    <input type="file" class="form-control border-0" id="image" name="soft_image">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="project_count" class="control-label col-form-label col-md-3"> Hard Image </label>
                                <div class="controls col-md-9">
                                    <input type="file" class="form-control border-0" id="image" name="image">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Image </button>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection