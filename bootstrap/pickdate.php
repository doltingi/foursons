<?php include('header.php'); 
?>
			<div class="progress">
  				<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
  					Order Process Completed : 25%
  				</div>
			</div>
			<div class="well well-foursons">
			<form class="form-inline" role="form" id="reserveForm" name="reserveForm" action="reservation.php" method="post">
				<input type="hidden" name="price" value="<?php echo $_POST["price"]; ?>">
				<input type="hidden" name="wine" value="<?php echo $_POST["wine"]; ?>">
				<input type="hidden" name="quality" value="<?php echo $_POST["quality"]; ?>">
				<div class="row jumbotron">
					<div class="container">
						<h1>Schedule Your Drop In Date</h1>
						<p>To start wine crafting process, you will need to drop in to take care of the next important thing, yeast dropping and making payment.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-4 col-xs-12 col-sm-12">
						<div class="form-group">
							<label>Date : </label>
						</div>
						<div class="form-group">
		    				<select id="month" name="month" class="form-control selectpicker" required="required">
								<option value="January">January</option>
								<option value="February">February</option>
								<option value="March">March</option>
								<option value="April">April</option>
								<option value="May">May</option>
								<option value="June">June</option>
								<option value="July">July</option>
								<option value="August">August</option>
								<option value="September">September</option>
								<option value="October">October</option>
								<option value="November">November</option>
								<option value="December">December</option>
							</select>
		  				</div>
		  				<div class="form-group">
		    				<select id="date" name="date" class="form-control selectpicker" required="required">
							</select>
		  				</div>
		  				<div class="form-group">
		    				<select id="year" name="year" class="form-control selectpicker" required="required">
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
							</select>
		  				</div>
  					</div>
  				</div><br />
  				<div class="row">
  					<div class="col-md-6 col-md-offset-4 col-xs-12 col-sm-12">
						<div class="form-group">
							<label>Time : </label>
						</div>
						<div class="form-group">
							<select id="time" name="time" class="form-control selectpicker" required="required">
							</select>
						</div>
					</div>
				</div><br />
				<div class="row">
					<div class="col-md-2 col-md-offset-4 col-xs-12">
						<button class="btn btn-success form-control" type="submit">Next</button>
					</div>
					<div class="col-md-2 col-xs-12">
						<button class="btn btn-default form-control" type="submit" formaction="index.php">Cancel</button>
					</div>
				</div><br />
  			</form>
  			<script>

  			$(function() { //run on document.ready

  				var d = new Date();

				var month = d.getMonth() + 1;
				var day = d.getDate();
				var length = 31;

				if (month == 1 || month == 3 || month == 5 || month == 7 || month == 9 || month == 11) {
					length = 31;
				} else if (month == 2) {
					length = 28;
				} else {
					length = 30;
				}
				$("#date").empty(); 
				for (var i = 1; i <= length; i++) {
					$('<option/>', { value : i }).text(i).appendTo('#date');	
				}
  				
  				var openHours = new Array();
  				openHours[0] = 9;
  				openHours[1] = 10;
  				openHours[2] = 11;
  				openHours[3] = 12;
  				openHours[4] = 1;
  				openHours[5] = 2;
  				openHours[6] = 3;
  				openHours[7] = 4;
  				openHours[8] = 5;
  				openHours[9] = 6;
  				openHours[10] = 7;

  				var openMinutes = new Array();
  				openMinutes[0] = "00";
  				openMinutes[1] = "15";
  				openMinutes[2] = "30";
  				openMinutes[3] = "45";
  				
  				var AorP = "AM";
  				$('#time').empty();
  				for (var i = 0; i < openHours.length - 1; i++) {
  					for (var j = 0; j < openMinutes.length; j++) {
  						if (i > 2) {
  							AorP = "PM";
  						}
  						var text = openHours[i] + ":" + openMinutes[j] + " " + AorP;
  						$('<option/>', { value : text}).text(text).appendTo('#time');
  					}
  				}
  				var text = openHours[10] + ":" + openMinutes[0] + " " + AorP;
  				$('<option/>', { value : text}).text(text).appendTo('#time');
  			
  				$("#month").change(function() { //this occurs when select 1 changes
  					var month = $("#month").val();
  					var length = 31;
  					if (month == 'January' || month == 'March' || month == 'May' || month == 'July' || month == 'September' || month == 'November') {
  						length = 31;
  					} else if (month == 'February') {
						if ($("#year").val() % 4 == 0) {
							length = 29;
						}
						length = 28;
					} else {
						length = 30;
					}
					$("#date").empty();
					for (var i = 1; i <= length; i++) {
						$('<option/>', { value : i }).text(i).appendTo('#date');
					}
				});
			});
			</script>
  			</div>
      		<hr />
			<?php include('footer.php'); ?>
      	</div> <!-- /container -->
	</body>
</html>