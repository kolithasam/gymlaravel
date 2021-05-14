<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <style type="text/css">
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

        .hcc {


            background: url("/Images/");
        }



        .body {

            background-color: re;

        }
    </style>








</head>

<body>






    @extends('navi')
    @section('content')



    @endsection













    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>






    <main class="main">
        <div class="container">
            <div class="page-header">
                <center>
                    <h1 style="color:#E0C11E;">Top Workout</h1>
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
    <center> <img src="/Images/25-Minute-Total-Body-Strength-Workout.jpg" title="Store" alt="Store" style="height: 650px;" width="700px" class="img-responsive" /></center>

    <br>
    <br>
    <br>



    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="service-item">
                    <a href="/chest">
                        <figure>
                            <img class="img-responsive full-width" src="/Images/dumbbell-chest-workout_1000x.jpg" alt="Supplements" style="height:160px " width="255px" />
                        </figure>
                        <div class="desc clearfix">
                            <h3>Chest Workouts</h3><br>





                        </div>
                        <center><button class="btn more" id="button" style="vertical-align:middle"><span href="/chest">View More</span></button></center>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="service-item">
                    <a href="/shoulders">

                        <figure>
                            <img class="img-responsive full-width" src="/Images/chris-bumstead-latraise-1109.jpg" alt="Top workouts" style="height:160px " width="255px" />
                        </figure>
                        <div class="desc clearfix">
                            <h3> Shoulder Workouts</h3><br>



                        </div>
                        <center><button class="btn more" id="button" style="vertical-align:middle"><span href="/shoulders">View More</span></button></center>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="service-item">
                    <a href="/back">
                        <figure>
                            <img class="img-responsive full-width" src="/Images/Strong-Back-STACK.jpg" alt="Fitness and Health Articals" style="height:160px " width="255px" />

                            <h3>Back Workouts</h3><br>

                        </figure>
                        <div class="desc clearfix">

                        </div>
                        <center><button class="btn more" id="button" style="vertical-align:middle"><span href="/back">View More</span></button></center>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="service-item">
                    <a href="/legs">
                        <figure>
                            <img class="img-responsive full-width" src="/Images/legs.jpg" alt="clothing" style="height:160px " width="255px" />
                        </figure>
                        <div class="desc clearfix">
                            <h3>Legs Workouts</h3><br>

                        </div>
                        <center><button class="btn more" id="button" style="vertical-align:middle"><span href="/legs">View More</span></button></center>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="service-item">
                    <a href="/biceps">
                        <figure>
                            <img class="img-responsive full-width" src="/Images/best-biceps-exercises.jpg" alt="Kitchen" style="height:160px " width="255px" />
                        </figure>
                        <div class="desc clearfix">
                            <h3>Biceps Workout</h3><br>


                        </div>
                        <center><button class="btn more" id="button" style="vertical-align:middle"><span href="/biceps">View More</span></button></center>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="service-item">
                    <a href="/tricep">
                        <figure>
                            <img class="img-responsive full-width" src="/Images/triceps-pull-down.jpg" alt="Gynecology - L.S.C.S" style="height:160px " width="255px" />
                        </figure>
                        <div class="desc clearfix">
                            <h3>Tricep Workouts</h3><br>

                        </div>
                        <center><button class="btn more" id="button" style="vertical-align:middle"><span href="/tricep">View More</span></button></center>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="service-item">
                    <a href="/abs">
                        <figure>
                            <img class="img-responsive full-width" src="/Images/abs.jpg" alt="DietPlan" style="height:160px " width="255px" />
                        </figure>
                        <div class="desc clearfix">
                            <h3>Abs Workouts</h3><br>

                        </div>
                        <center><button class="btn more" id="button" style="vertical-align:middle"><span href="/abs">View More</span></button></center>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="service-item">
                    <a href="/cardio">
                        <figure>
                            <img class="img-responsive full-width" src="/Images/cardio.jpg" alt="bodycalculater" style="height:160px " width="255px" />
                        </figure>
                        <div class="desc clearfix">
                            <center>
                                <h3>Cardio Workouts</h3>
                                <br>

                        </div>
                        <center><button class="btn more" id="button" style="vertical-align:middle"><span href="/cardio">View More</span></button></center>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br>




















































    <br>
    <br>
    <br>
    <br>
    <br>
    <br> <br>
    <br>
    <br>

    <footer>

        @extends('footer')
        @section('content')

    </footer>





</body>

</html>