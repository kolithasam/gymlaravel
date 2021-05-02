<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Coach</title>


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
<br><br><br><br><br><br><br><br>
<center>
   







    <form action="coachqual" method="POST">
        @csrf
        <h1>Enter Your informations</h1>
        <textarea  name="qualification" rows="4" cols="50">
 
  </textarea>
        <br><br>
<h1>Enter your email address</h1>
        <input type="email" name="email" placeholder="Enter your email"> <br><br>


<button type="submit" class="btn more" id="button" style="vertical-align:middle" > Send</button>
<br>
<button class="btn more" id="button" style="vertical-align:middle"><a href="/emailcv" style="color: white;">  Next   </a></button>
     

    </form>
</center>
<br><br><br><br><br><br><br>
<div>
        <footer>
        
        @extends('footer')
  @section('content')
        
        </footer>
</div>


@endsection
      
  

</body>

</html>