<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workouts</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


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
    </style>

</head>

<body>
    <div class="">

        @extends('navi')
        @section('content')

    </div>

    @endsection



    <br>
    <br>
    <br>
    <br>


    <main class="main">
        <div class="container">
            <div class="page-header">
                <center>
                    <h1 style="color:#E0C11E;">Workouts</h1>
                </center><br>
                <ul class="breadcrumb" style="color:#adadad;">
                    <li><a href="/" style="color:#adadad;"><i class="fa fa-home"></i></a></li>





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


    <div class="container">
        <div class="text-center">

            <div class="row">
                <div class="col-md-12">











                    <center> <img src="/Images/chris.jpg" title="Store" alt="Store" style="height: 650px;" width="700px" class="img-responsive" /></center>


                    <br><br><br><br><br><br><br>



                    <table class="table table-striped">


                        <th style="background: #1A908F;">
                            <h3 style="color: white;">IMAGE</h3>
                        </th>
                        <th style="background: #1A908F;">
                            <center>
                                <h3 style="color: white;">NAME</h3>
                            </center>
                        </th>
                        <th style="background: #1A908F;">
                            <center>
                                <h3 style="color: white;">DATE</h3>
                            </center>
                        </th>
                        <th style="background: #1A908F;">
                            <center>
                                <h3 style="color: white;">VIEW</h3>
                            </center>
                        </th>


                        @foreach($data as $i)

                        <tr>



                            <td>
                                <center>
                                    <figure>
                                        <img class="img-responsive full-width" src="/images/{{$i->image}}" alt="Top workouts" style="height:160px " width="200px" />
                                    </figure>
                                </center>
                            </td>


                            <td> {{$i->name}}</td>


                            <td> {{$i->date}} </td>



                            <td>
                                <center><button class="btn more" id="button" style="vertical-align:middle"><a href="workoutview/{{$i->w_id}}" style="color: gainsboro;">Read</a></button></center>
                            </td>


                            @endforeach





                        </tr>

                    </table>
                    {{ $data->links() }}


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