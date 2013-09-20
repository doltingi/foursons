<?php include('header.php'); ?>
			<!-- Jumbotron -->
			<div class="jumbotron">
				<h1>FS Special</h1>
				<p class="lead">$99 ($3.5/ea) for 28 bottles</p>
				<a class="btn btn-large btn-success" href="#">Reserve Yours Today</a>
			</div>

			<hr />

			<!-- Example row of columns -->
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 well well-small foursons">
					<h2>Choose Your Wine</h2>
					<p>Winemaking with over 40 different wines to choose from, you're sure to find one that you'll love. Each batch makes 28-30 bottles, and the price you see includes all the material, labels, corks, and seals. Bottles $1 each or bring your own.</p>
					<p><a class="btn" href="products.php">View Wine List &raquo;</a></p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4  well well-small foursons">
					<h2>Reserve Wine</h2>
					<p>Because you participate in certain aspects of the winemaking process: yeasting, bottling, capping, and labelling to name a few (no experience necessary) - you avoid the massive taxes and mark up you'd pay at LCBO.</p>
					<p><a class="btn" href="#">Make A Reservation &raquo;</a></p>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4  well well-small foursons">
					<h2>Bottling Appointment</h2>
					<p>Six to ten weeks after you make wine, we will contact you to let you know your wine is ready to bottle. Bring your own bottles for sterilization, or purchase new ones from us ($1/bottle). This visit takes about 30 minutes.</p>
				</div>
			</div>
			<hr />
			<div class="bs-example bs-example-tabs">
			<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
  <li><a href="#profile" data-toggle="tab">Profile</a></li>
  <li><a href="#messages" data-toggle="tab">Messages</a></li>
  <li><a href="#settings" data-toggle="tab">Settings</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">aaaaa</div>
  <div class="tab-pane" id="profile">bbbb</div>
  <div class="tab-pane" id="messages">ccccc.</div>
  <div class="tab-pane" id="settings">.ddddd</div>
</div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

<script>
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

</script>

			<?php include('footer.php'); ?>
		</div> <!-- /container -->

	</body>
</html>