<!DOCTYPE html>
<html>

<head>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial;
      color: white;
    }

    .split {
      height: 100%;
      width: 50%;
      position: fixed;
      z-index: 1;
      top: 0;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .left {
      left: 0;
      background-color: #111;
    }

    .right {
      right: 0;
      background-color: red;
    }

    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    .centered img {
      width: 300px;
      border-radius: 50%;
    }

    .service-item {


      border-width: 5px;
      border-style: outset;
    }

    #button {
      display: inline-block;
      border-radius: 4px;
      background-color: #1A908F;
      border: none;
      color: #FFFFFF;
      text-align: center;
      font-size: 20px;
      padding: 10px;
      width: 180px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 10px;
    }

    #button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }

    #button span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
    }

    #button:hover span {
      padding-right: 25px;
    }

    #button:hover span:after {
      opacity: 1;
      right: 0;
    }

    h3 {

      text-align: center;
    }

    p {
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="">

    @extends('navi')
    @section('content')

  </div>

  @endsection

  <div class="split left">
    <div class="centered">
      <img src="/Images/images.jpg" alt="Avatar woman">
      <h2 style="color: white;">Trainer</h2>
      <p style="color: white;">Register and show your fitness knowledge to the world</p>

      <center><button class="btn more" id="button" style="vertical-align:middle"><a href="/coachapplication" style="color: white;"> Register Now </a></button></center>
    </div>
  </div>

  <div class="split right" style="background-color: grey;">
    <div class="centered">
      <img src="/Images/client.jpg" alt="Avatar man">
      <h2>Client</h2>
      <p>Register now and make your day </p>
      <center><button class="btn more" id="button" style="vertical-align:middle"><a href="/user" style="color: white;"> Register Now </a></button></center>
    </div>
  </div>
  <div>
    <br><br><br><br><br><br><br>
    <footer>

      @extends('footer')
      @section('content')

    </footer>
  </div>


  @endsection





</body>

</html>