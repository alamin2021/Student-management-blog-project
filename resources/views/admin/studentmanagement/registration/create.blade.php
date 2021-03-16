@extends('layouts.backend.master')

@section('title','Add Student Information Data')

@section('content')
<section class="container"> 
<section class="card ">
@include('messages.message')
    <header class="card-header">
        Forms Wizard
    </header>
    <div class="card-body form_validate">
        
        <form  action="{{url('std_registration/')}}" method="post" enctype="multipart/form-data" id="myForm"  >
            @csrf
        <div class="row"> 
            <div class="col-md-6">
                <div class="form-group form-row ">
                    <label class="control-label col-form-label col-md-4">Name</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class=" control-label col-form-label col-md-4">Father's Name</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Father Name" name="father_name">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class=" control-label col-form-label col-md-4">Mother  Name <span style="color:red">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Mother name" name="mother_name">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="control-label col-form-label col-md-4">Mobile Number <span style="color:red">*</span></label>
                    <div class="col-md-8">
                        <input type="number" class="form-control" placeholder="Mobile Number" name="mobile">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="control-label col-form-label col-md-4">Address <span style="color:red">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Address" name="present_addr">
                    </div>
                </div>
                
                <div class="form-group form-row">
                    <label class=" control-label col-form-label col-md-4">Select Your Gender <span style="color:red">*</span></label>
                    <div class="col-md-8">
                        <select name="gender" id="" class="form-control">
                            <option value="">Select Your Gender </option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class=" control-label col-form-label col-md-4">Select Your Religion <span style="color:red">*</span></label>
                    <div class="col-md-8">
                        <select name="religion" id="" class="form-control">
                            <option value="">Select Your Religion </option>
                            <option value="islam">Islam</option>
                            <option value="hindu">hindu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="control-label col-form-label col-md-4">Date Of Birth <span style="color:red">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control singleDatePicker"  name="date_of_birth" value="{{ "10/05/2020" }}" />
                    </div>
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="form-group form-row">
                    <label class="control-label col-form-label col-md-4">DisCount <span style="color:red">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Discount " name="discount">
                       
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class=" control-label col-form-label col-md-4">Select Year <span style="color:red">*</span></label>
                    <div class="col-md-8">
                        <select name="year_id" id="" class="form-control">
                            <option value="">Select Year</option>
                            @foreach ($years as $value)
                            <option value="{{ $value->id }}">{{ $value->year }}</option> 
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class=" control-label col-form-label col-md-4">Select shift <span style="color:red">*</span></label>
                    <div class="col-md-8">
                        <select name="shift_id" id="" class="form-control">
                            <option value="">Select shift</option>
                            @foreach ($shift as $value)
                            <option value="{{ $value->id }}">{{ $value->shift }}</option> 
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class=" control-label col-form-label col-md-4">Select group <span style="color:red">*</span></label>
                    <div class="col-md-8">
                        <select name="group_id" id="" class="form-control">
                            <option value="">Select group</option>
                            @foreach ($group as $value)
                            <option value="{{ $value->id }}">{{ $value->group }}</option> 
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class=" control-label col-form-label col-md-4">Select classes <span style="color:red">*</span></label>
                    <div class="col-md-8">
                        <select name="class_id" id="" class="form-control">
                            <option value="">Select classes</option>
                            @foreach ($classes as $value)
                            <option value="{{ $value->id }}">{{ $value->class_name}}</option> 
                            @endforeach
                            
                        </select>
                    </div>
                </div>
               
                <div class="form-group form-row">
                    <label class="control-label col-form-label col-md-4">Select Photo </label>
                    <div class="col-md-4">
                        <input type="file" class="form-control border-0" placeholder="Select Photo" name="image" id="image">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ url('public/images/student/home.png') }}" alt="" id="showImage" style="width:100px;height:100px">
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-success" value="Validate!" > Save Data</button>
        </div>
        </form>
        
    </div>

</section>
</section>

@endsection

@section('js')


<script type="text/javascript">
// Onload Image 

$(document).ready(function(){
    $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});
$(function() {
  $('.singleDatePicker').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    autoUpdateInput:true,
    autoApply:true,
    local:{
        formate:'DD-MM-YYYY',
        DaysOfWeek:['Su','MO','Tu','We','Th','Fr','Sa'],
        firstDay:0
    },
    minDate:'01/01/1930',
  }, function(start) {
    this.element.val(start.format('DD-MM-YYYY'));
    this.element.parent().parent().removeClass('has-error');
  },function(chosen_date){
      this.element.val(chosen_date.formate('DD-MM-YYYY'));
  });
  $('.singleDatePicker').on('apply.singleDatePicker',function(ev,picker){
      $(this).val(picker.starDate.format('DD-MM-YYYY'));
      $(this).trigger('change');
  });
});

$(document).ready(function(){
    $("#myForm").validate({
        rules:{
            "name":{
                required:true,
            },
            "father_name":{
                required:true,
            },
            "mother_name":{
                required:true,
            },
            "mobile":{
                required:true,
            },
            "present_addr":{
                required:true,
            },
            "gender":{
                required:true,
            },
            "religion":{
                required:true,
            },
            "date_of_birth":{
                required:true,
            },
            "religion":{
                required:true,
            },
            "year_id":{
                required:true,
            },
            "shift_id":{
                required:true,
            },
            "class_id":{
                required:true,
            },
        },messages :{
            "name":{

            }
        },
    });
});

</script>

    
@endsection