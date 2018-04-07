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

<!-- Header Content -->
<head><title>Compose Mail</title></head>

<!-- Body Content -->
<div class="container-fluid">
	<div class="col-md-12">

    <!-- Row -->
		<div class="row">

      <!-- Navigation -->
			<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/nav.php"); ?>

      <!-- Body -->
			<div class="col-md-11">

        <!-- Title -->
				<h1 class="display-4">Compose Mail</h1>

        <!-- Compose Form -->
				<form action="functions/mail_add.php" method="post">

          <!-- Email To -->
					<div class="form-group">
						<label for="email_recipient">To:</label>
						<input class="form-control" name="email_recipient" id="email_recipient" placeholder="Recipients" type="text">
					</div>

          <!-- Email Subject -->
					<div class="form-group">
						<label for="email_subject">Subject:</label>
						<input class="form-control" name="email_subject" id="email_subject" placeholder="Subject" type="text">
					</div>

          <!-- Email Content -->
					<div class="form-group">
						<label for="email_content">Content:</label>
						<textarea class="form-control" name="email_content" id="email_content" rows="10"></textarea>
					</div>

          <!-- Submit -->
					<button class="btn btn-primary" value="Submit" name="mail" type="submit">Send</button>
				</form>

        <!-- Close Divs -->
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/footer.php"); ?>
</body>
</html>
