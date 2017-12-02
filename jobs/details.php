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
 <head><title>Details</title></head>
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
						<form class="form-inline">
							<div class="form-group mx-sm-3">
								<label for="search" class="sr-only">Search: </label>
								<input type="password" class="form-control" id="search" placeholder="Search Policy Number">
							</div>
							<button type="submit" class="btn btn-primary">Search</button>
						</form>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-12">
						<?php
						//debug
						$policynum = "1";

						if(empty($policynum)) {
							echo"<h3>Enter a Policy Number</h3>";
							echo"<p>No records to show.</p>";
						}
						else {
							//include details pane
							include($_SERVER["DOCUMENT_ROOT"] . "/reten/jobs/partials/tabs.php");
						}	?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/footer.php"); ?>