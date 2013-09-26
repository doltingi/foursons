<?php include('header.php'); ?>
<style>
.disabled {
	color : black;
}
.foursons_note {
	color : #8F8F8F;
}
@media screen and (max-width: 768px) {
	.jumbotron {
		padding-top		: 20px;
		padding-bottom	: 20px;
		padding-right	: 0px;
		padding-left	: 10px;
	}
	.jumbotron h1 {
		font-size		: 40px;
	}
	.jumbotron .foursons_note {
		font-size		: 16px;
	}
}

</style>
			<div class="progress">
				<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
					Order Process Completed : 0%
				</div>
			</div>
			<div class="well well-foursons">
				<form class="form-inline" role="form" id="reserveForm" name="reserveForm" action="pickdate.php" method="post">
					<input type="hidden" name="price" value="">
					<div class="row jumbotron">
						<div class="container">
							<p class="foursons_note"><small>Please Note: You must be 19 years or older to craft wine.</small></p>
							<h1>Let's Get You Started!</h1>
							<p><br />Cannot remember our selections?<br/><br /><a class="btn btn-success btn-lg" href="products2.php">Browse Our Wines</a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-1 col-md-offset-2 col-xs-3 col-sm-3">
							<a class="btn disabled"><strong>Quality :</strong></a>
						</div>
						<div class="col-md-6 col-xs-8 col-sm-8">
							<select id="quality" name="quality" class="form-control selectpicker">
								<option value="dRed">Deluxe - Red</option>
								<option value="dWhite">Deluxe - White</option>
								<option value="pRed">Premium - Red</option>
								<option value="pWhite">Premium - White</option>
								<option value="rRed">Regular - Red</option>
								<option value="rWhite">Regular - White</option>
								<option value="iRed">Ice Wine - Red</option>
								<option value="iWhite">Ice Wine - White</option>
								<option value="rose">Rose/Blush</option>
							</select>
						</div>
					</div><br />
					<div class="row">
						<div class="col-md-1 col-md-offset-2 col-xs-3 col-sm-3">
							<a class="btn disabled"><strong>Wine :</strong></a>
						</div>
						<div class="col-md-6 col-xs-8 col-sm-8">
							<select id="wine" name="wine" class="form-control selectpicker">
							</select>
						</div>
					</div><br />
					<div class="row">
						<div class="col-md-1 col-md-offset-2 col-sm-3 col-xs-3">
							<a class="btn disabled"><strong>Price :</strong></a>
						</div>
						<div class="col-md-6 col-sm-8 col-xs-8">
							<a class="btn disabled" id="lbl_price"></a>
							<input type="hidden" name="price" id="price" class="form-control">
						</div>
					</div><br />
					<div class="row">
						<div class="col-md-2 col-md-offset-4 col-xs-12 col-sm-12">
							<button class="btn btn-success form-control" type="submit">Next</button>
						</div>
						<div class="col-md-2 col-xs-12 col-sm-12">
							<button class="btn btn-default form-control" type="submit" formaction="index.php">Cancel</button>
						</div>
					</div><br />
				</form>
				<script>
					$(function() { //run on document.ready

						var price = 0;

						var dRed = new Array();
						dRed[0] = "New Zealand Pinot Noir";
						dRed[1] = "Chilean Malbec";
						dRed[2] = "Chilean Merlot";
						dRed[3] = "Amarone della Valpolicella";
						dRed[4] = "California Cabernet Sauvignon";
						dRed[5] = "California Syrah";
	          
						var dWhite = new Array();
						dWhite[0] = "Australian Sauvignon Blanc";
						dWhite[1] = "Italian Pinot Grigio";
						dWhite[2] = "German Riesling Gewurztraminer";
						dWhite[3] = "Australian Chardonnay ";

						var pRed = new Array();
						pRed[0] = "California Pinot Noir";
						pRed[1] = "Chilean Malbec";
						pRed[2] = "French Merlot";
						pRed[3] = "Amarone";
						pRed[4] = "Australian Cabernet Sauvignon";
						pRed[5] = "Australian Shiraz";
						pRed[6] = "Italian Barolo";
	  				
						var pWhite = new Array();
						pWhite[0] = "Italian Pinot Grigio";
						pWhite[1] = "New Zealand Sauvignon Blanc";
						pWhite[2] = "German Gewurztraminer";
						pWhite[3] = "Australian Chardonnay";
	  				
						var rRed = new Array();
						rRed[0] = "Chianti";
						rRed[1] = "Pinot Noir";
						rRed[2] = "Malbec";
						rRed[3] = "Merlot";
						rRed[4] = "Cabernet Sauvignon";
						rRed[5] = "Shiraz";
						rRed[6] = "Barolo";

						var rWhite = new Array();
						rWhite[0] = "Pinot Grigio";
						rWhite[1] = "Sauvignon Blanc";
						rWhite[2] = "Gewurztraminer";
						rWhite[3] = "Riesling";
						rWhite[4] = "Chardonnay";
	 
						var iRed = new Array();
						iRed[0] = "Cabernet Franc";
	  				
						var iWhite = new Array();
						iWhite[0] = "Riesling";
						iWhite[1] = "Vidal";

						var rose = new Array();
						rose[0] = "Zinfandel Blush";
						rose[1] = "Green Apple Gewurztraminer";
						rose[2] = "Strawberry White Zinfandel";
						rose[3] = "Kiwi Melon Pinot Grigio";

						// initialize
						for (var i = 0; i < dRed.length; i++) {
							$('<option/>', { value : dRed[i]}).text(dRed[i]).appendTo('#wine');
						}
						price = 210;
						$("#lbl_price").text('$' + price);

						$("#quality").change(function() {
							var quality = $("#quality").val();
							$("#wine").empty();
							if (quality == "dRed") {
								for (var i = 0; i < dRed.length; i++) {
									$('<option/>', { value : dRed[i]}).text(dRed[i]).appendTo('#wine');
								}
								price = 210;
							}
							if (quality == "dWhite") {
								for (var i = 0; i < dWhite.length; i++) {
									$('<option/>', { value : dWhite[i]}).text(dWhite[i]).appendTo('#wine');
								}
								price = 210;
							}
							if (quality == "pRed") {
								for (var i = 0; i < pRed.length; i++) {
									$('<option/>', { value : pRed[i]}).text(pRed[i]).appendTo('#wine');
								}
								price = 170;
							}
							if (quality == "pWhite") {
								for (var i = 0; i < pWhite.length; i++) {
									$('<option/>', { value : pWhite[i]}).text(pWhite[i]).appendTo('#wine');
								}
								price = 170;
							}
							if (quality == "rRed") {
								for (var i = 0; i < rRed.length; i++) {
									$('<option/>', { value : rRed[i]}).text(rRed[i]).appendTo('#wine');
								}
								price = 135;
							}
							if (quality == "rWhite") {
								for (var i = 0; i < rWhite.length; i++) {
									$('<option/>', { value : rWhite[i]}).text(rWhite[i]).appendTo('#wine');
								}
								price = 135;
							}
							if (quality == "iRed") {
								for (var i = 0; i < iRed.length; i++) {
									$('<option/>', { value : iRed[i]}).text(iRed[i]).appendTo('#wine');
								}
								price = 160;
							}
							if (quality == "iWhite") {
								for (var i = 0; i < iWhite.length; i++) {
									$('<option/>', { value : iWhite[i]}).text(iWhite[i]).appendTo('#wine');
								}
								price = 160;
							}
							if (quality == "rose") {
								for (var i = 0; i < rose.length; i++) {
									$('<option/>', { value : rose[i]}).text(rose[i]).appendTo('#wine');
								}
								price = 150;
							}
							$("#lbl_price").text('$' + price);
						});

						$("#wine").change(function() { //this occurs when select 1 changes
							if ($("#quality").val() == "iWhite") {
								if ($("#wine").val() == "Vidal") {
									price = 190;
								} else {
									price = 160;
								}
							}
	            
							$("#lbl_price").text('$' + price);
							$("#price").val(price);
						});
					});
				</script>
  			</div>
      		<hr />
			<?php include('footer.php'); ?>
      	</div> <!-- /container -->
	</body>
</html>