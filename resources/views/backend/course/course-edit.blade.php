@extends('layouts.backend.master')

@section('title','Update Course Data')

@section('content')

<section class="">


<div class="col-lg-6 ">
    

    @include('messages.message')
    <section class="card ">
        <header class="card-header">
            Course Add Form 
        </header>
        <div class="card-body ">
            <form action="{{url('courses/'.$course->id)}}" method="post">
                @csrf
                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Course Name </label>
                    <input type="text" class="form-control col-md-9" id="departmetName"  placeholder="Course Name " name="course_name" value="{{$course->course_name}}">
                </div>

                <div class="form-group form-row">
                    <label for="CourseCode"  class="col-md-3 col-form-label"> Course code </label>
                    <input type="number" class="form-control col-md-9" id="CourseCode" placeholder="Course code " name="course_code" value="{{$course->course_code}}" >
                </div>

                <div class="form-group form-row">
                    <label for="CourseCode"  class="col-md-3 col-form-label"> Course Credit</label>
                    <input type="number" class="form-control col-md-9" id="CourseCode" placeholder="Course code " name="course_credit"  value="{{$course->course_credit}}" >
                </div>

                <div class="form-group form-row">
                    <label for="CourseCode"  class="col-md-3 col-form-label"> Select Department </label>
                    <select name="departments_id" id="departments_id" class="form-control col-md-9">
                        <option value="">Select Your Department </option>
                        @foreach ($department as $data)
                            @if($data->id == $course->departments_id)
                                <option value="{{$data->id}}" selected>{{$data->dpt_name}}</option>
                            @else
                                <option value="{{$data->id}}">{{$data->dpt_name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
         <!-- Go to www.addthis.com/dashboard to customize your tools -->
     <div class="addthis_inline_share_toolbox"></div>
    </section>

</div>

</section>

@endsection