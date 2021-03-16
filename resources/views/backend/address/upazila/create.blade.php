@extends('layouts.backend.master')

@section('title','Add Upazila Name ')

@section('content')

<section class="row">
<div class="col-lg-2"></div>

<div class="col-lg-6 ">
    @include('messages.message')
    <section class="card ">
        <header class="card-header">
             Add Upazila
        </header>
        <div class="card-body ">
          <form action="{{url('upazilas')}}" method="post">
                @csrf
                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Division Name </label>
                    <select class="form-control col-md-9" id="division"  placeholder="Division Name " name="divisions_id"> 
                        <option value="">Select Your Divition</option>
                        @foreach($division as $data)
                            <option value="{{$data->id}}">{{$data->division_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Division Name </label>
                    <select class="form-control col-md-9" id="district"  placeholder="Division Name " name="districts_id"> 
                        <option value="">Select Your Divition</option>
                        {{-- @foreach($district as $data)
                            <option value="{{$data->id}}">{{$data->district_name}}</option>
                        @endforeach --}}
                   </select>
                </div>

                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Upazila Name </label>
                    <input type="text" class="form-control col-md-9" id="departmetName"  placeholder="Upazila Name " name="upazila_name">
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
               
        $('#division').on('change',function(e){
            console.log(e);
            var divisions_id= e.target.value;

            $.get('/json-districts?divisions_id=' + divisions_id,function(data){
                console.log(data);

                $('#district').empty();
                $('#district').append('<option value="0" disable="true" selected="true">=== Select Districts ===</option>');

                $.each(data, function(index, districtsObj){
                    $('#district').append('<option value="'+ districtsObj.id +'">'+ districtsObj.district_name +'</option>');
                });

            });
        });

        // $('#district').on('change',function(e){
        //     console.log(e);

        //     var districts_id= e.target.value;

        //     $.get('/json-upozila?districts_id=' + districts_id,function(data){
        //         console.log(data);

        //         $('#upozila').empty();
        //         $('#upozila').append('<option value="0" disable="true" selected="true">=== Select Upozila ===</option>');

        //         $.each(data, function(index, districtsObj){
        //             $('#upozila').append('<option value="'+ districtsObj.id +'">'+ districtsObj.upozila_name +'</option>');
        //         });

        //     });
        // });
    </script>
@endsection
