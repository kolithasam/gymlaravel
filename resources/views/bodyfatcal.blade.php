<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Body Fat Cal</title>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <style>    #boxs {
            width: 600px;
            margin: 0 auto;
            border: 4px solid #ccc;
        }

        .has-error {
            border-color: #cc0000;
            background-color: #ffff99;
        }
        #button{


width: 100px;
}
.service-item{


border-width:5px;  
border-style:outset;
}
.button{
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
.button span{
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
     }
.button span:after {
content: '\00bb';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.button:hover span {
padding-right: 25px;
}

.button:hover span:after {
opacity: 1;
right: 0;
}
h3{

text-align: center;
}
p{
text-align: center;
}</style>
    </head>
    <body>
    @extends('navi')
        @section('content')

  

    @endsection

<br><br><br><br><br><br><br><br><br><br>
<div class="container box" id="boxs">

        <div>
            <h1>Basal Metabolic Rate calculator</h1>
            <div class="calc-radio-group">
                <div class="calc-radio-group-item">
                    <input type="radio" name="gender" checked value="male">
                    <label for="dewey">Male</label><br>
                </div>
                
                <div class="calc-radio-group-item">
                    <input type="radio" name="gender" value="female">
                    <label for="dewey">Female</label><br>
                </div>
            </div>

            <div class="calc-radio-group">
                <div class="calc-radio-group-item">
                    <input type="radio" name="height-format" checked value="feet">
                    <label>Feet</label><br>
                </div>
                
                <div class="calc-radio-group-item">
                    <input type="radio" name="height-format" value="meters">
                    <label>Meters</label><br>
                </div>
            </div>
            
            <label class="calc-label" for="waist">waist:</label>
            <input type="number" id="waist" class="calc-inputs calc-inputs-length" name="waist" placeholder="inches">
            <label class="calc-label" for="neck">neck:</label>
            <input type="number" id="neck" class="calc-inputs calc-inputs-length" name="neck" placeholder="inches">
            <div id="hip-container" hidden>
                <label class="calc-label" for="hip">hip:</label>
                <input type="number" id="hip" class="calc-inputs calc-inputs-length" name="hip" placeholder="inches">
            </div>
            <label class="calc-label" for="age">age:</label>
            <input type="number" id="age" class="calc-inputs calc-inputs-length" name="age" placeholder="years">

            <label class="calc-label" for="">height:</label>
            <div id="calc-height-american" class="calc-radio-group">
                <div class="calc-radio-group-item">
                    <input id="calc-height-feet" type="number" class="calc-inputs" placeholder="feet">
                </div>
                
                <div class="calc-radio-group-item">
                    <input id="calc-height-inch" type="number" class="calc-inputs" placeholder="inches">
                </div>
            </div>
            <div id="calc-height-metric" class="calc-radio-group" style="display: none;">
                <div class="calc-radio-group-item">
                    <input id="calc-height-meters" type="number" class="calc-inputs" placeholder="meters">
                </div>
                <div class="calc-radio-group-item">
                    <input id="calc-height-cm" type="number" class="calc-inputs" placeholder="cm">
                </div>
            </div>
                 
            <div class="calc-radio-group">
                <div class="calc-radio-group-item">
                    <input type="radio" name="weight-format" checked value="kg">
                    <label for="dewey">Kg</label><br>
                </div>
                
                <div class="calc-radio-group-item">
                    <input type="radio" name="weight-format" value="pounds">
                    <label for="dewey">Pounds</label><br>
                </div>
            </div>
            <input type="number" id="calc-weight-kg" class="calc-inputs" placeholder="kg">
            <input type="number" id="calc-weight-pound" class="calc-inputs" placeholder="pound" style="display: none;">

          <br><br>
    <center>        <button id="BF-button" class="button" style="vertical-align:middle">Calculate</button></center>
            <p id="BF-value"></p>
            <p id="BF-BMI-value"></p>
            <p id="BMI-value"></p>
            <p id="BF-value-error"></p>
        </div>
</div><br><br><br><br><br><br><br>
<footer>
        
        @extends('footer')
  @section('content')
        
        </footer>


      
  
 </body>
 @endsection

    <script>
        {
            document.getElementById("BF-button").onclick = function(){
                document.getElementById("BF-value-error").innerHTML = "";
                let waist,neck,hip,height;
                let weight_in_pounds, height_in_inches;
                let BMI_BF_genderFactor;
                let isError = false;
                age = document.getElementById("age").value;
                age = (age == null || age == "") ? 0: parseFloat(age);

                if(document.querySelector('input[name="height-format"]:checked').value === "feet") {
                    waist = document.getElementById("waist").value;
                    waist = (waist == null || waist == "") ? 0: parseFloat(waist) * 2.54;

                    neck = document.getElementById("neck").value;
                    neck = (neck == null || neck == "") ? 0: parseFloat(neck) * 2.54;

                    hip = document.getElementById("hip").value;
                    hip = (hip == null || hip == "") ? 0: parseFloat(hip) * 2.54;

                    let feet = document.getElementById("calc-height-feet").value;
                    feet = (feet == null || feet == "") ? 0: parseFloat(feet);
                    let inch = document.getElementById("calc-height-inch").value;
                    inch = (inch == null || inch == "") ? 0: parseFloat(inch);

                    height_in_inches = (feet*12 + inch);
                    height = (feet*12 + inch) * 2.54;
                } else {
                    waist = document.getElementById("waist").value;
                    waist = (waist == null || waist == "") ? 0: parseFloat(waist);

                    neck = document.getElementById("neck").value;
                    neck = (neck == null || neck == "") ? 0: parseFloat(neck);

                    hip = document.getElementById("hip").value;
                    hip = (hip == null || hip == "") ? 0: parseFloat(hip);    

                    let meters = document.getElementById("calc-height-meters").value;
                    meters = (meters == null || meters == "") ? 0: parseFloat(meters);
                    let cm = document.getElementById("calc-height-cm").value;
                    cm = (cm == null || cm == "") ? 0: parseFloat(cm);

                    height = meters*100 + cm;
                    height_in_inches = height / 2.54;
                }
                
                if(waist === 0 || neck === 0 || height === 0) {
                    document.getElementById("BF-value-error").innerHTML = "PLEASE ENTER VALUES FOR ALL THE FIELDS.";
                    return;
                }

                if(document.querySelector('input[name="weight-format"]:checked').value === "kg") {
                    let kg = document.getElementById("calc-weight-kg").value;
                    kg = (kg == null || kg == "") ? 0: parseFloat(kg);
                    weight = kg;
                    weight_in_pounds =  kg * 2.205;
                } else {
                    let pound = document.getElementById("calc-weight-pound").value;
                    pound = (pound == null || pound == "") ? 0: parseFloat(pound);
                    weight_in_pounds = pound;
                    weight = pound/2.205;
                }

                let BF = 0;
                if(document.querySelector('input[name="gender"]:checked').value === 'male'){
                    BF = 495 / ( 1.0324 - 0.19077 * Math.log10( waist - neck ) + 0.15456 * Math.log10( height ) ) - 450
                    BMI_BF_genderFactor = 1;
                } else {
                    BF = 495 / ( 1.29579 - 0.35004 * Math.log10( waist + hip - neck ) + 0.22100 * Math.log10( height ) ) - 450
                    BMI_BF_genderFactor = 0;
                }
                document.getElementById("BF-value").innerHTML = "YOUR BF (Navy Seal method): "+ Math.round(BF);

                if(weight_in_pounds === 0) {
                    document.getElementById("BF-value-error").innerHTML = "PLEASE ENTER VALUES FOR ALL THE FIELDS TO GET ALL THE ESTIMATIONS";
                    return;
                }
                let BMI = 0;
                BMI = weight_in_pounds / (height_in_inches * height_in_inches) * 703;

                let BF_BMI = 0;
                BF_BMI = (1.39 * BMI) + (0.16 * age) - (10.34 * BMI_BF_genderFactor) - 9
               
                document.getElementById("BF-BMI-value").innerHTML = "YOUR BF (BMI method): "+ Math.round(BF_BMI);
                document.getElementById("BMI-value").innerHTML = "YOUR BMI: "+ Math.round(BMI); 
            };

            var height_format = document.getElementsByName("height-format");
            for (var i = 0; i < height_format.length; i++) {
                height_format[i].addEventListener('change', function() {
                    if(this.value === "feet") {
                        document.getElementById("calc-height-american").style.display = "block";
                        document.getElementById("calc-height-metric").style.display = "none";
                        var elements = document.getElementsByClassName("calc-inputs-length");
                        for (var i = 0; i < elements.length; i++) {
                            elements[i].setAttribute("placeholder", "inches");
                        }
                    } else {
                        document.getElementById("calc-height-american").style.display = "none";
                        document.getElementById("calc-height-metric").style.display = "block";
                        var elements = document.getElementsByClassName("calc-inputs-length");
                        for (var i = 0; i < elements.length; i++) {
                            elements[i].setAttribute("placeholder", "cm");
                        }
                    }
                });
            }

            var weight_format = document.getElementsByName("weight-format");
            for (var i = 0; i < weight_format.length; i++) {
                weight_format[i].addEventListener('change', function() {
                    if(this.value === "kg") {
                        document.getElementById("calc-weight-kg").style.display = "block";
                        document.getElementById("calc-weight-pound").style.display = "none";
                    } else {
                        document.getElementById("calc-weight-kg").style.display = "none";
                        document.getElementById("calc-weight-pound").style.display = "block";
                    }
                });
            }

            var gender_format = document.getElementsByName("gender");
            for (var i = 0; i < gender_format.length; i++) {
                gender_format[i].addEventListener('change', function() {
                    if(this.value === "male") {
                        document.getElementById("hip-container").style.display = "none";
                    } else {
                        document.getElementById("hip-container").style.display = "block";
                    }
                });
            }
        }
       </script>

    <style>
        .calc-label {
            display:block;
        }
        .calc-radio-group-item {
            width: 50%;
            float: left;
            display: inline;
        }
        .calc-inputs {
            width: 100%;
        }
    </style>

</html>