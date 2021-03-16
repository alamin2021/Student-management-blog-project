@extends('layouts.backend.master')

@section('title','Enroll A Course ')

@section('content')

<section class="container">
    <div class="row"> 
    <div class="col-lg-2"></div>
    <div class="col-lg-6 ">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
             Enroll A New Course 
        </header>
        <div class="card-body">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1" class="search"><i class="fa fa-search"></i></span>
                </div>
                <input type="text" class="form-control student_id" id="student_id" placeholder="Search with Student Id" aria-label="Search with Student Id" aria-describedby="basic-addon1" name="student_id">
              </div>
        </div>
        <div class="card-body ">
          <form action="{{url('enrolles')}}" method="post">
                @csrf
                <div class="form-group form-row">
                    <label class=" control-label col-md-3 col-form-label">Student Name</label>
                    <div class="col-md-9">
                        <input type="text" id="student_name" class="form-control" name="student_name" readonly>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class=" control-label col-md-3 col-form-label">Student User Name </label>
                    <div class="col-md-9">
                        <input type="text" id="user_name" class="form-control" name="std_usr" readonly>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class=" control-label col-md-3 col-form-label"> Student Email </label>
                    <div class="col-md-9">
                        <input type="email" id="email" class="form-control" name="std_eamil" readonly>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class=" control-label col-md-3 col-form-label"> Student Email </label>
                    <div class="col-md-9">
                        <input type="text" id="dpt_id" class="form-control" name="dpt_id" readonly>
                    </div>
                </div>

                {{-- department --}}
                <div class="form-group form-row">
                    <label for="departmet" class="col-md-3 col-form-label"> Department Name </label>
                    <input type="text" id="department" class="form-control col-md-9" name ="dpt_name" readonly>
                </div>
                
                
                {{--  Course --}}

                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Course Name </label>
                    <select class="form-control col-md-9" id="course_id"  placeholder="Course Name " name="course_id"> 
                        <option value="">Select Your Course</option>
                   </select>
                </div>

                <div class="form-group form-row">
                    <label class=" control-label col-md-3 col-form-label"> Course Code </label>
                    <div class="col-md-9">
                        <input type="number" id="course_code" class="form-control" name="course_code" readonly >
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class=" control-label col-md-3 col-form-label"> Course Credit </label>
                    <div class="col-md-9">
                        <input type="number" id="course_credit" class="form-control" name="course_credit" readonly >
                    </div>
                </div>
                {{-- Teacher  --}}
                <div class="form-group form-row">
                    <label for="teacher" class="col-md-3 col-form-label"> Teacher Name </label>
                    <select class="form-control col-md-9" id="teacher_id"  placeholder="Select Teacher  " name="teachers_id"> 
                        <option value="">Select Your Teacher</option>
                        
                    </select>
                </div>
                
                <div class="form-group form-row">
                    <label class=" control-label col-md-3 col-form-label">Teacher Credit</label>
                    <div class="col-md-9">
                        <input type="number" id="t_credit" class="form-control" name="t_credit" autocomplete="off" readonly>
                    </div>
                </div>
               
                <button type="submit" class="btn btn-primary" > Enroll Course  </button>
            </form> 

        </div>
    </section>

</div>
</div>
</section>

@endsection

@section('js')

    <script type="text/javascript">

        $('#student_id').on('input',function(e){
            console.log(e);
            var student_id = e.target.value;
            
            $('#student_name').empty();
            $('#user_name').empty();
            $.get('/json-enroll_course?student_id=' + student_id,function(data){
            console.log(data);
            $.each(data, function(index, districtsObj){
            var id=(data.id);
            var f_name =(data.f_name);
            var l_name =(data.l_name);
            var user_name =(data.u_name);
            var user_email = (data.email);
            var dpt_id = (data.departments_id);
            var dpt_name = (data.dpt_name);
            $('#student_name').val(f_name +" "+ l_name);
            $('#user_name').val(user_name);
            $('#email').val(user_email);
            $('#dpt_id').val(dpt_id);
            $('#department').val(dpt_name); 
            $('#course').append('<option value="0" disable="true" selected="true">=== Select course === </option>');
            });
            });
           

        });

        $('#student_id').on('input',function(e){
            console.log(e);
            var student_id = e.target.value;
            $.get('/json-selectCourse?student_id=' + student_id,function(data){
            console.log(data);
            $.each(data, function(index, districtsObj){
            var id=(data.id);
            var course_name = (data.course_name);
            });
            $('#course_id').empty();
                $('#course_id').append('<option value="0" disable="true" selected="true">=== Select course === </option>');

                $.each(data, function(index, districtsObj){
                    $('#course_id').append('<option value="'+ districtsObj.id +'">'+ districtsObj.course_name +'</option>');
            });
            });
           

        });
        $('#course_id').on('change',function(e){
            console.log(e);
            var course_id = e.target.value;
            
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
        // Select course Teacher 
        $('#course_id').on('change',function(e){
            console.log(e);
            var course_id = e.target.value;
            $.get('/json-select_std_teacher?course_id=' + course_id,function(data){
            console.log(data);
            
            $('#teacher_id').empty();
                $('#teacher_id').append('<option value="0" disable="true" selected="true">=== Select course === </option>');

                $.each(data, function(index, districtsObj){
                    $('#teacher_id').append('<option value="'+ districtsObj.id +'">'+ districtsObj.name +'</option>');
            });

            });
        });
        $('#teacher_id').on('change',function(e){
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
    </script>
@endsection
