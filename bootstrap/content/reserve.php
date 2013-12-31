				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center wine_title">
						<h1><strong>Schedule Your Drop In Date</strong></h1><br />
						<img src="img/scheduledropdate.jpg" alt="Schedule Your Drop In Date" style="height:100px" />
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h4>To start your wine crafting process, you will need to drop in to take care of the next important thing, dropping yeast and making payment.</h4>
					</div>
				</div>
				<hr />
				<form id="contact-form" method="post" action="confirmation.php">
					<div id="new_order">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 text-center">
								<p><br />Cannot remember our selections?&nbsp;&nbsp;Browse <a href="products.php" target="_blank">Our Wines</a></p>
							</div>
						</div>
						<fieldset>
							<legend class="wine_title">Contact Information</legend>
							<div class="form-group row">
								<div class="col-md-2 col-md-offset-2 col-xs-3 col-sm-3 wine_title text-right">
									<label><h4>Name</h4></label>
								</div>
								<div class="col-md-4 col-md-offset-1 col-xs-9 col-sm-9 input-group">
									<input type="text" class="form-control" name="name" id="name" placeholder="Full name here..." />
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-2 col-md-offset-2 col-xs-3 col-sm-3 wine_title text-right">
									<label><h4>Email</h4></label>
								</div>
								<div class="col-md-4 col-md-offset-1 col-xs-9 col-sm-9 input-group">
									<input type="text" class="form-control" name="email" id="email" placeholder="Email address here..." />
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-2 col-md-offset-2 col-xs-3 col-sm-3 wine_title text-right">
									<label><h4>Phone</h4></label>
								</div>
								<div class="col-md-4 col-md-offset-1 col-xs-9 col-sm-9 input-group">
									<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number here..." />
								</div>
							</div><br />
						</fieldset>
						<fieldset>
							<legend class="wine_title">Order Information</legend>
							<div class="form-group row">
								<br />
								<div class="col-md-2 col-md-offset-2 col-xs-3 col-sm-3 wine_title text-right">
									<h4>Quality</h4>
								</div>
								<div class="col-md-4 col-md-offset-1 col-xs-9 col-sm-9">
									<select id="quality" name="quality" class="form-control selectpicker">
										<option value="Deluxe Red">Deluxe - Red</option>
										<option value="Deluxe White">Deluxe - White</option>
										<option value="Premium Red">Premium - Red</option>
										<option value="Premium White">Premium - White</option>
										<option value="Regular Red">Regular - Red</option>
										<option value="Regular White">Regular - White</option>
										<option value="Ice Wine Red">Ice Wine - Red</option>
										<option value="Ice Wine White">Ice Wine - White</option>
										<option value="Rose/Blush">Rose/Blush</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-2 col-md-offset-2 col-xs-3 col-sm-3 wine_title text-right">
									<h4>Wine</h4>
								</div>
								<div class="col-md-4 col-md-offset-1 col-xs-9 col-sm-9">
									<select id="wine" name="wine" class="form-control selectpicker">
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-2 col-md-offset-2 col-xs-3 col-sm-3 wine_title text-right">
									<h4>Date</h4>
								</div>
								<div class="col-md-4 col-md-offset-1 col-xs-9 col-sm-9">
									<input type="text" id="date" name="date" class="form-control" placeholder="Select a date here..." required />
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-2 col-md-offset-2 col-xs-3 col-sm-3 wine_title text-right">
									<h4>Time</h4>
								</div>
								<div class="col-md-4 col-md-offset-1 col-xs-9 col-sm-9">
									<select id="time" name="time" class="form-control selectpicker">
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-2 col-md-offset-2 col-xs-3 col-sm-3 wine_title text-right">
									<h4>Comments (Optional)</h4>
								</div>
								<div class="col-md-4 col-md-offset-1 col-xs-9 col-sm-9">
									<textarea name="comment" rows="6" resizeable="no" class="form-control"></textarea><br />
									<h4><small>For additional orders, please leave your order in the comment above.</small></h4>
								</div>
							</div>
							<br />
						</fieldset>
					</div>
					<hr />
					<div class="row">
						<div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12 text-center">
							<button type="submit" class="btn btn-foursons form-control">Reserve Now</a>
						</div>
					</div>
				</form>
				<script type="text/javascript">
					$(function() { //run on document.ready

						var openHours = new Array();
						openHours[0] = 10;
						openHours[1] = 11;
						openHours[2] = 12;
						openHours[3] = 1;
						openHours[4] = 2;
						openHours[5] = 3;
						openHours[6] = 4;
						openHours[7] = 5;
						openHours[8] = 6;
						openHours[9] = 7;

						var openMinutes = new Array();
						openMinutes[0] = "00";
						openMinutes[1] = "15";
						openMinutes[2] = "30";
						openMinutes[3] = "45";

						var AorP = "AM";

						$("#time").empty();
						for (var i = 0; i < openHours.length - 1; i++) {
							for (var j = 0; j < openMinutes.length; j++) {
								if (i > 2) {
									AorP = "PM";
								}
								var text = openHours[i] + ":" + openMinutes[j] + " " + AorP;
								$('<option/>', { value : text}).text(text).appendTo('#time');
							}
						}

						var price = 0;

						var dRed = new Array();
						dRed[0] = "<?php echo NZ . " " . T_PNO; ?>";
						dRed[1] = "<?php echo CHI . " " . T_MAL; ?>";
						dRed[2] = "<?php echo CHI . " " . T_MER; ?>";
						dRed[3] = "<?php echo T_AMA . " " . DELLA; ?>";
						dRed[4] = "<?php echo CAL . " " . T_CSA; ?>";
						dRed[5] = "<?php echo AUS . " " . T_SYR; ?>";
	          
						var dWhite = new Array();
						dWhite[0] = "<?php echo AUS . " " . T_SBL; ?>";
						dWhite[1] = "<?php echo ITA . " " . T_PGR; ?>";
						dWhite[2] = "<?php echo GER . " " . T_RIE . " " . T_GEW; ?>";
						dWhite[3] = "<?php echo AUS . " " . T_CHA; ?>";

						var pRed = new Array();
						pRed[0] = "<?php echo CAL . " " . T_PNO; ?>";
						pRed[1] = "<?php echo CHI . " " . T_MAL; ?>";
						pRed[2] = "<?php echo FRA . " " . T_MER; ?>";
						pRed[3] = "<?php echo T_AMA; ?>";
						pRed[4] = "<?php echo AUS . " " . T_CSA; ?>";
						pRed[5] = "<?php echo AUS . " " . T_SHI; ?>";
						pRed[6] = "<?php echo ITA . " " . T_BAR; ?>";
	  				
						var pWhite = new Array();	
						pWhite[0] = "<?php echo ITA . " " . T_PGR; ?>";
						pWhite[1] = "<?php echo NZ . " " . T_SBL; ?>";
						pWhite[2] = "<?php echo GER . " " . T_GEW; ?>";
						pWhite[3] = "<?php echo AUS . " " . T_CHA; ?>";
	  				
						var rRed = new Array();
						rRed[0] = "<?php echo T_CHI; ?>";
						rRed[1] = "<?php echo T_PNO; ?>";
						rRed[2] = "<?php echo T_MAL; ?>";
						rRed[3] = "<?php echo T_MER; ?>";
						rRed[4] = "<?php echo T_CSA; ?>";
						rRed[5] = "<?php echo T_SHI; ?>";
						rRed[6] = "<?php echo T_BAR; ?>";

						var rWhite = new Array();	
						rWhite[0] = "<?php echo T_PGR; ?>";
						rWhite[1] = "<?php echo T_SBL; ?>";
						rWhite[2] = "<?php echo T_GEW; ?>";
						rWhite[3] = "<?php echo T_RIE; ?>";
						rWhite[4] = "<?php echo T_CHA; ?>";
	 
						var iRed = new Array();
						iRed[0] = "<?php echo T_CFR; ?>";
	  				
						var iWhite = new Array();
						iWhite[0] = "<?php echo T_RIE; ?>";
						iWhite[1] = "<?php echo T_VID; ?>";

						var rose = new Array();
						rose[0] = "<?php echo T_RAS . " " . T_ZIN; ?>";
						rose[1] = "<?php echo T_STR . " " . T_ZIN; ?>";
						rose[2] = "<?php echo T_KIW . " " . T_PGR; ?>";
						rose[3] = "<?php echo T_GRE . " " . T_GEW; ?>";
						rose[4] = "<?php echo T_BLU . " " . T_BLI; ?>";
						rose[5] = "<?php echo T_BLACK . " " . T_BLA; ?>";
						rose[6] = "<?php echo T_POM . " " . T_WIW; ?>";

						// initialize
						for (var i = 0; i < dRed.length; i++) {
							$('<option/>', { value : dRed[i]}).text(dRed[i]).appendTo('#wine');
						}
						price = 210;
						$("#lbl_price").text('$' + price);

						$("#quality").change(function() {
							var quality = $("#quality").val();
							$("#wine").empty();
							if (quality == "Deluxe Red") {
								for (var i = 0; i < dRed.length; i++) {
									$('<option/>', { value : dRed[i]}).text(dRed[i]).appendTo('#wine');
								}
								price = 210;
							}
							if (quality == "Deluxe White") {
								for (var i = 0; i < dWhite.length; i++) {
									$('<option/>', { value : dWhite[i]}).text(dWhite[i]).appendTo('#wine');
								}
								price = 210;
							}
							if (quality == "Premium Red") {
								for (var i = 0; i < pRed.length; i++) {
									$('<option/>', { value : pRed[i]}).text(pRed[i]).appendTo('#wine');
								}
								price = 170;
							}
							if (quality == "Premium White") {
								for (var i = 0; i < pWhite.length; i++) {
									$('<option/>', { value : pWhite[i]}).text(pWhite[i]).appendTo('#wine');
								}
								price = 170;
							}
							if (quality == "Regular Red") {
								for (var i = 0; i < rRed.length; i++) {
									$('<option/>', { value : rRed[i]}).text(rRed[i]).appendTo('#wine');
								}
								price = 135;
							}
							if (quality == "Regular White") {
								for (var i = 0; i < rWhite.length; i++) {
									$('<option/>', { value : rWhite[i]}).text(rWhite[i]).appendTo('#wine');
								}
								price = 135;
							}
							if (quality == "Ice Wine Red") {
								for (var i = 0; i < iRed.length; i++) {
									$('<option/>', { value : iRed[i]}).text(iRed[i]).appendTo('#wine');
								}
								price = 160;
							}
							if (quality == "Ice Wine White") {
								for (var i = 0; i < iWhite.length; i++) {
									$('<option/>', { value : iWhite[i]}).text(iWhite[i]).appendTo('#wine');
								}
								price = 160;
							}
							if (quality == "Rose/Blush") {
								for (var i = 0; i < rose.length; i++) {
									$('<option/>', { value : rose[i]}).text(rose[i]).appendTo('#wine');
								}
								price = 150;
							}
						});
					});
				</script>
				<script src="js/jquery.validate.min.js"></script>
				<script src="js/script.js"></script>