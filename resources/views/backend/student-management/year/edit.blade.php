@extends('layouts.backend.master')

@section('title','Update Year ')

@section('content')

<section class="row">
<div class="col-lg-2"></div>

<div class="col-lg-6 ">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
             Update Year
        </header>
        <div class="card-body ">
            <form action="{{url('years/'.$data->id)}}" method="post">
                @csrf
                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Year </label>
                    <input type="text" class="form-control col-md-9" id="departmetName"  value="{{$data->year }}" name="year">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </section>

</div>

</section>

@endsection