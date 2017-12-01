<?php
// Include config file
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");

// Load Header
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");

// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: http://localhost/reten/admin/login.php");
  exit;
}
 ?>
 <head>
	<!--<META HTTP-EQUIV="refresh" CONTENT="5">-->
	<title>Details</title>
 </head>
 <body>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/nav.php"); ?>
			<div class="col-md-11">
				<h1 class="display-4">Details</h1>
				<div class="row">
					<div class="col-md-9">
						<h5>Policy Search</h5>
						<div class="form-group">
							<label for="srch">Search:</label>
							<input type="text" class="form-control" id="srch">
						</div>
					</div>
				</div><br>
				<div class="row">
					<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/jobs/partials/tabs.php"); ?>
				</div>
			</div>
			<?php //include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/preview.php"); ?>
		</div>
	</div>
</div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/footer.php"); ?>