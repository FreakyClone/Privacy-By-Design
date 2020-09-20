<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.php");
}

if($_SESSION["type"]==="admin") {
  header("location:admin.php");
}

include 'config.php';

?>

<!doctype html>
<html class="no-js" lang="en">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/website.css" />
        <style>	
 .box {
  width: 800px;
  border: 2px solid green;
  padding: 10px;
  margin: 25px;
  margin-left: 10px;
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


    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p style="color: white;"><?php echo '<h3 style="color: white;">Hi ' .$_SESSION['fname'] .'</h3>'; ?></p>

        <p style="color: white;"><h4 style="color: white;">This is your personal information you have registered with us and are located in our database. If you wish to change any of your personal information, then just enter the new information data in the texts box and click update to update them.</h4></p>

      </div>
    </div>

<div class="box">
    <form method="POST" action="update.php" style="margin-top:30px;">



           
              <label for="right-label" class="right inline" style="color: white;">First Name</label>
        

              <?php

                $result = $mysqli->query('SELECT * FROM users WHERE id='.$_SESSION['id']);

                if($result === FALSE){
                  die(mysql_error());
                }

                if($result) {
                  $obj = $result->fetch_object();
                  echo '<input type="text" id="right-label" placeholder="'. $obj->fname. '" name="fname">';

                  echo '<label for="right-label" class="right inline" style="color: white;">Last Name</label>';
                  echo '<input type="text" id="right-label" placeholder="'. $obj->lname. '" name="lname">';

                  echo '<label for="right-label" class="right inline" style="color: white;">Address</label>';  
                  echo '<input type="text" id="right-label" placeholder="'. $obj->address. '" name="address">';

                  echo '<label for="right-label" class="right inline" style="color: white;">City</label>';
                  echo '<input type="text" id="right-label" placeholder="'. $obj->city. '" name="city">';
  
                  echo '<label for="right-label" class="right inline" style="color: white;">Post Code</label>';
                  echo '<input type="text" id="right-label" placeholder="'. $obj->pc. '" name="pc">';         				
				
                  echo '<label for="right-label" class="right inline" style="color: white;">Country</label>';
                  echo '<input type="text" id="right-label" placeholder="'. $obj->country. '" name="pc">';

                  echo '<label for="right-label" class="right inline" style="color: white;">Phone</label>';
                  echo '<input type="text" id="right-label" placeholder="'. $obj->phone. '" name="pc">';

                  echo '<label for="right-label" class="right inline" style="color: white;">Email</label>';
                  echo '<input type="email" id="right-label" placeholder="'. $obj->email. '" name="email">';
  
              }
         
              echo '<label for="right-label" class="right inline" style="color: white;">Password</label>';
              echo '<input type="password" id="right-label" name="pwd">';

          ?>

          
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
                  <input type="submit" id="right-label" value="Update" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
    

    </form>


  </div>

      
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
