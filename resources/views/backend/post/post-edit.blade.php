@extends('layouts.backend.master')
@section('title','Post Update ')
@section('content')
@include('messages.message')
<section class="card ">
    <header class="card-header">
        Basic Forms
    </header>
    <div class="row">
       
   <div class="col-md-9">
    <div class="card-body ">
        <form action="{{url('post/'.$post->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group row">
                <label for="categoryname" class="control-label col-md-3"> Select Your Category </label>
                <div class="controls col-md-9">
                    <select name="category_id" id="categoryname" class="form-control">
                        
                        @foreach($category as $data)
                        @if($data->id == $post->category_id )
                        <option value="{{$data->id}}" selected>{{$data->category_name}}</option>
                        @else
                        <option value="{{$data->id}}" >{{$data->category_name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="post_title" class="control-label col-md-3" > Post Title  </label>
                <div class="controls col-md-9">
                    <input type="text" class="form-control" id="post_title" value="{{$post->title}}" name="title" >
                </div>
            </div>

            <div class="form-group row">
                <label for="post_desc" class="control-label col-md-3" > Post Description  </label>
                <div class="controls col-md-9">
                    
                    <textarea type="text" id="summernote" class="form-control" rows="4" cols="50" name="description" >{{$post->description}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="post_img" class="control-label col-md-3" > Post Image </label>
                <div class="controls col-md-4">
                    <input type="file" name="post_image" class="border-0 form-control">
                </div>
                <div class="controls col-md-5">
                    <img style="width:100px;height:60px;cursor:pointer;" class="rounded" src="{{asset('images/post/'.$post->post_image)}}" alt="">
                </div>
            </div>

            <div class="form-group row">
                <label for="post_tag" class="control-label col-md-3" > Post Tag </label>
                <div class="controls col-md-9">
                    <input type="Text" class="form-control " id="post_tag" name="tag" value="{{$post->tag}}"> 
                </div>
            </div>

            

            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>

    </div>
    </div>
    </div>
</section>


@endsection