<!-- error messege -->
@if($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger" style="color:red;font-weight:bold;">{{ $error }}</div>
@endforeach
@endif

<!-- success massage  -->
@if(session()->has('success'))
<div class="alert alert-success" style="color:green;font-weight:bold;">
    {{ session()->get('success') }}
</div>
@endif

<!-- success massage  -->
@if(session()->has('error'))
<div class="alert alert-danger" style="color:green;font-weight:bold;">
    {{ session()->get('error') }}
</div>
@endif
{{-- Warning Message --}}
@if(session()->has('warning'))
<div class="alert alert-danger" style="color:rgb(243, 7, 7);font-weight:bold;">
    {{ session()->get('warning') }}
</div>
@endif