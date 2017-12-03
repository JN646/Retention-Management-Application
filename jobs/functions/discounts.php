<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");		// Include config file
//include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");			// Load Header
session_start();															// Initialise the session
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){			// If session variable is not set it will redirect to login page
  header("location: http://localhost/reten/admin/login.php");
  exit;

//Sets the level of discounts that can be offered based on the type of user account. Fail safe system to prevent 100% discounts.
//Percent or Fixed
$mode = "Fixed";
$discount_amount = 0;
$policy_amount = 0;
//User, Sup, Man1, Man2, Man3, Admin.
$usertype = "User";
if($mode == "Fixed"){
	//Fixed mode
	if($usertype == "User"){
		//User
		$discount_amount = 100;
	} else if($usertype == "Sup"){
		//Sup
		$discount_amount = 250;
	} else if($usertype == "Man1"){
		//Man1
		$discount_amount = 500;
	} else if($usertype == "Man2"){
		//Man2
		$discount_amount = 1000;
	} else if($usertype == "Man3"){
		//Man3
		$discount_amount = 5000;
	} else if($usertype == "Admin"){
		//Admin
		$discount_amount = 10000;
	}
} else if($mode == "Percent"){
	//Percent mode
	if($usertype == "User"){
		//User
		$discount_amount = $discount_amount + ($policy_amount/10);
	} else if($usertype == "Sup"){
		//Sup
		$discount_amount = $discount_amount + ($policy_amount/20)
	} else if($usertype == "Man1"){
		//Man1
		$discount_amount = $discount_amount + ($policy_amount/30)
	} else if($usertype == "Man2"){
		//Man2
		$discount_amount = $discount_amount + ($policy_amount/40)
	} else if($usertype == "Man3"){
		//Man3
		$discount_amount = $discount_amount + ($policy_amount/50)
	} else if($usertype == "Admin"){
		//Admin
		$discount_amount = $discount_amount + ($policy_amount/75)
	}
} else {
	echo"<h3></h3>";
	echo"<p>Something went wrong.</p>";
}
?>