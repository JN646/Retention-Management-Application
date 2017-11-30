<?php
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
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/nav.php"); ?>
			<div class="col-md-11">
				<h1 class="display-4">Phone System</h1>
				<div class="col-md-4">
					<h1>Needed Features</h1>
					<ul>
						<li>Auto logs.</li>
						<li>Call timer.</li>
						<li>Notify managers to why more time needed.</li>
					</ul>
				</div>
				<?php
					//debug
					$user_admin = FALSE;
				
					//If user admin
					if($user_admin == TRUE){
						include($_SERVER["DOCUMENT_ROOT"] . "/reten/phone/partials/phone_admin.php");
					}
					else {
					//If user not admin
						include($_SERVER["DOCUMENT_ROOT"] . "/reten/phone/partials/phone_user.php");			
					}
				?>
			</div>
		</div>
	</div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/footer.php"); ?>
</body>
</html>