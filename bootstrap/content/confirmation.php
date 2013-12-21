			<form class="form-signin" action="sendmail.php" method="post">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1>Confirm Your Order Information</h1>
					</div>
				</div>
				<div class="well col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
					<div class="row">
						<div class="col-md-3 col-md-offset-2 col-xs-12 col-sm-12">
							<label>Wine Ordered</label>
						</div>
						<div class="col-md-7 col-xs-12 col-sm-12">
							<?php echo $_POST["wine"]; ?>
							<input type="hidden" name="wine" value="<?php echo $_POST["wine"]; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-md-offset-2 col-xs-12 col-sm-12">
							<label>Date &amp; Time</label>
						</div>
						<div class="col-md-7 col-xs-12 col-sm-12">
							<?php echo $_POST["date"] . "\n"; ?>
							<?php echo $_POST["time"]; ?>
							<input type="hidden" name="date" value="<?php echo $_POST["date"]; ?>">
							<input type="hidden" name="time" value="<?php echo $_POST["time"]; ?>">
						</div>
					</div>
				</div><br />
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1>Confirm Your Personal Information</h1>
					</div>
				</div>
				<div class="well col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
					<div class="row">
						<div class="col-md-3 col-md-offset-2 col-xs-12 col-sm-12">
							<label>Name</label>
						</div>
						<div class="col-md-7 col-xs-12 col-sm-12">
							<?php echo $_POST["fullName"]; ?>
							<input type="hidden" name="fullName" value="<?php echo $_POST["fullName"]; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-md-offset-2 col-xs-12 col-sm-12">
							<label>Phone Number</label>
						</div>
						<div class="col-md-7 col-xs-12 col-sm-12">
							<?php echo $_POST["phoneNum"]; ?>
							<input type="hidden" name="phoneNum" value="<?php echo $_POST["phoneNum"]; ?>">

				</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-md-offset-2 col-xs-12 col-sm-12">
							<label>E-Mail Address</label>
						</div>
						<div class="col-md-7 col-xs-12 col-sm-12">
							<?php echo $_POST["email"]; ?>

							<input type="hidden" name="email" value="<?php echo $_POST["email"]; ?>">

						</div>

					</div>

					<div class="row">

						<div class="col-md-3 col-md-offset-2 col-xs-12 col-sm-12">

							<label>Address</label>

						</div>

						<div class="col-md-7 col-xs-12 col-sm-12">

							<?php echo $_POST["address"]; ?> <br />

							<?php if ($_POST["address2"] != "") {

								echo $_POST["address2"] . "<br />"; 

							}?>



							<?php echo $_POST["city"] . ', ' . $_POST["province"] . ', ' . $_POST["postal"]; ?>

							<input type="hidden" name="address" value="<?php echo $_POST["address"]; ?>">

							<input type="hidden" name="address2" value="<?php echo $_POST["address2"]; ?>">

							<input type="hidden" name="city" value="<?php echo $_POST["city"]; ?>">

							<input type="hidden" name="province" value="<?php echo $_POST["province"]; ?>">

							<input type="hidden" name="postal" value="<?php echo $_POST["postal"]; ?>">

						</div>

					</div>

				</div><br />

				<div class="row">

					<div class="col-md-2 col-md-offset-4 col-xs-12">

						<button class="btn btn-success form-control" type="submit">Confirm</button>

					</div>

					<div class="col-md-2 col-xs-12">

						<button class="btn btn-default form-control" type="submit" formaction="reservation.php">Back</button>

					</div>

				</div>



			</form>
