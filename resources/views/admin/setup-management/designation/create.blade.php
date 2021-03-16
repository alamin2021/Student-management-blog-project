@extends('layouts.backend.master')

@section('title','Add Student designation')

@section('content')

<section class="row">
<div class="col-lg-2"></div>

<div class="col-lg-6 ">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
             Add designation
        </header>
        <div class="card-body ">
            <form action="{{url('designation')}}" method="post">
                @csrf
                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> designation Name </label>
                    <input type="text" class="form-control col-md-9" id="departmetName"  placeholder="designation Name " name="name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </section>
    $2y$10$IaiFn7ukXjUn7VOlYl2fme4tAflg0ydGuPwCR/3W0pCHgB/T2pr3y
</div>

</section>

@endsection