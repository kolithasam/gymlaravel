<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Update Users</h1>
<form action="/userupdate/{{$data['email']}}" method="POST">
@csrf
<input type="hidden" name="email" value="{{$data['email']}}">




<div class="form-group">
<input type="text" name="first_name" value="{{$data['first_name']}}"><br><br><br>
</div>  

<div class="form-group">
<input type="text" name="last_name"  value="{{$data['last_name']}}"><br><br><br>
</div>

<div class="form-group">
<input type="text" name="phone"   value="{{$data['phone']}}"><br><br><br>
</div>

<div class="form-group">
<input type="text" name="role"   value="{{$data['role']}}"><br><br><br>
</div>

<div class="form-group">
<input type="text" name="password"   value="{{$data['password']}}"><br><br><br>
</div>

<div class="form-group">
<button type="submit"  class="btn more" id="button" style="vertical-align:middle">Update</button>
    </div>











</form>



</body>
</html>