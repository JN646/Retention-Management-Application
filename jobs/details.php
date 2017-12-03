<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");		// Include config file
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");			// Load Header
session_start();															// Initialise the session
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){			// If session variable is not set it will redirect to login page
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
					<div class="col-md-12">
						<form class="form-inline">
							<div class="form-group col-md-10">
								<input type="text" class="form-control col-md-10 form-control-lg" id="search" placeholder="Search Policy Number">
							</div>
							<button type="submit" class="btn btn-primary col-md-2 form-control-lg">Search</button>
						</form>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-12">
						<?php
						//debug
						$policynum = "1";
						//check policy number entered.
						if(empty($policynum)) {
							echo"<h3 class='text-center'>Enter a Policy Number</h3>";
							echo"<p class='text-center'>No records to show.</p>";
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