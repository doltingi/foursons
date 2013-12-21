<?php include('header.php'); ?>
			<div class="progress">
  				<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
  					Order Process Completed : 50%
  				</div>
			</div>
			<form class="form-signin" id="reserveForm" name="reserveForm" action="confirmation.php" method="post">
				<input type="hidden" name="date" value="<?php echo $_POST["month"] . " " . $_POST["date"] . " " . $_POST["year"]; ?>">
				<input type="hidden" name="time" value="<?php echo $_POST["time"]; ?>">
				<input type="hidden" name="wine" value="<?php echo $_POST["wine"]; ?>">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-xs-12 col-sm-12">
						<h1>Detail Information</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-xs-12 col-sm-12 col-md-offset-2">
						Name
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
						<?php if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["fullName"])) { ?>
						<input type="text" class="form-control" placeholder="Full name" name="fullName" required="required" value="<?php echo $_POST["fullName"]; ?>">
						<?php } else { ?>
						<input type="text" class="form-control" placeholder="Full name" name="fullName" required="required">
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-xs-12 col-sm-12 col-md-offset-2">
						Phone Number
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
						<?php if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["phoneNum"])) { ?>
						<input type="text" class="form-control" placeholder="123-456-7890" name="phoneNum" required="required" value="<?php echo $_POST["phoneNum"]; ?>">
						<?php } else { ?>
						<input type="text" class="form-control" placeholder="123-456-7890" name="phoneNum" required="required">
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-xs-12 col-sm-12 col-md-offset-2">
						E-Mail Address
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
						<?php if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["email"])) { ?>
						<input type="text" class="form-control" placeholder="example@example.com" name="email" required="required" value="<?php echo $_POST["email"]; ?>">
						<?php } else { ?>
						<input type="text" class="form-control" placeholder="example@example.com" name="email" required="required">
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-xs-12 col-sm-12 col-md-offset-2">
						Address
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
						<?php if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["address"])) { ?>
						<input type="text" class="form-control" placeholder="Address" name="address" required="required" value="<?php echo $_POST["address"]; ?>">
						<?php } else { ?>
						<input type="text" class="form-control" placeholder="Address" name="address" required="required">
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-xs-12 col-sm-12 col-md-offset-2">
						Address 2
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
						<?php if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["address2"])) { ?>
						<input type="text" class="form-control" placeholder="Apartment #, Suite #, etc" name="address2" value="<?php echo $_POST["address2"]; ?>">
						<?php } else { ?>
						<input type="text" class="form-control" placeholder="Apartment #, Suite #, etc" name="address2">
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-xs-12 col-sm-12 col-md-offset-2">
						City
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
						<?php if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["city"])) { ?>
						<input type="text" class="form-control" placeholder="City" name="city" required="required" value="<?php echo $_POST["city"]; ?>">
						<?php } else { ?>
						<input type="text" class="form-control" placeholder="City" name="city" required="required">
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-xs-12 col-sm-12 col-md-offset-2">
						Province
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
						<select id="province" name="province" class="form-control selectpicker" required="required">
							<option value="Alberta">Alberta</option>
							<option value="British Columbia">British Columbia</option>
							<option value="Manitoba">Manitoba</option>
							<option value="New Brunswick">New Brunswick</option>
							<option value="Newfoundland">Newfoundland</option>
							<option value="Northwest Territories">Northwest Territories</option>
							<option value="Nova Scotia">Nova Scotia</option>
							<option value="Nunavut">Nunavut</option>
							<option value="Ontario">Ontario</option>
							<option value="Prince Edward Island">Prince Edward Island</option>
							<option value="Quebec">Quebec</option>
							<option value="Saskatchewan">Saskatchewan</option>
							<option value="Yukon">Yukon</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-xs-12 col-sm-12 col-md-offset-2">
						Postal Code
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
						<?php if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["postal"])) { ?>
						<input type="text" class="form-control" placeholder="A1B 2C3" name="postal" required="required" value="<?php echo $_POST["postal"]; ?>">
						<?php } else { ?>
						<input type="text" class="form-control" placeholder="A1B 2C3" name="postal" required="required">
						<?php } ?>
					</div>
				</div><br />
				<div class="row">
					<div class="col-md-2 col-md-offset-4 col-xs-12">
						<button class="btn btn-success form-control" type="submit">Next</button>
					</div>
					<div class="col-md-2 col-xs-12">
						<button class="btn btn-default form-control" id="cancel" type="submit">Cancel</button>
					</div>
				</div>
			</form>
      		<hr />
      		<script>

			$("#cancel").click(function (e) {
				e.preventDefault();
				alert ("<?php echo $_SERVER['HTTP_HOST']; ?>");
				window.location = <?php echo $_SERVER['HTTP_HOST']; ?>;
			});
      		
      		</script>
			<?php include('footer.php'); ?>
      	</div> <!-- /container -->
	</body>
</html>

			