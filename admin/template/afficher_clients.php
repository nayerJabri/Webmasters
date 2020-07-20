<?php 

	include "../../core/ClientC.php";
	include "config.php";

	$client= new ClientC();
	if (isset($_POST['ID']))	
	{
		$listerec=$client->recherche($_POST['ID']);
		
	}else
	{
        $listerec=$client->afficherclient();
    }

	$client1 = new clientC();
	$nb=$client->nombredeligne();
$sexe=$client->moyenne();
foreach ($sexe as $key => $value) {
	$homme = $value['h'] ;
	$femme = $value['f'];
}
$dataPoints = array(
	array("label"=> "Hommes", "y"=> $homme),
	array("label"=> "Femmes", "y"=> $femme)	
);

	include "header.php";
	include "menu.php";



 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Inbox</title>
		<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "pourcentage des clients homme et femme"
	},
	
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 10,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
	</head>
	<body>
			
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"></link>
		

			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Clients</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>apps</span></a></li>
							<li class="active"><span>Clients</span></li>
						</ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-lg-12">
							<div style="background-color: #ffffff">
								<div class="panel-wrapper collapse in">
									<div class="panel-body pa-0">
										<div class="mail-box">
											<div class="row">
												<aside class="col-lg-3 col-md-4 pr-0">
													
													<div id="chartContainer" style="height: 370px; width: 90%;"></div>

													
												</aside>
												
												<aside class="col-lg-9 col-md-8 pl-0">
													<div class="panel panel-refresh pa-0">
														<div class="refresh-container">
															<div class="la-anim-1"></div>
														</div>
														<div class="panel-heading pt-20 pb-20 pl-15 pr-15">
															<div class="pull-left">
																<h6 class="panel-title txt-dark">Liste des Clients</h6>
															</div>
															<div class="pull-right">
																<form role="search" method="POST" action="afficher_clients.php" class="inbox-search inline-block pull-left mr-15">
																	<div class="input-group">
																		<input name="ID" class="form-control" placeholder="Search" type="text">
																		<span class="input-group-btn">
																		<button  type="submit" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
																		</span>
																	</div>
																</form>
																<a href="#" class="pull-left inline-block refresh">
																	<i class="zmdi zmdi-replay"></i>
																</a>
															</div>
															<div class="clearfix"></div>
														</div>
														<div class="panel-wrapper collapse in">
															<div class="panel-body inbox-body pa-0">
																<div class="mail-option pl-15 pr-15">
																	
																	<ul class="unstyled inbox-pagination">
																		<li><span>1-10 of <?php echo $nb;?></span></li>
																		<li>
																			<a class="pl-15 pr-15" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
																		</li>
																		<li>
																			<a href="#"><i class="fa fa-angle-right pagination-right"></i></a>
																		</li>
																	</ul>
																</div>
																<div class="table-responsive mb-0">
																	<table class="table table-inbox table-hover mb-0">
																		<?php 
																			foreach ($listerec as $row)
																			{
																		?>
																		<tbody>
																			<tr class="unread">
																				<td class="inbox-small-cells">
																					<i class="zmdi zmdi-star inline-block font-16"></i>
																				</td>
																				<form action="inbox_detail.php" method="POST" id="myform">
																				<td class="view-message  dont-show"><?php echo $row['Nom'];?> <?php echo $row['prenom'];?><span class="label label-warning pull-right"><?php echo $row['ID'];?></span></td>
																				<td class="view-message "><?php echo $row['sexe'];?></td>
															
																				<td class="view-message "><?php echo $row['Adresse_Email'];?></td>
																				<td class="view-message "><?php echo $row['telephone'];?></td>
																				<td class="view-message  text-right">
																				<input type="hidden" name="id" id="id" value="<?php echo $row['ID'] ;?>">
																				</form>
																				<form action="views/supprimer_client.php" method="POST">
																					<input type="hidden" id="ID" name="ID" value="<?php echo $row['ID']?>">
																					<button type="submit"><i class="fas fa-trash-alt"></i></button>
																				</form>
																					
																			</tr>
																			<?php 
																			}
																			?>
																			
																	
																			
																			
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</aside>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
				</div>
				
				<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30">
					<div class="row">
						<div class="col-sm-12">
							<p>2018 &copy; Goofy. Pampered by Hencework</p>
						</div>
					</div>
				</footer>
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->

		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

		<!-- jQuery -->
		<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!-- wysuhtml5 Plugin JavaScript -->
		<script src="../vendors/bower_components/wysihtml5x/dist/wysihtml5x.min.js"></script>
		
		<script src="../vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.js"></script>
		
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Bootstrap Wysuhtml5 Init JavaScript -->
		<script src="dist/js/bootstrap-wysuhtml5-data.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
		
		<!-- Switchery JavaScript -->
		<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	
	</body>

</html>




<a href=""  style="display: block; height:100%; width:100%">
<a href=""  style="display: block; height:100%; width:100%">
<a href=""  style="display: block; height:100%; width:100%">