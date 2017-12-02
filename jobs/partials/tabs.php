<div class="row">
	<div class="col-md-12">
		<nav class="nav nav-tabs col-md-12" id="myTab" role="tablist">
			<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
			<a class="nav-item nav-link" id="nav-details-tab" data-toggle="tab" href="#nav-details" role="tab" aria-controls="nav-details" aria-selected="true">Details</a>
			<?php
				//debug.
				$midterm = 0;
				//check to see if midterm or renewal.
				if($midterm == 0) {
					//enable NCD menu.
					echo"<a class='nav-item nav-link' id='nav-ncd-tab' data-toggle='tab' href='#nav-ncd' role='tab' aria-controls='nav-ncd' aria-selected='false'>NCD</a>";
					//enable Quotes menu.
					echo"<a class='nav-item nav-link' id='nav-quotes-tab' data-toggle='tab' href='#nav-quotes' role='tab' aria-controls='nav-quotes' aria-selected='false'>Quotes</a>";
				}
				else {
					//disable NCD menu.
					echo"<a class='nav-item nav-link disabled' id='nav-ncd-tab' data-toggle='tab' href='#nav-ncd' role='tab' aria-controls='nav-ncd' aria-selected='false'>NCD</a>";
					//disable Quotes menu.
					echo"<a class='nav-item nav-link disabled' id='nav-quotes-tab' data-toggle='tab' href='#nav-quotes' role='tab' aria-controls='nav-quotes' aria-selected='false'>Quotes</a>";
				}
			?>
			<a class="nav-item nav-link" id="nav-bank-tab" data-toggle="tab" href="#nav-bank" role="tab" aria-controls="nav-bank" aria-selected="false">Bank</a>
			<a class="nav-item nav-link" id="nav-notes-tab" data-toggle="tab" href="#nav-notes" role="tab" aria-controls="nav-notes" aria-selected="false">Notes</a>
			<a class="nav-item nav-link" id="nav-cancel-tab" data-toggle="tab" href="#nav-cancel" role="tab" aria-controls="nav-cancel" aria-selected="false">Cancel</a>
		</nav>
		<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				<div class="col-md-12">
					<br>
					<h1 class="display-4">Home</h1>
					<div class="row">
						<div class="col-md-4">
							<div class="col-md-12 border border-primary detail-pane" style="height: 400px; padding: 10px;">
								<h3 class="text-center">Updates</h3>
								<ul>
									<li><b>[01/12/2017]</b> - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
									<li><b>[02/12/2017]</b> - Donec auctor arcu sit amet ligula tincidunt, vel dictum ex egestas.</li>
									<li><b>[02/12/2017]</b> - Aliquam pulvinar dui a mauris dignissim scelerisque.</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12 border border-primary detail-pane" style="height: 400px; padding: 10px;">
								<h3 class="text-center">Reactions</h3>
								<ul>
									<li>Nam non nibh et eros sodales porttitor.</li>
									<li>Donec auctor arcu sit amet ligula tincidunt, vel dictum ex egestas.</li>
									<li>Aliquam pulvinar dui a mauris dignissim scelerisque.</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12 border border-primary detail-pane" style="height: 400px;">
								<h3 class="text-center">Todo</h3>
								<input type="checkbox" name="vehicle" value="Bike"> Hello, my name is</input><br>
								<input type="checkbox" name="vehicle" value="Bike"> Steve, and I</input><br>
								<input type="checkbox" name="vehicle" value="Bike"> I have a bike</input><br>
								<input type="checkbox" name="vehicle" value="Bike"> and like curry.</input><br>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="nav-details" role="tabpanel" aria-labelledby="nav-details-tab">
				<div class="col-md-12">
					<br>
					<h1 class="display-4">Details</h1>
					<h3>Contact</h3>
					[title], [fname] [lname] [suffix] <br>
					[addr1] [addr2] [addr3] <br>
					[postcode] <br>
					[home], [mob], [email] <br>
					<br>
					<button>Edit</button>
					<?php
					//edit.
					?>
					<hr>
					<h3>Policy</h3>
					[policy #] <br>
					[policy provider] <br>
					[policy] <br>
					[policy] <br>
					<br>
					<button>Edit</button>
					<?php
					//edit.
					?>
				</div>
			</div>
			<div class="tab-pane fade" id="nav-ncd" role="tabpanel" aria-labelledby="nav-ncd-tab">
				<div class="col-md-12">
					<br>
					<h1 class="display-4">NCD</h1>
					<p>This client currently has <b>5 years</b> no claims discount.</p>
					<hr>
					<h2>Claim History</h2>
					<p>No previous history.</p>
				</div>
			</div>
			<div class="tab-pane fade" id="nav-quotes" role="tabpanel" aria-labelledby="nav-quotes-tab">
				<div class="col-md-12">
					<br>
					<h1 class="display-4">Quotes</h1>
					<div class="row">
						<div class="col-md-4">
							<div class="col-md-12 border">
								<h3>Quote 1</h3>
								<ul>
									<li>[provider]</li>
									<li>[type]</li>
									<li>[price]</li>
								</ul>
								<button class="form-control btn btn-success">Purchase</a></button>
								<br>
								<?php
								//Purchase script.
								?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12 border">
								<h3>Quote 2</h3>
								<ul>
									<li>[provider]</li>
									<li>[type]</li>
									<li>[price]</li>
								</ul>
								<button class="form-control btn btn-success">Purchase</button>
								<br>
								<?php
								//Purchase script.
								?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12 border">
								<h3>Quote 3</h3>
								<ul>
									<li>[provider]</li>
									<li>[type]</li>
									<li>[price]</li>
								</ul>
								<button class="form-control btn btn-success">Purchase</button>
								<br>
								<?php
								//Purchase script.
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="nav-bank" role="tabpanel" aria-labelledby="nav-bank-tab">
				<div class="col-md-12">
					<br>
					<h1 class="display-4">Bank</h1>
					[Billing Name] <br>
					[Billing Address] <br>
					[Bank #] <br>
					[Bank provider] <br>
					<br>
					<button>Edit</button>
					<?php
					//edit.
					?>
				</div>
			</div>
			<div class="tab-pane fade" id="nav-notes" role="tabpanel" aria-labelledby="nav-notes-tab">
				<div class="col-md-12">
					<br>
					<h1 class="display-4">Notes</h1>
					<form>
						<textarea class="form-control" rows="15" cols="50"></textarea>
						<br>
						<button class="form-control btn btn-warning">Update</button>
						<br>
						<?php
						//update notes.
						?>
					</form>
				</div>
			</div>
			<div class="tab-pane fade" id="nav-cancel" role="tabpanel" aria-labelledby="nav-cancel-tab">
				<div class="col-md-12">
					<br>
					<h1 class="display-4">Cancel</h1>
					<p>Are you sure you wish to cancel the policy? This cannot be undone.</p>
					<p>To cancel this policy, enter the policy number below.</p>
					<form class="form-group">
						<input class="form-control" type="text"></input>
					</form>
					<form class="form-group">
						<button class="form-control btn btn-danger">Submit</button>
					</form>
					<?php
					//compare policy numbers.
					?>
				</div>
			</div>
		</div>
	</div>
</div>