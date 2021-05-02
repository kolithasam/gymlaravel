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
</head>
<body>
    
<h1>Singup Form</h1>
<form action="user" method="POST">
@csrf
<input type="text" name="first_name" placeholder="Enter Name"> <br><br>
<input type="text" name="last_name" placeholder="Enter Last name"> <br><br>
<input type="email" name="email" placeholder="Enter email"> <br><br>
<input type="text" name="phone" placeholder="Enter Phone Number"> <br><br>
<input type="password" name="password" placeholder="Enter Password"> <br><br>


<button type="submit">Register Now</button>



</form>







</body>
</html>