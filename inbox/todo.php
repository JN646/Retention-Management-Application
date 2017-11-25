<?php
// Include config file
require_once '../config/DBconfig.php';

// Load Header
include("../partials/header.php");
?>
<head>
	<title>Todo</title>
</head>
<body>
    <div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<?php include("../partials/nav.php"); ?>
				<div class="col-md-11">
					<h1 class="display-4">Todo</h1>
						<div class="alert alert-warning" role="alert">
							Feature partially implemented.
						</div>
						<div class="col-md-9">
							<h5>Tools</h5>
							<ul class="nav">
								<li class="nav-item">
									<a class="nav-link btn-outline-success" href="todo_compose.php">Add</a>
								</li>
								<li class="nav-item">
									<a class="nav-link btn-outline-danger" href="#">Delete</a>
								</li>
							</ul>
						</div>
				<?php
				// Attempt select query execution
				$sql = "SELECT * FROM todo";
				if($result = mysqli_query($mysqli, $sql)){
				    if(mysqli_num_rows($result) > 0){
				        echo "<table id='table_search' class='table table-bordered'>";
				            echo "<tr>";
				                echo "<th class='text-center'></th>";
				                echo "<th class='text-center' onclick='sortTable(1)'>Date</th>";
				                echo "<th class='text-center' onclick='sortTable(2)'>From</th>";
				                echo "<th class='text-center' onclick='sortTable(3)'>Job</th>";
				                echo "<th class='text-center' onclick='sortTable(4)'>Priority</th>";
				                echo "<th class='text-center'>Complete</th>";
				            echo "</tr>";
				        while($row = mysqli_fetch_array($result)){
				            echo "<tr>";
				                echo "<td class='text-center' style='width: 16px'>
								<div class='form-check'>
									  <label class='form-check-label'>
										<input class='form-check-input' type='checkbox' id='blankCheckbox' value='option1' aria-label='...'>
									  </label>
								</td>";
				                echo "<td class='text-center'>" . $row['todo_date'] . "</td>";
				                echo "<td class='text-center'>" . $row['todo_from'] . "</td>";
				                echo "<td>" . $row['todo_job'] . "</td>";
				                echo "<td class='text-center'>" . $row['todo_priority'] . "</td>";
				                echo "<td class='text-center'><a href=#".$row['todo_id'].">Complete</a></td>";
				            echo "</tr>";
				        }
				        echo "</table>";
				        // Free result set
				        mysqli_free_result($result);
				    } else{
				        echo "No tasks were found.";
				    }
				} else{
				    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
				}

				// Close connection
				mysqli_close($mysqli);
				?>
				<nav aria-label="...">
				  <ul class="pagination">
					<li class="page-item disabled">
					  <span class="page-link">Previous</span>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item active">
					  <span class="page-link">
						2
						<span class="sr-only">(current)</span>
					  </span>
					</li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
					  <a class="page-link" href="#">Next</a>
					</li>
				  </ul>
				</nav>
				</div>
			</div>
		</div>
    </div>   
<?php include("../partials/footer.php"); ?>	
</body>
</html>