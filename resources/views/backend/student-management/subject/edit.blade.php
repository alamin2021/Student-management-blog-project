@extends('layouts.backend.master')

@section('title','Update Subject Data ')

@section('content')

<section class="">


<div class="col-lg-6 ">
    

    @include('messages.message')
    <section class="card ">
        <header class="card-header">
           Subject Update Form  
        </header>
        <div class="card-body ">
            <form action="{{url('subjects/'.$data->id)}}" method="post">
                @csrf
                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Subject Name </label>
                    <input type="text" class="form-control col-md-9" id="departmetName"  placeholder="Subject Name " name="subject_name" value="{{$data->subject_name}}">
                </div>

                <div class="form-group form-row">
                    <label for="departments_id"  class="col-md-3 col-form-label"> Select Department </label>
                    <select name="departments_id" id="departments_id" class="form-control col-md-9">
                        <option value="">Select Your Department </option>
                        @foreach ($department as $value)
                        @if($value->id == $data->departments_id)
                            <option value="{{$value->id}}" selected >{{$value->dpt_name}}</option>
                        @else
                            <option value="{{$value->id}}">{{$value->dpt_name}}</option>
                        @endif
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