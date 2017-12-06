<?php
 /**
  * Project:		Retention Management System
  * Copyright:		(C) JGinn 2017
  * FileCreated:	171206
  */
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");		// Include config file
//include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");			// Load Header
session_start();															// Initialise the session
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){			// If session variable is not set it will redirect to login page
	header("location: http://localhost/reten/admin/login.php");
	exit;
}

//TODO
//get policy number.
//if policy nunmber = data policy number then delete record.
//update database.
?>