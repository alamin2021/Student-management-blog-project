@extends('layouts.backend.master')
@section('title','Course Enrolles Data .')

@section('content')
<div class="container">  
<div class="row">
    <div class="col-sm-12">
        <section class="card">
            @include('messages.message')
            <header class="card-header">
                Enrolles Course 
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="card-body">
                <div class="adv-table">
                    <table class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>
                                <th>Sl No </th>
                                <th> Departments Name</th>
                                <th> Course Name  </th>
                                <th> Credit </th>
                                <th> Action</th>
                            </tr>
                        </thead>
                       <tbody>
                           @foreach ($data as $key => $value)
                           <tr>
                            
                            <td>{{$value->id }}</td>
                            <td>{{$value->dpt_name }}</td>
                            <td>{{$value->course_name }} </td>
                            <td>{{$value->course_credit }} </td>
                            <td>
                            <a href="" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                            <a href="{{url('enroll/'.$value->id.'/enroll-edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                            <a href="{{url('enroll/'.$value->id.'/enroll-delete')}}" onclick="return confirm('are You Sure want to delete This Data')" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></a>

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