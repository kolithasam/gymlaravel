<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    #boxs {
      width: 600px;
      margin: 0 auto;
      border: 4px solid #ccc;
    }

    .has-error {
      border-color: #cc0000;
      background-color: #ffff99;
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
  </style>
</head>

<body>

  @extends('navi')
  @section('content')



  @endsection


  <br><br><br><br><br><br><br><br>





  <br />
  <br />
  <br />
  <div class="container box" id="boxs">
    <h3 align="center">Client :: {{$client->email}} Details</h3><br />


    <form method="" action="" enctype="multipart/form-data">
      @csrf
      &nbsp;&nbsp;&nbsp;

      <div class="form-group">

        <label>
          <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;::&nbsp;&nbsp;{{$client->email}} </h3>
        </label>

      </div>

      <div class="form-group">
        <label>
          <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Height (Cm)&nbsp;&nbsp;::&nbsp;&nbsp;{{$client->height}}</h3>
        </label>

      </div>
      <div class="form-group">
        <label>
          <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Weight (Kg)&nbsp;&nbsp;::&nbsp;&nbsp;{{$client->weight}}</h3>
        </label>

      </div>

      <div class="form-group">
        <label>
          <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;::&nbsp;&nbsp;{{$client->age}}</h3>
        </label>

      </div>

      <div class="form-group">
        <label>
          <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Body Goal&nbsp;&nbsp;&nbsp;&nbsp;::&nbsp;&nbsp;{{$client->goal}}</h3>
        </label>

      </div>






    </form>

  </div>

  <br><br><br><br><br>
  <div>

    <footer>

      @extends('footer')
      @section('content')

    </footer>




  </div>


</body>
@endsection

</html>