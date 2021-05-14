<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <style>
        #boxs {
            width: 600px;
            margin: 0 auto;
            border: 4px solid #ccc;
        }

        .has-error {
            border-color: #cc0000;
            background-color: #ffff99;
        }

        #button {


            width: 100px;
        }

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

        #in {


            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #1A908F;
            border-radius: 8px;
            height: 30px;


        }

        #goal {
            border: 2px solid #1A908F;
            border-radius: 8px;

        }
    </style>
</head>

<body>

    @extends('navi')
    @section('content')



    @endsection


    <br><br><br><br><br><br><br><br><br><br>

    <div class="container" id="boxs">
        <h1>Update Details</h1>
        <form action="/clientprofiledetails/{{$data['email']}}" method="POST">
            @csrf


            <div class="form-group">
                <label>
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Height :</h3>
                </label>
                <input type="text" name="height" id="in" value="{{$data['height']}}"><br><br><br>
            </div>

            <div class="form-group">
                <label>
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Your Weight :-</h3>
                </label>
                <input type="text" name="weight" id="in" value="{{$data['weight']}}"><br><br><br>
            </div>

            <div class="form-group">
                <label>
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Your Age :-</h3>
                </label>
                <input type="text" name="age" id="in" value="{{$data['age']}}"><br><br><br>
            </div>



            <div class="form-group">
                <label>
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Body Goal</h3>
                </label>
                <input type="text" name="goal" id="in" value="{{$data['goal']}}"><br><br><br>
            </div>

            </center>
            <center>

                <button type="submit" class="btn more" id="button" style="vertical-align:middle">Update</button>
            </center>
    </div>

    </div>





    <br><br><br><br>





    </form>
    <footer>

        @extends('footer')
        @section('content')

    </footer>



</body>
@endsection

</html>