<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(isset($_SESSION["username"])){

        header("location:index.php");
}

?>
<!doctype html>
<html class="no-js" lang="en">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/website.css" />
    <style>	
 .box {
  width: 600px;
  border: 2px solid green;
  padding: 10px;
  margin: 25px;
  margin-left: 620px;
 font-size: 16px;
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
			  <li><a href="laptops.php">Wine</a></li>
			  <li><a href="desktops.php">Whiskey</a></li>
			  <li><a href="phones.php">Vodka</a></li>
			  <li><a href="Headphones.php">Gin</a></li>
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
    <center><p><font color="white" size="5px";>Log in so you can start shopping!</font></p></center>
          <form method="POST" action="verify.php" style="margin-top:30px;">
<div class="box">

           <label for="right-label" class="right inline" style="color: white">Email*</label>
              <input type="email" id="right-label" name="username">
              
              <label for="right-label" class="right inline" style="color: white">Password*</label>
              <input type="password" id="right-label" name="pwd">

              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="submit" id="right-label" value="Login" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;"><br><br>
              <p style="color: white;">Not registered yet? <a href="registerprivacy.php" target="_blank">click here!</a></p>
              	  <p><font color="white" size="5px";><a href="Policy.php" target="_blank">Privacy Policy</a></font></p>
	  <p><font color="white" size="5px";><a href="terms.php" target="_blank">Terms and Conditions</a></font></p> 
          </div>
    </form>

   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>


    <div class="row" style="margin-top:10px;">
          <footer class="main-footer">
           <span><a href="terms.php" target="_blank">Terms and Conditions</a> <a href="Policy.php" target="_blank">Privacy Policy</a> &copy;2019 - AlcoNet. All Rights Reserved.</span>
        </footer>
	  </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
