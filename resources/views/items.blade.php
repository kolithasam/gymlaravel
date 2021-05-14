<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proteins</title>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .service-item {


            border-width: 5px;
            border-style: outset;
        }

        #button {
            display: inline-block;
            border-radius: 4px;
            background-color: #1A908F;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 10px;
            width: 130px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 10px;
        }

        #button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        #button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        #button:hover span {
            padding-right: 25px;
        }

        #button:hover span:after {
            opacity: 1;
            right: 0;
        }

        h3 {

            text-align: center;
        }

        p {
            text-align: center;
        }




        #but {

width: 70px;
height: 50px;

background-color: #1A908F;

border-radius: 5px;


}  
#searchbox{

border-radius: 5px;
width: 500px;
height: 50px;


}
    </style>

</head>

<body> @extends('navi')
        @section('content')

  

    @endsection
    <br><br><br>



    <br>
    <br>
    <br>
    <br>
 

    <main class="main">
        <div class="container">
            <div class="page-header">
                <center>
                    <h1 style="color:#E0C11E;">Suppliments and  Accessories</h1>
                </center><br>
                <ul class="breadcrumb" style="color:#adadad;">
                    <li><a href="/" style="color:#adadad;"><i  class="fa fa-home"></i></a></li>





                    <li><a href="/store" style="color:#adadad;">Store</a></li>


                    <li><a href="/topworkout" style="color:#adadad;">Top Workouts</a></li>
                    <li><a href="/weightmg" style="color:#adadad;">Weight Management</a></li>
                    <li><a href="/clothing" style="color:#adadad;">Clothing & Accessories</a></li>
                    <li><a href="/kitchen" style="color:#adadad;">Kitchen</a></li>
                    <li><a href="/trainwithus" style="color:#adadad;">Train with Us</a></li>
                    <li><a href="/bodycal" style="color:#adadad;">Body Calculater</a></li>

                    <li><a href="/dietplans" style="color:#adadad;">Diet Plans</a></li>




                </ul>
            </div>
        </div>

    </main>
<center>   
            <form  action="/searchItems">
              <a>
                <input type="text" id=searchbox  name="search" placeholder="Search..">
                <button id="but" type="submit" style="color: #FFFFFF;" class="fa fa-search">
                </button>
              </a>
            </form>
        







</center>
    <div class="container">
        <div class="text-center">

            <div class="row">
                <div class="col-md-12">

<br><br><br><br><br><br>
            


                    <table class="table table-striped">
                        <th style="background: #1A908F;"><h3 style="color: white;">ITEMS</h3></th>
                        <th style="background: #1A908F;"><h3  style="color: white;">PRODUCT NAME</h3></th>
                        <th style="background: #1A908F;"><h3  style="color: white;">PRICE</h3></th>


                        @foreach($items as $item)
                            <tr>
                                <td>
                                  <center>  <figure>
                                        <img class="img-responsive full-width" src="/images/{{$item->main_image}}" alt="Top workouts" style="height:160px " width="100px" />
                                    </figure></center>
                                </td>
                                <td>
                                    <h3>{{$item->name}}</h3>
                                </td>
                                <td>
                                    <h3>{{$item->price}}</h3>
                                    <center><button class="btn more" id="button" style="vertical-align:middle"><a href="/item/{{$item->item_id}}" style="color: white;">View More</a></button></center>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                  


                </div>
            </div>
        </div>
    </div>





    <div>

<footer>
        
        @extends('footer')
  @section('content')
        
        </footer>




</div>


</body>

</html>
