<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet" />


</head>

  <body class="login-body">

    <div class="container">
      @include('messages.message')

      <form class="form-signin" action="{{url('sign-up')}}" method='post'>
        @csrf
        <h2 class="form-signin-heading">registration now</h2>
        <div class="login-wrap">
            <p>Enter your personal details below</p>
            <input type="text" class="form-control" placeholder="First Name" name="first_name" autofocus>
            <input type="text" class="form-control" placeholder="last Name" name="last_name" autofocus>
            <input type="text" class="form-control" placeholder="mobile" name="mobile" autofocus>
            <input type="text" class="form-control" placeholder="Email" name="email" autofocus>
            <input type="password" class="form-control" placeholder="Password" name="password">
            <input type="password" class="form-control" placeholder="Re-type Password" name="confm_password">
            <label class="checkbox">
                <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

            <div class="registration">
                Already Registered.
                <a class="" href="{{url('login')}}">
                    Login
                </a>
            </div>

        </div>

      </form>

    </div>


  </body>

</html>
