@extends('layouts.backend.master')
@section('title','View Post Data')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <section class="card">
            @include('messages.message')
            <header class="card-header">
                About Header Details
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
                                <th>Title </th>
                                <th> Post Description</th>
                                <th> Back Image </th>
                                <th> Action</th>
                            </tr>
                        </thead>
                       <tbody>
                           @foreach ($data as $key => $value)
                           <tr>
                            
                            <td>{{$value->id }}</td>
                            <td>{{$value->title}}</td>
                            <td>{{substr($value->description,0,30)}} </td>
                            
                            <td ><img style="width:70px" class="rounded" src="{{asset('images/about/'.$value->back_image )}}" alt=""></td>
                            
                            <td>
                            <a href="" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                            <a href="{{url('about/'.$value->id.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                            <a href="{{url('about/'.$value->id.'/delete')}}" onclick="return confirm('are You Sure want to delete This Data')" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></a>

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