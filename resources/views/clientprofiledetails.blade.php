<!DOCTYPE html>
<html>
 <head>
  <title>How Send an Email in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    #boxs {
            width: 600px;
            margin: 0 auto;
            border: 4px solid #ccc;
        }

        .has-error {
            border-color: #cc0000;
            background-color: #ffff99;
        }

  #button{


      width: 100px;
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
.hcc
{


  background: url("/Images/");
}



.body
{

background-color: re;

}

#in{


  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid  #1A908F;
  border-radius: 8px;
  height: 30px;
  

}


  </style>
 </head>


 @extends('navi')
  @section('content')



@endsection



<br><br><br><br><br><br><br><br><br>



 <body>
  <br />
  <br />
  <br />
  <div class="container box" id="boxs">
   <h2 align="center">Enter Your Details</h2><br />


   <form method="post" action="clientprofiledetails" enctype="multipart/form-data">
   @csrf


   @foreach( $clients as $client)

   <div class="form-group">
                <label>


                    <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Email ::</h3>
                </label> 
<center>
            <h4>    <input type="text"id="in" name="height" value=" {{$client->email}}"></h4>
            </div>
  
</center>


     <div class="form-group">
                <label>
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Height ::</h3>
                </label>
                <center>
              <h4>  <input type="text" name="height" id="in" value="{{$client->height}}"></h4>
            </div>
</center>
            <div class="form-group">
                <label>
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Weight ::</h3>
                </label>
          <center>  <h4>   <input type="text" id="in" name="height" value="{{$client->weight}}"></h4>
            </div></center> 

            <div class="form-group">
                <label>
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Age ::</h3>
                </label>
            <center>  <h4>  <input type="text" id="in" name="height" value="{{$client->age}}"></h4>
            </div></center>

            <div class="form-group">
                <label>
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Body Goal ::</h3>
                </label>
                <center>      <h4>  <input type="text" id="in" name="height" value="{{$client->goal}}"></h4>
            </div>
            </center>

            <br>
<center>

    <div class="form-group">
    <button class="btn more" id="button" style="vertical-align:middle"><a href="/clientprofile" style="color: white;">Done</a></button>
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="/cedit/{{$client->email}}" id="button" class="btn btn-info " type="submite">Update</a>
    </div>
 
</center>


<br><br>

    
    </div>



 
    @endforeach
   </form>
       

  </div>
  <br><br><br><br><br>
<footer>
        
        @extends('footer')
  @section('content')
        
        </footer>


      
  
 </body>
 @endsection
</html>




