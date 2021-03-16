@extends('layouts.backend.master')
@section('title','Post Add ')
@section('content')
@include('messages.message')
<section class="card ">
    <header class="card-header">
        Basic Forms
    </header>
    <div class="row">
       
   <div class="col-md-10">
    <div class="card-body ">
        <form action="{{url('/post')}}" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group row">
                <label for="categoryname" class="control-label col-md-3"> Select Your Category </label>
                <div class="controls col-md-9">
                    <select name="category_id" id="categoryname" class="form-control">
                        <option value="">Select Your Category</option>
                        @foreach($category as $data)
                        <option value="{{$data->id}}">{{$data->category_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="post_title" class="control-label col-md-3" > Post Title  </label>
                <div class="controls col-md-9">
                    <input type="text" class="form-control" id="post_title" placeholder="Post Title  " name="title" >
                </div>
            </div>

            <div class="form-group row">
                <label for="post_desc" class="control-label col-md-3" > Post Description  </label>
                <div class="controls col-md-9">
                    <textarea  class="form-control" rows="4" cols="50" id="summernote" placeholder="Describe yours post...." name="description"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="post_img" class="control-label col-md-3" > Post Image </label>
                <div class="controls col-md-9">
                    <input type="file" name="post_image" class="border-0 form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="post_tag" class="control-label col-md-3" > Post Tag </label>
                <div class="controls col-md-9">
                    <input type="Text" class="form-control " id="post_tag" name="tag" placeholder="tag"> 
                </div>
            </div>

            

            <button type="submit" class="btn btn-primary">Add Post</button>
        </form>

    </div>
    </div>
    </div>
</section>


@endsection