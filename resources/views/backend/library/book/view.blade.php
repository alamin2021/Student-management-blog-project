@extends('layouts.backend.master')

@section('title','View Book Data')

@section('content')

<div class="container">  
    <div class="row">
        <div class="col-sm-12">
            <section class="card">
                @include('messages.message')
                
                {{-- <header class="card-header">
                    Assigned Course 
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                    </span>
                </header> --}}
                <div class="container">
                    <div class="row">
                        <div class="col-5">
                            <header class="card-header">
                                Course Data
                             </header>
                             
                        </div>
                        <div class="col-6 pt-2">
                            <div class="form-group form-row">
                                <label for="CourseCode"  class="col-md-3 col-form-label"> Select Department </label>
                                <select name="departments_id" id="department" class="form-control col-md-9">
                                    <option value="">Select Your Department </option>
                                    @foreach ($department as $dpt)
                                        <option value="{{$dpt->id}}">{{$dpt->dpt_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-1 pt-2">
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                        </div>
                        
                    </div>
                </div>
                <div class="card-body">
                    <div class="adv-table">
                        <table class="display table table-bordered table-striped" id="dynamic-table">
                            <thead id="table-head">
                                <tr>
                                    <th>Sl No</th>
                                    <th>Book Name </th>
                                    <th>Book Code </th>
                                    <th>Authore Name</th>
                                    <th>Authore Code </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                           <tbody id="table-body">
                            @foreach ($data as $value)
                            <tr>
                                <td>{{$value->id }}</td>
                                <td>{{$value->book_name }}</td>
                                <td>{{$value->book_code }}</td>
                                <td>{{$value->author_name }}</td>
                                <td>{{$value->author_code }}</td>
                                <td>
                                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                                    <a href="{{url('book/'.$value->id.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                    <a href="{{url('book/'.$value->id.'/delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('are You Sure want to delete This Data')" ><i class="fa fa-trash-o "></i></a>
                                </td>
                            </tr>
                            @endforeach
                           </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="card-body" id="dynamic">
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                        <thead id="table-head">
                            
                        </thead>
                        <tbody id="table-body">
            
                        </tbody>
                    </table>
                </div> --}}

                
            </section>
        </div>
    </div>
    </div>




@endsection
@section('js')

    <script type="text/javascript">
               
        $('#department').on('change',function(e){
            console.log(e);
            var departments_id= e.target.value;
            
            $.get('/json-dpt_book?departments_id=' + departments_id,function(data){
                console.log(data);

                $('#table-body').empty();
                $('#table-head').empty();
                $('#table-head').append("<tr><th>Sl No</th><th>Book Name </th> <th>Book Code </th> <th>Authore Name</th> <th>Authore Code </th><th>Action</th> </tr>");

                $.each(data, function(index, coursesObj){
                    $('#table-body').append( '<tr> <td>'+ coursesObj.id +'</td><td>'+ coursesObj.book_name +'</td><td>'+ coursesObj.book_code +'</td><td>'+ coursesObj.author_name +'</td><td>'+ coursesObj.author_code +"</td><td><a href='{{url("book/$value->id/edit")}}' class='btn btn-primary btn-sm'><i class='fa fa-pencil'></i></a><a href='{{url("book/$value->id/delete")}}' class='btn btn-danger btn-sm'  ><i class='fa fa-trash-o'></i></a></td></tr>");
                });

            });
            
        });

       
    </script>
@endsection
