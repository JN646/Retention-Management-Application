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

// Attempt select query execution
$username = $_SESSION['username'];
  
// Attempt select query execution
$sql_users = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($mysqli, $sql_users);
$rs = mysqli_fetch_array($result);

$call_group = $rs['call_group'];

// Attempt select query execution
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($mysqli, $sql);
?>
<head><title>Dashboard</title></head>
<body>
    <div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<?php include("../partials/nav.php"); ?>
				<div class="col-md-11">
					<h1 class="display-4">Hi, <b><?php echo $_SESSION['username']; ?></b>. Welcome to your Dashboard.</h1>
					<div class="row">
						<div class="col-md-4">
							<div class="col-md-12 card">
								<div class="card-body">
									<h1 class="card-title text-center display-4">Success Rate</h1>
									<?php
										// Success Rate.
										if($result = mysqli_query($mysqli, $sql)){
											if(mysqli_num_rows($result) > 0){
												while($row = mysqli_fetch_array($result)){
													echo "<h1 class='text-center'>" . $row['success_rate'] . "%</h1>";
												}
												// Close result set
												mysqli_free_result($result);
											} else{
												echo "No records matching your query were found.";
											}
										} else{
											echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
										}
									?>
									<p class="text-center"><a href="#">More Info</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12 card">
								<div class="card-body">
									<h1 class="card-title text-center display-4">Assigned</h1>
									<?php
										// Call Group display
										if($result = mysqli_query($mysqli, $sql)){
											if(mysqli_num_rows($result) > 0){
												while($row = mysqli_fetch_array($result)){
													echo "<h1 class='text-center'>" . $row['call_group'] . "</h1>";
												}
												// Close result set
												mysqli_free_result($result);
											} else{
												echo "No records matching your query were found.";
											}
										} else{
											echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
										}
									?>
									<p class="text-center"><a href="#">More Info</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12 card">
								<div class="card-body">
									<h1 class="card-title text-center display-4">EXP</h1>
										<?php
											// Set experience bar.
											if($result = mysqli_query($mysqli, $sql)){
												if(mysqli_num_rows($result) > 0){
													while($row = mysqli_fetch_array($result)){
													echo"<h1 class='text-center'>" . $row['EXP'] . "/5000</h1>";
													echo"<div class='progress'>";
													echo"<div class='progress-bar' role='progressbar' style='width: 25%' aria-valuenow=" . $row['EXP'] . " aria-valuemin='0' aria-valuemax='5000'></div>";
													}
													// Close result set
													mysqli_free_result($result);
												} else{
													echo "Major error";
												}
											} else{
												echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
											}
										?>
									</div>
									<p class="text-center"><a href="#">More Info</a></p>
								</div>
							</div>
						</div>
					</div>
					</br>
					<div class="row">
						<div class="col-md-4">
							<div class="col-md-12 card">
								<div class="card-body">
									<h1 class="card-title text-center display-4">Calls Taken</h1>
									<?php
										// Calls Taken display
										if($result = mysqli_query($mysqli, $sql)){
											if(mysqli_num_rows($result) > 0){
												while($row = mysqli_fetch_array($result)){
													echo "<h1 class='text-center'>" . $row['calls_taken'] . "</h1>";
												}
												// Close result set
												mysqli_free_result($result);
											} else{
												echo "No records matching your query were found.";
											}
										} else{
											echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
										}
									?>
									<p class="text-center"><a href="#">More Info</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12 card">
								<div class="card-body">
									<h1 class="card-title text-center display-4">Link</h1>
									<?php
										// Blank Section
										if($result = mysqli_query($mysqli, $sql)){
											if(mysqli_num_rows($result) > 0){
												while($row = mysqli_fetch_array($result)){
													echo "<h1 class='text-center'>-</h1>";
												}
												// Close result set
												mysqli_free_result($result);
											} else{
												echo "No records matching your query were found.";
											}
										} else{
											echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
										}
									?>
									<p class="text-center"><a href="#">More Info</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12 card">
								<div class="card-body">
									<h1 class="card-title text-center display-4">Link</h1>
									<?php
										// Blank Section
										if($result = mysqli_query($mysqli, $sql)){
											if(mysqli_num_rows($result) > 0){
												while($row = mysqli_fetch_array($result)){
													echo "<h1 class='text-center'>-</h1>";
												}
												// Close result set
												mysqli_free_result($result);
											} else{
												echo "No records matching your query were found.";
											}
										} else{
											echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
										}
									?>
									<p class="text-center"><a href="#">More Info</a></p>
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