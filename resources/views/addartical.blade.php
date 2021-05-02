<!DOCTYPE html>
<html lang="en">

<head>
  <title>Add Item ads</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <h2>Add Articals </h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="addartical" method="post" enctype="multipart/form-data">
      @csrf
      


      <div class="form-group">
        <label>Artical Name:</label>
        <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name" required>
      </div>

      <br>
     
      
      <div class="form-group">
        <label>Date:</label>
        <input type="name" class="form-control" id="date" placeholder="Enter Name" name="date" required>
      </div>

      <div class="form-group">
        <label>Artical</label>
        <textarea type="text" name="note" rows="4" cols="50" required>

 </textarea>


      </div>


      <br>


      <input type="submit" value="Upload" />
    </form>
  </div>




  </form>

  </div>





</body>

</html>