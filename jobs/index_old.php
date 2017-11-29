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
	<META HTTP-EQUIV="refresh" CONTENT="5">
	<title>Jobs List</title>
 </head>
 <body>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/nav.php"); ?>
			<div class="col-md-11">
				<h1 class="display-4">Jobs</h1>
				<div class="row">
					<div class="col-md-9">
						<h5>Tools</h5>
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="<?php echo $environment; ?>jobs/add_contact.php">Add Job</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Request Help</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 border border-success">
						<h5>Filters</h5>
						<div class="form-check form-check-inline">
							<label class="form-check-label"><input class="form-check-input" id="inlineCheckbox1" onkeyup="myFunction()" type="checkbox" value="Purple">Purple</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label"><input class="form-check-input" id="inlineCheckbox2" type="checkbox" value="Red">Red</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label"><input class="form-check-input" id="inlineCheckbox3" type="checkbox" value="Yellow">Yellow</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label"><input class="form-check-input" id="inlineCheckbox2" type="checkbox" value="Green">Green</label>
						</div>
					</div>
				</div><br>
				<?php
				// Attempt select query execution
				$sql = "SELECT * FROM client_info";
				if($result = mysqli_query($mysqli, $sql)){
				    if(mysqli_num_rows($result) > 0){
				        echo "<table id='table_search' class='table table-bordered'>";
				            echo "<tr>";
				                echo "<th class='text-center' onclick='sortTable(0)'>ID</th>";
				                echo "<th class='text-center' onclick='sortTable(1)'>First Name</th>";
				                echo "<th class='text-center' onclick='sortTable(2)'>Last Name</th>";
				                echo "<th class='text-center' onclick='sortTable(3)'>Age</th>";
				                echo "<th class='text-center' onclick='sortTable(4)'>Policy Provider</th>";
				                echo "<th class='text-center' onclick='sortTable(5)'>Policy Number</th>";
				                echo "<th class='text-center' onclick='sortTable(6)'>Group</th>";
				                echo "<th class='text-center' onclick='sortTable(7)'>Policy Worth</th>";
				                echo "<th class='text-center' style='width: 32px'>Notes</th>";
				                echo "<th class='text-center' style='width: 32px'>Full</th>";
				                echo "<th class='text-center' style='width: 32px'>Process</th>";
				            echo "</tr>";
				        while($row = mysqli_fetch_array($result)){
				            echo "<tr>";
				                echo "<td class='text-center'>" . $row['client_id'] . "</td>";
				                echo "<td>" . $row['client_fname'] . "</td>";
				                echo "<td>" . $row['client_lname'] . "</td>";
				                echo "<td class='text-center'>" . $row['client_age'] . "</td>";
				                echo "<td>" . $row['client_provider'] . "</td>";
				                echo "<td>" . $row['client_policynum'] . "</td>";
								
								// Colour coding groups.
								if($row['client_group'] == 'GREEN'){
									echo "<td class='text-center' style='background-color: #d9ffcc; color: #d9ffcc'><p>" . $row['client_group'] . "</p></td>";									
								}
								else if($row['client_group'] == 'RED'){
									echo "<td class='text-center' style='background-color: #ffcccc; color: #ffcccc'><p>" . $row['client_group'] . "</p></td>";											
								}
								else if($row['client_group'] == 'YELLOW'){
									echo "<td class='text-center' style='background-color: #ffffcc; color: #ffffcc'><p>" . $row['client_group'] . "</p></td>";											
								}
								else if($row['client_group'] == 'PURPLE'){
									echo "<td class='text-center' style='background-color: #e6ccff; color: #e6ccff'><p>" . $row['client_group'] . "</p></td>";											
								}
								else {
									echo "<td class='text-center'><p>" . $row['client_group'] . "</p></td>";
								}
								
				                echo "<td class='text-center'><p>£" . $row['client_policyworth'] . "</p></td>";
				                echo "<td class='text-center'><a href=#".$row['client_id']." data-toggle='modal' data-target='#exampleModal'><img src='../img/writing.png' alt='Notes' width='32' height='32'></a></td>";
				                echo "<td class='text-center'><a href=#".$row['client_id']."><img src='../img/profile.png' alt='Profile' width='32' height='32'></a></td>";
				                echo "<td class='text-center'><a href=#".$row['client_id']."><img src='../img/flag.png' alt='Process' width='32' height='32'></a></td>";
				            echo "</tr>";
				        }
				        echo "</table>";
				        // Free result set
				        mysqli_free_result($result);
				    } else{
				        echo "No jobs were found.";
				    }
				} else{
				    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
				}
				
				// Close connection
				mysqli_close($mysqli);
				?>
				<script>
					function myFunction() {
						var input, filter, ul, li, a, i;
						input = document.getElementById("myInput");
						filter = input.value.toUpperCase();
						ul = document.getElementById("table_search");
						li = ul.getElementsByTagName("li");
						for (i = 0; i < li.length; i++) {
							a = li[i].getElementsByTagName("a")[6];
							if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
								li[i].style.display = "";
							} else {
								li[i].style.display = "none";

							}
						}
					}
				</script>
				
				
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id='exampleModalLabel'>Modal Title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						...
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					  </div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/footer.php"); ?>