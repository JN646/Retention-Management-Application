<?php
//Header
include("../partials/header.php");
 
//DB Config
include("../config/DBConfig.php");
 ?>
 <head>
	<META HTTP-EQUIV="refresh" CONTENT="5">
	<title>Jobs List</title>
 </head>
 <body>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<?php include("../partials/nav.php"); ?>
			<div class="col-md-11">
				<h1>Jobs</h1>
				<div class="row">
					<div class="col-md-9">
						<h5>Tools</h5>
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="../contacts/add_contact.php">Add Job</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Refresh</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Request Help</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 border border-success">
						<h5>Filters</h5>
						<div class="form-check form-check-inline">
							<label class="form-check-label"><input class="form-check-input" id="inlineCheckbox1" type="checkbox" value="option1"> Purple</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label"><input class="form-check-input" id="inlineCheckbox2" type="checkbox" value="option2"> Red</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label"><input class="form-check-input" id="inlineCheckbox3" type="checkbox" value="option3"> Yellow</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label"><input class="form-check-input" id="inlineCheckbox2" type="checkbox" value="option4"> Green</label>
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
				                echo "<th class='text-center' onclick='sortTable(6)'>Policy Worth</th>";
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
<?php include("../partials/footer.php"); ?>