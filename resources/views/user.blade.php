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

<br>
  <br>
  <br>  <br>
  <br>
  <br>






    <center>
<h1>Singup Form</h1> <br><hr><br><br><br>

<div id="error">
</div>
<form action="user" method="POST">
@csrf
<label >First Name :- </label>
<input id="name" type="text" name="first_name" placeholder="Enter Name"  required> <br><br>
<label > Last Name:- </label>
<input  id="last" type="text" name="last_name" placeholder="Enter Last name" required> <br><br>
<label >Email &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; :- </label>
<input id="email" type="email" name="email" placeholder="Enter email" required> <br><br>
<label > Mobile  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-</label>
<input id="phone"   type="text" name="phone" placeholder="Enter Phone Number" required> <br><br>
<label > Password:- </label>
<input    id="password"  type="password" name="password" placeholder="Enter Password" required> <br><br>


<button type="submit"  class="btn more" id="button" style="vertical-align:middle">Register Now</button>



</form>



</center>


<br><br><br><br><br><br>
    
    <footer>
        
        @extends('footer')
  @section('content')
        
        </footer>

    

    <script>
    
    const name = document.getElementById('name')
    const last = document.getElementById('last')
    const email = document.getElementById('email')
    const phone = document.getElementById('phone')
    const error = document.getElementById('error')
    const password = document.getElementById('password')


    from.addEventListener('submit',(e)=> {
     
      let messages =[]
      if(name.value ===''||name.value ==null) {

     messages.push('Name is required')

      }

       if(password.value.length  <=5)
       {

        messages.push('Password must be longer than 5 characters')


       }


       if(password.value.length  >= 25)
       {

        messages.push('Password must be less than 25 characters')


       }
    




      if(messages.length > 0)

      {
         e.preventDefault()
         errorElement.innerText = message.join(',')



      }




    })
    </script>


</body>

</html>