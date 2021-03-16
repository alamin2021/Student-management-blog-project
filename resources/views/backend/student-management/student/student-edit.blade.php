@extends('layouts.backend.master')

@section('title','Update Student  Data')

@section('content')
<section class="container"> 
<section class="card ">
@include('messages.message')
    <header class="card-header">
        Forms Wizard
    </header>
    <div class="card-body">
        
        <form  id="default" action="{{url('students/'.$student->id)}}" method="post" enctype="multipart/form-data" >
            @csrf
        <div class="row"> 
            <div class="col-md-6">
                <div class="form-group form-row ">
                    <label class="control-label col-form-label col-md-4">First Name</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="First Name" name="f_name" value="{{ $student->f_name }}">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class=" control-label col-form-label col-md-4">Last Name</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Last Name" name="l_name" value="{{ $student->l_name }}">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class=" control-label col-form-label col-md-4">User Name <span style="color:red">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Username" name="u_name" value="{{ $student->u_name }}">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="control-label col-form-label col-md-4">Mobile Number <span style="color:red">*</span></label>
                    <div class="col-md-8">
                        <input type="number" class="form-control" placeholder="Mobile Number" name="mobile" value="{{ $student->mobile }}">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class=" control-label col-form-label col-md-4">Email <span style="color:red">*</span></label>
                    <div class="col-md-8">
                        <input type="email" class="form-control" placeholder="Write Email.." name="email" value="{{ $student->email }}">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class=" control-label col-form-label col-md-4">Password <span style="color:red">*</span></label>
                    <div class="col-md-8">
                        <input type="password" class="form-control" placeholder="password" name="password" value="{{ $student->password }}">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="control-label col-form-label col-md-4">Select Photo </label>
                    <div class="col-md-6">
                        <input type="file" class="form-control border-0" placeholder="Select Photo" name="image">
                    </div>
                    <div class="col-md-2">
                        <img class="img img-fluid rounded" src="{{ url('images/'.$student->image) }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                    <div class="form-group form-row">
                        <label class=" control-label col-form-label col-md-4">Division <span style="color:red">*</span></label>
                        <div class="col-md-8">
                            <select name="divisions_id" id="division" class="col-12 p-2 border">
                                <option value="">Select Your Divition</option>
                                @foreach ($division as $value)
                                    @if($value->id == $student->divisions_id)
                                        <option value="{{$value->id}}" selected >{{$value->division_name}} </option>
                                    @else
                                        <option value="{{$value->id}}">{{$value->division_name}} </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class=" control-label col-form-label col-md-4">District <span style="color:red">*</span></label>
                        <div class="col-md-8">
                            <select name="districts_id" id="district" class="col-12 p-2 border">
                                <option value="">Select Your District</option>
                                @foreach ($district as $value)
                                    @if($value->id == $student->districts_id)
                                        <option value="{{$value->id}}" selected >{{$value->district_name}} </option>
                                    @else
                                        <option value="{{$value->id}}">{{$value->district_name}} </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class=" control-label col-form-label col-md-4">Upazila <span style="color:red">*</span></label>
                        <div class="col-md-8">
                            <select name="upazilas_id" id="upazila" class="col-12 p-2 border">
                                <option value="">Select Your Upazila</option>
                                @foreach ($upazila as $value)
                                    @if($value->id == $student->upazilas_id)
                                        <option value="{{$value->id}}" selected >{{$value->upazila_name}} </option>
                                    @else
                                        <option value="{{$value->id}}">{{$value->upazila_name}} </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="">
                        <div class="">
                            <div class="form-group form-row">
                                <label class=" control-label col-form-label col-md-4">Union <span style="color:red">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Union Name" name="unions" value="{{ $student->unions }}">
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group form-row">
                                <label class=" control-label col-form-label col-md-4">Village <span style="color:red">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Village Name" name="village" value="{{ $student->village }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class=" control-label col-form-label col-md-4">Word No <span style="color:red">*</span></label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" placeholder="Word No" name="wordno"
                            value="{{ $student->wordno }}">
                        </div>
                    </div>
                     {{-- departmetn --}}
                <div class="form-group form-row">
                    <label class=" control-label col-form-label col-md-4"> Department Name</label>
                    <div class="col-md-8">
                        <select name="departments_id" id="department" class="col-12 p-2 border">
                            <option value="">Select Your Department </option>
                            @foreach ($department as $value)
                                @if($value->id == $student->departments_id)
                                    <option value="{{$value->id}}" selected >{{$value->dpt_name}} </option>
                                @else
                                    <option value="{{$value->id}}">{{$value->dpt_name}} </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- course --}}
                <div class="form-group form-row">
                    <label class=" control-label col-form-label col-md-4"> Course Name</label>
                    <div class="col-md-8">
                        <select name="course_id" id="course" class="col-12 p-2 border">
                            <option value="">Select Your Course </option>
                            @foreach ($course as $value)
                                @if($value->id == $student->course_id)
                                    <option value="{{$value->id}}" selected >{{$value->course_name}} </option>
                                @else
                                    <option value="{{$value->id}}">{{$value->course_name}} </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" > Update Data</button>
        </div>
        </form>
    </div>
</section>
</section>

@endsection

@section('js')

    <script type="text/javascript">
               
        $('#division').on('change',function(e){
            console.log(e);
            var divisions_id= e.target.value;

            $.get('/json-districts?divisions_id=' + divisions_id,function(data){
                console.log(data);

                $('#district').empty();
                $('#upazila').empty();
                $('#district').append('<option value="0" disable="true" selected="true">=== Select Districts ===</option>');

                $.each(data, function(index, districtsObj){
                    $('#district').append('<option value="'+ districtsObj.id +'">'+ districtsObj.district_name +'</option>');
                });

            });
        });

        $('#district').on('change',function(e){
            console.log(e);

            var districts_id= e.target.value;

            $.get('/json-upazila?districts_id=' + districts_id,function(data){
                console.log(data);

                $('#upazila').empty();
                $('#upazila').append('<option value="0" disable="true" selected="true">=== Select upazila ===</option>');

                $.each(data, function(index, districtsObj){
                    $('#upazila').append('<option value="'+ districtsObj.id +'">'+ districtsObj.upazila_name +'</option>');
                });

            });
        });

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

    </script>
@endsection