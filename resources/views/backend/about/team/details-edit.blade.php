@extends('layouts.backend.master')
@section('title',' Update Team Heading ')
@section('content')
@include('messages.message')
<div class="container">
    <div class="">
        <section class="card ">
            <header class="card-header">
                Team Head :
            </header>
            <div class="row">
                <div class="col-md-10">
                    <div class="card-body ">
                        <form action="{{url('teamdetails/'.$data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="control-label col-form-label col-md-3"> Team Heading  </label>
                                <div class="controls col-md-9">
                                    <input type="text" class="form-control" id="title" placeholder=" Team Heading "
                                        name="title" value="{{$data->title}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="control-label col-form-label col-md-3"> Team Description </label>
                                <div class="controls col-md-9">
                                    <textarea name="description" id="summernote"  class="form-control">
                                        {{$data->description}}
                                    </textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary"> Update </button>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection