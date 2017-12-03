<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");		// Include config file
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");			// Load Header
session_start();															// Initialise the session
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){			// If session variable is not set it will redirect to login page
  header("location: http://localhost/reten/admin/login.php");
  exit;
}
?>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/nav.php"); ?>
			<div class="col-md-11">
				<h1 class="display-4">Export Data</h1>
				<div class="col-md-4">
					<!-- Toolbar -->
				</div>
				<?php
					//debug
					$user_admin = TRUE;
				
					//If user admin
					if($user_admin == TRUE){
						include($_SERVER["DOCUMENT_ROOT"] . "/reten/export/partials/export_admin.php");
					}
					else if($user_admin == FALSE) {
					//If user not admin
						include($_SERVER["DOCUMENT_ROOT"] . "/reten/export/partials/export_user.php");			
					}
					else {
						echo"<p>Something went really wrong! Report this to your administrator.</p>";
					}
				?>
			</div>
		</div>
	</div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/footer.php"); ?>
</body>
</html>