<?PHP
include"config.php";
include "core/localisationC.php";
$localisation1C=new localisationC();
if (isset($_POST['reference'])) {
	$localisation1C->supprimerlocalisation($_POST['reference']);
}

    $liste=$localisation1C->afficherlocalisations();
?>
<?php include"header.php"; ?>



<?php include "menu.php" ?>

	<!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">product orders</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>e-commerce</span></a></li>
						<li class="active"><span>product-orders</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body row">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display responsive product-overview mb-30" id="myTable">
												<thead>
													<tr>
														<th>Reference</th>
														<th>description</th>
														<th>latitude</th>
														<th>longitude</th>
														

														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<?php 
											foreach ($liste  as $row) { 

												?>
													<tr>
														<td class="txt-dark"><?php echo $row['reference']; ?></td>
														<td class="txt-dark"><?php echo $row['description']; ?></td>
														<td class="txt-dark"><?php echo $row['lat']; ?></td>
														<td class="txt-dark"><?php echo $row['lng']; ?></td>
														
														<td>
														<form id="modifier" action="modifier_localisation.php" method="POST">

															<input type="hidden" value="<?php echo $row['reference']; ?>" name="reference">
															<input type="hidden" value="<?php echo $row['description']; ?>" name="description">
															<input type="hidden" value="<?php echo $row['lat']; ?>" name="lat">
															<input type="hidden" value="<?php echo $row['lng']; ?>" name="lng">
														

															<a  onclick="$(this).closest('form').submit();return false;" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a>
														</form>
															<form action="afficher_localisation.php" id="supprimer" method="POST">
																<input type="hidden" value="<?php echo $row['reference']; ?>" name="reference">
															<a onclick="$(this).closest('form').submit();return false;" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a>
																
															</form>

														</td>
													</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>	
								</div>	
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
			</div>
			
		

       
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
	<!-- Data table JavaScript -->
	<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="dist/js/productorders-data.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
		
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
	
</body>

</html>