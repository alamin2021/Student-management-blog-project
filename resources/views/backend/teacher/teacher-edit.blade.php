@extends('layouts.backend.master')

@section('title','Update Teacher Information Data')

@section('content')
<section class="">
    <section class="card ">
        @include('messages.message')
        <header class="card-header">
            Forms Wizard
        </header>
        <div class="card-body">
            <div class="col-md-9">
                <form id="default" action="{{url('teachers/'.$teacher->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class=" ">
                        <div class="form-row form-group">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="First Name" name="name" value="{{$teacher->name}}">
                            </div>
                        </div>

                            <div class="form-group form-row">
                                <label class="control-label col-md-3">Mobile Number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" value="{{$teacher->mobile}}">
                                </div>
                            </div>
                        
                            <div class="form-group form-row">
                                <label class=" control-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" placeholder="Write Email.." name="email" value="{{$teacher->email}}">
                                </div>
                            </div>

                        <div class="form-group form-row">
                            <label class="control-label col-md-3">Select Photo</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control border-0" placeholder="Select Photo" name="image">
                            </div>
                            <div class="col-md-3">
                                <img style="width:70px" src="{{asset('images/teacher/'.$teacher->image)}}" alt="">
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class=" control-label col-md-3"> Department Name</label>
                            <div class="col-md-9">
                                <select name="departments_id" id="" class=" form-control border-rounded">
                                    <option value="">Select Your Department </option>
                                    @foreach ($department as $data)
                                    @if($data->id == $teacher->departments_id  )
                                        <option value ="{{$data->id}}" selected >{{$data->dpt_name}} </option>
                                    @else
                                        <option value ="{{$data->id}}" >{{$data->dpt_name}} </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"> Save Data</button>

                </form>
            </div>
        </div>
    </section>
</section>

@endsection