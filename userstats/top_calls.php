<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");		// Include config file
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");			// Load Header
session_start();															// Initialise the session
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){			// If session variable is not set it will redirect to login page
  header("location: http://localhost/reten/admin/login.php");
  exit;
}
?>
<head><title>Top Calls</title></head>
<body>
    <div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<?php include("../partials/nav.php"); ?>
				<div class="col-md-11">
					<h1 class="display-4">Top Calls</h1>
					<div class="col-md-9">
						<h5>Stats</h5>
						<ul class="nav">
							<li class="nav-item"><a class="nav-link" href="<?php echo $environment; ?>userstats/top_calls.php">Top Calls</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo $environment; ?>userstats/top_exp.php">Top EXP</a></li>
						</ul>
					</div>
					<?php
					// Attempt select query execution
					$sql = "SELECT * FROM users ORDER BY calls_taken DESC";
					// Push out data
					if($result = mysqli_query($mysqli, $sql)){
						if(mysqli_num_rows($result) > 0){
							echo "<table id='table_search' class='table table-bordered'>";
								echo "<tr>";
									echo "<th class='text-center' onclick='sortTable(1)'>Username</th>";
									echo "<th class='text-center' onclick='sortTable(2)'>Calls Taken</th>";
								echo "</tr>";
							while($row = mysqli_fetch_array($result)){
								echo "<tr>";
									echo "<td class='text-center'>" . $row['username'] . "</td>";
									echo "<td class='text-center'>" . $row['calls_taken'] . "</td>";
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