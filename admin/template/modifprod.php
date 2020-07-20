

<?php include"header.php"; ?>



<?php include "menu.php" ?>


	<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">add-products</h5>
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
											<form action="views/modif.php" method="POST">
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>Catégorie</h6>
												<hr class="light-grey-hr"/>
												<div class="row">

													<div class="col-md-6">
														<div class="form-group">
															
															<label class="control-label mb-10">Réference</label>
															<input type="text" id="firstName" class="form-control" value="<?PHP echo $_POST['reference']?>" name="reference" readonly>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">

															<label class="control-label mb-10">Nom</label>
															<input type="text" id="firstName" class="form-control" value="<?PHP echo $_POST['nom']?>"  name="nom">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">

															<label class="control-label mb-10">Catégorie</label>
															<input type="text" id="firstName" class="form-control" value="<?PHP echo $_POST['categorie']?>"  name="categorie">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">

															<label class="control-label mb-10">Prix</label>
															<input type="text" id="firstName" class="form-control" value="<?PHP echo $_POST['prix']?>"  name="prix">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">

															<label class="control-label mb-10">Description</label>
															<input type="text" id="firstName" class="form-control" value="<?PHP echo $_POST['description']?>"  name="description">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">

															<label class="control-label mb-10">Image</label>
															<input type="text" id="firstName" class="form-control" value="<?PHP echo $_POST['image']?>"  name="image">
														</div>
													</div>
													<!--/span-->
													
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
					<!-- /Row -->

				</div>





<?php include "footer.php" ?>
</body>

</html>