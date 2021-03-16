@extends('layouts.backend.master')

@section('title','Add Teacher Information Data')

@section('content')
<section class="">
    <section class="card ">
        @include('messages.message')
        <header class="card-header">
            Teacher Information 
        </header>
        <div class="card-body">
            <div class="col-md-9">
                <form id="default" action="{{url('teachers/')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class=" ">
                        <div class="form-row form-group">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="First Name" name="name">
                            </div>
                        </div>

                            <div class="form-group form-row">
                                <label class="control-label col-md-3">Mobile Number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Mobile Number" name="mobile">
                                </div>
                            </div>
                        
                            <div class="form-group form-row">
                                <label class=" control-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" placeholder="Write Email.." name="email">
                                </div>
                            </div>
                        
                            <div class="form-group form-row">
                                <label class=" control-label col-md-3"> Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" placeholder="Write password.." name="password">
                                </div>
                            </div>
                        
                            <div class="form-group form-row">
                                <label class=" control-label col-md-3">Maximum Credit</label>
                                <div class="col-md-9">
                                    <input type="number" id="t_credit" class="form-control" placeholder="Maximum Credit" name="max_credit">
                                </div>
                            </div>

                        <div class="form-group form-row">
                            <label class="control-label col-md-3">Select Photo</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control border-0" placeholder="Select Photo" name="image">
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class=" control-label col-md-3"> Department Name</label>
                            <div class="col-md-9">
                                <select name="departments_id" id="" class=" form-control border-rounded">
                                    <option value="">Select Your Department </option>
                                    @foreach ($department as $data)
                                        <option value ="{{$data->id}}">{{$data->dpt_name}} </option>
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