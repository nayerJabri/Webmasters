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
							<h5 class="txt-dark">form validation</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.html">Dashboard</a></li>
								<li><a href="#"><span>forms</span></a></li>
								<li class="active"><span>form-validation</span></li>
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
										<h6 class="panel-title txt-dark">Form Validation</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<form data-toggle="validator" role="form" method="POST" action="views/ajoutadmin.php" enctype="multipart/form-data">
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Name</label>
															<input name="nom" type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required>
														</div>
													
														<div class="form-group">
															<label for="inputEmail" class="control-label mb-10">Email</label>
															<input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
															<div class="help-block with-errors"></div>
														</div>
														<div class="form-group">
															<label for="inputPassword" class="control-label mb-10">Password</label>
															<div class="row">
																<div class="form-group col-sm-12">
																	<input name="motdepasse" type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
																	<div class="help-block">Minimum of 6 characters</div>
																</div>
																<div class="form-group col-sm-12">
																	<input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
																	<div class="help-block with-errors"></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label for="inputtelephone" class="control-label mb-10">Telephone</label>
															<input name="telephone" type="number" class="form-control" id="inputelephone" placeholder="votre numero" required>
														</div>
														<div class="form-group">
															<label class="control-label mb-10">Image</label>
															<input type="file" class="form-control" id="image"   required name="image">
														</div>
														<!-- <div class="form-group">
															<label for="inputimage" class="control-label mb-10">Telephone</label>
															<input type="number" class="form-control" id="inputimage" placeholder="votre image" required>
														</div> -->
														
														
														<div class="form-group mb-0">
															<button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Ajouter</span></button>
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
				
				 
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
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
	</body>
</html>
		 