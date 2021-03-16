@extends('layouts.backend.master')

@section('title','Add Book')

@section('content')

<section class="">


<div class="col-lg-6 ">
    

    @include('messages.message')
    <section class="card ">
        <header class="card-header">
            Book Add Form  
        </header>
        <div class="card-body ">
            <form action="{{url('books/'.$data->id)}}" method="post">
                @csrf
                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Book Name </label>
                    <input type="text" class="form-control col-md-9" id="departmetName"  placeholder="Book Name " name="book_name" value="{{ $data->book_name }}">
                </div>

                <div class="form-group form-row">
                    <label for="bookCode"  class="col-md-3 col-form-label"> Book code </label>
                    <input type="number" class="form-control col-md-9" id="bookCode" placeholder="book code " name="book_code" value="{{ $data->book_code }}">
                </div>

                <div class="form-group form-row">
                    <label for="CourseCode"  class="col-md-3 col-form-label"> Authore Name </label>
                    <input type="text" class="form-control col-md-9" id="authore" placeholder=" Authore Name " name="author_name" value="{{ $data->author_name }}" >
                </div>

                <div class="form-group form-row">
                    <label for="AuthoreCode"  class="col-md-3 col-form-label"> Authore Credit</label>
                    <input type="text" class="form-control col-md-9" id="authoreCode" placeholder="Authore code " name="author_code" value="{{ $data->author_code }}" >
                </div>
                <button type="submit" class="btn btn-primary"> Update </button>
            </form>

        </div>
         <!-- Go to www.addthis.com/dashboard to customize your tools -->
     <div class="addthis_inline_share_toolbox"></div>
    </section>

</div>

</section>

@endsection