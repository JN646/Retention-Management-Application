<?php
 /**
  * Project:		Retention Management System
  * Copyright:		(C) JGinn 2017
  * FileCreated:	171203
  */
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");		// Include config file
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");			// Load Header
session_start();															// Initialise the session
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){			// If session variable is not set it will redirect to login page
  header("location: http://localhost/reten/admin/login.php");
  exit;
}
?>
<head><title>Compose Mail</title></head>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/nav.php"); ?>
			<div class="col-md-11">
				<h1 class="display-4">Compose Mail</h1>
				<form action="functions/mail_add.php" method="post">
					<div class="form-group">
						<label for="email_recipient">To:</label>
						<input class="form-control" name="email_recipient" id="email_recipient" placeholder="Recipients" type="text">
					</div>
					<div class="form-group">
						<label for="email_subject">Subject:</label>
						<input class="form-control" name="email_subject" id="email_subject" placeholder="Subject" type="text">
					</div>
					<div class="form-group">
						<label for="email_content">Content:</label>
						<textarea class="form-control" name="email_content" id="email_content" rows="10"></textarea>
					</div>
					<button class="btn btn-primary" value="Submit" name="mail" type="submit">Send</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/footer.php"); ?>
</body>
</html>