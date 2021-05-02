<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
  <br>  <br>
  <br>
  <br>



<br>
<br>
<br>
<br>


<main class="main">
    <div class="container">
        <div class="page-header">
          <center>  <h1 style="color:#E0C11E;" >Clothing &Accessories</h1></center><br>
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
                              
</main>


<div class="container">
<div class="text-center">

      <div class="row">
           <div class="col-md-12">
           

           <div class="alert alert-danger" role="alert">
        
           </div>
         
               <form method="post" action="/saveTask">
             
               <input type="text" class="form-control" name="task" placeholder="Enter your Product">
               <input type="submit" class="btn btn-primary" value="Search">
               <input type="Clear" class="btn btn-warning" value="CLEAR">
               
               
               </form>



               <table class="table table-dark">
               <th>ID</th>
               <th>Item</th>
               <th>Product Name</th>
               <th>Price</th>


               
               
               <tr>
               <td> <h1>1</h1></td>
               <td><figure>
                            <img class="img-responsive full-width" src="/Images/scitec_whey_professional_2350g_2.jpg" alt="Top workouts"style="height:160px " width="100px"  />
                        </figure></td>
               <td>
               
             
       
               <h3>Scitec 100% Whey Protein
                   Professional
               </h3>
              

</td>
                 <td>
                     <h3>Rs 12500/=</h3>
                     <center><button class="btn more" id="button" style="vertical-align:middle"><span href="/performance">View More</span></button></center>
              
           
               </td>


               
               </tr>


       <hr>


       <tr>
               <td> <h1>2</h1></td>
               <td><figure>
                            <img class="img-responsive full-width" src="/Images/wheyisolate.jpg" alt="Top workouts"style="height:160px " width="100px"  />
                        </figure></td>
               <td>
               
             
       
               <h3>Scitec 100% Whey Isolate
                   
               </h3>
              

</td>
                 <td>
                     <h3>Rs 13000/=</h3>
                     <center><button class="btn more" id="button" style="vertical-align:middle"><span href="/performance">View More</span></button></center>
              
           
               </td>


               
               </tr>
               <tr>
               <td> <h1>3</h1></td>
               <td>
                   
               
               <figure>
                     <img class="img-responsive full-width" src="/Images/100%wheyprotein.png" alt="Top workouts"style="height:160px " width="100px"  />
              </figure></td>
               <td>
               
             
       
               <h3>Scitec 100% Whey Protein
                   
               </h3>
              

</td>
                 <td>
                     <h3>Rs 12000/=</h3>
                     <center><button class="btn more" id="button" style="vertical-align:middle"><span href="/performance">View More</span></button></center>
              
           
               </td>


               
               </tr>
               <tr>
               <td> <h1>4</h1></td>
               <td><figure>
                            <img class="img-responsive full-width" src="/Images/anaboliwhey.jpg" alt="Top workouts"style="height:160px " width="100px"  />
                        </figure></td>
               <td>
               
             
       
               <h3> Scitec Anabolic Whey
                   
               </h3>
              

</td>
                 <td>
                     <h3>Rs 12500/=</h3>
                     <center><button class="btn more" id="button" style="vertical-align:middle"><span href="/performance">View More</span></button></center>
              
           
               </td>


               
               </tr>






           
               </table>




</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<footer>
        
        @extends('footer')
  @section('content')
        
        </footer>




    
</body>
</html>