<?php
// Include config file
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");

// Load Header
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");
?>

<body>
    <div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<?php include("../partials/nav.php"); ?>
				<div class="col-md-11">
					<h2>Profile</h2>
						<div class="alert alert-danger" role="alert">
							Feature not implemented yet.
						</div>
					<p>Update your profile.</p>
				</div>
			</div>
		</div>
    </div>   
<?php include("../partials/footer.php"); ?>	
</body>
</html>