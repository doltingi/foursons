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
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/justified-nav.css" rel="stylesheet">
    <link href="css/foursons.css" rel="stylesheet">
    
	    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->

	    <!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="ico/favicon.png">
	</head>

	<body>

		<div class="container">
			<div class="masthead">
        		<h3 class="text-muted"><?php echo(TITLE) ?> Banner Here!</h3>
        	    <div class="navbar-header">
		        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				    </button>
				</div>
				<ul class="nav nav-justified">
					<li <?php if (basename($_SERVER['PHP_SELF']) == 'index2.php') { ?>class="active"<?php } ?>>
						<a href="index2.php"><?php echo(HOME) ?></a></li>
					<li <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') { ?>class="active"<?php } ?>>
						<a href="index2.php"><?php echo(ABOUT) ?></a></li>
					<li <?php if (basename($_SERVER['PHP_SELF']) == 'products.php') { ?>class="active"<?php } ?>>
						<a href="products.php"><?php echo(PRODUCT) ?></a></li>
					<li <?php if (basename($_SERVER['PHP_SELF']) == 'reservation.php') { ?>class="active"<?php } ?>>
						<a href="reservation.php"><?php echo(RESERVE) ?></a></li>
					<li <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') { ?>class="active"<?php } ?>>
						<a href="contact.php"><?php echo(CONTACT) ?></a></li>
				</ul>
				<hr />
			</div>