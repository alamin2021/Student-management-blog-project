@extends('layouts.backend.master')

@section('title','Add Department Data')

@section('content')

<section class="container ">


<div class="col-lg-6 ">
    

    @include('messages.message')
    <section class="card ">
        <header class="card-header">
            Basic Forms
        </header>
        <div class="card-body ">
            <form action="{{url('department')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="departmetName"> Department Name </label>
                    <input type="text" class="form-control" id="departmetName"  placeholder="Department Name " name="dpt_name">
                </div>

                <div class="form-group">
                    <label for="DepartmentCode"> Department code </label>
                    <input type="text" class="form-control" id="DepartmentCode" placeholder="Department code " name="dpt_code" >
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
         <!-- Go to www.addthis.com/dashboard to customize your tools -->
     <div class="addthis_inline_share_toolbox"></div>
    </section>

</div>

</section>

@endsection