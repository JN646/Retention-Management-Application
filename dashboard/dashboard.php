<?php
// Include config file
require_once '../config/DBconfig.php';

// Load Header
include("../partials/header.php");
?>

<body>
    <div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<?php include("../partials/nav.php"); ?>
				<div class="col-md-11">
					<h1 class="display-4">Dashboard</h1>
						<div class="alert alert-danger" role="alert">
							Feature not implemented yet.
						</div>
					<p>Your dashboard.</p>
					<h1>Jobs</h1>
					<ul>
						<li><a href='../jobs/index.php'>Available</a></li>
					</ul>
					<h1>Follow Up</h1>
					<ul>
						<li><a href=#>Tasks</a></li>
					</ul>
					<h1>Inbox</h1>
					<ul>
						<li><a href='../inbox/messages/index.php'>Messages</a></li>
						<li><a href=#>Todo</a></li>
					</ul>
				</div>
			</div>
		</div>
    </div>   
<?php include("../partials/footer.php"); ?>	
</body>
</html>