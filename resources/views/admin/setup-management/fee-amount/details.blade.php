@extends('layouts.backend.master')
@section('title','View Fee Category Data ')

@section('content')
<div class="container"> 
<div class="row">
    <div class="col-sm-12">
        <section class="card">
            @include('messages.message')
            <header class="card-header">
            Fee Category Amount Details
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
                                <th> Fee Category Name</th>
                                <th> Class Name </th>
                                <th> Amount </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                       <tbody>
                           @foreach ($data as $i =>  $value)
                           <tr>
                            
                            <td>{{++$i }}</td>
                            <td>{{$value->fee_category->fee_category }}</td>
                            <td>{{$value->classes->class_name }}</td>
                            
                            <td>
                            <a href="{{url('feeAmounts/'.$value->feecategories_id.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                            <a href="{{url('feeAmounts/'.$value->feecategories_id.'/details')}}"  class="btn btn-danger btn-sm"><i class="fa fa-eye "></i></a>

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