@extends('layouts.backend.master')

@section('title','Enroll A Course ')

@section('content')

<section class="container">
    <div class="row">
        <div class=""></div>
        <div class="col-lg-12 ">
            @include('messages.message')
            <section class="card ">
                <header class="card-header">
                    Enroll A New Course
                </header>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" class="search"><i
                                    class="fa fa-search"></i></span>
                        </div>
                        <input type="text" class="form-control student_id" id="student_id"
                            placeholder="Search with Student Id" aria-label="Search with Student Id"
                            aria-describedby="basic-addon1" name="student_id">
                    </div>
                </div>
                <div class="card-body ">
                    <form action="{{url('results')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-row">
                                    <label class=" control-label col-md-3 col-form-label"> Name </label>
                                    <div class="col-md-9">
                                        <input type="text" id="student_name" class="form-control" name="student_name"
                                            readonly>
                                    </div>
                                </div>
                                <div class="form-group form-row ">
                                    <label class=" control-label col-md-3 col-form-label">Student User Name </label>
                                    <div class="col-md-9">
                                        <input type="text" id="user_name" class="form-control" name="std_usr" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-row ">
                                    <label class=" control-label col-md-3 col-form-label"> Student Email </label>
                                    <div class="col-md-9">
                                        <input type="email" id="email" class="form-control" name="std_eamil" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-row ">
                                    <label class=" control-label col-md-3 col-form-label"> Student Email </label>
                                    <div class="col-md-9">
                                        <input type="text" id="dpt_id" class="form-control" name="dpt_id" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                {{-- department --}}
                                <div class="form-group form-row ">
                                    <label for="departmet" class="col-md-3 col-form-label"> Department Name </label>
                                    <input type="text" id="department" class="form-control col-md-9" name="dpt_name"
                                        readonly>
                                </div>
                                {{--  Semister --}}
                                <div class="form-group form-row">
                                    <label for="departmetName" class="col-md-3 col-form-label"> Semister Name </label>
                                    <select class="form-control col-md-9" id="semisters_id" name="semisters_id">
                                        <option value="">Select Your Semister</option>
                                        @foreach($semister as $data )
                                            <option value="{{ $data->id }}">{{ $data->semister_name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary"> Add Result </button>
                    </form>

                </div>
            </section>

        </div>
    </div>
</section>

@endsection

@section('js')

<script type="text/javascript">
    $('#student_id').on('input', function (e) {
        console.log(e);
        var student_id = e.target.value;

        $('#student_name').empty();
        $('#user_name').empty();
        $.get('/json-fetch_student?student_id=' + student_id, function (data) {
            console.log(data);
            $.each(data, function (index, districtsObj) {
                var id = (data.id);
                var f_name = (data.f_name);
                var l_name = (data.l_name);
                var user_name = (data.u_name);
                var user_email = (data.email);
                var dpt_id = (data.departments_id);
                var dpt_name = (data.dpt_name);
                $('#student_name').val(f_name + " " + l_name);
                $('#user_name').val(user_name);
                $('#email').val(user_email);
                $('#dpt_id').val(dpt_id);
                $('#department').val(dpt_name);
                
            });
        });


    });

   
    $('#semisters_id').on('change', function (e) {
        console.log(e);
        var semisters_id = e.target.value;
        //{{-- alert(semisters_id); --}}

        $.get('/json-select_semester?semisters_id=' + semisters_id, function (data) {
            console.log(data);
alert(data);
            $.each(data, function (index, districtsObj) {
                var id = (data.id);
                var course_code = (data.course_code);
                var course_credit = (data.course_credit);

                $('#course_code').val(course_code);
                $('#course_credit').val(course_credit);

            });

        });
    });

</script>
@endsection