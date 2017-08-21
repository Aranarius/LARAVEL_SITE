<html lang="en">
<head>

    <title>Site</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jQuery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="{{ asset('css/somecss.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar ">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand lg-md-9" href="#">Delta</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#"> <span class="glyphicon glyphicon-search"></span> Home</a></li>
            <li><a href="#"> <span class="glyphicon glyphicon-folder-open"></span> Categories</a></li>
            <li><a href="{{ url('/HomePage') }}"> <span class="glyphicon glyphicon-info-sign"></span> About us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
<div class="container text-centered">
<h1> All Ok! </h1>
    <h3>You sign in as auth user.</h3>
</div>