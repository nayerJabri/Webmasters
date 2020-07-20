<?php $totalthisyear=$commande->total(date("Y"));
      $nb=$commande->nbcommande(date("Y"));
  ?>

<div class="page-wrapper">
            <div class="container-fluid pt-25">
				
				<!-- Row -->
				<div class="row">
					<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Comparaison des revenues entre cette année et l'année derniere</h6>
								</div>
								 
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
                                <div class="panel-body">
									<ul class="flex-stat mb-10 ml-15">
										
										<li class="text-left auto-width mr-60">
											<span class="block">Nombres de commandes en <?php echo date("Y"); ?></span>
											<span class="block txt-dark weight-500 font-18"><span class="counter-anim"><?php echo $nb['nb']; ?> </span></span>
										 
											<div class="clearfix"></div>
										</li>
										<li class="text-left auto-width">
											<span class="block">Revenues en <?php echo date("Y"); ?></span>
			<span class="block txt-dark weight-500 font-18"><span class="counter-anim"><?php echo $totalthisyear['total']; ?> </span> TND </span>
											 
											<div class="clearfix"></div>
										</li>
									</ul>
									<div id="e_chart_1" class="" style="height:400px;"></div>
								</div>
							</div>
                        </div>
                    </div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view sm-data-box-3">
							
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Pourcentage des produits par categorie</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									 	
									 
									<div class="flot-container" style="height:185px;width:95%; ">
										<div id="flot_pie_chart" class="demo-placeholder"></div>
									</div>
								</div>
								  
							</div>
						</div>
					
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">top livreurs</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body row">
								<div id="chartContainer" style="height: 185px; width: 100%;"></div>
										
								</div>	
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
