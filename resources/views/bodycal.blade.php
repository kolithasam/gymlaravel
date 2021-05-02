<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
 

<style type="text/css">
	body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


#button-cart{
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
    #button-cart span{
         cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
                 }
    #button-cart span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

#button-cart:hover span {
  padding-right: 25px;
}

#button-cart:hover span:after {
  opacity: 1;
  right: 0;
}


.heads{

    font-size: 45px;

}
.content-ul{

font-family: Arial, Helvetica, sans-serif;



}
.other{

background-color: #E0C11E;
font-size: 20px;
height: 35px;




}

#button-cartc{


    font-size:15px; 
}
.oth{
        color: white; 
        text-align:center; 
        
}
.othr{


    
}
.hh3{
    color:#E0C11E;

}
.category-box{


border:solid; 
color: #E0C11E;


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






	<main class="main">
    <div class="container">
        <div class="page-header">
            <h1 style="color:#E0C11E;">Body Calculater</h1><br>
            <ul class="breadcrumb" style="color:#adadad;">
                <li><a href="/" style="color:#adadad;"><i class="fa fa-home"></i></a></li>                
            


            
                <li><a href="/store"style="color:#adadad;">Store</a></li>
                               

                               <li><a href="/topworkout"style="color:#adadad;">Top Workouts</a></li>
                               <li><a href="/weightmg"style="color:#adadad;">Weight Management</a></li>
                               <li><a href="/clothing"style="color:#adadad;">Clothing & Accessories</a></li>
                               <li><a href="/kitchen"style="color:#adadad;">Kitchen</a></li>
                               <li><a href="/trainwithus"style="color:#adadad;">Train with Us</a></li>
                               <li><a href="/bodycal"style="color:#adadad;">Body Calculater</a></li>
                            
                               <li><a href="/dietplans"style="color:#adadad;">Diet Plans</a></li>
                               






                                 
            </ul>
        </div>
    </div>
    <div class="package container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-9">
                                    <div class="package-banner">
                                                                                    <img src="/Images/bmi-1024x519.jpg" title="cal" alt="cal" class="img-responsive"/>
                                                                        </div>
                                <div class="row">
                    <div class="col-xs-12 col-sm-8">
                        <div class="package-desc"><br><br>

<br>
<br>
<br>
<br>
<br>

                        <div class="container">
  <div class="row">
   <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="service-item"> 
                <a href="/bmical">
                        <figure>
                            <img class="img-responsive full-width" src="/Images/bmi.jpg" alt="Supplements" style="height:160px " width="240px" />
                        </figure>
                        <div class="desc clearfix">   
                            <h3>BMI Calculater</h3><br>
                            <p>Find your BMI</p>
                                             
                                             
                                              
                                              
                        </div>
                        <center><button class="btn more" id="button" style="vertical-align:middle"><span href="/bmical">View More</span></button></center>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="service-item"> 
                     <a href="/caloriescal">
                    
                        <figure>
                            <img class="img-responsive full-width" src="/Images/best-calorie-calculator-1.jpg" alt="Top workouts"style="height:160px " width="252px"  />
                        </figure>
                        <div class="desc clearfix">   
                            <h3> Calories Calculater</h3>
                            <br>
                            
                            <p>Find your daily Calorie intake..-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        </div>
                      <center><button class="btn more" id="button" style="vertical-align:middle"><span href="/caloriescal">View More</span></button></center>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="service-item"> 
                   <a href="/bodyfatcal">
                        <figure>
                            <img class="img-responsive full-width" src="/Images/body-fat-calculator.jpg" alt="Fitness and Health Articals" style="height:160px " width="250px"  />

                            <h3>Body fat calculater</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br><br>
                        </figure>
                        <div class="desc clearfix">   
                            
                        </div>
                        <center><button class="btn more" id="button" style="vertical-align:middle"><span  href="/bodyfatcal">View More</span></button></center>
                    </a>
                </div>
            </div>
            
          </div>
        </div>


        
                     
                                                       
                        </div>
                                            </div>
                    <div class="col-xs-12 col-sm-4"> <br>
																<div class="package-contact">
                                                        <h3></h3>
                            <ul>
                                                               
                                   
                                
                                                            </ul>
                            							</div>
						                        
                                            </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="related-packages">
                  <a href=" " class="btn btn-primary btn-channel" id="button-cart" style="width: 230px;"><i class="fa fa-stethoscope" aria-hidden="true"></i> Select a Trainer</a>
                                            <h2 class="other"> <p class="oth">                 
                            Other Packages                    </p>                   </h2><br>
                                                                              
                                                                                <div class="category-box">
                                <a href="health.php" >
                                    <img src="/Images/screen-shot-2019-05-09-at-6.27.47-pm.png" alt="S" title="Store" class="img-responsive" />
                                   <center> <h3 class="hh3">Store</h3></center> </div>   <br>       
                                                                                <div class="category-box">
                                <a href="ct.php">
                                    <img src="/Images/bigstock-group-of-young-people-running-85541696.jpg" alt="Fitness and Health Articals" title="Fitness and Health Articals" class="img-responsive" />
                                    <h3 class="hh3">Fitness and Health Articals</h3> <br>    
                                </a> 
                            </div>  <br>        
                                                                                <div class="category-box">
                                <a href="tunnel.php">
                                    <img src="/Images/diet-healthy-food-lifestyle-health-concept-sport-exercise-equipment-workout-and-gym-background-nutrition-detox-salad-f-179855057.jpg" alt="Kitchen" title="Kitchen" class="img-responsive" />
                                    <h3 class="hh3">Kitchen</h3>     
                                </a> 
                            </div> <br>    


                            <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/store">Store</a>
  <a href="/topworkout">Top Workout</a>
  <a href="/articals">Fitness and Health Articals</a>
  <a href="/clothing">Clothing & Accessories</a>
  <a href="/kitchen">Kitchen</a>
  <a href="/trainwithus">Train with Us</a>
  <a href="/dietplans">Diet Plans</a>
  <a href="/bodycal">Body Calculter</a>
  <a href="/ "> Back</a>

</div>
  


<div id="main">
  
  <span style="font-size:30px;cursor:pointer;color:grey" onclick="openNav()">&#9776; Other Options</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>


<br>
<br>
<br><br>
<br>


     
                                                       
                       
                </div>
            </div>
        </div>
    </div>
</main>


<footer>
        
        @extends('footer')
  @section('content')
        
        </footer>



</body>
</html>