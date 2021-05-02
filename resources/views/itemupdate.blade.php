<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Update Item</h1>
<form action="/itemupdate/{{$data['item_id']}}" method="POST">
@csrf
<input type="hidden" name="item_id" value="{{$data['item_id']}}">




<div class="form-group">
<input type="text" name="name" value="{{$data['name']}}"><br><br><br>
</div>  

<div class="form-group">
<input type="text" name="description"  value="{{$data['description']}}"><br><br><br>
</div>

<div class="form-group">
<input type="text" name="main_image"   value="{{$data['main_image']}}"><br><br><br>
</div>

<div class="form-group">
<input type="text" name="price"   value="{{$data['price']}}"><br><br><br>
</div>

<div class="form-group">
<button type="submit"  class="btn more" id="button" style="vertical-align:middle">Update</button>
    </div>













</form>



</body>
</html>