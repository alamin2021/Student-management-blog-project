@extends('layouts.backend.master')
@section('title',' Add Skill Details ')
@section('content')
@include('messages.message')
<section class="card ">
    <header class="card-header">
       Project Details 
    </header>
    <div class="row">
   <div class="col-md-10">
    <div class="card-body ">
        <form action="{{url('/skilldetails')}}" method="post" enctype="multipart/form-data">
            @csrf
            
            
            
            <div class="form-group row">
                <label for="title" class="control-label col-md-3" > Skill Title </label>
                <div class="controls col-md-9">
                    <input type="text" class="form-control" id="title" placeholder="Skill Title " name="title" >
                </div>
            </div>

            <div class="form-group row">
                <label for="post_desc" class="control-label col-md-3" >  Skill Description </label>
                <div class="controls col-md-9">
                    <textarea  class="form-control" rows="4" cols="50" id="summernote" placeholder="Describe Skill yours...." name="description"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="project_count" class="control-label col-md-3" > Skill About Image </label>
                <div class="controls col-md-9">
                    <input type="file" class="form-control border-0" id="image" name="image" >
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add Skill Details </button>
        </form>

    </div>
    </div>
    </div>
</section>


@endsection