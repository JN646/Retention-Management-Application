<?php
 /**
  * Project:		Retention Management System
  * Copyright:		(C) JGinn 2017
  * FileCreated:	171203
  */
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");
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
							<form>
								<div class="form-group">
									<label for="exampleInputEmail1">Username</label> <input aria-describedby="emailHelp" class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email"> <small class="form-text text-muted" id="emailHelp">Use system username.</small>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
								</div><button class="btn btn-primary" type="submit">Submit</button>
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