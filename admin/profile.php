<?php
 /**
  * Project:		Retention Management System
  * Copyright:		(C) JGinn 2017
  * FileCreated:	171203
  */
// Include config file
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");

// Load Header
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");

// Initialise the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: http://localhost/reten/admin/login.php");
  exit;
}
?>
<head>
	<title>Profile</title>
</head>
<body>
    <div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/nav.php"); ?>
				<div class="col-md-11">
					<h1 class="display-4">Profile</h1>
						<div class="alert alert-danger" role="alert">
							Feature not implemented yet.
						</div>
					<p>Please keep all of your data on this page updated at all times. If you need to change your <strong>Username</strong> or <strong>Password</strong>, you can do this below.</p>
					<form action="" method="post">
						<div class="form-group row">
							<div class="col-md-6">
								<label>Username:<sup>*</sup></label>
								<input type="text" name="username"class="form-control" value="">
							</div>
							<div class="col-md-6">
								<label>Real Name:<sup>*</sup></label>
								<input type="text" name="Real Name" class="form-control" value="">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6">						
								<label>Password:<sup>*</sup></label>
								<input type="password" name="password" class="form-control" value="">
							</div>
							<div class="col-md-6">	
								<label>Confirm Password:<sup>*</sup></label>
								<input type="password" name="confirm_password" class="form-control" value="">
							</div>
						</div>
						<hr>
					</form>
						<h2>Contact Information</h2>
						<p>Please ensure that this information is kepy updated at all times. These details will be used to contact you out of work time.</p>
					<form action="" method="post">
						<div class="form-group row">
							<div class="col-md-6">
								<label>Home Phone:<sup>*</sup></label>
								<input type="text" name="Real Name" class="form-control" value="">
							</div>
							<div class="col-md-6">
								<label>Mobile:<sup>*</sup></label>
								<input type="text" name="Real Name" class="form-control" value="">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-4">	
								<label>Address 1:<sup>*</sup></label>
								<input type="text" name="Real Name" class="form-control" value="">
							</div>
							<div class="col-md-4">	
								<label>Address 2:<sup>*</sup></label>
								<input type="text" name="Real Name" class="form-control" value="">
							</div>
							<div class="col-md-4">	
								<label>Address 3:<sup>*</sup></label>
								<input type="text" name="Real Name" class="form-control" value="">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6">
								<label>Postcode:<sup>*</sup></label>
								<input type="text" name="Real Name" class="form-control" value="">
							</div>
							<div class="col-md-6">
								<label>County:<sup>*</sup></label>
								<input type="text" name="Real Name" class="form-control" value="">
							</div>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Update">
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/footer.php"); ?>
</body>
</html>