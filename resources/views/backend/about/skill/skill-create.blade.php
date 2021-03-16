@extends('layouts.backend.master')
@section('title','About Details Add.. ')
@section('content')
@include('messages.message')
<section class="card ">
    <header class="card-header">
       About Details
    </header>
    <div class="row">
       
   <div class="col-md-10">
    <div class="card-body ">
        <form action="{{url('/skill')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="details_title" class="control-label col-md-3" > Skill  </label>
                <div class="controls col-md-9">
                    <input type="text" class="form-control" id="details_title" placeholder="Details Title  " name="skill" >
                </div>
            </div>

            <div class="form-group row">
                <label for="details_title" class="control-label col-md-3" > Skill Value </label>
                <div class="controls col-md-9">
                    <input type="number" class="form-control" id="details_title" placeholder="Skil Value Within 100% " name="skill_value" >
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add Skill </button>
        </form>

    </div>
    </div>
    </div>
</section>


@endsection