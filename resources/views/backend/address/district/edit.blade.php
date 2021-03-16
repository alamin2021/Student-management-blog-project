@extends('layouts.backend.master')

@section('title','Update District')

@section('content')

<section class="row">
<div class="col-lg-2"></div>

<div class="col-lg-6 ">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
             Update District
        </header>
        <div class="card-body ">
            <form action="{{url('districts/'.$district->id)}}" method="post">
                @csrf
                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Division Name </label>
                    <select class="form-control col-md-9" id="departmetName"  placeholder="Division Name " name="divisions_id"> 
                        <option value="">Select Your Divition</option>
                        @foreach($division as $data)
                            @if($data->id == $district->divisions_id )
                                <option value="{{$data->id}}" selected >{{$data->division_name}}</option>
                            @else
                                <option value="{{$data->id}}">{{$data->division_name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> District Name </label>
                    <input type="text" class="form-control col-md-9" id="departmetName"  placeholder="District Name " name="district_name" value="{{$district->district_name}}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </section>

</div>

</section>

@endsection