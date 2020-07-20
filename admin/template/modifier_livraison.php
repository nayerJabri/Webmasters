 

<?php include"header.php"; ?>
<?php include "menu.php" ?>


<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
						<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Livreur</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>Categorie</span></a></li>
							<li class="active"><span>Ajouter un livreur</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
						</div>
					<!-- /Title -->
					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Le Formulaire Des Livraisons</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<form data-toggle="validator" role="form" id="ajout" method="POST" action="Views/modifier_livraison.php">
														<div class="form-group">
															<label class="control-label mb-10 text-left">La referance commande <span class="help"></span></label>
															<input type="number"name="referance" value="<?PHP echo $_POST['referance']  ?>" required class="form-control"  >
														</div>
														<div class="form-group">
															<label class="control-label mb-10 text-left">La referance du client <span class="help"></span></label>
															<input type="text" name="client" value="<?PHP echo $_POST['client'] ?>"required  class="form-control" >
														</div>
														<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Le livreur </label>
															
															<input type="number" name="livreur" value="<?PHP echo $_POST['livreur']?>" required class="form-control"   >
														</div>
													</div>	
												</div>
														
														<div class="control-label mb-10 text-left">
															<label class="control-label mb-10 text-left">Date de livraison<span class="help"></span></label>
															<input type="date" name="date" id="date" value="<?PHP echo $_POST['date'] ?>"required  class="form-control">
														</div>
														<div class="form-group">
															<label class="control-label mb-10 text-left">Adresse livraison</label>
															<textarea name="adresselivraison" vclass="form-control" required rows="5" cols="50" data-error="Ce champ ne doit pas etre vide...!"><?PHP echo $_POST['adresselivraison'] ?></textarea>
														</div>
														<div class="form-actions">
													<button class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>Confirmer la modification</span></button>
													<button type="button" class="btn btn-warning pull-left">Annuler</button>
													<div class="clearfix"></div>
												</div>
													
													</form>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->

				</div>
<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="../vendors/bower_components/bootstrap-validator/dist/validator.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	
 <?php include "footer.php";
?>
 