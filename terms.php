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
    <title>Terms and conditions</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/website.css" />
    <style>	
.box {
  width: 900px;
  border: 2px solid green;
  padding: 10px;
  margin: 20px;
  margin-left: 450px;
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

   

   <center><p><font color="white" size="10px";>Terms and Conditions</font></center>
   <center><div class="n2-ss-layer n2-ow" style="margin: 0em;overflow: visible;font-size: 100%;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-type="layer" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><div class=" n2-ss-img-wrapper n2-ow" style="overflow:hidden;"><img src="//ld-wp.template-help.com/woocommerce_65108/wp-content/uploads/2017/09/slider-lines-2.png" id="n2-ss-2item8" alt="Image is not available" style="display: inline-block; max-width: 100%; width: auto;height: auto;" class=" n2-ow" title=""></div></div></center>
   <br>
<font color="white" size="4px";>
 Terms and Conditions were last updated 20th of April 2019.<br><br>
 <form method="POST" action="register.php" style="margin-top:30px;">
<center><font color="white" size="10px";>Orders</font></center>
	  <center><div class="n2-ss-layer n2-ow" style="margin: 0em;overflow: visible;font-size: 100%;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-type="layer" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><div class=" n2-ss-img-wrapper n2-ow" style="overflow:hidden;"><img src="//ld-wp.template-help.com/woocommerce_65108/wp-content/uploads/2017/09/slider-lines-2.png" id="n2-ss-2item8" alt="Image is not available" style="display: inline-block; max-width: 100%; width: auto;height: auto;" class=" n2-ow" title=""></div></div></center>
<div class="box">
<p><ul><li>We do not sell to anyone who is under 18 years old. By placing an order, you confirm that you are at least 18 years old. We will take payment when you confirm your order via PayPal. Please take time to read and check your order at each stage before submitting your order to us.</li><li>
Once submitted, you will receive an email acknowledging that we have received your order. </li><li>You will then receive an email dispatch confirmation when your order has been dispatched. </li><li>If we are unable to supply you with a product or complete your order for any reason, for example because that product is out of stock or no longer available, we cannot meet your requested delivery date, or because of an error in the price on our site, we will inform you of this by email and will not process your order.</li><li> If you have already paid for the product, we will refund you the full amount including any delivery costs charged as soon as possible.</li></ul</p> 
  
</div>

<center><font color="white" size="10px";>Deliveries</font></center>
	  <center><div class="n2-ss-layer n2-ow" style="margin: 0em;overflow: visible;font-size: 100%;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-type="layer" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><div class=" n2-ss-img-wrapper n2-ow" style="overflow:hidden;"><img src="//ld-wp.template-help.com/woocommerce_65108/wp-content/uploads/2017/09/slider-lines-2.png" id="n2-ss-2item8" alt="Image is not available" style="display: inline-block; max-width: 100%; width: auto;height: auto;" class=" n2-ow" title=""></div></div></center>
<div class="box">

  <p><ul><li>Orders placed before 4pm will have a default delivery for the following day, unless otherwise stated on the website. You can select a later delivery date by selecting this date at checkout.</li><li> Orders placed post 4pm on Friday and pre-4pm on Monday will have a default delivery date of Tuesday. Your dispatch confirmation email will include your delivery date and a tracking link to track your order. </li><li>We will attempt to deliver your order on the day specified when you place your order.</li><li> However, if you are then not available to accept the product(s) at the agreed date, we will not be liable to you for any delay in the delivery of your order.</li></p>
  
</div>

<center><font color="white" size="10px";>Prices and Payment</font></center>
	  <center><div class="n2-ss-layer n2-ow" style="margin: 0em;overflow: visible;font-size: 100%;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-type="layer" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><div class=" n2-ss-img-wrapper n2-ow" style="overflow:hidden;"><img src="//ld-wp.template-help.com/woocommerce_65108/wp-content/uploads/2017/09/slider-lines-2.png" id="n2-ss-2item8" alt="Image is not available" style="display: inline-block; max-width: 100%; width: auto;height: auto;" class=" n2-ow" title=""></div></div></center>
<div class="box">

 <p><ul><li>All prices include VAT. Occasionally we will run promotions that mean delivery is free. Our website and payment processes are secure. We only accept PayPal for the reason to avoid more sensitive information such as credit/debit cards numbers.</ul></li> </p>
 
</div>

<center><font color="white" size="10px";>Cancellation and Returns</font></center>
	  <center><div class="n2-ss-layer n2-ow" style="margin: 0em;overflow: visible;font-size: 100%;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-type="layer" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><div class=" n2-ss-img-wrapper n2-ow" style="overflow:hidden;"><img src="//ld-wp.template-help.com/woocommerce_65108/wp-content/uploads/2017/09/slider-lines-2.png" id="n2-ss-2item8" alt="Image is not available" style="display: inline-block; max-width: 100%; width: auto;height: auto;" class=" n2-ow" title=""></div></div></center>
<div class="box">
 
 <p><ul>
 <li>If you are a consumer, you have a legal right to cancel and return your order, for any reason, for up to 10 days after the day you received the product(s).</li> <li>During that period if you decide you would like to cancel or return your order please, contact us as soon as possible at AlcohNetsupp@gmail.com to notify us of your decision.</li> <li>If the order has not yet been delivered, you may also refuse acceptance of the delivery from the driver and your order will automatically be returned to us.</li>
 <li>We are unable to refund bottles which have been opened since you received them, unless the product is faulty e.g. corked wine. If there is any damage to your order when it arrives, you should notify us as soon as possible at <a href="mailto:AlcohNetsupp@gmail.com">AlcohNetsupp@gmail.com</a>.</li><li> We will refund you the cost of the damaged items or arrange to send you a replacement.</li><li> Where applicable, refunds will be processed within 10 days. If you open your order to find the product(s) are faulty or mis-described, please return the product to us and we will refund the price of the product in full, together with any applicable delivery charges and any reasonable costs you incur in returning the item to us.</li></p> 
 </ul>
</div>


  <center><button class="button2"onclick="myFunction()" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 12px;">Print this page</button></center>

	
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
    <script>
function myFunction() {
  window.print(); 
}

  </body>
</html>