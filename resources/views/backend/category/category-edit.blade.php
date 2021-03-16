@extends('layouts.backend.master')
@section('title','Category Update ')
@section('content')
@include('messages.message')
<section class="card ">
    <header class="card-header">
        Basic Forms
    </header>
    <div class="card-body ">
        <form action="{{url('category/'.$data->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="categoryname"> Category Name </label>
                <input type="text" class="form-control" id="categoryname"  placeholder="Category Name " name="category_name" value="{{$data->category_name}}">
            </div>

            <div class="form-group">
                <label for="CategoryCode"> Category code </label>
                <input type="text" class="form-control" id="CategoryCode" placeholder="Category code " name="category_code" value="{{$data->category_code}}">
            </div>

            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>

    </div>
</section>


@endsection