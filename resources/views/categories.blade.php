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
{{--ШАПКА--}}
<nav class="navbar ">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand lg-md-9" href="#">Delta</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{ url('/') }}"> <span class="glyphicon glyphicon-home"></span> Home</a></li>
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
{{--ШАПКА конец--}}
{{-- imua usera --}}



    @if ($user = Auth::user())
        <div class="jumbotron  text-left container">
            <h3>Hello my friend {{$user->name}} !</h3>
        </div>
    @endif
    {{-- imua usera --}}


<div class="jumbotron text-center" id="wer">
 <h1>Одежда для вас</h1>
    <small>На любой выбор!</small>
</div>
<div class="container  jumbotron">
<div class="row">


    <div class="col-sm-4">
        <h3><small>Куртки</small></h3>

            <img style="width: 304px; height: 336px" src="https://outfit.kiev.ua/wp-content/uploads/image/camel-2015-kurtka-black-1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
        </div>
    <div class="col-sm-8">
    <div  id="wer2">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
        Lorem ipsum dolor sit amet, consectetur adipisicing elit...
    </div>
    </div>


        </div>


    </br>
    <div class="row">
        <div class="col-sm-4">
        <h3><small>Обувь</small></h3>
        <img style="width: 284px; height: 336px" src="http://pi0.lmcdn.ru/product/N/I/NI464AWFMW82_1_v1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
            <div class="col-sm-8">
                <div  id="wer2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                </div>
            </div>
    </div>
        <div class="row">
            <div class="col-sm-4">
        <h3><small>Головные уборы</small></h3>
        <img style="width: 304px; height: 336px" src="http://trailhead.ru/sites/default/files/styles/product_thumb_in_category_fixed/public/product_2692_img_17806.jpg?itok=p7zXbSaE" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
        <div class="col-sm-8">
            <div  id="wer2">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                Lorem ipsum dolor sit amet, consectetur adipisicing elit...
            </div>
        </div>
    </div>
    </br>
            <div class="row">
                <div class="col-sm-4">
        <h3><small>Куртки</small></h3>
        <img style="width: 304px; height: 336px" src="http://www.columbia.ru/i/243_315/productsimg/20042/7jVjey6B.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                    <div class="col-sm-8">
                        <div  id="wer2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                        </div>
                    </div>
    </div>
    </br>

                    <div class="col-sm-4">
        <h3><small>Кофты</small></h3>
       <img style="width: 304px; height: 336px" src="https://snowqueen.ru/media/catalog/product/cache/1/small_image/252x378/9df78eab33525d08d6e5fb8d27136e95/1/6/166664000_1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
        <div class="col-sm-8">
            <div  id="wer2">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                Lorem ipsum dolor sit amet, consectetur adipisicing elit...
            </div>
        </div>
    </div>
    </br>

                        <div class="col-sm-4">
        <h3><small>Ботинки</small></h3>
        <img style="width: 304px; height: 336px" src="http://torgovla.com/Administration/914/icon/icon.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                            <div class="col-sm-8">
                                <div  id="wer2">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                </div>
                            </div>
    </div>
    <div  class="col-lg-12" id="korobok">
        <div class="text-left container"><h2><small>Delta</small></h2></div>
    </div>
</div>
</div>

</div>

</body>
