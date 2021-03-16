@extends('layouts.backend.master')
@section('title','View Student Data')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <section class="card">
            @include('messages.message')
            <header class="card-header">
                Dynamic Table
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
                                <th> Name </th>
                                <th> User Name</th>
                                <th> Mobile</th>
                                <th> Email</th>
                                <th> Photo </th>
                                <th> Division </th>
                                <th> Department</th>
                                <th> Student Id </th>
                                <th> Action</th>
                            </tr>
                        </thead>
                       <tbody>
                           @foreach ($data as $key => $value)
                           <tr>
                            
                            <td>{{$value->id }}</td>
                            <td>{{$value->f_name.' '. $value->l_name }}</td>
                            <td>{{$value->u_name }} </td>
                            <td>{{$value->mobile }}</td>
                            <td>{{$value->email }} </td>
                            <td> <img src="{{asset('images/'.$value->image)}}" alt="" style="width:70px"> </td>
                            <td>{{$value->division_name }}</td>
                            <td> {{$value->dpt_name }}</td>
                            <td> {{$value->std_id }}</td>
                            <td>
                            <a href="" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                            <a href="{{url('student/'.$value->id.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                            <a href="{{url('student/'.$value->id.'/delete')}}" onclick="return confirm('are You Sure want to delete This Data')" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></a>

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
@endsection