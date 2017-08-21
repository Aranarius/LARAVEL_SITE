
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
            <li class="active"><a href="{{ url('/') }}"> <span class="glyphicon glyphicon-search"></span> Home</a></li>
            <li><a href="{{ url('/categories') }}"> <span class="glyphicon glyphicon-folder-open"></span> Categories</a></li>
            <li><a href="{{ url('/aboutus') }}"> <span class="glyphicon glyphicon-info-sign"></span> About us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if ($user = Auth::user())
                <li><a href='{{ url('/logout') }}' > log out</a></li>

            @endif
            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>


@if ($user = Auth::user())
    <div class="jumbotron  text-left container">
        <h3>Hello my friend {{$user->name}} !</h3>
    </div>
@endif



<div class="jumbotron text-center container-fluid">
    <div class="row">
        <div class="col-lg-6">
    <h1> <span class="glyphicon glyphicon-pawn"></span> Работники Delta</h1>
        </div>
        <div class="col-lg-6 ">
            <img src="http://www.majorbusinessbreakthrough.com/wp-content/uploads/2013/06/fotolia_13170878_subscription_l.jpg" id="picture1" >
        </div>
    </div>
        </div>
<?php
    $user = DB::table('customers')->first();

    echo "<div class='container'> <h3>$user->name </h3></div>";
    echo "<div class='container'><p>$user->email </p></div>";



//    $titles = DB::table('customers')->pluck('name')->take(8);
//    $pitles = DB::table('customers')->pluck('email')->take(8);
$titles = DB::table('customers')->skip(0)->take(10)->get();;
$pitles = DB::table('customers')->skip(10)->take(15)->get();;

foreach ($titles as $title) {

    echo "<div class='col-sm-6' > $title->name</div>";
    echo "<div class='col-sm-6' > $title->email</div>";
    echo "</br>";
}
echo "</br>";
echo "</br>";
echo "</br>";
    ?>


<div class="jumbotron text-center container-fluid">
    <div class="row">
        <div class="col-lg-7">
    <h1><span class="glyphicon glyphicon-piggy-bank"></span> Покупатели Delta</h1>
        </div>
        <div class="col-lg-5 ">
            <img src="http://www.freestockphotos.name/wallpaper-original/wallpapers/group-of-people-smiling-3794.jpg" id="picture1" >
        </div>
    </div>
    </div>



<?php


    $pitles = DB::table('customers')->skip(10)->take(65)->get();;

    foreach ($pitles as $pitle) {

        echo "<div class='col-sm-4'> $pitle->name</div>";

    }


    ?>

<div  class="col-lg-12" id="korobok">
    <div class="text-left container"><h2><small>Delta</small></h2></div>
</div>

</body>
