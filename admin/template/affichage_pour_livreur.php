
<?php 
session_start();
include"header.php"; ?>

  
  <?PHP
include"config.php";
include "core/livraison_core.php";
$liste=new livraison_core();


if(isset($_POST['modifier'])){
	$liste->modifier($_POST['reference']);
    
}
$listedeslivreurs=$liste->affichage_livreur($_SESSION['admin']);
?>

<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
			</ul>
		</div>

	<!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				<!-- Title -->
				<div class="row heading-bg">
				
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
														<th>Commande</th>
														
														<th>adresse </th>
														<th>date de livraison</th>
														<th>etat </th>
														

														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<?php 
											foreach ($listedeslivreurs as $row) { 

												?>
													<tr>
														<td class="txt-dark"><?php echo $row['reference']; ?></td>
														<td class="txt-dark"><?php echo $row['adresselivraison']; ?></td>
														<td class="txt-dark"><?php echo $row['date']; ?></td>
														<td class="txt-dark"><?php echo $row['etat']; ?></td>
														<td>
														<form id="modifier" action="affichage_pour_livreur.php" method="POST">
															<input type="hidden" value="<?php echo $row['reference']; ?>" name="reference">
															<input type="hidden" value="xx" name="modifier">
															<a  href="javascript:void(0)" onclick="$(this).closest('form').submit();return false;" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a>
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