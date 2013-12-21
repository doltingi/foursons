<?php include('library.php'); ?>

<!DOCTYPE html>

<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <title><?php echo(TITLE . " ::: " . QUOTE) ?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="Sanghyun Lee">
	    <!-- Le styles -->
	    <link href="css/bootstrap.css" rel="stylesheet">
	    <link href="css/fs.css" rel="stylesheet">
	    <link rel="shortcut icon" href="favicon.png" type="image/png">
	    <script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/bootstrap.js"></script>

	    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->

	    <!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="favicon.png">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php if ($_GET["f"] == "Deluxe") { ?>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center div-foursons">
				<h1 id="Deluxe"><strong>Deluxe</strong> - $210 <small>&nbsp;&nbsp;&nbsp;&nbsp;8 weeks to craft</small></h1>
			</div>
		</div>
		<section class="red">
			<div class="container">
				<a href="#" class="back">
					<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<h2 id="DRed"><strong>Red</strong></h2>
					</div>
				</div><hr />
				<div class="row">
					<div class="col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
						<h3 id="D<?php echo NZ . T_PNO; ?>"><?php echo NZ . " " . T_PNO; ?></h3><br />
						<p><?php echo D_NZPN; ?></p>
					</div>
					<div class="col-md-4 col-md-offset-2  col-sm-12 col-xs-12">
						<h3 id="D<?php echo CHI . T_MAL; ?>"><?php echo CHI . " " . T_MAL; ?></h3><br />
						<p><?php echo D_CMAL; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="D<?php echo CHI . T_MER; ?>"><?php echo CHI . " " . T_MER; ?></h3><br />
						<p><?php echo D_CMER; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="D<?php echo T_AMA . DELLA; ?>"><?php echo T_AMA . " " . DELLA; ?></h3><br />
						<p><?php echo D_AMAD; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="D<?php echo CAL . T_CSA; ?>"><?php echo CAL . " " . T_CSA; ?></h3><br />
						<p><?php echo D_CCSA; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="D<?php echo CAL . T_SYR; ?>"><?php echo CAL . " " . T_SYR; ?></h3><br />
						<p><?php echo D_CSYR; ?></p>
					</div>
				</div>
			</div>
		</section>
		<section class="white">
			<div class="container">
				<a href="#" class="back">
					<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<h2 id="DWhite"><strong>White</strong></h2>
					</div>
				</div><hr />
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="D<?php echo AUS . T_SBL; ?>"><?php echo AUS . " " . T_SBL; ?></h3><br />
						<p><?php echo D_ASBL; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="D<?php echo ITA . T_PGR; ?>"><?php echo ITA . " " . T_PGR; ?></h3><br />
						<p><?php echo D_IPGR; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="D<?php echo GER . T_RIE . T_GEW; ?>"><?php echo GER . " " . T_RIE . " " . T_GEW; ?></h3><br />
						<p><?php echo D_GRGE; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="D<?php echo AUS . T_CHA; ?>"><?php echo AUS . " " . T_CHA; ?></h3><br />
						<p><?php echo D_ACHA; ?></p>
					</div>
				</div>
			</div>
		</section>
		<?php } elseif ($_GET["f"] == "Premium") { ?>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center div-foursons">
				<h1 id="Premium"><strong>Premium</strong> - $170 <small>&nbsp;&nbsp;&nbsp;&nbsp;6 weeks to craft</small></h1>
			</div>
		</div>
		<section class="red">
			<div class="container">
				<a href="#" class="back">
					<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<h2 id="PRed"><strong>Red</strong></h2>
					</div>
				</div><hr />
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="P<?php echo CAL . T_PNO; ?>"><?php echo CAL . " " . T_PNO; ?></h3><br />
						<p><?php echo D_CPNO; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="P<?php echo CHI . T_MAL; ?>"><?php echo CHI . " " . T_MAL; ?></h3><br />
						<p><?php echo D_CMAL2; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="P<?php echo FRA . T_MER; ?>"><?php echo FRA . " " . T_MER; ?></h3><br />
						<p><?php echo D_FMER; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="P<?php echo T_AMA; ?>"><?php echo T_AMA; ?></h3><br />
						<p><?php echo D_AMAR; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="P<?php echo AUS . T_CSA; ?>"><?php echo AUS . " " . T_CSA; ?></h3><br />
						<p><?php echo D_ACSA; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="P<?php echo AUS . T_SHI; ?>"><?php echo AUS . " " . T_SHI; ?></h3><br />
						<p><?php echo D_ASHI; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="P<?php echo ITA . T_BAR; ?>"><?php echo ITA . " " . T_BAR; ?></h3><br />
						<p><?php echo D_IBAR; ?></p>
					</div>
				</div>
			</div>
		</section>
		<section class="white">
			<div class="container">
				<a href="#" class="back">
					<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<h2 id="PWhite"><strong>White</strong></h2>
					</div>
				</div><hr />
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="P<?php echo ITA . T_PGR; ?>"><?php echo ITA . " " . T_PGR; ?></h3><br />
						<p><?php echo D_IPGR2; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="P<?php echo NZ . T_SBL; ?>"><?php echo NZ . " " . T_SBL; ?></h3><br />
						<p><?php echo D_NZSB; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="P<?php echo GER . T_GEW; ?>"><?php echo GER . " " . T_GEW; ?></h3><br />
						<p><?php echo D_GGEW; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="P<?php echo AUS . T_CHA; ?>"><?php echo AUS . " " . T_CHA; ?></h3><br />
						<p><?php echo D_ACHA2; ?></p>
					</div>
				</div>
			</div>
		</section>
		<?php } elseif ($_GET["f"] == "Regular") { ?>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center div-foursons">
				<h1 id="Regular"><strong>Regular</strong> - $135 <small>&nbsp;&nbsp;&nbsp;&nbsp;4 weeks to craft</small></h1>
			</div>
		</div>
		<section class="red">
			<div class="container">
				<a href="#" class="back">
					<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<h2 id="RRed"><strong>Red</strong></h2>
					</div>
				</div><hr />
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="R<?php echo T_CHI; ?>"><?php echo T_CHI; ?></h3><br />
						<p><?php echo D_CHIA; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="R<?php echo T_PNO; ?>"><?php echo T_PNO; ?></h3><br />
						<p><?php echo D_PNOI; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="R<?php echo T_MAL; ?>"><?php echo T_MAL; ?></h3><br />
						<p><?php echo D_MALB; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="R<?php echo T_MER; ?>"><?php echo T_MER; ?></h3><br />
						<p><?php echo D_MERL; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="R<?php echo T_CSA; ?>"><?php echo T_CSA; ?></h3><br />
						<p><?php echo D_CSAU; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="R<?php echo T_BAR; ?>"><?php echo T_BAR; ?></h3><br />
						<p><?php echo D_BARO; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="R<?php echo T_SHI; ?>"><?php echo T_SHI; ?></h3><br />
						<p><?php echo D_SHIR; ?></p>
					</div>
				</div>
			</div>
		</section>
		<section class="white">
			<div class="container">
				<a href="#" class="back">
					<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<h2 id="RWhite"><strong>White</strong></h2>
					</div>
				</div><hr />
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="R<?php echo T_PGR; ?>"><?php echo T_PGR; ?></h3><br />
						<p><?php echo D_PGRI; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="R<?php echo T_SBL; ?>"><?php echo T_SBL; ?></h3><br />
						<p><?php echo D_SBLA; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="R<?php echo T_GEW; ?>"><?php echo T_GEW; ?></h3><br />
						<p><?php echo D_GEWU; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="R<?php echo T_RIE; ?>"><?php echo T_RIE; ?></h3><br />
						<p><?php echo D_RIES; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="R<?php echo T_CHA; ?>"><?php echo T_CHA; ?></h3><br />
						<p><?php echo D_CHAR; ?></p>
					</div>
				</div>
			</div>
		</section>
		<?php } elseif ($_GET["f"] == "IceWine") { ?>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center div-foursons">
				<h1 id="IceWine"><strong>Ice Wine</strong> - $160/190 <small>&nbsp;&nbsp;&nbsp;&nbsp;4 weeks to craft</small></h1>
			</div>
		</div>
		<section class="red">
			<div class="container">
				<a href="#" class="back">
					<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<h2 id="IRed"><strong>Red</strong></h2>
					</div>
				</div><hr />
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="I<?php echo T_CFR; ?>"><?php echo T_CFR; ?></h3><br />
						<p><?php echo D_CFRA; ?></p>
					</div>
				</div>
			</div>
		</section>
		<section class="white">
			<div class="container">
				<a href="#" class="back">
					<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<h2 id="IWhite"><strong>White</strong></h2>
					</div>
				</div><hr />
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="I<?php echo T_RIE; ?>"><?php echo T_RIE; ?></h3><br />
						<p><?php echo D_RIES2; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="I<?php echo T_VID; ?>"><?php echo T_VID; ?></h3><br />
						<p><?php echo D_VIDA; ?></p>
					</div>
				</div>
			</div>
		</section>
		<?php } elseif ($_GET["f"] == "Rose") { ?>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center div-foursons">
				<h1 id="Rose"><strong>Rose</strong> - $150 <small>&nbsp;&nbsp;&nbsp;&nbsp;4-6 weeks to craft</small></h1>
			</div>
		</div>
		<section class="red">
			<div class="container">
				<a href="#" class="back">
					<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="RS<?php echo T_KIW . T_PGR; ?>"><?php echo T_KIW . " " . T_PGR; ?></h3><br />
						<p><?php echo D_KMPG; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="RS<?php echo T_STR . T_ZIN; ?>"><?php echo T_STR . " " . T_ZIN; ?></h3><br />
						<p><?php echo D_SWZI; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="RS<?php echo T_GRE . T_GEW; ?>"><?php echo T_GRE . " " . T_GEW; ?></h3><br />
						<p><?php echo D_GAGE; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h3 id="RS<?php echo T_ZIN . T_BLU; ?>"><?php echo T_ZIN . " " . T_BLU; ?></h3><br />
						<p><?php echo D_ZBLU; ?></p>
					</div>
				</div>
			</div>
		</section>
		<?php } ?>
	</body>
</html>