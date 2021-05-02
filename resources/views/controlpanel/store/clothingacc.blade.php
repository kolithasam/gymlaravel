<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add clothing ads</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="">

@extends('navi')
  @section('content')

</div>

@endsection
<br><br><br><br>

<div class="container">
  <h2>Add Clothing & Accessories ads</h2>
  <form action="submitform" method="post">
  @csrf

<div class="form-group">
<label for="image">Image:</label>
<input type="file" class="form-control" id="image" name="image">


</div>



    <div class="form-group">
      <label >Name::</label>
      <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label >price</label>
      <input type="Price" class="form-control" id="price" placeholder="Enter price" name="price">
    </div>


           <br>



    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
