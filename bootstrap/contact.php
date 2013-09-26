<?php include('header.php'); ?>
      		<div class="row">
      			<div class="col-md-3 col-sm-12 col-xs-12 well foursons">
              <div class="row">
                <div class="col-md-12">
                  <address>
						        <strong>Foursons Winemakers</strong><br /><br />
  						      5 Glen Cameron Rd. Unit 21<br />
  						      Thornhill, ON, L3T 5W2<br /><br />
        				   	<abbr title="Phone">Phone:</abbr> (647) 847-6977<br />
        				   	<abbr title="Phone">Phone:</abbr> (647) 409-4199<br /><br />
                    <a href="mailto:#">foursonswinemaker@gmail.com</a>
    				      </address>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <strong>Store Hours</strong><br /><br />
                  Monday : <?php echo MONDAY_HOURS; ?><br />
                  Tuesday : <?php echo TUESDAY_HOURS; ?><br />
                  Wednesday : <?php echo WEDNESDAY_HOURS; ?><br />
                  Thursday : <?php echo THURSDAY_HOURS; ?><br />
                  Friday : <?php echo FRIDAY_HOURS; ?><br />
                  Saturday : <?php echo SATURDAY_HOURS; ?><br />
                  Sunday : <?php echo SUNDAY_HOURS; ?>
                </div>
              </div>
      			</div>
            <style>
              .google-map-canvas,
              .google-map-canvas * { .box-sizing(content-box); }
              .googlemap {
                width : 300px;
                height : 300px;
              }
              @media (min-width: 992px) {
                .googlemap {
                  width : 640px;
                  height : 480px;
                }
              }
            </style>
      			<div class="col-md-9 col-sm-12 col-xs-12 well foursons text-center">
      				<iframe class="googlemap" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=5+Glen+Cameron+Rd+%2321,+Markham,+ON&amp;aq=0&amp;oq=5+glen&amp;sll=49.303974,-84.738438&amp;sspn=25.073687,67.631836&amp;ie=UTF8&amp;hq=&amp;hnear=5+Glen+Cameron+Rd+%2321,+Markham,+York+Regional+Municipality,+Ontario+L3T+2B2&amp;t=m&amp;ll=43.810438,-79.420166&amp;spn=0.02973,0.054932&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
      				<small><a href="https://maps.google.ca/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=5+Glen+Cameron+Rd+%2321,+Markham,+ON&amp;aq=0&amp;oq=5+glen&amp;sll=49.303974,-84.738438&amp;sspn=25.073687,67.631836&amp;ie=UTF8&amp;hq=&amp;hnear=5+Glen+Cameron+Rd+%2321,+Markham,+York+Regional+Municipality,+Ontario+L3T+2B2&amp;t=m&amp;ll=43.810438,-79.420166&amp;spn=0.02973,0.054932&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
      			</div>
      		</div>
          <div class="well">
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
              <div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
                <button type="submit" class="btn btn-success form-control">Send</button>
              </div>
            </div>
            </form>
          </div>
          <hr />
			<?php include('footer.php'); ?>
      	</div> <!-- /container -->
	</body>
</html>