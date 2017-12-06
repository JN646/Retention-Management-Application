<?php
//DB Config
include("../../config/DBConfig.php");

if ($_POST['mail'] == 'Submit') {
	//Attempt insert query execution
	//$sql = "INSERT INTO inbox (email_subject, email_recipient, email_content) VALUES ('$email_subject', '$email_recipient', '$email_content')";
}

if(mysqli_query($mysqli, $sql)){
	header("location: http://localhost/reten/inbox/mail.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
 
// close connection
mysqli_close($mysqli);
?>