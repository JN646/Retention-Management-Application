<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");		// Include config file
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");			// Load Header
session_start();															// Initialise the session
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){			// If session variable is not set it will redirect to login page
  header("location: http://localhost/reten/admin/login.php");
  exit;
}
?>
<head><title>Mail</title></head>
<body>
    <div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<?php include("../partials/nav.php"); ?>
				<div class="col-md-11">
					<h1 class="display-4">Inbox</h1>
						<div class="alert alert-warning" role="alert">Feature partially implemented.</div>
						<div class="col-md-9">
							<h5>Tools</h5>
							<ul class="nav">
								<li class="nav-item"><a class="nav-link" href="#">Read/Unread</a></li>
								<li class="nav-item"><a class="nav-link btn-outline-success" href="mail_compose.php">Compose</a></li>
								<li class="nav-item"><a class="nav-link btn-outline-danger" href="#">Delete</a></li>
							</ul>
						</div>
					<?php
					// Attempt select query execution
					$username = $_SESSION['username'];
					
					// Attempt select query execution
					$sql = "SELECT * FROM inbox WHERE email_recipient='$username'";
					// Push out data
					if($result = mysqli_query($mysqli, $sql)){
						if(mysqli_num_rows($result) > 0){
							echo "<table id='table_search' class='table table-bordered'>";
								echo "<tr>";
									echo "<th class='text-center'></th>";
									echo "<th class='text-center' onclick='sortTable(1)'>Date</th>";
									echo "<th class='text-center' onclick='sortTable(2)'>From</th>";
									echo "<th class='text-center' onclick='sortTable(3)'>Subject</th>";
									echo "<th class='text-center' onclick='sortTable(4)'>Priority</th>";
									echo "<th class='text-center'>Status</th>";
									echo "<th class='text-center'>Open</th>";
								echo "</tr>";
							while($row = mysqli_fetch_array($result)){
								echo "<tr>";
									// Add empty checkbox
									echo "<td class='text-center' style='width: 16px'>
									<div class='form-check'>
										  <label class='form-check-label'>
											<input class='form-check-input' type='checkbox' id='blankCheckbox' value='option1' aria-label='...'>
										  </label>
									</td>";
									echo "<td class='text-center'>" . $row['email_date'] . "</td>";
									echo "<td class='text-center'>" . $row['email_from'] . "</td>";
									echo "<td>" . $row['email_subject'] . "</td>";
									echo "<td class='text-center'>" . $row['email_priority'] . "</td>";
									// Email Read/Unread indicator
									if($row['email_status'] == 1){
										echo "<td class='text-center'><img src='../img/read.png' alt='Read' width='32' height='32'></td>";
									}
									else{
										echo "<td class='text-center'><img src='../img/unread.png' alt='Read' width='32' height='32'></td>";
									}
									// Open email
									echo "<td class='text-center'><a href=mail_view.php"./* $row['email_id']. */">Open</a></td>";
								echo "</tr>";
							}
							echo "</table>";
							// Free result set
							mysqli_free_result($result);
						} else{
							echo"<p class='text-center'>Mailbox is empty.</p>";
						}
					} else{
						echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
					}
					// Close connection
					mysqli_close($mysqli);
					?>
				</div>
			</div>
		</div>
    </div>
<?php include("../partials/footer.php"); ?>
</body>
</html>