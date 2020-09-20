<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:index.php");}

?>
<!doctype html>
<html class="no-js" lang="en">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy1</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/website.css" />
    <style>	
.box {
  width: 900px;
  border: 10px solid red;
  padding: 10px;
  margin: 20px;
  margin-left: 450px;
	background-color: white;
	color: black;
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
	  <center><p><font color="white" size="10px";>Privacy Policy</font></p></center>
	  <center><div class="n2-ss-layer n2-ow" style="margin: 0em;overflow: visible;font-size: 100%;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-type="layer" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><div class=" n2-ss-img-wrapper n2-ow" style="overflow:hidden;"><img src="//ld-wp.template-help.com/woocommerce_65108/wp-content/uploads/2017/09/slider-lines-2.png" id="n2-ss-2item8" alt="Image is not available" style="display: inline-block; max-width: 100%; width: auto;height: auto;" class=" n2-ow" title=""></div></div></center>
   <br>
	<center><p><font color="white" size="4px";>Effective Date: March 25, 2018</font></p>
	<p><font color="white" size="4px";>This Privacy Policy has been created to inform you about our compliance with 'GDPR', what information we will collect from you, who will know those information and for what we will use them.</p></center>
	 <form method="POST" action="terms1.php" style="margin-top:30px;">

	  <center><p><font color="white" size="10px";>Required by Law</font></p></center>
	  <center><div class="n2-ss-layer n2-ow" style="margin: 0em;overflow: visible;font-size: 100%;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-type="layer" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><div class=" n2-ss-img-wrapper n2-ow" style="overflow:hidden;"><img src="//ld-wp.template-help.com/woocommerce_65108/wp-content/uploads/2017/09/slider-lines-2.png" id="n2-ss-2item8" alt="Image is not available" style="display: inline-block; max-width: 100%; width: auto;height: auto;" class=" n2-ow" title=""></div></div></center>
<div class="box">

  <p>
AlcohNet Ltd is dedicated to protecting the privacy rights of our online users (“users” or “you”).
 <ul>
 	<li> Please note that the scope of this Policy is limited only to information collected by our administrators through use of the website.</li>
 	<li> AlcohNet is the data controller for personal information collected of those users. </li>
 	<li> In compliance with the EU General Data Protection Regulation (“GDPR”), we have appointed AlcohNet as our representative for GDPR purposes in the EU. </li>
 	<li> Users may address questions relating to the way we collect, store, use and disclose their personal information by emailing us on <a href="mailto:AlcohNetsupp@gmail.com">AlcohNetsupp@gmail.com</a> or  contact us on +440712837495. </li>
 </ul>   </p>
  <font color="red" size="6px";><input type="checkbox" id="check" name="check" required> I have read this part.</font>
</div>

	  <center><p><font color="white" size="10px";>Information Collection</font></p></center>
	  <center><div class="n2-ss-layer n2-ow" style="margin: 0em;overflow: visible;font-size: 100%;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-type="layer" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><div class=" n2-ss-img-wrapper n2-ow" style="overflow:hidden;"><img src="//ld-wp.template-help.com/woocommerce_65108/wp-content/uploads/2017/09/slider-lines-2.png" id="n2-ss-2item8" alt="Image is not available" style="display: inline-block; max-width: 100%; width: auto;height: auto;" class=" n2-ow" title=""></div></div></center>
<div class="box">
<p>We will collect the information we are asking in our registration page. Personal information will include:
  <ul> 
<li>First Name</li>
<li>Last Name</li>
<li>Date of Birth</li>
<li>Phone</li>
<li>Address</li>
<li>City</li>
<li>Post Code</li>
<li>Country</li>
<li>Email</li>
</ul>
Your personal information will be stored in our databases that only adminsitrators have acces in it and there are lot of safeguards to keep them protect.
</p>
  <font color="red" size="6px";><input type="checkbox" id="check" name="check" required> I have read this part.</font>
</div>

	  <center><p><font color="white" size="10px";>Information Use</font></p></center>
	  <center><div class="n2-ss-layer n2-ow" style="margin: 0em;overflow: visible;font-size: 100%;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-type="layer" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><div class=" n2-ss-img-wrapper n2-ow" style="overflow:hidden;"><img src="//ld-wp.template-help.com/woocommerce_65108/wp-content/uploads/2017/09/slider-lines-2.png" id="n2-ss-2item8" alt="Image is not available" style="display: inline-block; max-width: 100%; width: auto;height: auto;" class=" n2-ow" title=""></div></div></center>
<div class="box">

  <p>We will use your personal information that we mention above for two reasons:
<ul> 
<li> To provide our courier your details to deliver your products you bought.</li>
<li> For any reason you use our customer support we will need to know who you are. </li>
<li>Third parties that will know your personal information will be DHL which is our courier for delivery and Google Analytics. Although they will only know only the mandatory information that you provide to us.</li></p>
 </ul>
  <font color="red" size="6px";><input type="checkbox" id="check" name="check" required> I have red this part.</font>
</div>

   <center><input type="submit" id="right-label" value="Continue" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 12px;"></center>

	
    <div class="row" style="margin-top:10px;">
        <footer class="main-footer">
           <span><a href="terms.php" target="_blank">Terms and Conditions</a> <a href="Policy.php" target="_blank">Privacy Policy</a> &copy;2019 - AlcoNet. All Rights Reserved.</span>
        </footer>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>

  </body>
</html>