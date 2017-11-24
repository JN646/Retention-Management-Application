<?php
// Include config file
require_once '../config/DBconfig.php';

// Load Header
include("../partials/header.php");
?>
<head>
	<title>Dashboard</title>
</head>
<body>
    <div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<?php include("../partials/nav.php"); ?>
				<div class="col-md-11">
					<h1 class="display-4">Inbox</h1>
						<div class="alert alert-danger" role="alert">
							Feature not implemented yet.
						</div>
				<?php
				// Attempt select query execution
				$sql = "SELECT * FROM client_info";
				if($result = mysqli_query($mysqli, $sql)){
				    if(mysqli_num_rows($result) > 0){
				        echo "<table id='table_search' class='table table-bordered'>";
				            echo "<tr>";
				                echo "<th class='text-center' onclick='sortTable(1)'>Date</th>";
				                echo "<th class='text-center' onclick='sortTable(2)'>From</th>";
				                echo "<th class='text-center' onclick='sortTable(3)'>Subject</th>";
				                echo "<th class='text-center' onclick='sortTable(4)'>Priority</th>";
				                echo "<th class='text-center' style='width: 32px'>Status</th>";
				            echo "</tr>";
				        while($row = mysqli_fetch_array($result)){
				            echo "<tr>";
				                echo "<td>" . $row['client_fname'] . "</td>";
				                echo "<td>" . $row['client_lname'] . "</td>";
				                echo "<td>" . $row['client_age'] . "</td>";
				                echo "<td>" . $row['client_fname'] . "</td>";
				                echo "<td>" . $row['client_lname'] . "</td>";
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
				</div>
			</div>
		</div>
    </div>   
<?php include("../partials/footer.php"); ?>	
</body>
</html>