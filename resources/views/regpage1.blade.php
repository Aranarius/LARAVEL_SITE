
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
  <style>
body {
    font-family: Comfortaa;
          background-color: whitesmoke;
          color:#337AB7;
      }
      .container {
    margin-top:50px;
      }
      #regg{
          text-align: center;

      }
      h1 {
    color:#337AB7;
    font-size: 500%;
/*          -webkit-filter: drop-shadow(0 1px 3px rgba(0,0,0,.5));
		-moz-filter: drop-shadow(0 3px 4px rgba(0,0,0,.5));
		-ms-filter: drop-shadow(0 3px 4px rgba(0,0,0,.5));v
		-o-filter: drop-shadow(0 3px 2px rgba(0,0,0,.5));
		filter: drop-shadow(0 3px 2px rgba(0,0,0,.5));
                margin-bottom: 10px;*/
      }
      p{
    color:#337AB7;
    font-size: 300%;
      }

      #marg{
          margin-top: 80px;
      }

      button{
    color:#337AB7;
    -webkit-filter: drop-shadow(0 1px 10px rgba(0,0,0,.5));
		-moz-filter: drop-shadow(0 3px 4px rgba(0,0,0,.5));
		/*-ms-filter: drop-shadow(0 3px 4px rgba(0,0,0,.5));*/
		-vo-filter: drop-shadow(0 3px 2px rgba(0,0,0,.5));
		filter: drop-shadow(0 3px 2px rgba(0,0,0,.5));
                margin-bottom: -10px;
      }
      #email{
      -webkit-filter: drop-shadow(0 1px 10px rgba(0,0,0,.5));
		-moz-filter: drop-shadow(0 3px 4px rgba(0,0,0,.5));
		/*-ms-filter: drop-shadow(0 3px 4px rgba(0,0,0,.5));*/
		-vo-filter: drop-shadow(0 3px 2px rgba(0,0,0,.5));
		filter: drop-shadow(0 3px 2px rgba(0,0,0,.5));

      }
      #pwd{
      -webkit-filter: drop-shadow(0 1px 10px rgba(0,0,0,.5));
		-moz-filter: drop-shadow(0 3px 4px rgba(0,0,0,.5));
		/*-ms-filter: drop-shadow(0 3px 4px rgba(0,0,0,.5));*/
		-vo-filter: drop-shadow(0 3px 2px rgba(0,0,0,.5));
		filter: drop-shadow(0 3px 2px rgba(0,0,0,.5));

      }
  </style>
</head>
<body>
    <div class="container" id="regg">
        <div class=" text-center">
            <h1>Welcome to Delta</h1>
            <p>login or sign in</p>
        </div>
  <form>
    <div class="form-group" id="marg">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox ">
      <label><input type="checkbox"> Remember me </label>
    </div>
    <button type="submit" class="btn btn-default btn-lg">Login</button>

          <a href="{{ url('/') }}">
<span class="glyphicon glyphicon-chevron-left">
</span></a>



</form>
</div>


</br>
</br>
</br>


<div class="row text-center">
<button type="submit" class="btn btn-info btn-lg">VK</button>
<button type="submit" class="btn btn-primary btn-lg">Facebook</button>
<button type="submit" class="btn btn-danger btn-lg">Google</button>
</div>



</body>