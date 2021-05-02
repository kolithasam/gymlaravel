<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>


<center><h1>Hire a coach</h1>
<form action="hiredby" method="POST">
@csrf
<label > Client Email:- </label>
<input type="email" name="client_email" placeholder="Enter email"> <br><br>
<label >  Coach Email:- </label>
<input type="text" name="coach_email" placeholder="Enter email "> <br><br>
<label >  Start date:- </label>

<input type="text" name="start_date" placeholder="Enter start date"> <br><br>
<br><br>

<label >  End date:- </label>

<input type="text" name="end_date" placeholder="Enter end date "> <br><br>
<br><br>





 <br><br>
 <br><br>


<button type="submit">Submit</button>



</form>



</center>








    
</body>
</html>