<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train With Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
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
    </style>

</head>

<body>



    <br>
    <br>
    <br>
    <br>


    <main class="main">
        <div class="container">
            <div class="page-header">
                <center>
                    <h1 style="color:#E0C11E;">Train With Us</h1>
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



    <table class="table table-striped">
                        <th><h4><b>Image</b></h4></th>
                        <th><center> <h4><b>Name</b></h4></center></th>
                        <th><center> <h4><b>Hire</b></h4></center></th>
                        


        @foreach( $data as $i)

        <tr>
            <td>
            <figure>
                    <img class="img-responsive full-width" src="/images/{{$i ->c_image}}" alt="Top workouts" style="height:160px " width="100px" />
                </figure>
            </td>

            <td>


            <h4>{{$i->first_name}}</h4>

            </td>

<td>



<center><button class="btn more" id="button" style="vertical-align:middle"><span href="">Hire</span></button></center>
</td>



        
        </tr>
      


            
           
    

        @endforeach
  


    </table>
                </div>
            </div>

        </div>
    </div>
    


</body>

</html>