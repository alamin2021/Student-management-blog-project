@extends('layouts.backend.master')

@section('title','Add Fee Amount')

@section('content')

<section class="container ">
    <div class="row ">
        <div class=""></div>
        <div class="col-lg-11 ">

            @include('messages.message')
            <section class="card ">
                <header class="card-header">
                    Basic Forms
                </header>
                <div class="card-body ">
                    <form action="{{url('feeAmounts/'.$editData[0]->feecategories_id)}}" method="post" id="formValidate"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="add_item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group form-row ">
                                        <label for="departmetName" class="col-md-3 col-form-label"> Fee Name </label>
                                        <select name="feecategories_id" class="form-control col-md-9"
                                            id="feecategories_id" required>
                                            <option value="">Select Your Fee </option>
                                            @foreach($feeCategories as $value)
                                            <option value="{{ $value->id }}"
                                                {{ ($editData[0]->feecategories_id == $value->id)?"selected":"" }}>
                                                {{ $value->fee_category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @foreach($editData as  $i => $edit)

                           
                                <div class="" id="">
                                    <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-row">
                                                <label for="departmetName" class="col-md-4 col-form-label"> Class Name
                                                </label>
                                                <select name="classes_id[]" class="form-control col-md-8"
                                                    id="classes_id[]" required>
                                                    <option value="">Select Your Class</option>
                                                    @foreach($classes as $value)
                                                    <option value="{{ $value->id }}"
                                                        {{ ($edit->classes_id == $value->id)?"selected":"" }}>
                                                        {{ $value->class_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-row">
                                                <label for="DepartmentCode " class="col-md-5 col-form-label"> Amount :
                                                </label>
                                                <input type="text" class="form-control col-md-7" id="amount"
                                                    placeholder="Amount..." name="amount[]" value="{{ $edit->amount }}">
                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <div class="form-group from-row" id="plus">
                                                <span class="btn btn-success addeventmore"><i
                                                        class="fa fa-plus"></i></span>
                                                        @if($i > 0)
                                                        <span class="btn btn-danger removeventmore "><i
                                                                class="fa fa-minus"></i></span>
                                                        @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                    <!-- loop for plus  -->
                    <div class="" style="visibility: hidden;">
                        <div class="whole_extra_item_add" id="whole_extra_item_add">
                            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-row">
                                            <label for="departmetName" class="col-md-4 col-form-label"> Class Name
                                            </label>
                                            <select name="classes_id[]" class="form-control col-md-8" id="department"
                                                required>
                                                <option value="">Select Your Class</option>
                                                @foreach($classes as $value)
                                                <option value="{{ $value->id }}">{{ $value->class_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-row">
                                            <label for="DepartmentCode " class="col-md-5 col-form-label"> Amount :
                                            </label>
                                            <input type="text" class="form-control col-md-7" id="amount"
                                                placeholder="Amount..." name="amount[]" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2 ">
                                        <div class="form-group from-row" id="plus">
                                            <span class="btn btn-success addeventmore"><i class="fa fa-plus"></i></span>
                                            <span class="btn btn-danger removeventmore"><i
                                                    class="fa fa-minus"></i></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </section>

        </div>
    </div>


</section>



@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        var counter = 0;
        $(document).on("click", ".addeventmore", function () {
            var whole_extra_item_add = $(".whole_extra_item_add").html();
            $(this).closest(".add_item").append(whole_extra_item_add);
            counter++;
        });
        $(document).on("click", ".removeventmore", function (event) {
            var whole_extra_item_add = $(".whole_extra_item_add").html();
            $(this).closest(".delete_whole_extra_item_add").remove();
            counter -= 1;
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {

        $("#formValidate").validate({
            rules: {
                "feecategories_id": {
                    required: true,
                },
                "classes_id[]": {
                    required: true,
                },

                "amount[]": {
                    required: true,
                }
            },
            messages: {
                "feecategories_id": {
                    required: "please Select Your Department  ",
                },
                "classes_id[]": {
                    required: "please Select Your Category Fee ."
                },
                "amount[]": {
                    required: "Please Write On Your Amount . ",
                }
            }
        });

    });
</script>
@endsection