<?php
 /**
  * Project:		Retention Management System
  * Copyright:		(C) JGinn 2017
  * FileCreated:	171206
  */
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");		// Include config file
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");			// Load Header
session_start();															// Initialise the session
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){			// If session variable is not set it will redirect to login page
  header("location: http://localhost/reten/admin/login.php");
  exit;
}
if(isset($_GET['policynum'])) {
		$policynum = $_GET['policynum'];
		$policynumVal = '007';
		
		$sql = "SELECT * FROM client_info WHERE client_policynum='$policynum'";
?>
<head><title>Policy Details</title></head>
<body>
    <div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<?php include("../partials/nav.php"); ?>
				<div class="col-md-11">
					<?php	
						if($result = mysqli_query($mysqli, $sql)){
							if(mysqli_num_rows($result) > 0){
								while($row = mysqli_fetch_array($result)){
									echo "<h1 style='color: green'>#" . $row['client_policynum'] . "</h1>";			
									echo "<p><b>Client Name:</b> " . $row['client_fname'] . " " . $row['client_lname'] . "</p>";
									echo "<p><b>Client Email:</b> <a href='mailto:" . $row['client_email'] . "'>" . $row['client_email'] . "</a></p>";
									echo "<p><b>Client Phone:</b> " . $row['client_phone'] . "</p>";
									echo "<hr>";
									echo "<p><b>Policy Insurer:</b> " . $row['client_provider'] . "</p>";
									echo "<p><b>Policy Worth:</b> £" . $row['client_policyworth'] . "</p>";
									echo "<p><b>Group:</b> " . $row['client_group'] . "</p>";
									echo "<p><b>Notes:</b><br>" . $row['client_notes'] . "</p>";
								}
								// Close result set
								mysqli_free_result($result);
							} else{
								echo "No records matching your query were found.";
							}
						} else{
							echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
						}
					}
					?>
					<br>
					<p><a href="<?php echo $environment; ?>test/index.php">Back</a></p>
				</div>
			</div>
		</div>
	</div>
</body>