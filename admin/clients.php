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
	<title>User</title>
</head>
<body>
    <div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<?php include("../partials/nav.php"); ?>
				<div class="col-md-11">
					<h1 class="display-4">Client Management</h1>
						<div class="alert alert-danger" role="alert">
							Feature not implemented.
						</div>
						<div class="col-md-9">
							<h5>Tools</h5>
							<ul class="nav">
								<li class="nav-item">
									<a class="nav-link btn-outline-success" href="#">Add</a>
								</li>
								<li class="nav-item">
									<a class="nav-link btn-outline-danger" href="#">Delete</a>
								</li>
							</ul>
						</div>
					<?php
					
					// Attempt select query execution
					$sql = "SELECT * FROM inbox";
					
					// Push out data
					if($result = mysqli_query($mysqli, $sql)){
						if(mysqli_num_rows($result) > 0){
							echo "<table id='table_search' class='table table-bordered'>";
								echo "<tr>";
									echo "<th class='text-center' onclick='sortTable(1)'>Provider</th>";
									echo "<th class='text-center' onclick='sortTable(2)'>Col 2</th>";
									echo "<th class='text-center' onclick='sortTable(3)'>Col 3</th>";
									echo "<th class='text-center' onclick='sortTable(4)'>Col 4</th>";
									echo "<th class='text-center'>Status</th>";
									echo "<th class='text-center'>View</th>";
								echo "</tr>";
							while($row = mysqli_fetch_array($result)){
								echo "<tr>";
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
									echo "<td class='text-center'><a href=#".$row['email_id'].">View</a></td>";
								echo "</tr>";
							}
							echo "</table>";
							// Free result set
							mysqli_free_result($result);
						} else{
							echo "No mail were found.";
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