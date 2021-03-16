@extends('layouts.backend.master')

@section('title','Assign A New Course ')

@section('content')

<section class="container">
    <div class="row"> 
    <div class="col-lg-2"></div>
    <div class="col-lg-6 ">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
             Add Upazila
        </header>
        <div class="card-body">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1" class="search"><i class="fa fa-search"></i></span>
                </div>
                <input type="text" class="form-control" id="student_id" placeholder="Search with Student Id" aria-label="Search with Student Id" aria-describedby="basic-addon1" name="book_code">
              </div>
        </div>
        <div class="card-body ">
          <form action="{{url('assign-course')}}" method="post">
                @csrf

                {{-- department --}}
                <div class="form-group form-row">
                    <label for="departmet" class="col-md-3 col-form-label"> Department Name </label>
                    <select class="form-control col-md-9" id="department"  placeholder="departmet Name " name="departments_id"> 
                        <option value="">Select Your Department</option>
                        @foreach( $department as $data)
                            <option value="{{$data->id}}">{{$data->dpt_name}}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Teacher  --}}
                <div class="form-group form-row">
                    <label for="teacher" class="col-md-3 col-form-label"> Teacher Name </label>
                    <select class="form-control col-md-9" id="teacher"  placeholder="Select Teacher  " name="teachers_id"  > 
                        <option value="">Select Your Teacher</option>
                        
                    </select>
                </div>
                
                <div class="form-group form-row">
                    <label class=" control-label col-md-3 col-form-label">Teacher Credit</label>
                    <div class="col-md-9">
                        <input type="number" id="t_credit" class="form-control" name="t_credit" autocomplete="off" readonly>
                    </div>
                </div>
                {{--  Course --}}

                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Course Name </label>
                    <select class="form-control col-md-9" id="course"  placeholder="Course Name " name="course_id"> 
                        <option value="">Select Your Course</option>
                   </select>
                </div>

                <div class="form-group form-row">
                    <label class=" control-label col-md-3 col-form-label"> Course Code </label>
                    <div class="col-md-9">
                        <input type="number" id="course_code" class="form-control" name="course_code" autocomplete="off" readonly>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class=" control-label col-md-3 col-form-label"> Course Credit </label>
                    <div class="col-md-9">
                        <input type="number" id="course_credit" class="form-control" name="course_credit" autocomplete="off" readonly >
                    </div>
                </div>
               
                <button type="submit" class="btn btn-primary">Assign A Course </button>
            </form> 

        </div>
    </section>

</div>
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
            $.get('/json-teacher?departments_id=' + departments_id,function(data){
                console.log(data);

                $('#teacher').empty();
                $('#teacher').append('<option value="0" disable="true" selected="true">=== Select teacher ===</option>');

                $.each(data, function(index, teacherObj){
                    $('#teacher').append('<option value="'+ teacherObj.id +'">'+ teacherObj.name +'</option>');
                });

            });
        });

        $('#teacher').on('change',function(e){
            console.log(e);
            var teachers_id = e.target.value;
            $.get('/json-select_teacher?teachers_id=' + teachers_id,function(data){
            console.log(data);
            
            $.each(data, function(index, districtsObj){
            var id=(data.id);
            var t_credit=(data.t_credit);

            $('#t_credit').val(t_credit);
            
            });

            });
        });

        $('#course').on('change',function(e){
            console.log(e);
            var course_id = e.target.value;
            alert(course_id);
            $.get('/json-select_course?course_id=' + course_id,function(data){
            console.log(data);
            
            $.each(data, function(index, districtsObj){
            var id=(data.id);
            var course_code=(data.course_code);
            var course_credit=(data.course_credit);

            $('#course_code').val(course_code);
            $('#course_credit').val(course_credit);
            
            });

            });
        });
    </script>
@endsection
