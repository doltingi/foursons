		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0"<?php if ($_GET["f"] == "Deluxe") { ?> class="active"<?php } ?>></li>
				<li data-target="#myCarousel" data-slide-to="1"<?php if ($_GET["f"] == "Premium") { ?> class="active"<?php } ?>></li>
				<li data-target="#myCarousel" data-slide-to="2"<?php if ($_GET["f"] == "Regular") { ?> class="active"<?php } ?>></li>
				<li data-target="#myCarousel" data-slide-to="3"<?php if ($_GET["f"] == "IceWine") { ?> class="active"<?php } ?>></li>
				<li data-target="#myCarousel" data-slide-to="4"<?php if ($_GET["f"] == "Rose") { ?> class="active"<?php } ?>></li>
			</ol>
			<div class="carousel-inner">
				<div class="item<?php if ($_GET["f"] == "Deluxe") { ?> active<?php } ?>">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center div-foursons wine_title wine_title">
							<h1 id="Deluxe"><strong>Deluxe</strong> <small>$210</small></h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center">
							<br />
							<h4>8 weeks to craft 28-30 750mL bottles</h4>
						</div>
					</div>
					<section class="red">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 text-center">
									<h2 class="wine_title" id="DRed"><strong>Red</strong></h2>
								</div>
							</div><hr />
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/nzpn.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
										<h3 class="wine_title" id="D<?php echo NZ . T_PNO; ?>"><?php echo NZ . " " . T_PNO; ?></h3><br />
											<p><?php echo D_NZPN; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/cmal.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="D<?php echo CHI . T_MAL; ?>"><?php echo CHI . " " . T_MAL; ?></h3><br />
											<p><?php echo D_CMAL; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/cmer.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="D<?php echo CHI . T_MER; ?>"><?php echo CHI . " " . T_MER; ?></h3><br />
											<p><?php echo D_CMER; ?></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/amardel.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="D<?php echo T_AMA . DELLA; ?>"><?php echo T_AMA . " " . DELLA; ?></h3><br />
											<p><?php echo D_AMAD; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/calics.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="D<?php echo CAL . T_CSA; ?>"><?php echo CAL . " " . T_CSA; ?></h3><br />
											<p><?php echo D_CCSA; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/aussyrah.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="D<?php echo AUS . T_SYR; ?>"><?php echo AUS . " " . T_SYR; ?></h3><br />
											<p><?php echo D_ASYR; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="white">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 text-center">
									<h2 class="wine_title" id="DWhite"><strong>White</strong></h2>
								</div>
							</div><hr />
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/aussb.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="D<?php echo AUS . T_SBL; ?>"><?php echo AUS . " " . T_SBL; ?></h3><br />
											<p><?php echo D_ASBL; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/itapg.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="D<?php echo ITA . T_PGR; ?>"><?php echo ITA . " " . T_PGR; ?></h3><br />
											<p><?php echo D_IPGR; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/germanries.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="D<?php echo GER . T_RIE . T_GEW; ?>"><?php echo GER . " " . T_RIE . " " . T_GEW; ?></h3><br />
											<p><?php echo D_GRGE; ?></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/auschar.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="D<?php echo AUS . T_CHA; ?>"><?php echo AUS . " " . T_CHA; ?></h3><br />
											<p><?php echo D_ACHA; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="item<?php if ($_GET["f"] == "Premium") { ?> active<?php } ?>">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center div-foursons wine_title wine_title">
							<h1 id="Premium"><strong>Premium</strong> <small>$170</small></h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center">
							<br />
							<h4>6 weeks to craft 28-30 750mL bottles</h4>
						</div>
					</div>
					<section class="red">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 text-center">
									<h2 class="wine_title" id="PRed"><strong>Red</strong></h2>
								</div>
							</div><hr />
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
												<img class="img-responsive" src="../img/bottles/red-wine-bottle.jpg" />
										</div>
											<div class="col-md-10 col-sm-8 col-xs-8 text-center">
												<h3 class="wine_title" id="P<?php echo CAL . T_PNO; ?>"><?php echo CAL . " " . T_PNO; ?></h3><br />
												<p><?php echo D_CPNO; ?></p>
											</div>
										</div>
									</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/red-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="P<?php echo CHI . T_MAL; ?>"><?php echo CHI . " " . T_MAL; ?></h3><br />
											<p><?php echo D_CMAL2; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/red-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="P<?php echo T_AMA; ?>"><?php echo T_AMA; ?></h3><br />
											<p><?php echo D_AMAR; ?></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/red-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="P<?php echo AUS . T_CSA; ?>"><?php echo AUS . " " . T_CSA; ?></h3><br />
											<p><?php echo D_ACSA; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/red-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="P<?php echo FRA . T_MER; ?>"><?php echo FRA . " " . T_MER; ?></h3><br />
											<p><?php echo D_FMER; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/red-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="P<?php echo AUS . T_SHI; ?>"><?php echo AUS . " " . T_SHI; ?></h3><br />
											<p><?php echo D_ASHI; ?></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/red-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="P<?php echo ITA . T_BAR; ?>"><?php echo ITA . " " . T_BAR; ?></h3><br />
											<p><?php echo D_IBAR; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="white">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 text-center">
									<h2 class="wine_title" id="PWhite"><strong>White</strong></h2>
								</div>
							</div><hr />
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/blank-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="P<?php echo ITA . T_PGR; ?>"><?php echo ITA . " " . T_PGR; ?></h3><br />
											<p><?php echo D_IPGR2; ?></p>
										</div>
									</div>						
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/blank-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="P<?php echo NZ . T_SBL; ?>"><?php echo NZ . " " . T_SBL; ?></h3><br />
											<p><?php echo D_NZSB; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/blank-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="P<?php echo GER . T_GEW; ?>"><?php echo GER . " " . T_GEW; ?></h3><br />
											<p><?php echo D_GGEW; ?></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/blank-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="P<?php echo AUS . T_CHA; ?>"><?php echo AUS . " " . T_CHA; ?></h3><br />
											<p><?php echo D_ACHA2; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="item<?php if ($_GET["f"] == "Regular") { ?> active<?php } ?>">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center div-foursons wine_title wine_title">
							<h1 id="Regular"><strong>Regular</strong> <small>$135</small></h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center">
							<br />
							<h4>4 weeks to craft 28-30 750mL bottles</h4>
						</div>
					</div>
					<section class="red">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 text-center">
									<h2 class="wine_title" id="RRed"><strong>Red</strong></h2>
								</div>
							</div><hr />
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/red-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="R<?php echo T_CHI; ?>"><?php echo T_CHI; ?></h3><br />
											<p><?php echo D_CHIA; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/red-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="R<?php echo T_PNO; ?>"><?php echo T_PNO; ?></h3><br />
											<p><?php echo D_PNOI; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/red-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="R<?php echo T_MAL; ?>"><?php echo T_MAL; ?></h3><br />
											<p><?php echo D_MALB; ?></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/red-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="R<?php echo T_MER; ?>"><?php echo T_MER; ?></h3><br />
											<p><?php echo D_MERL; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/red-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="R<?php echo T_CSA; ?>"><?php echo T_CSA; ?></h3><br />
											<p><?php echo D_CSAU; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/red-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="R<?php echo T_BAR; ?>"><?php echo T_BAR; ?></h3><br />
											<p><?php echo D_BARO; ?></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/red-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="R<?php echo T_SHI; ?>"><?php echo T_SHI; ?></h3><br />
											<p><?php echo D_SHIR; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="white">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 text-center">
									<h2 class="wine_title" id="RWhite"><strong>White</strong></h2>
								</div>
							</div><hr />
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/blank-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="R<?php echo T_PGR; ?>"><?php echo T_PGR; ?></h3><br />
											<p><?php echo D_PGRI; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/blank-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="R<?php echo T_SBL; ?>"><?php echo T_SBL; ?></h3><br />
											<p><?php echo D_SBLA; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/blank-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="R<?php echo T_GEW; ?>"><?php echo T_GEW; ?></h3><br />
											<p><?php echo D_GEWU; ?></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/blank-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="R<?php echo T_RIE; ?>"><?php echo T_RIE; ?></h3><br />
											<p><?php echo D_RIES; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/blank-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="R<?php echo T_CHA; ?>"><?php echo T_CHA; ?></h3><br />
											<p><?php echo D_CHAR; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="item<?php if ($_GET["f"] == "IceWine") { ?> active<?php } ?>">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center div-foursons wine_title wine_title">
							<h1 id="IceWine"><strong>Ice Wine</strong> <small>$160/190</small></h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center">
							<br />
							<h4>6 weeks to craft 28-30 375mL bottles</h4>
						</div>
					</div>
					<section class="red">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 text-center">
									<h2 class="wine_title" id="IRed"><strong>Red</strong></h2>
								</div>
							</div><hr />
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/red-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="I<?php echo T_CFR; ?>"><?php echo T_CFR; ?></h3><br />
											<p><?php echo D_CFRA; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="white">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 text-center">
									<h2 class="wine_title" id="IWhite"><strong>White</strong></h2>
								</div>
							</div><hr />
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/blank-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="I<?php echo T_RIE; ?>"><?php echo T_RIE; ?></h3><br />
											<p><?php echo D_RIES2; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/blank-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="I<?php echo T_VID; ?>"><?php echo T_VID; ?></h3><br />
											<p><?php echo D_VIDA; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="item<?php if ($_GET["f"] == "Rose") { ?> active<?php } ?>">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center div-foursons wine_title wine_title">
							<h1 id="Rose"><strong>Rose/Blush</strong> <small>$150</small></h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center">
							<br />
							<h4>4 weeks to craft 28-30 750mL bottles</h4>
						</div>
					</div>
					<section class="red">
						<div class="container">
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/rose-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="RS<?php echo T_RAS . T_ZIN; ?>"><?php echo T_RAS . " " . T_ZIN; ?></h3><br />
											<p><?php echo D_RWZI; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/rose-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="RS<?php echo T_STR . T_ZIN; ?>"><?php echo T_STR . " " . T_ZIN; ?></h3><br />
											<p><?php echo D_SWZI; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/rose-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="RS<?php echo T_KIW . T_PGR; ?>"><?php echo T_KIW . " " . T_PGR; ?></h3><br />
											<p><?php echo D_KMPG; ?></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/rose-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="RS<?php echo T_GRE . T_GEW; ?>"><?php echo T_GRE . " " . T_GEW; ?></h3><br />
											<p><?php echo D_GAGE; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/rose-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="RS<?php echo T_BLU . T_BLI; ?>"><?php echo T_BLU . " " . T_BLI; ?></h3><br />
											<p><?php echo D_BLUE; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/rose-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="RS<?php echo T_BLACK . T_BLA; ?>"><?php echo T_BLACK . " " . T_BLA; ?></h3><br />
											<p><?php echo D_BLAC; ?></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-2 col-sm-4 col-xs-4">
											<img class="img-responsive" src="../img/bottles/rose-wine-bottle.jpg" />
										</div>
										<div class="col-md-10 col-sm-8 col-xs-8 text-center">
											<h3 class="wine_title" id="RS<?php echo T_POM . T_WIW; ?>"><?php echo T_POM . " " . T_WIW; ?></h3><br />
											<p><?php echo D_POME; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
<?php include("footer.php"); ?>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div><!-- /.carousel -->
		<script>
		$("myCarousel").carousel({
			interval : false
		});
		</script>