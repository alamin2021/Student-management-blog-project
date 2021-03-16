@extends('layouts.backend.master')
@section('title','View Exam Data')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <section class="card">
            @include('messages.message')
            <header class="card-header">
            Exam Data 
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
                                <th> Sl No </th>
                                <th> Exam Name </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                       <tbody>
                           @foreach ($data as $value)
                           <tr>
                            
                            <td> {{ $value->id }} </td>
                            <td> {{ $value->exam_name }} </td>
                            <td>
                            <a href="#" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                            <a href="{{url('exam/'.$value->id.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                            <a href="{{url('exam/'.$value->id.'/delete')}}" onclick="return confirm('are You Sure want to delete This Data')" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></a>

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