@extends('layouts.backend.master')

@section('title','Add Book')

@section('content')

<section class="container">
<div class="row"> 
<div class="col-lg-3"></div>
<div class="col-lg-6 ">
    

    @include('messages.message')
    <section class="card ">
        <header class="card-header">
            Book Add Form  
        </header>
        <div class="card-body ">
            <form action="{{url('books')}}" method="post">
                @csrf
                <div class="form-group form-row">
                    <label for="CourseCode"  class="col-md-3 col-form-label"> Select Department </label>
                    <select name="departments_id" id="departments_id" class="form-control col-md-9">
                        <option value="">Select Your Department </option>
                        @foreach ($department as $data)
                            <option value="{{$data->id}}">{{$data->dpt_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Book Name </label>
                    <input type="text" class="form-control col-md-9" id="departmetName"  placeholder="Book Name " name="book_name">
                </div>

                <div class="form-group form-row">
                    <label for="bookCode"  class="col-md-3 col-form-label"> Book code </label>
                    <input type="number" class="form-control col-md-9" id="bookCode" placeholder="book code " name="book_code" >
                </div>

                <div class="form-group form-row">
                    <label for="CourseCode"  class="col-md-3 col-form-label"> Writer Name </label>
                    <input type="text" class="form-control col-md-9" id="authore" placeholder=" Authore Name " name="author_name" >
                </div>

                <div class="form-group form-row">
                    <label for="AuthoreCode"  class="col-md-3 col-form-label"> Authore Code</label>
                    <input type="text" class="form-control col-md-9" id="authoreCode" placeholder="Authore code " name="author_code" >
                </div>

                <div class="form-group form-row">
                    <label for="description"  class="col-md-3 col-form-label"> Description</label>
                    <input type="text" class="form-control col-md-9" id="description" placeholder="Description " name="description" >
                </div>

                <div class="form-group form-row">
                    <label for="location"  class="col-md-3 col-form-label"> Self location</label>
                    <input type="text" class="form-control col-md-9" id="location" placeholder="Self location " name="self_location" >
                </div>

                <div class="form-group form-row">
                    <label for="location"  class="col-md-3 col-form-label"> Number of Copies </label>
                    <input type="text" class="form-control col-md-9" id="location" placeholder="Number of Copies " name="copy" >
                </div>

                <div class="form-group form-row">
                    <label for="location"  class="col-md-3 col-form-label"> Total Number of Copies </label>
                    <input type="text" class="form-control col-md-9" name="total_copy" value="{{ $book->total_copy }}" disabled >
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
         <!-- Go to www.addthis.com/dashboard to customize your tools -->
     <div class="addthis_inline_share_toolbox"></div>
    </section>

</div>
</div>
</section>

@endsection