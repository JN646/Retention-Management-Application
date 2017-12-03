<?php
 /**
  * Project:		Retention Management System
  * Copyright:		(C) JGinn 2017
  * FileCreated:	171203
  */
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
<head>
	<title>User Management</title>
</head>
<body>
    <div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<?php include("../partials/nav.php"); ?>
				<div class="col-md-11">
					<h1 class="display-4">User Management</h1>
						<div class="alert alert-warning" role="alert">
							Feature partially implemented.
						</div>
						<div class="col-md-9">
							<h5>Tools</h5>
							<ul class="nav">
								<li class="nav-item">
									<a class="nav-link btn-outline-success" href="register.php">Add</a>
								</li>
								<li class="nav-item">
									<a class="nav-link btn-outline-danger" href="#">Delete</a>
								</li>
							</ul>
						</div>
					<?php
					// Attempt select query execution
					$sql = "SELECT * FROM users";
					// Push out data
					if($result = mysqli_query($mysqli, $sql)){
						if(mysqli_num_rows($result) > 0){
							echo "<table id='table_search' class='table table-bordered'>";
								echo "<tr>";
									echo "<th class='text-center'></th>";
									echo "<th class='text-center' onclick='sortTable(1)'>Username</th>";
									echo "<th class='text-center' onclick='sortTable(2)'>Password (DEBUG)</th>";
									echo "<th class='text-center' onclick='sortTable(3)'>Created At</th>";
									echo "<th class='text-center' onclick='sortTable(4)'>Group</th>";
									echo "<th class='text-center' onclick='sortTable(5)'>Calls Taken</th>";
									echo "<th class='text-center' onclick='sortTable(6)'>Success Rate</th>";
									echo "<th class='text-center' onclick='sortTable(7)'>EXP</th>";
									echo "<th class='text-center' onclick='sortTable(8)'>Admin?</th>";
									echo "<th class='text-center' onclick='sortTable(9)'>Edit</th>";
								echo "</tr>";
							while($row = mysqli_fetch_array($result)){
								echo "<tr>";
									echo "<td class='text-center' style='width: 16px'>
									<div class='form-check'>
										  <label class='form-check-label'>
											<input class='form-check-input' type='checkbox' id='blankCheckbox' value='option1' aria-label='...'>
										  </label>
									</td>";
									echo "<td class='text-center'>" . $row['username'] . "</td>";
									echo "<td>" . $row['password'] . "</td>";
									echo "<td class='text-center'>" . $row['created_at'] . "</td>";
									
									// Colour coding groups.
									if($row['call_group'] == 'GREEN'){
										echo "<td class='text-center' style='background-color: #d9ffcc; color: #d9ffcc'; width: 5px></td>";
									}
									// if red.
									else if($row['call_group'] == 'RED'){
										echo "<td class='text-center' style='background-color: #ffcccc; color: #ffcccc'; width: 5px></td>";
									}
									// If yellow.
									else if($row['call_group'] == 'YELLOW'){
										echo "<td class='text-center' style='background-color: #ffffcc; color: #ffffcc'; width: 5px></td>";
									}
									// If purple.
									else if($row['call_group'] == 'PURPLE'){
										echo "<td class='text-center' style='background-color: #e6ccff; color: #e6ccff'; width: 5px></td>";
									}

									else {
										echo "<td class='text-center' style='width: 5px'></td>";
									}
									
									//echo "<td class='text-center'>" . $row['call_group'] . "</td>";
									echo "<td class='text-center'>" . $row['calls_taken'] . "</td>";
									echo "<td class='text-center'>" . $row['success_rate'] . "</td>";
									echo "<td class='text-center'>" . $row['EXP'] . "</td>";
									// Email Read/Unread indicator
									if($row['is_admin'] == 1){
										echo "<td class='text-center'><img src='../img/check.png' alt='Admin' width='32' height='32'></td>";
									}
									else{
										echo "<td class='text-center'> </td>";
									}
									echo "<td class='text-center'><a href=#".$row['id']."><img src='../img/edit.png' alt='Edit' width='32' height='32'></a></td>";
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