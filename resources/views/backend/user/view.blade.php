@extends('layouts.backend.master')

@section('title','View Subject Data')

@section('content')

<section class="">


<div class=" pl-2">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
           Course Data
        </header>
        <table class="table">
            <thead>
            <tr>
                <th>Sl No</th>
                <th>Name  </th>
                <th>Email </th>
                <th> Phone </th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data as $value)
            <tr>
                <td>{{$value->id }}</td>
                <td>{{$value->name }}</td>
                <td>{{$value->email }}</td>
                <td>{{$value->phone->phone }}</td> 
                <td>
                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                    <a href="{{url('subject/'.$value->id.'/subject-edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('subject/'.$value->id.'/subject-delete')}}" onclick="return confirm('Are You Sure To Delete This Data ')" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </section>

</div>

</section>

@endsection