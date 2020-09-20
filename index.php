<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>
<!doctype html>
<html class="no-js" lang="en">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlcohNet index</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/website.css" />
<style>

	.alert {
  padding: 20px;
  background-color:#2F0304;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
	
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}
	
	
.container {
  position: relative;
  text-align: center;
  color: white;
}
	
.top-left {
  position: absolute;
  font-size: 22px;
  top: 100px;
  left: 30px;
  color: white;
}
	
.top-right {
  position: absolute;
  font-size: 30px;
  top: 180px;
  right: 30px;
  color: white;
}
	
.slogan {
  position: absolute;
	font-size: 20px;
  top: 10%;
  left: 40%;
  transform: translate(-50%, -50%);
  color: white;
}

.centered {
  position: absolute;
  top: 90%;
  left: 50%;
  width: 110px;
  border: 3px solid green;
  padding: 5px;
  margin: 5px;
  transform: translate(-50%, -50%);
}
	
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

	.active1 {
  background-color: #1779ba;
}
	
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
	
	
	#pop{
		width: 700px;
		height: 370px;
		border: 2px solid green;
		bottom: 50%;
		right: 32%;
		position: fixed;
		background-color: #1e1e1e;
		  -webkit-animation: mymove 3s;  /* Safari 4.0 - 8.0 */
  -webkit-animation-fill-mode: forwards; /* Safari 4.0 - 8.0 */
  animation: mymove 3s;
  animation-fill-mode: forwards;
	}
	

@keyframes mymove {
  from {top: 0px;}
  to {top: 200px; background-color: black;}
}
	
	
	
	#close {
		right: 5;
		top: 5;
		width: 10px;
		float: right;
		color: red;
	}
	
	
</style>
  </head>
  
  <body style="background-color:#1e1e1e">
  

  
<nav class="top-bar" data-topbar role="navigation">
	<h1 class="logo">
		<a href="index.php">AlcohNet</a>
	</h1>
      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="dropdown menu main-navigation" data-dropdown-menu>
          <li><a href="about.php">About</a></li>
          <li class='active'>
          	<a href="products.php">Products</a>
          	<ul class="menu">
			  <li><a href="wine.php">Wine</a></li>
			  <li><a href="whiskey.php">Whiskey</a></li>
			  <li><a href="vodka.php">Vodka</a></li>
			  <li><a href="gin.php">Gin</a></li>
			</ul>
          </li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
			echo '<li><a href="orders.php">My orders</a></li>'; 
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="registerprivacy.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>


<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <font color="white">Sign up for 30% off your next order and a heads up on the latest releases and exclusive distillations. You will also be entered into a monthly prize draw to win £200. <a href="registerprivacy.php" target="_blank">Register</a> now!</font>
</div>

	  <p><center><font color="white" size="10px";>Beverages for connoisseurs</font></center></p>
   <center><div class="n2-ss-layer n2-ow" style="margin: 0em;overflow: visible;font-size: 100%;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-type="layer" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><div class=" n2-ss-img-wrapper n2-ow" style="overflow:hidden;"><img src="//ld-wp.template-help.com/woocommerce_65108/wp-content/uploads/2017/09/slider-lines-2.png" id="n2-ss-2item8" alt="Image is not available" style="display: inline-block; max-width: 100%; width: auto;height: auto;" class=" n2-ow" title=""></div></div></center>
   <br>
   
    <div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="slide3.png" style="width:100%">
  <div class="top-left">Enjoy these fine spirits and keep your sunny side up!<br> Refined taste of our exclusive beverages is a real joy <br>for those who value good alcohol from<br> world-class brands!</div>
  <div class="centered"><a href="registerprivacy.php"><font color="white">SHOP NOW</font></a></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="slide2.png" style="width:100%">
      <div class="top-right">"Too much of anything is bad,<br> but too 
  much good whiesky<br> is barely enough"<br>Mark Twain</div>
  <div class="centered"><a href="registerprivacy.php"><font color="white">SHOP NOW</font></a></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="slide1.png" style="width:100%">
  <div class="slogan">"I'm in a good place right now. Not emotionally. I'm just at the liquer store." Jack Warren</div>
  <div class="centered"><a href="registerprivacy.php"><font color="white">SHOP NOW</font></a></div>
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>    
    <br>
    <br>  
         
<div id="pop">
	<button id="close" onclick="document.getElementById('pop').style.display='none'">X</button>
	<center><p><font color="white" size="5px";>We value your privacy. Please check our <a href="Policy.php" target="_blank">Privacy Policy</a> and our <a href="terms.php" target="_blank">Terms and Conditions</a> before you shop with us.</font></p></center><center><img src="18.png" style="width:40%"></center><br><br><center><p><div class="centered"><a href="registerprivacy.php"><font color="white">SHOP NOW</font></a></div></p></center>
</div>
         
         
          <footer class="main-footer">
           <span><a href="terms.php" target="_blank">Terms and Conditions</a> <a href="Policy.php" target="_blank">Privacy Policy</a> &copy;2019 - AlcoNet. All Rights Reserved.</span>
        </footer>
  <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
   
    <script>
		var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active1", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active1";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
      $(document).foundation();
    </script>
  </body>
</html>