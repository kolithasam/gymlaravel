<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
</head>
<body>

<div class="contaier">
<input type="text" name="q" class="form-control my-3 search-input"/>
<div class="card">
    <div class="card-headr">Search Result</div>
    <div class="list-group list-group-flush search-result ">
  


</div>




</div>


<script type="text/javascript">
$(document).ready(function(){
$(".search-input").on('keyup',function(){

    var _q=$(this).val();
    if(_q.length>=3){
 
$.ajax({

    url:"{{url('searchbar')}}",
        data:{
            q:_q
        },
        dataType:'json',
        beforeSend:function()
        {
          $(".search-result").html('<li class="list-group-item"> Loading..</li>');
        },
        success:function(res){
var _html='';
$.each(res.data,function(index,data)

{
_html+='<li class="list=group-item">'+data.title+'</li>';


})
$(".search-result").html(_html);

        }

});

    }

});



});

</script>



    
</body>
</html>