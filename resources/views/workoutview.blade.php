<!DOCTYPE html>
<html lang="en">

<head>
  <title>Add protein ads</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  <style type="text/css">
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
      width: 130px;
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

    .hcc {


      background: url("/Images/");
    }



    .body {

      background-color: re;

    }
  </style>





</head>



<body>


  <div class="">

    @extends('navi')
    @section('content')

  </div>

  @endsection



  <br>
  <br>
  <br>
  <br>
  <br>






  <div class="container">








    @if (!$i== null)

    <h1> <label>{{$i->name}}&nbsp;&nbsp;::&nbsp;&nbsp;{{$i->date}}</label> </h1><br><br><br><br>
    <div class="row">

      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <figure>
          <img class="img-responsive full-width" src="/images/{{$i->image}}" alt="Top workouts" style="height:500px " width="550px" />

        </figure>

      </div>

      <div class="col-sm-3">
        <h1></h1>
      </div>
    </div>
    <br><br>
    <div class="row">
      <div class="col-sm-9"> <label>{{$i->note}}</label> </div>
      <div class="col-sm-3">



      </div>
    </div>
  </div>






  @endif



  <br><br><br><br><br><br><br><br><br><br><br>

  <div>

    <footer>

      @extends('footer')
      @section('content')

    </footer>




  </div>




</body>

</html>