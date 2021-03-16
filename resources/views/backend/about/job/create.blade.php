@extends('layouts.backend.master')
@section('title',' Add Job Details ')
@section('content')
@include('messages.message')
<div class="container">
    <div class="">
        <section class="card ">
            <header class="card-header">
                Add Job Details
            </header>
            <div class="row">
                <div class="col-md-10">
                    <div class="card-body ">
                        <form action="{{url('/jobs')}}" method="post" enctype="multipart/form-data">
                            @csrf



                            <div class="form-group row">
                                <label for="title" class="control-label col-form-label col-md-3">Job Title</label>
                                <div class="controls col-md-9">
                                    <input type="text" class="form-control" id="title" placeholder=" Heading "
                                        name="title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="control-label col-form-label col-md-3"> Job Description </label>
                                <div class="controls col-md-9">
                                    <textarea name="description" id="summernote" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="project_count" class="control-label col-form-label col-md-3"> Photo </label>
                                <div class="controls col-md-9">
                                    <input type="file" class="form-control border-0" id="image" name="image">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Member </button>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection