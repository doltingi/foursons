					<style>
						.google-map-canvas,
						.google-map-canvas * { .box-sizing(content-box); }
						.googlemap {
							width : 100%;
							height : 100%;
						}
						@media (min-width: 992px) {
							.googlemap {
								width : 100%;
								height : 480px;
							}
						}
					</style>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center wine_title">
						<h1><strong>Contact Us</strong></h1><br />
						<img src="img/contactus.jpg" alt="Contact Us" style="height:100px" />
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-md-3 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-12">
								<address>
									<strong><?php echo TITLE; ?></strong><br /><br />
									<?php echo FOURSONS_ADDRESS1; ?><br />
									<?php echo FOURSONS_ADDRESS2; ?><br />
									<?php echo FOURSONS_PHONE; ?><br />
									<a href="mailto:#"><?php echo FOURSONS_EMAIL; ?></a>
								</address><br />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<strong>Store Hours</strong><br />
								MON - SAT : <?php echo WORKING_HOURS; ?><br />
								SUN : <?php echo SUNDAY_HOURS; ?>
							</div>
						</div>
					</div>
					<div class="col-md-9 col-sm-12 col-xs-12 text-center">
						<iframe class="googlemap" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=5+Glen+Cameron+Rd+%2321,+Markham,+ON&amp;aq=0&amp;oq=5+glen&amp;sll=49.303974,-84.738438&amp;sspn=25.073687,67.631836&amp;ie=UTF8&amp;hq=&amp;hnear=5+Glen+Cameron+Rd+%2321,+Markham,+York+Regional+Municipality,+Ontario+L3T+2B2&amp;t=m&amp;ll=43.810438,-79.420166&amp;spn=0.02973,0.054932&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
						<small><a href="https://maps.google.ca/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=5+Glen+Cameron+Rd+%2321,+Markham,+ON&amp;aq=0&amp;oq=5+glen&amp;sll=49.303974,-84.738438&amp;sspn=25.073687,67.631836&amp;ie=UTF8&amp;hq=&amp;hnear=5+Glen+Cameron+Rd+%2321,+Markham,+York+Regional+Municipality,+Ontario+L3T+2B2&amp;t=m&amp;ll=43.810438,-79.420166&amp;spn=0.02973,0.054932&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small><br /><br />
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center wine_title">
						<h1><strong>Send Us A Message</strong></h1><br />
						<img src="img/sendusamessage.jpg" alt="Send Us A Message" style="height:100px" />
					</div>
				</div>
				<hr />
				<form id="contactForm" name="contactForm" action="sendmail.php" method="post">
					<div class="row">
						<div class="col-md-3 col-sm-12 col-xs-12">
							<label>First Name</label>
							<input type="text" class="form-control" placeholder="Your First Name" name="fName" required="required">
							<label>Last Name</label>
							<input type="text" class="form-control" placeholder="Your Last Name" name="lName" required="required">
							<label>Email Address</label>
							<input type="text" class="form-control" placeholder="Your email address" name="email" required="required">
							<label>Topic</label>
							<select id="subject" name="subject" class="form-control" required="required">
								<option value="gen">General</option>
								<option value="sug">Suggestions</option>
								<option value="prod">Product Support</option>
							</select>
						</div>
						<div class="col-md-9 col-sm-12 col-xs-12">
							<label>Message</label>
							<textarea name="message" id="message" rows="10" class="form-control" required="required"></textarea>
						</div>
					</div><br />
					<div class="row">
						<div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12 text-center wine_title">
							<button type="submit" class="btn btn-foursons form-control btn-lg">SEND</button>
						</div>
					</div>
				</form>
				<hr />
				<script src="js/jquery.validate.min.js"></script>
				<script src="js/script.js"></script>