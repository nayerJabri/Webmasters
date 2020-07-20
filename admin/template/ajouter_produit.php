<?php include"header.php";
include"config.php";  ?>



<?php include "menu.php" ?>

<?PHP
include "core/categorieC.php";
$categorie1C=new categorieC();
$liste_cat=$categorie1C->affichercategories();
?>

<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Ajouter produits</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>Categorie</span></a></li>
							<li class="active"><span>ajouter</span></li>
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
									<div class="panel-body">
										<div class="form-wrap">
											<form action="views/ajouterProduit.php" method="POST" enctype="multipart/form-data">
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>Produits</h6>
												<hr class="light-grey-hr"/>
												<div class="row">

												
													<div class="col-md-6">
														<div class="form-group">

															<label class="control-label mb-10">Nom produit</label>
															<input type="text" id="firstName" class="form-control" placeholder="" required id="nom" name="nom">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">

															<label class="control-label mb-10">Catégorie</label>
															<select class="form-control" placeholder="choisissez une categorie" required id="categorie" name="categorie" tabindex="1" required>
																<option disabled selected >choisissez une categorie </option>
																<?PHP
																	foreach($liste_cat as $row){
																?>
																	<option  value="<?PHP echo $row['referencee']; ?>"><?PHP echo $row['referencee']; ?>
																	</option>
																		<?PHP } ?>
																	</select>
															
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">

															<label class="control-label mb-10">Prix</label>
															<input type="text" id="firstName" class="form-control" placeholder="" onkeypress="isInputNumber(event)" name="prix">
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">

															<label class="control-label mb-10">Description</label>
															<input type="text" id="firstName" class="form-control" placeholder="" required id="description" name="description">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">

															<label class="control-label mb-10">Image</label>
															<input type="file" class="form-control" id="image"   required name="image">
														</div>
													</div>
													
													<!--/span-->
													
												<div class="form-actions">
													<button class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>Enregistrer</span></button>
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
					<!-- /Row -->

				</div>

<?php include "footer.php" ?>
</body>

</html>