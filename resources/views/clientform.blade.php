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

   .service-item{


border-width:5px;  
border-style:outset;
}
#button{
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
#button span{
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
h3{

text-align: center;
}
p{
text-align: center;
}
#in{


padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
border: 2px solid  #1A908F;
border-radius: 8px;
height: 30px;


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
  <br>
  <br />

  <div class="container box "id="boxs">
   <h3 align="center">Enter Your Details</h3><br />


   <form method="post" action="" enctype="multipart/form-data">
   @csrf
   @foreach( $clients as $client)

    <div class="form-group">

    <label>Enter Email</label>
     <input type="text" name="email"id="in" class="form-control" value="{{$client->email}}" required />
    </div>

    <div class="form-group">
     <label>Enter Your Height (Cm)</label>
     <input type="text" name="height"id="in" class="form-control" value="" required />
    </div>
    <div class="form-group">
     <label>Enter Your Weight (Kg)</label>
     <input type="text" name="weight"id="in" class="form-control" value="" required />
    </div>

    <div class="form-group">
     <label>Enter Your age</label>
     <input type="text" name="age"id="in" class="form-control" value="" required />
    </div>






    <div class="form-group">
     <label>Enter Your Body goal</label>
     <textarea name="goal" class="form-control"></textarea>
    </div>





    <div class="form-group">
    <button type="submit" class="btn more" id="button" style="vertical-align:middle">Submite</button>

    </div>
   </form>
       
   @endforeach
  </div>
  <br><br><br><br><br><br><br>
<footer>
        
        @extends('footer')
  @section('content')
        
        </footer>




</div>
        
    


</body>
@endsection
</html>