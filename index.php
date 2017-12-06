<?php
 /**
  * Project:		Retention Management System
  * Copyright:		(C) JGinn 2017
  * FileCreated:	171203
  */
// Include config file
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["username"]);
    }
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM users WHERE username = ?";
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            // Set parameters
            $param_username = $username;
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){
                    // Bind result variables
                    $stmt->bind_result($username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;
                            header("location: http://localhost/reten/dashboard/dashboard.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        // Close statement
        $stmt->close();
    }
    // Close connection
    $mysqli->close();
}
?>
</head><title>RMS Home</title></head>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/nav.php"); ?>
			<div class="col-md-11">
				<div class="jumbotron jumbo">
					<div class="row">
						<div class="col-md-9">
							<h1 class="display-2">Retention Management System</h1>
							<h1 class="lead">Nothing Still Works. Sorry. Not Sorry.</h1>
						</div>
						<div class="col-md-3">
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
								<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
									<label>Username:<sup>*</sup></label>
									<input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
									<span class="help-block"><?php echo $username_err; ?></span>
								</div>
								<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
									<label>Password:<sup>*</sup></label>
									<input type="password" name="password" class="form-control">
									<span class="help-block"><?php echo $password_err; ?></span>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary" value="Submit">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="col-md-12 card">
							<div class="card-body">
								<h1 class="card-title">Step 1</h1>
								<p class="card-text">Login and start accepting jobs.</p>
								<ul class="list-group list-group-flush">
									<li class="list-group-item">Priority</li>
									<li class="list-group-item">Difficulty</li>
									<li class="list-group-item">Type</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-md-12 card">
							<div class="card-body">
								<h1 class="card-title">Step 2</h1>
								<p class="card-text">Process job information.</p>
								<ul class="list-group list-group-flush">
									<li class="list-group-item">Success</li>
									<li class="list-group-item">Fail</li>
									<li class="list-group-item">Follow Up</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-md-12 card">
							<div class="card-body">
								<h1 class="card-title">Step 3</h1>
								<p class="card-text">Output logs and export.</p>
								<ul class="list-group list-group-flush">
									<li class="list-group-item">Print</li>
									<li class="list-group-item">Email</li>
									<li class="list-group-item">PDF</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/footer.php"); ?>