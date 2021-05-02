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
<br><br>
<center>
Category ID
 
<h3>0:-Chest Workouts</h3>
<h3>1:-Shoulder Workouts</h3>
<h3>2:-Back Workouts</h3>
<h3>3:-Legs Workouts</h3>
<h3>4:-Biceps Workout</h3>
<h3>5:-Tricep Workouts</h3>
<h3>6:-Abs Workouts</h3>
<h3>7:-Cardio Workouts</h3>
  

</center>
<br><br>
<table border="4" class="table table-striped ">
<thead >

<tr>
<td><b>Workout Id</b></td>
<td><b>Category Id</b></td>
<td><b>Name</b></td>
<td><b>Date</b></td>
<td><b>Description</b></td>
<td><b>Delete_Button</b></td>


</thead>
</tr>

@foreach($members as $item )

<tr>
<td><b>{{$item['w_id']}}</b></td>
<td>{{$item['category_id']}}</td>
<td>{{$item['name']}}</td>
<td>{{$item['date']}}</td>
<td>{{$item['note']}}</td>


<td><a href="workout/delete/{{$item->w_id}}" class="btn btn-success ">Delete</a></td>

<td><a href="/edit/{{$item->w_id}}" class="btn btn-success ">Update</a></td>








</tr>


@endforeach


</thead>

</table>


</body>
</html>