@extends('layouts.backend.master')

@section('title','Add Exam Name ')

@section('content')

<section class="row">
<div class="col-lg-2"></div>

<div class="col-lg-6 ">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
             Add Exam
        </header>
        <div class="card-body ">
            <form action="{{url('exam')}}" method="post">
                @csrf
                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Exam Name </label>
                    <input type="text" class="form-control col-md-9" id="departmetName"  placeholder="Exam Name " name="exam_name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </section>

</div>

</section>

@endsection