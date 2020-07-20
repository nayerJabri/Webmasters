<?php 
 include "core/wishlistC.php"; 
 include "config.php";
 $wishlist=new wishlistC();
 



if(isset($_POST['sup'])){
	
 	$wishlist->supprimer($_POST['reference']);
     
}

$liste=$wishlist->afficherwishlists();

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
														<th>Produit</th>
														<th>image</th>														
														<th>Nombre</th>
														<th>Prix du Produit</th>		
														<th>Proposer une offre</th>
														<th>supprimer</th>
													</tr>
												</thead>
												<tbody>
													<?php 
											foreach ($liste  as $row) { 

												?>
													<tr>
														<td class="txt-dark"><?php echo $row['nom']; ?></td>
														<td><img src="<?php echo $row['image']; ?>" alt="iMac" width="80"></td>
														
														<td><?php echo $row['nombre']; ?></td>
														<td><?php echo $row['prix']; ?></td>
														
														<td><form action="reduction_produit.php" method="post">
											<input type="hidden" value="<?php echo $row['reference'];?>" name='reference'>
											<input type="hidden" value="<?php echo $row['image'];?>" name='image'>
											<input type="hidden" value="<?php echo $row['prix'];?>" name='prix'>
											<input type="hidden" value="<?php echo $row['nom'];?>" name='nom'>
 
							<button class="btn btn-primary btn-icon-anim btn-circle btn-sm" type="submit"><i class="icon-settings"></i></button>
														</form></td>
														<td>
															<form action="wishlist.php" id="supprimer" method="POST">															
															<input type="hidden" value="<?php echo $row['reference']; ?>" name="reference">
 															<input type="hidden" value="xx" name="sup">
													<button class="btn btn-danger btn-icon-anim btn-circle btn-sm"><i class="icon-trash" type="submit"></i></button>
		
																
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