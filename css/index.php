<?php
 /**
  * Project:		Retention Management System
  * Copyright:		(C) JGinn 2017
  * FileCreated:	171206
  */
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBConfig.php");		// Include config file
include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");
?>
<head>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <title>Style Test</title>
</head>
<div class="container">
	<div class="col-md-12">
		<h1 class="text-center">This should be styled with bootstrap.</h1>
		<h1 class="text-center">And in the middle of the page.</h1>
		<h1 class="text-center">This has a broken variable.</h1>
		<?php echo $environment; ?>
	</div>
</div>