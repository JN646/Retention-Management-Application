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
<head><title>Mail View</title></head>

<!-- Main Container -->
<div class="container-fluid">

  <!-- Body -->
	<div class="col-md-12">

    <!-- Row -->
		<div class="row">

      <!-- Navigation Bar -->
			<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/nav.php"); ?>

      <!-- Main Content -->
			<div class="col-md-11">

        <!-- Title -->
				<h1 class="display-4">Mail View</h1>
				<?php
				// TODO get message data and display in the fields.
				?>

        <!-- Form -->
				<form action="#" method="post">

          <!-- Email Recieve -->
					<div class="form-group">
						<label for="email_recipient">To:</label>
						<input readonly class="form-control-plaintext" name="email_recipient" id="email_recipient" placeholder="Recipient Data" type="text" readonly class="form-control-plaintext">
					</div>

          <!-- Email Subject -->
					<div class="form-group">
						<label for="email_subject">Subject:</label>
						<input readonly class="form-control-plaintext" name="email_subject" id="email_subject" placeholder="Subject Data" type="text" readonly class="form-control-plaintext">
					</div>

          <!-- Email Content -->
					<div class="form-group">
						<label for="email_content">Content:</label>
						<br>
						<textarea readonly class="form-control-plaintext col-md-12" name="email_content" placeholder="Message Data" id="email_content data" rows="10"></textarea>
					</div>

          <!-- Submit -->
					<button class="btn btn-primary" value="Submit" name="mail" type="submit">Send</button>

          <!-- Go Back -->
          <p><a href="mail.php">Back</a></p>
				</form>

				<?php
				// TODO add code that sets the read status
				?>

        <!-- Close Divs -->
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/footer.php"); ?>
</body>
</html>
