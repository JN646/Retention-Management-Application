<?php
 /**
  * Project:		Retention Management System
  * Copyright:		(C) JGinn 2017
  * FileCreated:	171206
  */
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");		// Include config file
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");			// Load Header
session_start();															// Initialise the session
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){			// If session variable is not set it will redirect to login page
	header("location: http://localhost/reten/admin/login.php");
	exit;
}
if(isset($_POST['policynum'])) {
		$policynum = $_POST['policynum'];
}
?>
<head><title>Policy Number Search</title></head>
<body>
    <div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<?php include("../partials/nav.php"); ?>
				<div class="col-md-11">
					<h1>Policy Number Search</h1>
					<form action="user.php" method="get">
						<input type="text" name="policynum" placeholder="Policy Number">
						<input type="submit">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>