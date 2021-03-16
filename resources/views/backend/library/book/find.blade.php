@extends('layouts.backend.master')

@section('title','Find Book')

@section('content')

<section class="">


<div class="col-lg-6 ">
    

    @include('messages.message')
    <section class="card ">
        <header class="card-header">
            Find Your Book
        </header>
        <div class="card-body">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1" class="search"><i class="fa fa-search"></i></span>
                </div>
                <input type="text" class="form-control" id="books" placeholder="Search with Code" aria-label="Search with Code" aria-describedby="basic-addon1" name="book_code">
              </div>
        </div>
        <div class="card-body ">
            {{-- <form action="{{url('books')}}" method="post">--}}
                @csrf 
                <div class="form-group form-row">
                    <label for="departmetName" class="col-md-3 col-form-label"> Book Name </label>
                    <input type="text" class="form-control col-md-9" id="book_name"   name="book_name" >
                </div>

                <div class="form-group form-row">
                    <label for="bookCode"  class="col-md-3 col-form-label"> Book code </label>
                    <input type="text" class="form-control col-md-9" id="book_code"  name="book_code" autocomplete="off">
                </div>

                <div class="form-group form-row">
                    <label for="CourseCode"  class="col-md-3 col-form-label"> Authore Name </label>
                    <input type="text" class="form-control col-md-9" id="author_name" name="author_name" autocomplete="off">
                </div>

                <div class="form-group form-row">
                    <label for="AuthoreCode"  class="col-md-3 col-form-label"> Authore Credit</label>
                    <input type="text" class="form-control col-md-9" id="author_code"  name="author_code" autocomplete="off">
                </div>
                {{-- <button type="submit" class="btn btn-primary">Submit</button>
            </form> --}}

        </div>
         <!-- Go to www.addthis.com/dashboard to customize your tools -->
     <div class="addthis_inline_share_toolbox"></div>
    </section>

</div>

</section>

@endsection
@section('js')
    <script type="text/javascript">
        $('#books').on('input',function(e){
            console.log(e);

            var book_code= e.target.value;
            
            $.get('/json-books?book_code=' + book_code,function(data){
            console.log(data);
            
            $.each(data, function(index, districtsObj){
            var id=(data.id);
            // var faculties_id=(data.faculties_id);
            var book_name=(data.book_name);
            var book_code=(data.book_code);
            var author_name=(data.author_name);
            var author_code=(data.author_code);
            // var description=(data.description);
            // var self_location=(data.self_location);
            var total=(data.total);
           
            // $('#book_id').val(id);
            // $('#faculties_id').val(faculties_id);
            $('#book_name').val(book_name);
            $('#book_code').val(book_code);
            $('#author_name').val(author_name);
            $('#author_code').val(author_code);
            // $('#self_location').val(self_location);
            // $('#total').val(total);
            });
        });
    });
    // $('#division').on('change',function(e){
    //         console.log(e);
    //         var divisions_id= e.target.value;

    //         $.get('/json-districts?divisions_id=' + divisions_id,function(data){
    //             console.log(data);

    //             $('#district').empty();
    //             $('#district').append('<option value="0" disable="true" selected="true">=== Select Districts ===</option>');

    //             $.each(data, function(index, districtsObj){
    //                 $('#district').append('<option value="'+ districtsObj.id +'">'+ districtsObj.district_name +'</option>');
    //             });

    //         });
    //     });
    </script>
@endsection