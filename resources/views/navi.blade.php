<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">



<style type="text/css">
	
#imgnav{

width:85px;
height: 50px; 


}
#imgnav{


margin-left: -30px;
margin-top: -5px;



}
#national{


  margin-left: -20px;
}
#about{


font-size: 13px;

}







.opaque-navbar {
    background-color: rgba(0,0,0,0.5);
    height: 60px;
    border-bottom: 0px;
    transition: background-color .5s ease 0s;
}

.opaque-navbar.opaque {
    background-color: #e6eded;
    height: 115px;
    transition: background-color .5s ease 0s;

}

ul.dropdown-menu {
    background-color: black;
}



  .opaque-navbar {
    background-color:black;
    height: 115px;
    transition: background-color .5s ease 0s;
}



	




</style>
</head>
<body>
	




	<div class="navbar navbar-inverse navbar-fixed-top opaque-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMain">
  <span class="glyphicon glyphicon-chevron-right" style="color:white;"></span>
    
  </button>
  <a class="navbar-brand" href="#">
         <img src="/Images/icon.png" alt="Gym.lk" id="imgnav" style="width: 60px;" > 
        </a>
   

      <a class="navbar-brand" href="#" align="left" id="national">GYM.LK</a>
    </div>
    <div class="collapse navbar-collapse" id="navMain">
    	
      <ul class="nav navbar-nav pull-right" id="about">

        <li class="active"><a href="/">HOME</a></li>

        <li><a href="/store"><b>Store <br> </b></a></li>
        <li><a href="/topworkout"><b>Top</b>Workout</a></li> 
        <li><a href="/articals"><b>Articals</b></a></li> 
        <li><a href="/clothing"><b>Clothing & Accessories</b></a></li> 
        <li><a href="/trainwithus"><b>Train With Us</b></a></li>
        <li><a href="/dietplans"><b>Diet Plans</b></a></li>


        <li><a><input type="text" placeholder="Search.."></a></li>
        <li><a href="/account"><b >Sign in</b></a></li>
        @if(Auth::check())
        <li><a href="" style="background-color: black;"><b style="color: white;">{{Auth::user()->first_name}}</b></a></li>
        <li><a href="/logout" style="background-color: black;"><b style="color: white;">logout</b></a></li>
        @endif
        	 
        
        


      </ul>
    </div>
  </div>
</div>
<script type="text/javascript"> 

         $(window).scroll(function() {
         if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
         {
            $('.opaque-navbar').addClass('opaque');
                } else {
         $('.opaque-navbar').removeClass('opaque');
       }

});
     </script>

@yield('content')
</body>
</html>