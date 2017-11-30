<?php
// Include config file
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");

// Load Header
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");

// Initialise the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: http://localhost/reten/admin/login.php");
  exit;
}
?>
<head>
	<title>Mail View</title>
</head>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/nav.php"); ?>
			<div class="col-md-11">
				<h1 class="display-4">Mail View</h1>
				<?php
				// TODO get message data and display in the fields.
				?>
				<form action="#" method="post">
					<div class="form-group">
						<label for="email_recipient">To:</label>
						<input readonly class="form-control-plaintext" name="email_recipient" id="email_recipient" placeholder="Recipient Data" type="text" readonly class="form-control-plaintext">
					</div>
					<div class="form-group">
						<label for="email_subject">Subject:</label>
						<input readonly class="form-control-plaintext" name="email_subject" id="email_subject" placeholder="Subject Data" type="text" readonly class="form-control-plaintext">
					</div>
					<div class="form-group">
						<label for="email_content">Content:</label> 
						<br>
						<textarea readonly class="form-control-plaintext col-md-12" name="email_content" placeholder="Message Data" id="email_content data" rows="10""></textarea>
					</div>
					<button class="btn btn-primary" value="Submit" name="mail" type="submit">Send</button>
					<p><a href="mail.php">Back</a></p>
				</form>
				<?php>
				// TODO add code that sets the read status
				?>
			</div>
		</div>
	</div>
</div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/footer.php"); ?>
</body>
</html>