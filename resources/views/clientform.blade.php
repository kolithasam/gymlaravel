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


    <div class="form-group">
     <label>Enter Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Your Height</label>
     <input type="text" name="height" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Your Weight</label>
     <input type="text" name="weight" class="form-control" value="" />
    </div>

    <div class="form-group">
     <label>Enter Your age</label>
     <input type="text" name="age" class="form-control" value="" />
    </div>






    <div class="form-group">
     <label>Enter Your Body goal</label>
     <textarea name="goal" class="form-control"></textarea>
    </div>





    <div class="form-group">
     <input type="submit"  class="btn btn-info" value="Submit" />
    </div>
   </form>
       

  </div>
 </body>
</html>