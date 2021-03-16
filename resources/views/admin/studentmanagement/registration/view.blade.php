@extends('layouts.backend.master')
@section('title','View Registration Data')

@section('content')
<div class="container"> 
<div class="row">
    <div class="col-sm-12">
        <section class="card">
            @include('messages.message')
            <header class="card-header">
            View Student Registar data 
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="card-body">
                <form action="{{ route('serach-student') }}" id="myForm" method="GET">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Year </label>
                            <select name="year_id" id="year_id" class="form-control">
                                <option value="">Select Year </option>
                                @foreach($years as $value)
                                    <option value="{{ $value->id }}" {{ (@$year_id == $value->id)?"selected":"" }}> {{ $value->year }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">class </label>
                            <select name="class_id" id="class_id" class="form-control">
                                <option value="">Select Class </option>
                                @foreach($classes as $value)
                                    <option value="{{ $value->id }}" {{ (@$class_id == $value->id)?"selected":"" }}> {{ $value->class_name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group pt-4 mt-1">
                            <button type="submit" class="btn btn-success " value="Validate!" name="search" > Search </button>
                        </div>
                    </div>
                    
                </form>
            </div>
            
            <div class="card-body">
                <div class="adv-table">
               
                    <table class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>
                                <th width="7%">Sl No </th>
                                <th> Name</th>
                                <th> Id NO</th>
                                @if(Auth::user()->role == "admin")
                                <th> Code </th>
                                @endif
                                <th> Roll</th>
                                <th> Year</th>
                                <th> Class</th>
                                <th width="10%"> Image</th>
                                <th width="12%"> Action</th>
                            </tr>
                        </thead>
                       <tbody>
                           @foreach ($allData as $value)
                           <tr>
                            
                            <td>{{$value->id }}</td>
                            <td>{{$value->student->name }}</td>
                            <td>{{$value->student->id_no }}</td>
                            @if(Auth::user()->role == "admin")
                            <td>{{$value->student->code }}</td>
                            @endif
                            <td>{{$value->student->roll }}</td>
                            <td>{{$value->year->year }}</td>
                            <td>{{$value->classes->class_name }}</td>
                            <td>
                                <img width="100px" src="{{ asset('public/backend/images/student/'.$value->student->image) }}" alt="">
                            </td>
                            <td>
                            
                            <a href="{{url('std_registration/'.$value->student_id.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                            <a href="{{url('std_registration/'.$value->student_id.'/promotion')}}" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                            <a target="_blank" href="{{url('std_registration/'.$value->student_id.'/details')}}" class="btn btn-primary btn-sm"><i class="fa fa-eye "></i></a>
                            

                            </td>
                        </tr> 
                           @endforeach
                       </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
</div>
@endsection
@section('js')
<script type="text/javascript">
$(document).ready(function(){
    $("#myForm").validate({
        rules:{
            "year_id":{
                required:true,
            },
            "class_id":{
                required:true,
            }
        },messages :{
            "name":{

            }
        },
    });
});

</script>
@endsection