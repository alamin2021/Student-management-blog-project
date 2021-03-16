@extends('layouts.backend.master')
@section('title','View Registration Data')

@section('content')
<div class="container"> 
<div class="row">
    <div class="col-sm-12">
        <section class="card">
            @include('messages.message')
            <header class="card-header">
            Manage Roll Generate  
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="card-body">
                <form action="{{ route('std_roll') }}" id="myForm" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Year </label>
                            <select name="year_id" id="year_id" class="form-control">
                                <option value="">Select Year </option>
                                @foreach($years as $value)
                                    <option value="{{ $value->id }}" > {{ $value->year }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">class </label>
                            <select name="class_id" id="class_id" class="form-control">
                                <option value="">Select Class </option>
                                @foreach($classes as $value)
                                    <option value="{{ $value->id }}" > {{ $value->class_name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group pt-4 mt-1">
                            <a id="std_search"  class="btn btn-success std_search "  name="std_search" > Search </a>
                        </div>
                    </div>
                    <br>
                    <div class="row d-none" id="roll-generate">
                        <div class="col-md-12">
                            <table class="table table-borderd table-striped dt-tesponsive">
                                <thead>
                                    <tr>
                                        <th>Id NO</th>
                                        <th>Student Name</th>
                                        <th>Father's Name</th>
                                        <th>Gender </th>
                                        <th>Roll No </th>
                                    </tr>
                                </thead>
                                <tbody id="roll-generate-tr">

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success btn-sm"> Roll Generate </button>
                    </div>
                </form>
            </div>
            
            
        </section>
    </div>
</div>
</div>
@endsection
@section('js')



{{-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
<script>
$("#std_search").on('click',function(){
    alert('hello');
    var year_id = $('#year_id').val();
        var class_id = $('#class_id').val();
       
        $.ajax({
            url:"{{ route('std_roll/get-student') }}",
            type: "GET",
            data:{'year_id' : year_id, 'class_id':class_id },
            success:function (data){
                $('#roll-generate').removeClass('d-none');
                var html = '';
                $.each(data, function (key,v){
                    html += '<tr>' + 
                            '<td>' + v.student.id_no = '<input type="hidden" name="student_id[]" value="'+v.student_id +'"> </td>  '+
                            '<td>' + v.student.name + '</td>' +
                            '<td>' + v.student.father_name + '</td>' +
                            '<td> <input type="text" class="form-control" name="roll[]" value="'+v.roll+'"> </td> ' +
                            '</tr>';
                });
                html = $('#roll-generate-tr').html(html);
            }
        });
});
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