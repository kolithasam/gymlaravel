<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  
</head>



<style type="text/css">
	
.footer-desc
{
	color:white;
}

#footer{


	background-color:#337E84;


}
li{



}
#bottom{


background-color: #247379;



}
#h{


	color: white;
}
.social_footer_ul
{
    display: table;
    margin: 15px auto 0 auto;
    list-style-type: none;
   
}
.social_footer_ul li
{
    padding-right: 20px;
    padding-top: 10px;
    float: left;

}
.social_footer_ul li a
{
    color: white;
    border: 1px solid #ccc;
    padding: 8px;
    border-radius: 50%;
}
.social_footer_ul li i
{
    width: 20px;
    height: 20px;
    text-align: center;
}


</style>




















<body>


	 <footer id="footer">
        <div class="container">             
            <div class="footer-top">
                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                    	<span class="footer-desc">
                        <h3 style="text-align: left;">Quick Links</h3>
                        <ul class="footer-links clearfix">          
                            <li><a href="" style="color: white">Home</a></li>
                            <li><a href="/store"style="color: white">Store</a></li>
                            <li><a href="/topwrokout"style="color: white">Top Workouts</a></li>
							<!--<li><a href="events">Events</a></li>-->
                            <li><a href="/articals"style="color: white">Fitness and health Articals</a></li>
							<li><a href="/clothing"style="color: white">Clothing & Accessories</a></li>
                            <li><a href="/kitchen"style="color: white">Kitchen</a></li>
							<li><a href="/trainwithus"style="color: white">Train With Us</a></li>
                            <li><a href="/dietplans"style="color: white">Diet Plans</a></li>
                            <li><a href="/bodycal"style="color: white">Body Calculater</a></li>
                            
														<li><a href="http://www.nawaloka.com/index.php?route=account/register"style="color: white">Register</a></li>
							                           
														<li><a href="http://www.nawaloka.com/index.php?route=account/login"style="color: white">Login</a></li>

													</span>
							                            <!-- <li class="visible-xs"><a href="contact">Awards</a></li> -->
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="follow-us-on">
                            <h3 id="h" style="text-align: left;" >Follow us on</h3>
                               <center><ul class="social_footer_ul">
            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
            <li><a href=""><i class="fab fa-twitter"></i></a></li>
            <li><a href=""><i class="fab fa-linkedin"></i></a></li>
            <li><a href=""><i class="fab fa-instagram"></i></a></li>
            <li><a href=""><i class="fab fa-youtube"></i></a></li>
        </ul></center>
                        </div>
                        <div class="get-the-app">
                            <h4 style="color: white">Get the App</h4>
                            <img src="/Images/google-play-badge.png" alt=" Get FitHealthTracker App">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div id="awards">
                            <h3 id="h " style="color: white">Awards</h3>
                            <div class="wr-awards">
                                <div class="award">
                                   <center> <figure>
                                        <img class="img-responsive" src="Resources/Image/nawaloka-award1.jpg" alt="FitHealthTracker Awords"/>
                                    </figure></center>
                                </div>
                                <div class="award">
                                    <figure>
                                        <center><img class="img-responsive" src="Resources/Image/nawaloka-award2 (1).jpg" alt="FitHealthTracker Awords"/></center>
                                    </figure>
                                </div>
                                <div class="award">
                                    <figure>
                                        <img class="img-responsive" src="catalog/view/theme/default/image/awards/nawaloka-award3.jpg" alt=""/>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        </div> 
        
        <div class="footer-bottom" id="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                        <div class="copyrights">
                        
                           <center><p style="color: white">Copyright &copy;2020 Fit Health Tracker International.All Rights Reserved. <br/>Fit Health Tracker International. All rights reserved.</p>
                        <p style="color: #8BAEA2"> All rights reserved.</</p>
                            </center> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>  

</body>
@yield('content')
</html>