<?php
 /**
  * Project:		Retention Management System
  * Copyright:		(C) JGinn 2017
  * FileCreated:	171203
  */
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
?>