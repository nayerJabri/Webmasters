<?php 
 include "core/commandeC.php"; 
 include "core/panierC.php"; 
include "config.php";
$panier=new panierC();
$commande=new commandeC();
 



if(isset($_POST['sup'])){
	
	$panier->supprimerpanier($_POST['reference']);
	$commande->supprimer($_POST['reference']);
     
}
if(isset($_POST['mod'])){
	if($_POST['etat']=='non payée')
	$commande->modifier($_POST['reference']);
else
	$commande->modifierx($_POST['reference']);

    
}

$liste=$commande->affichercommandes();

?>
<?php include"header.php"; ?>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<?php include "menu.php" ?>
		<!-- /Left Sidebar Menu -->
		
		
		
		
        
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
														<th>Client</th>
														<th>ID commande</th>
														
														<th>Date</th>
														<th>total</th>
														<th>Etat</th>
														<th>Details</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<?php 
											foreach ($liste  as $row) { 

												?>
													<tr>
														<td class="txt-dark"><?php echo $row['userid']; ?></td>
														<td class="txt-dark"><?php echo $row['reference']; ?></td>
														
														<td><?php echo $row['date']; ?></td>
														<td><?php echo $row['total']; ?></td>
														<td>
															
															<span><?php echo $row['etat']; ?></span>
														</td>
														<td><form action="detail_commande.php" method="post">
											<input type="hidden" value="<?php echo $row['reference'];?>" name='commande'>
															<button class="btn btn-info" type="submit">Detail</button>
														</form></td>
														<td>

														<form id="modifier" action="afficher_commande.php" method="POST">
															<input type="hidden" value="<?php echo $row['reference']; ?>" name="reference">
															<input type="hidden" value="<?php echo $row['etat']; ?>" name="etat">
															<input type="hidden" value="xx" name="mod">
															<a  href="javascript:void(0)" onclick="$(this).closest('form').submit();return false;" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a>
														</form>
															<form action="afficher_commande.php" id="supprimer" method="POST">
															
																<input type="hidden" value="<?php echo $row['reference']; ?>" name="reference">
 															<input type="hidden" value="xx" name="sup">
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