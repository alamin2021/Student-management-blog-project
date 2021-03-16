@extends('layouts.backend.master')

@section('title','Update Semister ')

@section('content')

<section class="row">
<div class="col-lg-2"></div>

<div class="col-lg-6 ">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
             Update Shift
        </header>
        <div class="card-body ">
            <form action="{{url('shift/'.$data->id)}}" method="post">
                @csrf
                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Shift Name </label>
                    <input type="text" class="form-control col-md-9" id="departmetName"  placeholder="Shift Name " name="shift" value="{{$data->shift}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </section>

</div>

</section>

@endsection