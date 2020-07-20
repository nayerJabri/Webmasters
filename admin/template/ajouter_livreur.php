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
										<h6 class="panel-title txt-dark">Le Formulaire Des Livreurs</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<form data-toggle="validator" role="form" id="ajout" method="POST" action="Views/ajouter_livreur.php">
														<div class="form-group">
															<label class="control-label mb-10 text-left">L'identifiant du livreur<span class="help"></span></label>
															<input type="number" name="identifiant" required placeholder="C'est le numero de la carte CIN..." class="form-control"  data-error="Ce champ ne doit pas etre vide...!" >
														</div>
														<div  class="col-md-6 col-sm-12 col-xs-12 form-group">
															<label class="control-label mb-10 text-left">Nom du livreur<span class="help"></span></label>
															<input type="text" name="nom" required placeholder="Ben foulen"  class="form-control" data-error="Ce champ ne doit pas etre vide...!">
														</div>
														<div  class="col-md-6 col-sm-12 col-xs-12 form-group">
															<label class="control-label mb-10 text-left">Prenom du livreur<span class="help"></span></label>
															<input type="text" name="prenom" required placeholder="Ben foulen"  class="form-control" data-error="Ce champ ne doit pas etre vide...!">
														</div>
														<div class="control-label mb-10 text-left">
															<label class="control-label mb-10 text-left">Date de naissance du livreur<span class="help"></span></label>
															<input type="date" name="datenaissance" required placeholder="13/04/1990..." class="form-control">
														</div>
														<div class="form-group">
															<label class="control-label mb-10 text-left">Adresse du livreur</label>
															<textarea name="adresse" class="form-control" required rows="5" cols="50" data-error="Ce champ ne doit pas etre vide...!"></textarea>
														</div>
														<div class="form-group">
															<label class="control-label mb-10 text-left">Numero du telephone du livreur<span class="help"></span></label>
															<input type="number" name="telephone" required placeholder="+216 71 324 871" class="form-control" data-error="Ce champ ne doit pas etre vide...!">
														</div>
														<div class="form-group">
															<label class="control-label mb-10 text-left" for="example-email">Adresse Email du livreur<span class="help"> (example@gmail.com)</span></label>
															<input type="email" name="adressemail" id="example-email" class="form-control"  data-error="Ce champ ne doit pas etre vide...!" required placeholder="Email....">
															<div class="help-block with-errors">(example@gmail.com)</div>
															
														</div>
														<div class="form-group mb-0">
															<button type="submit" name="ajouter" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Ajouter</span></button>
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
<?php include "footer.php" ?>
