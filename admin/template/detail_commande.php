<?php 
if(!isset($_POST['commande'])) header('Location: index.php');	
 include "core/panierC.php"; 
include "config.php";
$panier=new panierC();

$liste=$panier->afficherpanier($_POST['commande']);

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
					  <h5 class="txt-dark">Detail de la commande  <?php echo $_POST['commande'];  ?></h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.php">Accueil</a></li>
						<li><a href="afficher_commande.php"><span>commande</span></a></li>
						<li class="active"><span>details</span></li>
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
														<th>Produit</th>
														<th>Image</th>
														<th>Prix unité</th>
														<th>Quantité</th>
														
														<th>Prix total</th>
													</tr>
												</thead>
												<tbody>
													<?php 
											foreach ($liste  as $row) { 

												?>
													<tr>
														<td class="txt-dark"><?php echo $row['userid']; ?></td>
														<td class="txt-dark"><?php echo $row['id']; ?></td>
														
														<td><?php echo $row['nom']; ?></td>
														
														<td>
															
															<img src="<?php echo $row['image']; ?>" alt="" width="80">
														</td>
														<td><?php echo $row['prix']; ?></td>
														<td><?php echo $row['quantite']; ?></td>
														<td>(<?php echo ($row['quantite']*$row['prix']); ?>) <?php echo $row['total']; ?></td>

														
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