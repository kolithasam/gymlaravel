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

<table border="4" class="table table-striped ">
<thead >

<tr>
<td><b>Artical Id</b></td>
<td><b>Name</b></td>
<td><b>Date</b></td>
<td><b>Description</b></td>
<td><b>Delete_Button</b></td>


</thead>
</tr>

@foreach($members as $item )

<tr>
<td><b>{{$item['id_artical']}}</b></td>
<td>{{$item['name']}}</td>
<td>{{$item['date']}}</td>
<td>{{$item['note']}}</td>




<td><a href="artical/delete/{{$item->id_artical}}" class="btn btn-success ">Delete</a></td>

<td><a href="/edit/{{$item->id_artical}}" class="btn btn-success ">Update</a></td>







</tr>


@endforeach


</thead>

</table>


</body>
</html>