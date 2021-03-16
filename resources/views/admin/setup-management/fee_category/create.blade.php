@extends('layouts.backend.master')

@section('title','Add Fee Category ')

@section('content')

<section class="container">
<div class="row"> 
<div class="col-lg-2"></div>

<div class="col-lg-6 ">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
             Add Fee Category
        </header>
        <div class="card-body ">
            <form action="{{url('feeCategory')}}" method="post">
                @csrf
                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Fee Category  </label>
                    <input type="text" class="form-control col-md-9" id="departmetName"  placeholder="Fee Category " name="fee_category">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </section>

</div>
</div>

</section>

@endsection