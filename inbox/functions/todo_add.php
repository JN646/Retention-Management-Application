<?php
// Include config file
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");

if ($_POST['todo'] == 'Submit') {
	//Escape user inputs for security
	$todo_job = mysqli_real_escape_string($mysqli, $_REQUEST['todo_job']);
	$todo_recipient = mysqli_real_escape_string($mysqli, $_REQUEST['todo_recipient']);
	$todo_priority = mysqli_real_escape_string($mysqli, $_REQUEST['todo_priority']);
	
	//Attempt insert query execution
	$sql = "INSERT INTO todo (todo_job, todo_recipient, todo_priority) VALUES ('$todo_job', '$todo_recipient', '$todo_priority')";
}

if(mysqli_query($mysqli, $sql)){
	echo "<br>";
	echo "<div class='container'>";
	echo "<h1>Thank you!</h1>";
    echo "<p>Records added successfully.</p>";
	echo "<p><a href='../todo.php'>Back</a></p>";
	echo "</div>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
 
// close connection
mysqli_close($mysqli);
?>