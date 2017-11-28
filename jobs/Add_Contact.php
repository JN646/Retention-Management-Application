<?php
// Include config file
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");

// Load Header
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");
?>
</head>
	<title>Add Contact</title>
</head>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/nav.php"); ?>
			<div class="col-md-11">
				<h1>Add New Job</h1>
				<p>Add a new job to the waiting list.</p>
				<form>
					<div class="form-row">
						<div class="col">
							<label for="firstname">First Name</label> <input aria-describedby="emailHelp" class="form-control" id="firstname" placeholder="First Name" type="text">
						</div>
						<div class="col">
							<label for="lastname">Last Name</label> <input class="form-control" id="lastname" placeholder="Last Name" type="text">
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<label for="age">Age</label> <input class="form-control" id="age" placeholder="Age" type="text">
						</div>
						<div class="col">
							<label for="email">Email</label> <input class="form-control" id="email" placeholder="Email" type="text">
						</div>
						<div class="col">
							<label for="phone">Phone Number</label> <input class="form-control" id="phone" placeholder="Phone" type="text">
						</div>
					</div>
					<div class="form-group">
						<label for="provider">Provider</label> <input class="form-control" id="provider" placeholder="Provider" type="text">
					</div>
					<div class="form-group">
						<label for="policynum">Policy Number</label> <input class="form-control" id="policynum" placeholder="Policy Number" type="text">
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label for="policyworth">Policy Worth</label>
							<div class="input-group">
								<span class="input-group-addon">£</span> <input class="form-control" id="policyworth" placeholder="Policy Worth" type="text">
							</div>
						</div>
						<div class="col-md-6">
							<label for="policyworth">Policy Group</label>
							<div class="input-group">
							  <select class="custom-select" id="inlineFormCustomSelect">
								<option selected>Choose...</option>
								<option value="RED">Red</option>
								<option value="GREEN">Green</option>
								<option value="YELLOW">Yellow</option>
								<option value="PURPLLE">Purple</option>
							  </select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="notes">Notes</label> 
						<textarea class="form-control" id="notes" rows="5"></textarea>
					</div><button class="btn btn-primary" type="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/footer.php"); ?>