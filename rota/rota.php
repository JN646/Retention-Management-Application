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
	<title>Rota</title>
	<link href="css/cal.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<?php include("../partials/nav.php"); ?>
				<div class="col-md-11">
					<h1 class="display-4">Rota</h1>
						<div class="alert alert-danger" role="alert">
							Feature not implemented.
						</div>
						<?php
						include 'functions/calendar.php';
						 
						$calendar = new Calendar();
						 
						echo $calendar->show();
						?>
				</div>
			</div>
		</div>
    </div>   
<?php include("../partials/footer.php"); ?>	
</body>
</html>