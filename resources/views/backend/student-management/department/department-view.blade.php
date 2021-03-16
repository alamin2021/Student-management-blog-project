@extends('layouts.backend.master')

@section('title','View Department Data')

@section('content')

<section class="">


<div class=" pl-2">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
            Department Data 
        </header>
        <table class="table">
            <thead>
            <tr>
                <th>Sl No</th>
                <th>Department Data</th>
                <th>Department Code</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data as $value)
            <tr>
                <td>{{$value->id }}</td>
                <td>{{$value->dpt_name }}</td>
                <td>{{$value->dpt_code }}</td>
                <td>{{$value->Subjects->subject_name }}</td>
                <td>
                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                    <a href="{{url('department/'.$value->id.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('department/'.$value->id.'/delete')}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </section>

</div>

</section>

@endsection