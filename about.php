<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>
<!doctype html>
<html class="no-js" lang="en">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/website.css" />
    <style>
	progress {
  color: forestgreen;
		width: 40%;
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

   <br>
	  <center><font color="white" size="10px";>About us</font></center>
	  <center><div class="n2-ss-layer n2-ow" style="margin: 0em;overflow: visible;font-size: 100%;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-type="layer" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><div class=" n2-ss-img-wrapper n2-ow" style="overflow:hidden;"><img src="//ld-wp.template-help.com/woocommerce_65108/wp-content/uploads/2017/09/slider-lines-2.png" id="n2-ss-2item8" alt="Image is not available" style="display: inline-block; max-width: 100%; width: auto;height: auto;" class=" n2-ow" title=""></div></div></center>
	  <br>
	  
	  
	<p><font color="white" size="4px";>During the last years, our liquor store has grown to a company with a lifetime of experience in the elite alcoholic beverage distribution industry. We consider it an honor to represent the finest producers of wine, whiskey, vodka and gin to the people all over the world.
<br><br>
    Our highly-educated and driven sales staff know all the assortment of our store and can advise the best choice for you. We pride ourselves in carefully evaluating every potential brand and beverage for quality, sales and mutual growth potential before they're selected for a place in our portfolio.  With the goal of providing accurate and efficient deliveries to our customers, AlcohNet canvasses the state daily in reliable box and refrigerated trucks - from the downtown bars and restaurants to retail stores, and just about everywhere in between.
	 </font></p>
	  
  
	  
	   <br>
	  <center><font color="white" size="10px";>What we can do</font></center>
	  <center><div class="n2-ss-layer n2-ow" style="margin: 0em;overflow: visible;font-size: 100%;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-type="layer" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><div class=" n2-ss-img-wrapper n2-ow" style="overflow:hidden;"><img src="//ld-wp.template-help.com/woocommerce_65108/wp-content/uploads/2017/09/slider-lines-2.png" id="n2-ss-2item8" alt="Image is not available" style="display: inline-block; max-width: 100%; width: auto;height: auto;" class=" n2-ow" title=""></div></div></center>
	  <br>
	  
	  
	<p><font color="white" size="4px";>We have a rich collections of elite liquors and regularly restock it and add new items to our assortment. We sell exclusive beverages either to individuals, commercials, supermarkets and wholesale buyers.
	<br><br>
	Wines: 90%<br>
<progress value="90" max="100">
</progress><br>
 Gin: 80%<br>
 <progress value="80" max="100">
</progress><br>
Whiskey: 67%<br>
<progress value="67" max="100">
</progress><br>
Vodka: 55%<br>
<progress value="55" max="100">
</progress><br> </font></p>  
  
  <center><font color="white" size="10px";>Our Motto</font></center>
	  <center><div class="n2-ss-layer n2-ow" style="margin: 0em;overflow: visible;font-size: 100%;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-type="layer" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><div class=" n2-ss-img-wrapper n2-ow" style="overflow:hidden;"><img src="//ld-wp.template-help.com/woocommerce_65108/wp-content/uploads/2017/09/slider-lines-2.png" id="n2-ss-2item8" alt="Image is not available" style="display: inline-block; max-width: 100%; width: auto;height: auto;" class=" n2-ow" title=""></div></div></center>
	  <br>
	  
	  
	<p><font color="white" size="4px";>Good alcohol is something that highlights your individuality and status among others. When you feel elite taste, fragrance and bouquet you will return to this beverage again and again… So, you will return to AlchohNet and enjoy its exclusive collection!
	 </font></p>
	  
          <footer class="main-footer">
           <span><a href="terms.php" target="_blank">Terms and Conditions</a> <a href="Policy.php" target="_blank">Privacy Policy</a> &copy;2019 - AlcoNet. All Rights Reserved.</span>
        </footer>
  <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
		</div>
  </body>
</html>
