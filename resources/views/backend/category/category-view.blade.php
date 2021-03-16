@extends('layouts.backend.master')

@section('title','View Category Data ')

@section('content')

<section class=" ">


<div class="  pl-2">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
            Category Page 
        </header>
        <table class="table">
            <thead>
            <tr>
                <th>Sl No</th>
                <th>Category Data</th>
                <th>Category Code</th>
                <th>Action</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                <?php $i = $data->perPage()*($data->currentPage()-1) ?>
            @foreach ($data as $key => $value)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{$value->category_name }}</td>
                <td>{{$value->category_code }}</td>
                <td>
                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                    <a href="{{url('category/'.$value->id.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                </td>
                <td>
                    {!! Form::open(['url' => 'category/'.$value->id.'/delete', 'method'=>'delete']) !!}
                        <button class=" brn btn-danger pl-2 pr-2 pt-1 pb-1 rounded " onclick="return confirm('Are You Sure ?')"> <i class="fa fa-trash-o "></i></button>
                    {!! Form::close() !!}

                    {{-- <a href="{{url('category/'.$value->id.'/delete')}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></a> --}}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="">{{ $data->links() }}</div>
    </section>

</div>

</section>

@endsection