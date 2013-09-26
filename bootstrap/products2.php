<?php include('header.php'); ?>
<style>
.disabled {
	color : black;
}
</style>
			<div class="well">
				<ul id="wineNav" class="nav nav-pills nav-collapse">
					<li class="active"><a href="#deluxe" class="btn" data-toggle="tab">Deluxe - $210</a></li>
					<li><a class="btn" href="#premium" data-toggle="tab">Premium - $170</a></li>
					<li><a class="btn" href="#regular" data-toggle="tab">Regular - $135</a></li>
					<li><a class="btn" href="#icewine" data-toggle="tab">Ice Wine - $160/190</a></li>
					<li><a class="btn" href="#rose" data-toggle="tab">Rose - $150</a></li>
				</ul>
				<form action="pickwine.php" method="post">
					<input type="hidden" name="wineType" value="">
					<input type="hidden" name="wineName" value="">
					<input type="hidden" name="price" value="">
					<div class="tab-content">
						<div class="tab-pane fade in active" id="deluxe">
							<div class="row">
				      			<div class="col-md-12 col-sm-12 col-xs-12">
				      				<div class="row well-foursons">
				      					<div class="col-md-4 col-xs-12 col-sm-12">
				      						 <h1><small>8 weeks to craft</small></h1>
				      					</div>
				      				</div>
				      				<div class="panel panel-danger">
				      					<div class="panel-heading">
				      						<h3 class="panel-title">Red</h3>
				      					</div>
				      					<div class="panel-body">
						      				<div class="col-md-12 col-xs-12 col-sm-12">
						      					<div class="row">
						      						<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>A</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo NZ . " " . T_PNO; ?>" data-content="<?php echo D_NZPN; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo NZ . " " . T_PNO; ?>
						      							</a>
						      						</div>
						      					</div>
							      				<div class="row">
							      					<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>B</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo CHI . " " . T_MAL; ?>" data-content="<?php echo D_CMAL; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo CHI . " " . T_MAL; ?>
						      							</a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-xs-offset-1 col-sm-12">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo CHI . " " . T_MER; ?>" data-content="<?php echo D_CMER; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
					      									<?php echo CHI . " " . T_MER; ?>
					      								</a>
					      							</div>
					      						</div>
					      						<div class="row">
					      							<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>C</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_AMA . " " . DELLA; ?>" data-content="<?php echo D_AMAD; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_AMA . " " . DELLA; ?>
						      							</a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-xs-offset-1 col-sm-12">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo CAL . " " . T_CSA; ?>" data-content="<?php echo D_CCSA; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
					      									<?php echo CAL . " " . T_CSA; ?>
					      								</a>
					      							</div>
					      							<div class="col-md-3 col-xs-11 col-xs-offset-1 col-sm-12">
					      								<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo CAL . " " . T_SYR; ?>" data-content="<?php echo D_CSYR; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
					      									<?php echo CAL . " " . T_SYR; ?>
					      								</a>
					      							</div>
					      						</div>
					      					</div>
						      			</div>
					      			</div>
					      			<div class="panel panel-warning">
					      				<div class="panel-heading">
					      					<h3 class="panel-title">White</h3>
					      				</div>
					      				<div class="panel-body">
						      				<div class="col-md-12 col-xs-12 col-sm-12">
						      					<div class="row">
						      						<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>A</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo AUS . " " . T_SBL; ?>" data-content="<?php echo D_ASBL; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo AUS . " " . T_SBL; ?>
						      							</a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-xs-offset-1 col-sm-12">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo ITA . " " . T_PGR; ?>" data-content="<?php echo D_IPGR; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo ITA . " " . T_PGR; ?>
						      							</a>
						      						</div>
						      					</div>
						      					<div class="row">
						      						<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>B</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo GER . " " . T_RIE . " " . T_GEW; ?>" data-content="<?php echo D_GRGE; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo GER . " " . T_RIE . " " . T_GEW; ?>
						      							</a>
						      						</div>
						      					</div>
						      					<div class="row">
						      						<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>C</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo AUS . " " . T_CHA; ?>" data-content="<?php echo D_ACHA; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo AUS . " " . T_CHA; ?>
						      							</a>
						      							
						      						</div>
						      					</div>
						      				</div>	
						      			</div>
				      				</div>
				      			</div>
				      		</div>
						</div>
						<div class="tab-pane fade" id="premium">
							<div class="row">
				      			<div class="col-md-12 col-sm-12 col-xs-12">
				      				<div class="row well-foursons">
				      					<div class="col-md-4 col-xs-12 col-sm-12">
				      						 <h1><small>6 weeks to craft</small></h1>
				      					</div>
				      				</div>
				      				<div class="panel panel-danger">
				      					<div class="panel-heading">
				      						<h3 class="panel-title">Red</h3>
				      					</div>
				      					<div class="panel-body">
						      				<div class="col-md-12 col-xs-12 col-sm-12">
						      					<div class="row">
						      						<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>A</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo CAL . " " . T_PNO; ?>" data-content="<?php echo D_CPNO; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo CAL . " " . T_PNO; ?>
						      							</a>
						      						</div>
						      					</div>
							      				<div class="row">
							      					<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>B</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo CHI . " " . T_MAL; ?>" data-content="<?php echo D_CMAL2; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo CHI . " " . T_MAL; ?>
						      							</a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-xs-offset-1 col-sm-12">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo FRA . " " . T_MER; ?>" data-content="<?php echo D_FMER; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
					      									<?php echo FRA . " " . T_MER; ?>
					      								</a>
					      							</div>
					      						</div>
					      						<div class="row">
					      							<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>C</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_AMA; ?>" data-content="<?php echo D_AMAR; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_AMA; ?>
						      							</a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-xs-offset-1 col-sm-12">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo AUS . " " . T_CSA; ?>" data-content="<?php echo D_ACSA; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
					      									<?php echo AUS . " " . T_CSA; ?>
					      								</a>
					      							</div>
					      							<div class="col-md-3 col-xs-11 col-xs-offset-1 col-sm-12">
					      								<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo AUS . " " . T_SHI; ?>" data-content="<?php echo D_ASHI; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
					      									<?php echo AUS . " " . T_SHI; ?>
					      								</a>
					      							</div>
					      						</div>
					      						<div class="row">
					      							<div class="col-md-3 col-md-offset-1 col-xs-11 col-xs-offset-1 col-sm-12">
					      								<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo ITA . " " . T_BAR; ?>" data-content="<?php echo D_IBAR; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
					      									<?php echo ITA . " " . T_BAR; ?>
					      								</a>
					      							</div>
					      						</div>
					      					</div>
						      			</div>
					      			</div>
					      			<div class="panel panel-warning">
					      				<div class="panel-heading">
					      					<h3 class="panel-title">White</h3>
					      				</div>
					      				<div class="panel-body">
						      				<div class="col-md-12 col-xs-12 col-sm-12">
						      					<div class="row">
						      						<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>A</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo ITA . " " . T_PGR; ?>" data-content="<?php echo D_IPGR2; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo ITA . " " . T_PGR; ?>
						      							</a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-xs-offset-1 col-sm-12">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo NZ . " " . T_SBL; ?>" data-content="<?php echo D_NZSB; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo NZ . " " . T_SBL; ?>
						      							</a>
						      						</div>
						      					</div>
						      					<div class="row">
						      						<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>B</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo GER . " " . T_GEW; ?>" data-content="<?php echo D_GGEW; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo GER . " " . T_GEW; ?>
						      							</a>
						      						</div>
						      					</div>
						      					<div class="row">
						      						<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>C</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo AUS . " " . T_CHA; ?>" data-content="<?php echo D_ACHA2; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo AUS . " " . T_CHA; ?>
						      							</a>
						      						</div>
						      					</div>
						      				</div>	
						      			</div>
				      				</div>
				      			</div>
				      		</div>
						</div>
						<div class="tab-pane fade" id="regular">
							<div class="row">
				      			<div class="col-md-12 col-sm-12 col-xs-12">
				      				<div class="row well-foursons">
				      					<div class="col-md-4 col-xs-12 col-sm-12">
				      						 <h1><small>4 weeks to craft</small></h1>
				      					</div>
				      				</div>
				      				<div class="panel panel-danger">
				      					<div class="panel-heading">
				      						<h3 class="panel-title">Red</h3>
				      					</div>
				      					<div class="panel-body">
						      				<div class="col-md-12 col-xs-12 col-sm-12">
						      					<div class="row">
						      						<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>A</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_CHI; ?>" data-content="<?php echo D_CHIA; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_CHI; ?>
						      							</a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_PNO?>" data-content="<?php echo D_PNOI; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_PNO; ?>
						      							</a>
						      						</div>
						      					</div>
							      				<div class="row">
							      					<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>B</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_MAL; ?>" data-content="<?php echo D_MALB; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_MAL; ?>
						      							</a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-xs-offset-1 col-sm-12">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_MER; ?>" data-content="<?php echo D_MERL; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
					      									<?php echo T_MER; ?>
					      								</a>
					      							</div>
					      						</div>
					      						<div class="row">
					      							<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>C</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_CSA; ?>" data-content="<?php echo D_CSAU; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
					      									<?php echo T_CSA; ?>
					      								</a>
					      							</div>
					      							<div class="col-md-3 col-xs-12 col-sm-12">
					      								<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_BAR; ?>" data-content="<?php echo D_BARO; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
					      									<?php echo T_BAR; ?>
					      								</a>
					      							</div>
					      							<div class="col-md-3 col-xs-12 col-sm-12">
					      								<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_SHI; ?>" data-content="<?php echo D_SHIR; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
					      									<?php echo T_SHI; ?>
					      								</a>
					      							</div>
					      						</div>
					      					</div>
						      			</div>
					      			</div>
					      			<div class="panel panel-warning">
					      				<div class="panel-heading">
					      					<h3 class="panel-title">White</h3>
					      				</div>
					      				<div class="panel-body">
						      				<div class="col-md-12 col-xs-12 col-sm-12">
						      					<div class="row">
						      						<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>A</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_PGR; ?>" data-content="<?php echo D_PGRI; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_PGR; ?>
						      							</a>
						      						</div>
						      						<div class="col-md-4 col-xs-11 col-xs-offset-1 col-sm-12">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_SBL; ?>" data-content="<?php echo D_SBLA; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_SBL; ?>
						      							</a>
						      						</div>
						      					</div>
						      					<div class="row">
						      						<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>B</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_GEW; ?>" data-content="<?php echo D_GEWU; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_GEW; ?>
						      							</a>
						      						</div>
						      						<div class="col-md-4 col-xs-12 col-sm-12">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_RIE; ?>" data-content="<?php echo D_RIES; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_RIE; ?>
						      							</a>
						      						</div>
						      					</div>
						      					<div class="row">
						      						<div class="col-md-1 col-xs-1 col-sm-1">
						      							<a class="btn disabled"><strong>C</strong></a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_CHA; ?>" data-content="<?php echo D_CHAR; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_CHA; ?>
						      							</a>
						      						</div>
						      					</div>
						      				</div>	
						      			</div>
				      				</div>
				      			</div>
				      		</div>
						</div>
						<div class="tab-pane fade" id="icewine">
							<div class="row">
				      			<div class="col-md-12 col-sm-12 col-xs-12">
				      				<div class="row well-foursons">
				      					<div class="col-md-4 col-xs-12 col-sm-12">
				      						 <h1><small>4 weeks to craft</small></h1>
				      					</div>
				      				</div>
				      				<div class="panel panel-danger">
				      					<div class="panel-heading">
				      						<h3 class="panel-title">Red</h3>
				      					</div>
				      					<div class="panel-body">
						      				<div class="col-md-12 col-xs-12 col-sm-12">
						      					<div class="row">
						      						<div class="col-md-1 col-xs-1 col-sm-1">
						      							&nbsp;
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_CFR; ?>" data-content="<?php echo D_CFRA; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_CFR; ?>
						      							</a>
						      						</div>
						      					</div>
							      			</div>
						      			</div>
					      			</div>
					      			<div class="panel panel-warning">
				      					<div class="panel-heading">
				      						<h3 class="panel-title">White</h3>
				      					</div>
				      					<div class="panel-body">
						      				<div class="col-md-12 col-xs-12 col-sm-12">
						      					<div class="row">
							      					<div class="col-md-1 col-xs-1 col-sm-1">
						      							&nbsp;
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_RIE; ?>" data-content="<?php echo D_RIES2; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_RIE; ?>
						      							</a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-xs-offset-1 col-sm-12">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_VID; ?>" data-content="<?php echo D_VIDA; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
					      									<?php echo T_VID; ?> - $190
					      								</a>
					      							</div>
					      						</div>
							      			</div>
						      			</div>
					      			</div>
					      		</div>
					      	</div>
					    </div>	
						<div class="tab-pane fade" id="rose">
							<div class="row">
				      			<div class="col-md-12 col-sm-12 col-xs-12">
				      				<div class="row well-foursons">
				      					<div class="col-md-4 col-xs-12 col-sm-12">
				      						 <h1><small>4 - 6 weeks to craft </small></h1>
				      					</div>
				      				</div>
				      				<div class="panel panel-danger">
				      					<div class="panel-heading">
				      						<h3 class="panel-title">&nbsp;</h3>
				      					</div>
				      					<div class="panel-body">
						      				<div class="col-md-12 col-xs-12 col-sm-12">
						      					<div class="row">
						      						<div class="col-md-1 col-xs-1 col-sm-1">
						      							&nbsp;
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_KIW . " " . T_PGR; ?>" data-content="<?php echo D_KMPG; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_KIW . " " . T_PGR; ?>
						      							</a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_STR . " " . T_ZIN; ?>" data-content="<?php echo D_SWZI; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_STR . " " . T_ZIN; ?>
						      							</a>
						      						</div>
						      						<div class="col-md-3 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_GRE . " " . T_GEW;; ?>" data-content="<?php echo D_GAGE; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_GRE . " " . T_GEW; ?>
						      							</a>
						      						</div>
						      					</div>
						      					<div class="row">
						      						<div class="col-md-3 col-md-offset-1 col-xs-11 col-sm-11">
						      							<a class="btn wines" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-title="<?php echo T_ZIN . " " . T_BLU; ?>" data-content="<?php echo D_ZBLU; ?><br /><br /><a class='btn btn-sm btn-success'>Reserve Now</a>">
						      								<?php echo T_ZIN . " " . T_BLU; ?>
						      							</a>
						      						</div>
						      					</div>
							      			</div>
						      			</div>
					      			</div>
				      			</div>
				      		</div>
						</div>
					</div>
				</form>
			</div>
			<script>
				$function {
					$('#wineNav a').click(function (e) {
						e.preventDefault()
						$(this).tab('show')
					});
				};
			</script>
			<hr />
      		<div class="well well-large table-responsive foursons">
	      		<table class="table table-striped">
	              <thead>
	                <tr>
	                  <th>#</th>
	                  <th>Body</th>
	                  <th>Characteristic</th>
	                  <th>Taste Hints Of</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr>
	                  <td>A</td>
	                  <td>Light</td>
	                  <td>Light, Lively, Sweet, Smooth, Mellow, Warm</td>
	                  <td>Strawberry, Cherries, Plumb, Mint, Vanilla, Herbs</td>
	                </tr>
	                <tr>
	                  <td>B</td>
	                  <td>Medium</td>
	                  <td>Complex, Fruity, Spicy, Assertive, Soft, Silky</td>
	                  <td>Bell Pepper, Nutmeg, Black Currant, Cherries, Red Currant</td>
	                </tr>
	                <tr>
	                  <td>C</td>
	                  <td>Full</td>
	                  <td>Bold, Spicy, Big, Sophisticated</td>
	                  <td>Dark Red Berries, Jammy Red Berries, Black Pepper Corn, Ripe Dark Fruit, Chocolate</td>
	                </tr>
	              </tbody>
	            </table>
        	</div>
	      	<script>
    			$('.wines').popover();
    		</script>
			<?php include('footer.php'); ?>
      	</div> <!-- /container -->
	</body>
</html>