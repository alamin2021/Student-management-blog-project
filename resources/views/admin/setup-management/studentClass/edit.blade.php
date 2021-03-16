@extends('layouts.backend.master')

@section('title','Update Class Data')

@section('content')

<section class="container">
    <div class="row"> 

<div class="col-lg-3"></div>
<div class="col-lg-6">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
            Basic Forms
        </header>
        <div class="card-body ">
            <form action="{{url('class/'.$data->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="departmetName"> Class Name </label>
                    <input type="text" class="form-control" id="departmetName"  value="{{$data->class_name}}" name="class_name">
                </div>

                

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </section>

</div>
</div>

</section>

@endsection