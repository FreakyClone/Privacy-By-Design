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
    <title>registration</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/website.css" />
    <style>

.box {
  width: 900px;
  border: 2px solid green;
  padding: 10px;
  margin: 25px;
  margin-left: 470px;
}
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
			echo '<li><a href="orders.php">Mt orders</a></li>'; 
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="registerprivacy.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>

    
<center><font color="white" size="10px";>Registration Form</font></center>
 
  <center><div class="n2-ss-layer n2-ow" style="margin: 0em;overflow: visible;font-size: 100%;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-type="layer" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><div class=" n2-ss-img-wrapper n2-ow" style="overflow:hidden;"><img src="//ld-wp.template-help.com/woocommerce_65108/wp-content/uploads/2017/09/slider-lines-2.png" id="n2-ss-2item8" alt="Image is not available" style="display: inline-block; max-width: 100%; width: auto;height: auto;" class=" n2-ow" title=""></div></div></center> <br>


<center><p style="margin-left: 20px;"><font color="white" size="5px";>All fields are mandatory especially for delivery reasons.</font></p></center>
<form method="POST" action="insert.php" style="margin-top:30px;">
<div class="box">


              <label for="right-label" class="right inline" style="color: white">First Name</label> 
              <input type="text" id="right-label" name="fname" required>

              <label for="right-label" class="right inline" style="color: white">Last Name</label>
              <input type="text" id="right-label" name="lname" required>

              <label for="right-label" class="right inline" style="color: white">Date of Birth</label>
              <input type="date" id="right-label" name="DoB" required>

              <label for="right-label" class="right inline" style="color: white">Address</label>
              <input type="text" id="right-label" name="address" required>
              
              <label for="right-label" class="right inline" style="color: white">City</label>
              <input type="text" id="right-label" name="city" required>

              <label for="right-label" class="right inline" style="color: white">Post Code</label>
              <input type="text" id="right-label" name="pc" required>

              <label for="right-label" class="right inline" style="color: white">Country</label>
              <input type="text" id="right-label" name="country" required>

              <label for="right-label" class="right inline" style="color: white">Phone</label>
              <input type="number" id="right-label" name="phone" required>
              
              <label for="right-label" class="right inline" style="color: white">E-Mail</label>
              <input type="email" id="right-label" name="email" required>

              <label for="right-label" class="right inline" style="color: white">Password</label>

              <input type="password" id="right-label" name="pwd" required>

		<font color="white" size="4px";><input type="checkbox" id="check" name="check" required> By creating an account wth us you are concern and agree to our <a href="terms.php" target="_blank">Terms and Conditions</a> and <a href="Policy.php" target="_blank">Privacy Policy</a>.</font>
  <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 12px;">
              <input type="submit" id="right-label" value="Register" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 12px;"><br><br>
              <font color="white" size="5px";>* We do not sell alcohol to customers under 18 years old.</font>
              
              
	</div>
    </form>

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
