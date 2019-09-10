<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>{{ config('app.name', 'Gawon Bariki') }}</title>
    <!-- Favicons -->
    <link href="/images/tr.ico" rel="icon">
    <link href="/images/tr.ico" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/stylesheet/css/style.css" rel="stylesheet">
    <link href="/stylesheet/css/style-responsive.css" rel="stylesheet">
</head>

<body>
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <div id="login-page">
        <div class="container">
            @include('partials.messages')
            <form class="form-login" action="/admin/gb-admin-signup" method="POST">
                @csrf
                <h2 class="form-login-heading">Register</h2>
                <div class="login-wrap">
                    <input type="text" class="form-control class="form-control :class="{ 'is-invalid': form.errors.has('name') }" name="name" placeholder="Full Name" autofocus>
                    <has-error :form="form" field="name"></has-error>
                    <br>
                    <input type="text" class="form-control class="form-control :class="{ 'is-invalid': form.errors.has('email') }" name="email" placeholder="Email Address" autofocus>
                    <has-error :form="form" field="email"></has-error>
                    <br>
                    <input type="password" class="form-control class="form-control :class="{ 'is-invalid': form.errors.has('password') }" name="password" placeholder="Password" autofocus>
                    <has-error :form="form" field="password"></has-error>
                    <br>
                    <input type="password" class="form-control class="form-control :class="{ 'is-invalid': form.errors.has('cpassword') }" name="cpassword" placeholder="Confirm Password">
                    <has-error :form="form" field="cpassword"></has-error>
                    <br>
                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i>
                        SIGN UP</button>
                    <hr>
                    <div class="registration">
                        Already have an account?<br />
                        <a class="" href="/admin/gb-admin-login">
                            Sign In
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/lib/jquery/jquery.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="/lib/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("/images/tr.png", {
            speed: 500
        });
    </script>
</body>

</html>
