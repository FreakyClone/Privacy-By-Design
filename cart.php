<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';


?>

<!doctype html>
<html class="no-js" lang="en">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/website.css" />
    <style>
table, th, td {
  border: 2px solid green;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
		h3{
			color: white;
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

    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <?php

          echo '<p><h3>Your Shopping Cart</h3></p>';

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table>';
            echo '<tr>';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Cost</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>£ '.$cost.'</td>';
                echo '</tr>';
              }
            }

          }

          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>£ '.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><br><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a>&nbsp;<a href="products.php" class="button [secondary success alert]">Continue Shopping</a>&nbsp;<a href="orders-update.php" class="button" [secondary success alert]">Pay with PayPal</a>';
      
          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo '<font color="white" size="4px";>You have no items in your shopping cart.</font>';
        }

          echo '</div>';
          echo '</div>';
          ?>
    <div class="row" style="margin-top:10px;">
      <div class="small-12">


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
	  </div>
  </body>
</html>
