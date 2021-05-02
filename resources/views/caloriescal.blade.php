<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Calorie Intake Calculator</title>
  <!-- MDB icon -->
  <link rel="icon" type="image/png"
    href="https://user-images.githubusercontent.com/34577873/43033510-24d8f684-8cd4-11e8-9b07-d22248354f59.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>


<style>

.T{
    font-size: larger;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    width: 50%;
}

.I {
    width: 50%;
}
table {
    border-collapse: collapse;
}

.SS {
    font-size: x-large;
    font-weight: 1000;
    font-family: Comic Sans MS;
}

.CD {
    font-weight: normal;
    font-size: initial;
}





 </style>

<body>


<div class="">

@extends('navi')
  @section('content')

</div>

@endsection
<br><br><br><br><br>


  <!-- Start your project here-->

  <header>
    <nav class="navbar navbar-dark orange">
      <span
        style="color: white; font-size: 23px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><i
          class="fas fa-calculator"></i> Calorie Calculator</span>
    </nav>
  </header>

  <main>

  
   <center><h1 style="color:#E0C11E;">Insert your data below to calculate your recommended calories intake!<</h1><br> </center>
    <div class="card text-center border-warning-color-dark"
      style="max-width: 50rem; margin: auto; border: 3px solid orange; width: 50%; margin-top: 30px; min-width: 20rem;">

      <table class="table" style="border-spacing: 0rem;">
        <form>
          <tr>
            <td class="T">Gender</td>
            <td class="I">
              <input type="radio" name="gender" value="male" id="male" checked="checked"> Male &nbsp &nbsp
              <input type="radio" name="gender" value="female" id="female"> Female
            </td>
          </tr>
          <tr>
            <td class="T">Age</td>
            <td class="I" id="AT"><input type="number" min="0" id="age" placeholder=""
                style="border-width: 2px; border-color: rgb(255, 123, 0); border-radius: 5px;"><div style="display: none;" id="ATT">Please enter valid number</div></td>
          </tr>
          
          <tr>
            <td class="T">Weight</td>
            <td class="I"><input type="number" min="0" id="weight"
                style="border-width: 2px; border-color: rgb(255, 123, 0); border-radius: 5px;" placeholder="Kg"><div style="display: none;" id="WTT">Please enter valid number</div></td>
          </tr>
          <tr>
            <td class="T">Height</td>
            <td class="I"><input type="number" min="0" id="height"
                style="border-width: 2px; border-color: rgb(255, 123, 0); border-radius: 5px;" placeholder="Cm"><div style="display: none;" id="HTT">Please enter valid number</div></td>
          </tr>
        </form>
        <br><br><br>
        <tr>
          <td class="T">Exercise level/Activity</p></td>
          <td>
            <select class="custom-select custom-select-sm"
              style="width: 70%; margin: auto; border-width: 2px; border-color: rgb(255, 123, 0); border-radius: 5px; margin-top: 12px;"> <!--KONO DIO DA -->
              <option value="0" id="0">Basal Metabolic Rate (BMR)</option>
              <option value="1" id="1">Little/No exercise</option>
              <option value="2" id="2">Low activity (exercise 1-3 times/week)</option>
              <option value="3" id="3">Active (daily exercise or intense exercise 3-4 times/week)</option>
              <option value="4" id="4">High activity (intense exercise 6-7 times/week)</option>
              <option value="5" id="5">Very high activity (very intense exercise daily, or physical job)</option>
            </select>
          </td>
        </tr>
      </table>
      <br><br><br><br>

      <!-- UwU -->
      <center><button id="B" type="button" onclick="calc()" class="btn btn-amber"
        style="width: 300px; margin: auto; margin-bottom: 25px; border-radius: 25px;">Calculate</button></center>
    </div>

    <!-- Score -->
    <div id="Final" class="card text-center"
      style="max-width: 25rem; margin: auto; border: 6px solid orange; width: 50%; margin-top: 45px; background-color:#fff176; border-radius: 20px; color:#ff6d00; display: none; margin-bottom: 30px">
      <table style="margin-top: 15px;">
        <tr>
          <td class="T" style="font-weight: bold;">Maintain weight <p></p>
          </td>
          <td><div id="a" class="SS">&nbsp</div><div class="CD">Calories/day</div></td>
        </tr>
        <tr>
          <td class="T" style="font-weight: bold;">Weight loss <p
              style="font-size: small; color:#888; font-weight: lighter;">0.5 kg/week</p>
          </td>
          <td><div id="b" class="SS">&nbsp</div><div class="CD">Calories/day</div></td>
        </tr>
        <tr>
          <td class="T" style="font-weight: bold;">Weight gain <p
              style="font-size: small; color:#888; font-weight: lighter;">0.5 kg/week</p>
          </td>
          <td><div id="c" class="SS">&nbsp</div><div class="CD">Calories/day</div></td>
        </tr>
      </table>
    </div>

  </main>



<script>


function calc() {
    let A = document.getElementById("age").value;
    let W = document.getElementById("weight").value;
    let H = document.getElementById("height").value;
    let S
    let R


    // input check
    if (document.getElementById("age").value.length == 0) {

        document.getElementById("ATT").style = "color: red;"
        document.getElementById("WTT").style = "display: none;"
        document.getElementById("HTT").style = "display: none;"

        return

    }

    if (document.getElementById("weight").value.length == 0) {

        document.getElementById("ATT").style = "display: none;"
        document.getElementById("HTT").style = "display: none;"
        document.getElementById("WTT").style = "color: red;"
        
        return

    }

    if (document.getElementById("height").value.length == 0) {

        document.getElementById("ATT").style = "display: none;"
        document.getElementById("WTT").style = "display: none;"
        document.getElementById("HTT").style = "color: red;"
        
        return

    }


    // Basal
    if (document.getElementById("male").checked) {
        S =  Math.round((9.99*W)+(6.25*H)-(4.92*A)+5)
    } else if (document.getElementById("female").checked) {
        S =  Math.round((9.99*W)+(6.25*H)-(4.92*A)-161)
    }

    // Activity 0 (BMR)
    if (document.getElementById("0").selected) {
        R = S
    }

    // Activity 1
    if (document.getElementById("1").selected) {
        R = S*1.2
    }

    // Activity 2
    if (document.getElementById("2").selected) {
        R = S*1.35
    }

    // Activity 3
    if (document.getElementById("3").selected) {
        R = S*1.55
    }
    
    // Activity 4
    if (document.getElementById("4").selected) {
        R = S*1.75
    }

    // Activity 5
    if (document.getElementById("5").selected) {
        R = S*1.95
    }

    document.getElementById("ATT").style = "display: none;"
    document.getElementById("HTT").style = "display: none;"
    document.getElementById("WTT").style = "display: none;"

    document.getElementById("age").placeholder = " "
    document.getElementById("weight").placeholder = "Kg"
    document.getElementById("height").placeholder = "Cm"

    document.getElementById("a").innerHTML = Math.round(R)

    document.getElementById("b").innerHTML = Math.round(R*0.80)

    document.getElementById("c").innerHTML = Math.round(R*1.20)

    document.getElementById("Final").style = "max-width: 25rem; margin: auto; border: 6px solid orange; width: 50%; margin-top: 45px; background-color:#fff176; border-radius: 20px; color:#ff6d00; margin-bottom: 30px"
}

// By Tomasz Pęśko


</script>

<footer>
        
        @extends('footer')
  @section('content')
        
        </footer>




</body>

</html>