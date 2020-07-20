<?php include"header.php"; ?>



<?php include "menu.php" ?>
<?PHP       include "config.php";
			include "core/livreur_core.php";
		


			$livreurC=new livreur_core();
			$liste_livreur=$livreurC->afficher_liste_livreur();
			$liste_client=$livreurC->retour_clt();
			$liste_commande=$livreurC->retour_commande();
//var_dump($liste_client);
			?>
<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Livraison</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>Categorie</span></a></li>
							<li class="active"><span>Ajouter une livraison</span></li>
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
													<form data-toggle="validator" role="form" id="ajout" method="POST" action="views/ajouter_livraison.php">
													
													
														
														<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">La referance de la commande</label>
															
															<select name="referance"class="form-control" data-placeholder="Choose a Category" tabindex="1">
																<?PHP
																	foreach($liste_commande as $row){
																?>
																	<option  value="<?PHP echo $row['reference']; ?>"><?PHP echo "Le commande: ". $row['reference']." Client: ".$row['userid'];  ?>
																	 
																	</option>
																		<?PHP } ?>
																	</select>
																	 
														</div>
													</div>	
													</div>
														<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Le livreur a selctioner pour cette livraison</label>
															
															<select name="livreur"class="form-control" data-placeholder="Choose a Category" tabindex="1">
																<?PHP
																	foreach($liste_livreur as $row){
																?>
																	<option  value="<?PHP echo $row['identifiant']; ?>"><?PHP echo "Le nom :". $row['nom'].'-'."Le prenom : ".$row['prenom']; ?>
																	</option>
																		<?PHP } ?>
																	</select> 
														</div>
													</div>	
													</div>
														<div class="control-label mb-10 text-left">
															<label class="control-label mb-10 text-left">Date de livraison<span class="help"></span></label>
															<input type="date" name="date" required  class="form-control">
														</div>
														<div class="form-group">
															<label class="control-label mb-10 text-left">Adresse complet de la livraison</label>
															<textarea name="adresselivraison" class="form-control" required rows="5" cols="50" data-error="Ce champ ne doit pas etre vide...!"></textarea>
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
 
<?php include "footer.php" ?>
