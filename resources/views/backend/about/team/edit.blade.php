@extends('layouts.backend.master')
@section('title',' Update Team Member Data ')
@section('content')
@include('messages.message')
<div class="container">
    <div class="">
        <section class="card ">
            <header class="card-header">
                Member Details
            </header>
            <div class="row">
                <div class="col-md-10">
                    <div class="card-body ">
                        <form action="{{url('teams/'.$data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf



                            <div class="form-group row">
                                <label for="title" class="control-label col-form-label col-md-3">Name </label>
                                <div class="controls col-md-9">
                                    <input type="text" class="form-control" id="title" placeholder=" Name "
                                        name="title" value="{{$data->title}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="control-label col-form-label col-md-3"> Review Title </label>
                                <div class="controls col-md-9">
                                    <input type="text" class="form-control" id="title" placeholder="Sub Title "
                                        name="sub_title" value="{{$data->sub_title}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Facebook" class="control-label col-form-label col-md-3"> Facebook Profile
                                </label>
                                <div class="controls col-md-9">
                                    <input type="url" class="form-control" id="Facebook" placeholder="Facebook Profile "
                                        name="fb" value="{{$data->fb}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Twitter" class="control-label col-form-label col-md-3"> Twitter Profile
                                </label>
                                <div class="controls col-md-9">
                                    <input type="url" class="form-control" id="Twitter" placeholder="Twitter Profile "
                                        name="twitter" value="{{$data->twitter}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Linkdin" class="control-label col-form-label col-md-3"> Linkdin Profile
                                </label>
                                <div class="controls col-md-9">
                                    <input type="url" class="form-control" id="Linkdin" placeholder="Linkdin Profile "
                                        name="linkdin" value="{{$data->linkdin}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="control-label col-form-label col-md-3"> Skype Profile </label>
                                <div class="controls col-md-9">
                                    <input type="url" class="form-control" id="title" placeholder="Skype Profile "
                                        name="skype" value="{{$data->skype}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="project_count" class="control-label col-form-label col-md-3"> Photo </label>
                                <div class="controls col-md-5">
                                    <input type="file" class="form-control border-0" id="image" name="image">
                                </div>
                                <div class="col-md-3">
                                    <img src="{{asset('images/team/'.$data->image)}}" class="img-fluid rounded" alt="">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Member </button>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection