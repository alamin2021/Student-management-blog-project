@extends('layouts.backend.master')

@section('title','Update Subject ')

@section('content')

<section class="row">
<div class="col-lg-2"></div>

<div class="col-lg-6 ">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
             Update subject
        </header>
        <div class="card-body ">
            <form action="{{url('subject/'.$data->id)}}" method="post">
                @csrf
                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> subject Name </label>
                    <input type="text" class="form-control col-md-9" id="departmetName"  placeholder="subject Name " name="subject_name" value="{{$data->subject_name}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </section>

</div>

</section>

@endsection