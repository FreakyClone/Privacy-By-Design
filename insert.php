<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pc = $_POST["pc"];
$country = $_POST["country"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

if($mysqli->query("INSERT INTO users (fname, lname, address, city, pc, country, phone, email, password) VALUES('$fname', '$lname', '$address', '$city', '$pc', '$country', '$phone', '$email', '$pwd')")){
	echo 'Data inserted';
	echo '<br/>';
}

header ("location:login.php");

?>
