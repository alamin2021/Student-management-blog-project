@extends('layouts.backend.master')

@section('title','Add A Subject' )

@section('content')

<section class="">


<div class="col-lg-6 ">
    

    @include('messages.message')
    <section class="card ">
        <header class="card-header">
            Course Add Form 
        </header>
        <div class="card-body ">
            <form action="{{url('subjects')}}" method="post">
                @csrf
                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Subject Name </label>
                    <input type="text" class="form-control col-md-9" id="departmetName"  placeholder="Subject Name " name="subject_name">
                </div>

                <div class="form-group form-row">
                    <label for="departments_id"  class="col-md-3 col-form-label"> Select Department </label>
                    <select name="departments_id" id="departments_id" class="form-control col-md-9">
                        <option value="">Select Your Department </option>
                        @foreach ($department as $data)
                            <option value="{{$data->id}}">{{$data->dpt_name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
         
    </section>

</div>

</section>

@endsection