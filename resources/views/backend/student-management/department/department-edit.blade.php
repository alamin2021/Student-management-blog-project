@extends('layouts.backend.master')

@section('title','Add Department Data')

@section('content')

<section class="pt-5 ">


<div class="col-lg-6 mt-5">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
            Basic Forms
        </header>
        <div class="card-body ">
            <form action="{{url('department/'.$data->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="departmetName"> Department Name </label>
                    <input type="text" class="form-control" id="departmetName"  value="{{$data->dpt_name}}" name="dpt_name">
                </div>

                <div class="form-group">
                    <label for="DepartmentCode"> Department code </label>
                    <input type="text" class="form-control" id="DepartmentCode" value="{{$data->dpt_code}}" name="dpt_code" >
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </section>

</div>

</section>

@endsection