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
	<title>Dashboard</title>
</head>
<body>
    <div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<?php include("../partials/nav.php"); ?>
				<div class="col-md-11">
					<h1 class="display-4">Hi, <b><?php echo $_SESSION['username']; ?></b>. Welcome to your Dashboard.</h1>
						<div class="alert alert-danger" role="alert">
							Feature not implemented yet.
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-12 card">
									<div class="card-body">
										<h1 class="card-title text-center display-4">Success Rate</h1>
										<h1 class="text-center">85%</h1>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="col-md-12 card">
									<div class="card-body">
										<h1 class="card-title text-center display-4">Assigned</h1>
										<h1 class="text-center">RED</h1>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="col-md-12 card">
									<div class="card-body">
										<h1 class="card-title text-center display-4">EXP</h1>
										<h1 class="text-center">0</h1>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-12 card">
									<div class="card-body">
										<h1 class="card-title text-center display-4">Link</h1>
										<h1 class="text-center">85%</h1>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="col-md-12 card">
									<div class="card-body">
										<h1 class="card-title text-center display-4">Link</h1>
										<h1 class="text-center">RED</h1>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="col-md-12 card">
									<div class="card-body">
										<h1 class="card-title text-center display-4">Link</h1>
										<h1 class="text-center">0</h1>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
    </div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/footer.php"); ?>
</body>
</html>