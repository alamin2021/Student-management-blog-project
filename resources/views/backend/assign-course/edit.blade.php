@extends('layouts.backend.master')

@section('title','Update Assign  Course ')

@section('content')
<div class="container"></div>
<section class="row">
<div class="col-lg-2"></div>
<div class="col-lg-6 ">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
             Add Upazila
        </header>
        <div class="card-body ">
          <form action="{{url('assign-course/'.$course_assign->id)}}" method="post">
                @csrf

                {{-- department --}}
                <div class="form-group form-row">
                    <label for="departmet" class="col-md-3 col-form-label"> Department Name </label>
                    <select class="form-control col-md-9" id="department"  placeholder="departmet Name " name="departments_id"> 
                        <option value="">Select Your Department</option>
                        @foreach( $department as $data)
                             @if($data->id == $course_assign->departments_id)
                                <option value="{{$data->id}}" selected >{{$data->dpt_name}}</option>
                            @else
                                <option value="{{$data->id}}">{{$data->dpt_name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                {{--  Course --}}

                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Course Name </label>
                    <select class="form-control col-md-9" id="course"  placeholder="Course Name " name="course_id"> 
                        <option value="">Select Your Course</option>
                        @foreach( $course as $data)
                            @if($data->id == $course_assign->course_id)
                                <option value="{{$data->id}}" selected >{{$data->course_name}}</option>
                            @else
                                <option value="{{$data->id}}">{{$data->course_name}}</option>
                            @endif
                        @endforeach
                   </select>
                </div>

                {{-- Teacher  --}}
                <div class="form-group form-row">
                    <label for="teacher" class="col-md-3 col-form-label"> Teacher Name </label>
                    <select class="form-control col-md-9" id="teacher"  placeholder="Select Teacher  " name="teachers_id"> 
                        <option value="">Select Your Teacher</option>
                        @foreach( $all_data as $data)
                            @if($data->id == $course_assign->teachers_id)
                                <option value="{{$data->id}}" selected >{{$data->name}}</option>
                            @else
                                <option value="{{$data->id}}">{{$data->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Assigned Course </button>
            </form> 

        </div>
    </section>

</div>

</section>

@endsection

@section('js')

    <script type="text/javascript">
               
        $('#department').on('change',function(e){
            console.log(e);
            var departments_id= e.target.value;
            
            $.get('/json-course?departments_id=' + departments_id,function(data){
                console.log(data);

                $('#course').empty();
                $('#course').append('<option value="0" disable="true" selected="true">=== Select course === </option>');

                $.each(data, function(index, coursesObj){
                    $('#course').append('<option value="'+ coursesObj.id +'">'+ coursesObj.course_name +'</option>');
                });

            });
        });
// course 
        $('#department').on('change',function(e){
            console.log(e);

            // var course_id= e.target.value;
            var departments_id= e.target.value;
            $.get('/json-teacher?departments_id=' + departments_id,function(data){
                console.log(data);

                $('#teacher').empty();
                $('#teacher').append('<option value="0" disable="true" selected="true">=== Select teacher ===</option>');

                $.each(data, function(index, teacherObj){
                    $('#teacher').append('<option value="'+ teacherObj.id +'">'+ teacherObj.name +'</option>');
                });

            });
        });
       
    </script>
@endsection