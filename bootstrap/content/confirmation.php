				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center wine_title">
						<h1><strong>Confirmation</strong></h1><br />
						<img src="img/scheduledropdate.jpg" alt="Schedule Your Drop In Date" style="height:100px" />
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h4>Please review your contact information and order information, and press 'Confirm' to finish.</h4>
					</div>
				</div>
				<hr />
				<form class="form-signin" action="sendmail.php" method="post">
					<fieldset>
						<legend class="wine_title">Confirm Your Contact Information</legend>
						<div class="well col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
							<br />
							<div class="row">
								<div class="col-md-3 col-md-offset-2 col-xs-12 col-sm-12 wine_title text-right">
									<h4>Name</h4>
								</div>
								<div class="col-md-7 col-xs-12 col-sm-12">
									<h5><?php echo $_POST["name"]; ?></h5>
									<input type="hidden" name="fullName" value="<?php echo $_POST["name"]; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 col-md-offset-2 col-xs-12 col-sm-12 wine_title text-right">
									<h4>Phone Number</h4>
								</div>
								<div class="col-md-7 col-xs-12 col-sm-12">
									<h5><?php echo $_POST["phone"]; ?></h5>
									<input type="hidden" name="phoneNum" value="<?php echo $_POST["phone"]; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 col-md-offset-2 col-xs-12 col-sm-12 wine_title text-right">
									<h4>E-Mail Address</h4>
								</div>
								<div class="col-md-7 col-xs-12 col-sm-12">
									<h5><?php echo $_POST["email"]; ?></h5>
									<input type="hidden" name="email" value="<?php echo $_POST["email"]; ?>">
								</div>
							</div><br />
						</div>
					</fieldset>
					<br />
					<fieldset>
						<legend class="wine_title">Confirm Your Order Information</legend>
						<div class="well col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
							<br />
							<div class="row">
								<div class="col-md-3 col-md-offset-2 col-xs-12 col-sm-12 wine_title text-right">
									<h4>Wine Ordered</h4>
								</div>
								<div class="col-md-7 col-xs-12 col-sm-12">
									<h5><?php echo $_POST["quality"]; ?> - <?php echo $_POST["wine"]; ?></h5>
									<input type="hidden" name="wine" value="<?php echo $_POST["quality"]; ?> <?php echo $_POST["wine"]; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 col-md-offset-2 col-xs-12 col-sm-12 wine_title text-right">
									<h4>Date &amp; Time</h4>
								</div>
								<div class="col-md-7 col-xs-12 col-sm-12">
									<h5><?php echo $_POST["date"] . "\n"; ?>
									<?php echo $_POST["time"]; ?></h5>
									<input type="hidden" name="date" value="<?php echo $_POST["date"]; ?>">
									<input type="hidden" name="time" value="<?php echo $_POST["time"]; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 col-md-offset-2 col-xs-12 col-sm-12 wine_title text-right">
									<h4>Comment</h4>
								</div>
								<div class="col-md-7 col-xs-12 col-sm-12">
									<h5><?php echo $_POST["comment"] . "\n"; ?></h5>
									<?php if($_POST["comment"]) { ?><input type="hidden" name="comment" value="<?php echo $_POST["comment"]; ?>"><?php } ?>
								</div>
							</div><br />
						</div>
					</fieldset>
					<br />
					<div class="row">
						<div class="col-md-2 col-md-offset-4 col-sm-12 col-xs-12">
							<button class="btn btn-foursons form-control" type="submit">Confirm</button>
						</div>
						<div class="col-md-2 col-sm-12 col-xs-12">
							<button class="btn btn-default form-control" type="submit" formaction="<?php echo basename($_SERVER["HTTP_REFERER"]); ?>">Back</button>
						</div>
					</div>
				</form>
