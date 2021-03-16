@extends('layouts.backend.master')

@section('title','Add District')

@section('content')

<section class="row">
<div class="col-lg-2"></div>

<div class="col-lg-6 ">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
             Add Division
        </header>
        <div class="card-body ">
            <form action="{{url('districts')}}" method="post">
                @csrf
                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Division Name </label>
                    <select class="form-control col-md-9" id="departmetName"  placeholder="Division Name " name="divisions_id"> 
                        <option value="">Select Your Divition</option>
                        @foreach($division as $data)
                            <option value="{{$data->id}}">{{$data->division_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> District Name </label>
                    <input type="text" class="form-control col-md-9" id="departmetName"  placeholder="District Name " name="district_name">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </section>

</div>

</section>

@endsection