<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  
  <style> 
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
width: 140px;
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
}</style>

</head>
<body>
<div class="">

@extends('navi')
  @section('content')

</div>

@endsection


<br><br><br><br><br><br><br>
<center>
<h3>Send your CV to this Email</h3><br>
<h1>GYMLK.GMAIL.COM</h1><br>
<h3>Using your signed email</h3><br>
<h3> We'll inform you after we check your CV</h3><br><br>
<h2>Thank You</h2>
<hr>
<button class="btn more" id="button" style="vertical-align:middle"><a href="/" style="color: white;">  Home   </a></button>
<hr>
</center>
<br><br><br><br><br>

<footer>
        
        @extends('footer')
  @section('content')
        
        </footer>
</div>


@endsection
      
  
    
</body>
</html>