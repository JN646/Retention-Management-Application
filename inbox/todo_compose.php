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
	<title>Compose Todo</title>
</head>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/nav.php"); ?>
			<div class="col-md-11">
				<h1 class="display-4">Compose Todo</h1>
				<form action="functions/todo_add.php" method="post">
					<div class="form-group">
						<label for="todo_recipient">To:</label>
						<input class="form-control" name="todo_recipient" id="todo_recipient" placeholder="Recipients" type="text">
					</div>
					<div class="form-group">
						<label for="todo_job">Job:</label>
						<input class="form-control" name="todo_job" id="todo_job" placeholder="Job" type="text">
					</div>
					<div class="form-group">
						<label for="todo_priority">Priority:</label>
						<input class="form-control" name="todo_priority" id="todo_priority" placeholder="Priority" type="text">
					</div>
					<button class="btn btn-primary" name="todo" value="Submit" type="submit">Send</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/footer.php"); ?>
</body>
</html>