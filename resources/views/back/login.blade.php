<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SONDAGE | Login</title>

    <link href="{{asset('back/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('back/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('back/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('back/css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">S.D</h1>
        </div>
        <h3>Welcome to Sondage</h3>

        @include('includes.validator')
        <form class="m-t" role="form" action="{{url('/login')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Connexion</button>

            <a href="#"><small>Forgot password?</small></a>
        </form>
        <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{asset('back/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('back/js/popper.min.js')}}"></script>
<script src="{{asset('back/js/bootstrap.js')}}"></script>

</body>

</html>

