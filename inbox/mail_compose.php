<?php
// Include config file
require_once '../config/DBconfig.php';

// Load Header
include("../partials/header.php");
?>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<?php include("../partials/nav.php"); ?>
			<div class="col-md-11">
				<h1 class="display-4">Compose Mail</h1>
				<form>
					<div class="form-group">
						<label for="formGroupExampleInput">To:</label> <input class="form-control" id="formGroupExampleInput" placeholder="Recipients" type="text">
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Subject:</label> <input class="form-control" id="formGroupExampleInput2" placeholder="Subject" type="text">
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Content:</label> 
						<textarea class="form-control" id="exampleTextarea" rows="10"></textarea>
					</div><button class="btn btn-primary" type="submit">Send</button>
				</form>
			</div>
		</div>
	</div>
</div><?php include("../partials/footer.php"); ?>
</body>
</html>