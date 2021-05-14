<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



  
</head>
<body>
    
<table border="4" class="table table-striped ">
<thead >

<tr>
<td><b>ID</b></td>
<td><b>Name</b></td>
<td><b>Email</b></td>
<td><b>Mobile</b></td>
<td><b>Gender</b></td>
<td><b>Weight</b></td>
<td><b>Height</b></td>
<td><b>Description</b></td>
<td><b>Address</b></td>
<td><b>Payment</b></td>
<td><b>Delete</b></td>




</thead>
</tr>

@foreach($members as $item )

<tr>
<td><b>{{$item['id_d']}}</b></td>
<td>{{$item['name']}}</td>
<td>{{$item['email']}}</td>
<td>{{$item['phone']}}</td>
<td>{{$item['gender']}}</td>
<td>{{$item['weight']}}</td>
<td><b>{{$item['height']}}</b></td>
<td><b>{{$item['goal']}}</b></td>
<td><b>{{$item['address']}}</b></td>
<td><b>{{$item['payment']}}</b></td>

<td><a href="diet/delete/{{$item->id_d}}" class="btn btn-success ">Done</a></td>









</tr>


@endforeach


</thead>

</table>

    


</body>
</html>