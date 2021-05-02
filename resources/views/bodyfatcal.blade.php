<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<style>


#outer{
    
    width:90%;max-width:600px;background:#fff;margin:0 auto
    
    }
#cover{
    border:2px solid #111;padding:15px 0
    }
.main{
    table-layout:fixed;width:94%;border:0;text-align:left;border-collapse:collapse;margin:0 auto
    }
.main td{
    padding:0 8px;vertical-align:middle;border:0
    }
.main input{
    width:100%;border:1px solid #ccc;margin:2px 0;padding:0 2%;height:22px;text-align:right
    }
.ac{
    text-align:center}.b{font-weight:bold
    }
.main select{
    width:100%;border:1px solid #ccc;margin:2px 0;background:#fff;height:22px
    }
 .w50{
        width:50%
        }
.main button{
    width:100%;font-weight:bold;margin:3px 0
    }
.w60{
    width:60%
    }
.w40{
    width:40%
    }

</style>
<body>
<div class="">

@extends('navi')
  @section('content')

</div>

@endsection



    
<div id=outer><br><br><br><br><br><br><br>
<center><h1 style="color:#E0C11E;">Bodyfat Percentage Calculator</h1><br> </center><br><br><br><br><br>
<div class='ac b'></div>
<div id=cover><form name=fp><table class=main><col class=w60><col class=w60>
<tr>
      <td>Measuring System<td><select id=msf onchange=msystem();><option value=metric>Metric (Kgs, Cms)<option value=us>US (lbs, inches)</select><tr><td>Sex<td><select id=sf><option value=m>Male<option value=f>Female</select><tr><td>Height <span id=thf>(Cms)</span><td><input id=hf><tr><td>Neck Girth<span id=tneck> (Cms)</span><td><input id=neck><tr><td>Waist <span id=twaist>(Cms)</span><td><input id=waist><tr><td>Hips <span id=thips>(Cms)</span><td><input id=hips><tr><td><button type=reset>Reset</button><td><button type=button onclick='bfat();'>Submit</button><tr><td>Your Body Fat<td><input id=bf class=op><tr><td>Body Fat Category<td><input id=nbf class=op><tr><td colspan=2 class='ac b'>Calculations are as per US Navy Formula</table></form></div></div>





      <script>
      var $=function( id ){return document.getElementById(id)};

function msystem()
{
    if( $('msf').value=='metric')
    {
         $('thf').innerHTML=' (Cms)'; $('tneck').innerHTML=' (Cms)'; $('twaist').innerHTML=' (Cms)'; $('thips').innerHTML=' (Cms)'}
         else
         { 
             $('thf').innerHTML=' (inches)'; $('tneck').innerHTML=' (inches)'; $('twaist').innerHTML=' (inches)'; $('thips').innerHTML=' (inches)'}
            
            }
function bfat ()
{
    var ms= $('msf').value;var sex= $('sf').value;var height= $('hf').value;var neck= $('neck').value;var waist= $('waist').value;var hips= $('hips').value;var ibf;var bfc;if(height==null || height==0 || neck==null || neck==0 || waist==null || waist==0)
    {
         $('bf').value='Pl. enter data.'}else{ $('bf').value=''
        }
if(ms=='metric'&&sex=='m'&&height>0&&waist>0&&neck> 0)
{
    ibf=Math.round((86.010*(Math.log(waist*1-neck*1)/Math.log(10))-70.041*(Math.log(height)/Math.log(10))+30.30*1)*100)/100;if(ibf<=5)
    {
        bfc='Essential'
    }
    else if(ibf>5&&ibf<=17)
    {
        bfc='Fit'
    }
    else if(ibf>17&&ibf<=25)
        {
            bfc='Acceptable'
        }
        else if(ibf>25 )
             {
                 bfc='Obese'
                } 
                $('bf').value=ibf+' % '; $('nbf').value=bfc
            }

else if(ms=='us'&&sex=='m'&&height>0&&waist>0&&neck> 0)
{
    ibf= Math.round((86.010*(Math.log(waist*1-neck*1)/Math.log(10))-70.041*(Math.log(height)/Math.log(10))+36.76*1)*100)/100;if(ibf<=5){bfc='Essential'}else if(ibf>5&&ibf<=17)
    {
        bfc='Fit'
    }
    else if (ibf>17&&ibf<=25){bfc='Acceptable'
    }
    else if(ibf>25 ) 
    {
        bfc='Obese'
    } 
    $('bf').value=ibf+' % '; $('nbf').value=bfc
}
else if(ms=='metric'&&sex=='f'&&height>0&&waist>0&&neck> 0)
{
    ibf= Math.round((163.205*(Math.log(waist*1+hips*1-neck*1)/Math.log(10))-97.684*(Math.log(height)/Math.log(10))-104.912*1)*100)/100;

if(ibf<=15)
{
    bfc='Essential'
}
else if(ibf>15&&ibf<=24)
    {
        bfc='Fit'
    }else if(ibf>24&&ibf<=31)
        {
            bfc='Acceptable'
        }
        else if(ibf>31 ) 
            {
                bfc='Obese'} $('bf').value=ibf+' % '; $('nbf').value=bfc}else if(ms=='us'&&sex=='f'&&height>0&&waist>0&&neck> 0)
                {
                    ibf= Math.round((163.205*(Math.log(waist*1+hips*1-neck*1)/Math.log(10))-97.684*(Math.log(height)/Math.log(10))-78.387*1)*100)/100;

if(ibf<=15)
{
    bfc='Essential'
}
    else if(ibf>15&&ibf<=24)
    {
        bfc='Fit'
    }
    else if(ibf>24&&ibf<=31)
    {
        bfc='Acceptable'}else if(ibf>31 )
         {
             bfc='Obese'
            }
 $('bf').value=ibf+' % '; $('nbf').value=bfc}}
// Widget Code by https://karvitt.com/widgets/
</script>

<br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
        
        @extends('footer')
  @section('content')
        
        </footer>



</body>
</html>