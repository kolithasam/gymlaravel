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
    <thead>

      <tr>
        <td><b>Order Id</b></td>
        <td>Order Item</td>
        <td><b>Name</b></td>
        <td><b>Email</b></td>
        <td><b>Mobile</b></td>
        <td><b>Postcode</b></td>
        <td><b>Address</b></td>
        <td><b>Payment</b></td>

        <td><b>Delete_Button</b></td>



    </thead>
    </tr>

    @foreach($members as $item )

    <tr>
      <td><b>{{$item['order_ids']}}</b></td>
      <td>{{$item['item_name']}}</td>
      <td>{{$item['name']}}</td>
      <td>{{$item['email']}}</td>
      <td>{{$item['mobile']}}</td>
      <td>{{$item['postcode']}}</td>
      <td>{{$item['address']}}</td>
      <td>{{$item['category']}}</td>




      <td><a href="store/delete/{{$item->order_ids}}" class="btn btn-success ">DONE</a></td>








    </tr>


    @endforeach


    </thead>

  </table>




</body>

</html>