<?php include('header.php'); 
?>
			<div class="progress">
  				<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
  					Order Process Completed : 25%
  				</div>
			</div>
			<div class="well">
			<form class="form-inline" role="form" id="reserveForm" name="reserveForm" action="reservation.php" method="post">
				<input type="hidden" name="month" value="<?php echo $_POST['month']; ?>">
				<input type="hidden" name="date" value="<?php echo $_POST['date']; ?>">
				<input type="hidden" name="year" value="<?php echo $_POST['year']; ?>">
				<input type="hidden" name="time" value="<?php echo $_POST['time']; ?>">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
						<h1>Select The Wine You Want To Make</h1>
					</div>
				</div><br />
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-xs-12 col-sm-12">
						<select id="wine" name="wine" class="form-control selectpicker" required="required">
							<optgroup label="Deluxe - Red $210" id="dRed">
							</optgroup>
							<optgroup label="Deluxe - White $210" id="dWhite">
							</optgroup>
							<optgroup label="Premium - Red $170" id="pRed">
							</optgroup>
							<optgroup label="Premium - White $170" id="pWhite">
							</optgroup>
							<optgroup label="Regular - Red $135" id="rRed">
							</optgroup>
							<optgroup label="Regular - White $135" id="rWhite">
							</optgroup>
							<optgroup label="Ice Wine - Red $160/$190" id="iRed">
							</optgroup>
							<optgroup label="Ice Wine - White $160/$190" id="iWhite">
							</optgroup>
							<optgroup label="Rose/Blush - $150" id="rose">
							</optgroup>
						</select>
					</div>
		  		</div><br />
		  		<div class="row">
					<div class="col-md-2 col-md-offset-4 col-xs-12">
						<button class="btn btn-success form-control" type="submit">Next</button>
					</div>
					<div class="col-md-2 col-xs-12">
						<button class="btn btn-default form-control" type="submit" formaction="index.php">Cancel</button>
					</div>
				</div>
  			</form>
  			<script>

  			$(function() { //run on document.ready

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

  				
  				for (var i = 0; i < pRed.length; i++) {
  					$('<option/>', { value : pRed[i]}).text(pRed[i]).appendTo('#pRed');
  				}
  				for (var i = 0; i < pWhite.length; i++) {
  					$('<option/>', { value : pWhite[i]}).text(pWhite[i]).appendTo('#pWhite');
  				}
  				for (var i = 0; i < dRed.length; i++) {
  					$('<option/>', { value : dRed[i]}).text(dRed[i]).appendTo('#dRed');
  				}
  				for (var i = 0; i < dWhite.length; i++) {
  					$('<option/>', { value : dWhite[i]}).text(dWhite[i]).appendTo('#dWhite');
  				}
  				for (var i = 0; i < rRed.length; i++) {
  					$('<option/>', { value : rRed[i]}).text(rRed[i]).appendTo('#rRed');
  				}
  				for (var i = 0; i < rWhite.length; i++) {
  					$('<option/>', { value : rWhite[i]}).text(rWhite[i]).appendTo('#rWhite');
  				}
  				for (var i = 0; i < iRed.length; i++) {
  					$('<option/>', { value : iRed[i]}).text(iRed[i]).appendTo('#iRed');
  				}
  				for (var i = 0; i < iWhite.length; i++) {
  					$('<option/>', { value : iWhite[i]}).text(iWhite[i]).appendTo('#iWhite');
  				}
  				for (var i = 0; i < rose.length; i++) {
  					$('<option/>', { value : rose[i]}).text(rose[i]).appendTo('#rose');
  				}
  			});
			</script>
  			</div>
      		<hr />
			<?php include('footer.php'); ?>
      	</div> <!-- /container -->
	</body>
</html>