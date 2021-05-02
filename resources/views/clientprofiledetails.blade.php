<!DOCTYPE html>
<html>
 <head>
  <title>How Send an Email in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
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
  </style>
 </head>
 <body>
  <br />
  <br />
  <br />
  <div class="container box">
   <h3 align="center">Enter Your Details</h3><br />


   <form method="post" action="" enctype="multipart/form-data">
   @csrf

   @if (!$i== null)





    <div class="form-group">
     <label><h2>Your Email</h2></label>
        <h3>
     
        {{$i->email}}
        </h3>
    </div>
    <div class="form-group">
     <label> <h2>Your Height</h2></label>
     <h3>

     {{$i->height}}
     </h3>
    </div>
    <div class="form-group">
     <label> <h2>Your Weight</h2></label>
     <h3>
    
     {{$i->weight}}
     </h3>
    </div>

    <div class="form-group">
     <label> <h2>Your Age</h2></label>
     <h3>

     {{$i->age}}
     </h3>
    </div>


    <div class="form-group">
     <label> Your Body goal</label>
     <h3>
     {{$i->goal}}
     </h3>
    </div>





    <div class="form-group">
     <input type="submit"  class="btn btn-info" value="DONE" />
     <input type="submit"  class="btn btn-info" value="Update" />
    </div>

 
@endif
   </form>
       

  </div>
 </body>
</html>