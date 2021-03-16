@extends('layouts.backend.master')
@section('title',' Update Project Data ')
@section('content')
@include('messages.message')
<section class="card ">
    <header class="card-header">
       Project Details Update
    </header>
    <div class="row">
       
   <div class="col-md-10">
    <div class="card-body ">
        <form action="{{url('project/'.$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group row">
                <label for="project_count" class="control-label col-md-3" > Project Counter </label>
                <div class="controls col-md-9">
                    <input type="number" class="form-control" id="project_count" placeholder="Project Counter " name="project_count" value="{{$data->project_count}}" >
                </div>
            </div>
            
            <div class="form-group row">
                <label for="project_count" class="control-label col-md-3" > Project Title </label>
                <div class="controls col-md-9">
                    <input type="text" class="form-control" id="project_count" placeholder="Project Title " name="project_title" value="{{$data->project_title}}" >
                </div>
            </div>

            <div class="form-group row">
                <label for="post_desc" class="control-label col-md-3" >  Project Description </label>
                <div class="controls col-md-9">
                    <textarea  class="form-control" rows="4" cols="50" id="summernote" placeholder="Describe about yours...." name="project_description"> {!! $data->project_description !!}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="post_desc" class="control-label col-md-3" >  Project Image </label>
                <div class="controls col-md-6">
                    <input type="file" class="form-control border-0" name="image">
                </div>
                <div class="col-md-3 ">
                    <img src="{{asset('images/project/'.$data->image)}}" class="border rounded img-fluid" alt="">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update Project </button>
        </form>

    </div>
    </div>
    </div>
</section>


@endsection