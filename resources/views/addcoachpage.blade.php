
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
<td><b>Item Id</b></td>
<td><b>Email</b></td>
<td><b>First Name</b></td>
<td><b>Last Name</b></td>
<td><b>Description</b></td>
<td><b>Image</b></td>
<td><b>Phone</b></td>
<td><b>Password</b></td>
<td><b>Delete_Button</b></td>
<td><b>Add coach</b></td>


</thead>
</tr>

@foreach($data as $item )

<tr>
<td><b>{{$item->application_id}}</b></td>
<td>{{$item->email}}</td>
<td>{{$item->first_name}}</td>
<td>{{$item->last_name}}</td>
<td>{{$item->description}}</td>
<td>{{$item->image}}</td>
<td>{{$item->phone}}</td>
<td>{{$item->password}}</td>

<td><a href="addcoach/delete/{{$item->email}}" class="btn btn-success ">Delete</a></td>
<td><a href="addcoach/accept/{{$item->email}}" class="btn btn-success ">Add coach</a></td>





</tr>


@endforeach


</thead>

</table>

    


</body>
</html>