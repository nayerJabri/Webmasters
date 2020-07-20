
<?php include"header.php"; ?>
<?php include "menu.php" ?>
<?PHP   include "config.php";
		include "entities/livreur.php";
		include "core/livreur_core.php";
		if (isset($_POST['identifiant']))
		{
			$livreurC=new livreur_core();
		    $result=$livreurC->recuperer_livreur($_POST['identifiant']);
			foreach($result as $row)
			{
				$identifiant=$row['identifiant'];
				$nom=$row['nom'];
				$prenom=$row['prenom'];
				$datenaissance=$row['datenaissance'];
				$adresse=$row['adresse'];
				$telephone=$row['telephone'];
				$adressemail=$row['adressemail'];

		?>
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

													<form data-toggle="validator" role="form" id="ajout" method="POST" action="Views/modifier_livreur.php" >
														<div class="form-group">
															<label class="control-label mb-10 text-left">L'identifiant du livreur<span class="help"></span></label>
															<input type="number" name="identifiant" value="<?PHP echo $identifiant ?>" required placeholder="C'est le numero de la carte CIN..." class="form-control"  data-error="Ce champ ne doit pas etre vide...!" >
														</div>
														<div  class="col-md-6 col-sm-12 col-xs-12 form-group">
															<label class="control-label mb-10 text-left">Nom du livreur<span class="help"></span></label>
															<input type="text" name="nom" value="<?PHP echo $nom ?>" required placeholder="Ben foulen"  class="form-control" data-error="Ce champ ne doit pas etre vide...!">
														</div>
														<div  class="col-md-6 col-sm-12 col-xs-12 form-group">
															<label class="control-label mb-10 text-left">Prenom du livreur<span class="help"></span></label>
															<input type="text" name="prenom" value="<?PHP echo $prenom ?>" required placeholder="Ben foulen"  class="form-control" data-error="Ce champ ne doit pas etre vide...!">
														</div>
														<div class="control-label mb-10 text-left">
															<label class="control-label mb-10 text-left">Date de naissance du livreur<span class="help"></span></label>
															<input type="date" name="datenaissance" value="<?PHP echo $datenaissance ?>" data-error="Ce champ ne doit pas etre vide...!" required placeholder="13/04/1990..." class="form-control">
														</div>
														<div class="form-group">
															<label class="control-label mb-10 text-left">Adresse du livreur</label>
															<textarea name="adresse"  class="form-control" required rows="5" cols="50" data-error="Ce champ ne doit pas etre vide...!"><?PHP echo $adresse ?></textarea>
														</div>
														<div class="form-group">
															<label class="control-label mb-10 text-left">Numero du telephone du livreur<span class="help"></span></label>
															<input type="number" name="telephone" value="<?PHP echo $telephone ?>" required placeholder="+216 71 324 871" class="form-control" data-error="Ce champ ne doit pas etre vide...!">
														</div>
														<div class="form-group">
															<label class="control-label mb-10 text-left" for="example-email">Adresse Email du livreur<span class="help"> (example@gmail.com)</span></label>
															<input type="email" name="adressemail" id="example-email" class="form-control"  value="<?PHP echo $adressemail ?>" data-error="Ce champ ne doit pas etre vide...!" required placeholder="Email....">
															<div class="help-block with-errors">(example@gmail.com)</div>
															
														</div>
														<div class="form-group mb-0">
															<button type="submit" name="modifier"  class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Modifier</span></button>
														</div>
													</form>
													<?PHP
													}
												}
												?>
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

<?php
	
 include "footer.php";

 ?>
