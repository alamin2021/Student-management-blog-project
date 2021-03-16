@extends('layouts.backend.master')

@section('title','Assign A Subject' )

@section('content')

<section class="">


<div class="col-lg-6 ">
    

    @include('messages.message')
    <section class="card ">
        <header class="card-header">
            Assign A Subject  
        </header>
        <div class="card-body ">
            <form action="{{url('assign_subjects')}}" method="post">
                @csrf

                <div class="form-group form-row">
                    <label for="semisters_id"  class="col-md-3 col-form-label"> Select Semister </label>
                    <select name="semisters_id" id="semisters_id" class="form-control col-md-9">
                        <option value="">Select Your Semister </option>
                        @foreach ($semister as $data)
                            <option value="{{$data->id}}">{{$data->semister_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group form-row">
                    <label for="departments_id"  class="col-md-3 col-form-label"> Select Department </label>
                    <select name="departments_id" id="departments_id" class="form-control col-md-9">
                        <option value="">Select Your Department </option>
                        @foreach ($department as $data)
                            <option value="{{$data->id}}">{{$data->dpt_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group form-row">
                    <label for="subjects_id"  class="col-md-3 col-form-label"> Select Subject</label>
                    <select name="subjects_id" id="subjects_id" class="form-control col-md-9">
                        <option value="">Select Your Subject</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>       
    </section>
</div>
</section>
@endsection
@section('js')
<script type="text/javascript">
               
    $('#departments_id').on('change',function(e){
        console.log(e);
        var departments_id = e.target.value;
        $.get('/json-subjectAssign?departments_id=' + departments_id,function(data){
            console.log(data);
            $('#subjects_id').empty();
            $('#subjects_id').append('<option value="0" disable="true" selected="true">=== Select subjects === </option>');

            $.each(data, function(index, coursesObj){
                $('#subjects_id').append('<option value="'+ coursesObj.id +'">'+ coursesObj.subject_name +'</option>');
            });

        });
    });

</script>
@endsection


