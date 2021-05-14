<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>User</title>

<style> 


   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
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
}

#drop{

width:300px ;

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






    <center>
    <div class="container box">
<h1>Fill This Form</h1> <br><hr><br><br><br>


<form action="dietplans" method="post"  enctype="multipart/form-data">
@csrf

&nbsp;&nbsp;



<div class="form-group">
<label > Name &nbsp;:- </label>
<input id="name" type="text" name="name" placeholder="Enter Name"  required> <br><br></div>

<div class="form-group">
<label >Email&nbsp;  :- </label>
<input id="email" type="email" name="email" placeholder="Enter email" required></div> <br>

<div class="form-group">
<label > Mobile  :-</label>
<input id="phone"   type="text" name="phone" placeholder="Enter Phone Number" required> </div><br><br>



        <label>Gender:</label><br>
        <br>
        <select class="form-control" name="category" id="drop" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
<br><br>
      <div class="form-group">
<label > Your Body Weight :- </label>
<input id="weight" type="text" name="weight" placeholder="Enter weight"  required> </div><br><br>

<div class="form-group">
<label > Your Height :- </label>
<input id="name" type="text" name="height" placeholder="Enter height"  required> </div><br><br>

<div class="form-group">
<h4>Enter Your Body Goals</h4>

<div class="form-group">
       
        <textarea type="text" name="note" rows="4" cols="50" required>

 </textarea></div><br><br><br>

 <div class="form-group">
 <h4>Enter Your Address</h4>


       
        <textarea type="text" name="address" rows="4" cols="50" required>

 </textarea>
 </div><br><br><br>
 
 <div class="form-group" >
        <label>Payment Method:</label>
        <select class="form-control" name="payment" id="drop" required>
          <option value=" on delivery">Cash On Delivery</option>
         
        
        </select>
      </div>

<br><br>


<button type="submit"  class="btn more" id="button" style="vertical-align:middle">Order Diet</button>



</form>

    </div>

</center>




<br><br><br><br><br><br>
    
    <footer>
        
        @extends('footer')
  @section('content')
        
        </footer>

    



</body>

</html>

