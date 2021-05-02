


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  
<style type="text/css">
	
  

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
    .hcc
    {
    
    
      background: url("/Images/");
    }
    
    
    
    .body
    {
    
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
  <br>
  <br>
  <br>

  <center>  <img src="/Images/profile.png" title="Store" alt="Store" style="height: 500px;" width="500px" class="img-responsive"/></center>





<center>


<div class="container">



  <div class="row">





   <div class="col-sm-3" > <center><button class="btn more" id="button" style="vertical-align:middle"><a href="/clientform" style="color: white;">Form</a></button></center></div>
   <div class="col-sm-3" ></div>
   <div class="col-sm-3" ></div>
   <div class="col-sm-3" > <center><button class="btn more" id="button" style="vertical-align:middle"><a href="" style="color: white;">Mydetails</a></button></center></div>

   
  </div>
</div>




<br><br><br><br><br><br><br><br><br><br><br>
</center>


</div>
<div>

<footer>
        
        @extends('footer')
  @section('content')
        
        </footer>




</div>
        
    


</body>

</html>