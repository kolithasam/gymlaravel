<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Protein View</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="">

    <br><br><br><br><br>


    <div class="row">
      <div class="col-sm-3" style="background-color:lavender;">.col-sm-3</div>
      <div class="col-sm-6" style="background-color:lavenderblush;">
        @if(!$item->isEmpty())
        <label>{{$item[0]->name}}</label>
        <br><br><br><br><br><br><br>
        <div class="row">
          <div class="col-sm-3" style="background-color:lavender;">.col-sm-3</div>
          <div class="col-sm-6" style="background-color:lavenderblush;"> <label>{{$item[0]->description}}</label> </div>
          <div class="col-sm-3" style="background-color:lavender;">.col-sm-3</div>
        </div>

        @endif



      </div>
      <div class="col-sm-3" style="background-color:lavender;">.col-sm-3</div>
    </div>

















</body>

</html>