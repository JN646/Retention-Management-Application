<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");		// Include config file
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");			// Load Header
session_start();															// Initialise the session
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){			// If session variable is not set it will redirect to login page
  header("location: http://localhost/reten/admin/login.php");
  exit;
}
?>
<head><title>Data Wizard</title></head>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/nav.php"); ?>
			<div class="col-md-11">
				<h1 class="display-4">Data Wizard</h1>
				<div class="col-md-4">
					<!-- Toolbar -->
				</div>
				<h1>Import new data.</h1>
				<p>Use this system to add new books of business to the system.</p>
				<p><b style="color: red">WARNING: </b>Please ensure each step is completed with care. This operation can not be undone.</p>
				<button class="btn btn-primary">Get Started</button>
				<hr>
				<h1>Before you start</h1>
				<p>Ensure that the following is correct before you proceed.</p>
				<ul>
					<li>Book of business is in Excel or CSV format.</li>
					<li>Document has been checked for blank cells and data.</li>
					<li>The column order matches the specification.</li>
				</ul>
				<hr>
				<h1>Loaded Data</h1>
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/import/functions/parser.php"); ?>
			</div>
		</div>
	</div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/footer.php"); ?>
</body>
</html>