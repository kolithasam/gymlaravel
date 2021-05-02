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


   @if(!$item->isEmpty())



   <div class="form-group">
     <label>{{$item[0]->name}}</label>
     <input type="text" name="item_name" class="form-control" value="" />
    </div>



    @endif


    <div class="form-group">
     <label>Enter Your Name</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Your Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Your Moble Number</label>
     <input type="text" name="mobile" class="form-control" value="" />
    </div>

    <div class="form-group">
     <label>Enter Your Postcode</label>
     <input type="text" name="postcode" class="form-control" value="" />
    </div>

   


    <div class="form-group">
     <label>Enter Your Address</label>
     <textarea name="address" class="form-control"></textarea>
    </div>



    <div class="form-group">
        <label>Payment Method:</label>
        <select class="form-control" name="category" id="category" required>
          <option value="Cash On Delivery">Cash On Delivery</option>
         
        
        </select>
      </div>



    <div class="form-group">
     <input type="submit"  class="btn btn-info" value="Submit" />
    </div>
   </form>
       

  </div>
 </body>
</html>