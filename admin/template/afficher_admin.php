<?php 
include "config.php";

include "core/administrateurC.php"; 



$administrateur=new administrateurC();




if(isset($_POST['sup'])){
	$administrateur->supprimerAdmin($_POST['email']);
	
     
}


$liste=$administrateur->afficheradmins();

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
											<a style="width: 30%" href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-success btn-block">
																				Compose
																				</a>
											<a style="width: 30%" href="#myModalx" data-toggle="modal"  title="Compose"    class="btn btn-success btn-block">
																				Send SMS
																				</a>
																				
											<table class="table display responsive product-overview mb-30" id="myTable">
												<thead>
													<tr>
														<th>Nom admin</th>
														
														<th>Photo</th>
														<th>Email</th>
														<th>Telephone</th>
														
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<?php 
											foreach ($liste  as $row) { 

												?>
													<tr>
														<td class="txt-dark"><?php echo $row['nom']; ?></td>
														 
														<td>
															<img src="<?php echo $row['photop']; ?>" alt="iMage" width="80">
														</td>
														<td><?php echo $row['email']; ?></td>
														<td><?php echo $row['telephone']; ?></td>
														
														<td>
														<form id="modifier" action="modifier_admin.php" method="POST">
															<input type="hidden" name="mod" value="xx">
															<input type="hidden" name="email" value="<?php echo $row['email']; ?>">
															<input type="hidden" name="nom" value="<?php echo $row['nom']; ?>">
															<input type="hidden" name="telephone" value="<?php echo $row['telephone']; ?>">
															<a   onclick="$(this).closest('form').submit();return false;" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a>
														</form>
															<form action="afficher_admin.php" id="supprimer" method="POST">
																<input type="hidden" name="sup">
															<input type="hidden" name="email" value="<?php echo $row['email']; ?>">	
															<a  onclick="$(this).closest('form').submit();return false;" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a>
																
															</form>

														</td>
													</tr>
													<?php } ?>
													
												</tbody>
												
											</table>
											<div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
																		<h4 class="modal-title">Compose</h4>
																	</div>
																	<div class="modal-body">
																		<form role="form" class="form-horizontal" action="views/admin_mail.php" method="POST">
																			<div class="form-group">
																				<label class="col-lg-2 control-label">To</label>
																				<div class="col-lg-10">
																					<input type="text" placeholder="" id="inputEmail1" class="form-control" name="email">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="col-lg-2 control-label">Subject</label>
																				<div class="col-lg-10">
																					<input type="text" placeholder="" id="inputPassword1" class="form-control" name="objet">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="col-lg-2 control-label">Message</label>
																				<div class="col-lg-10">
																					<textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..." name="message"></textarea>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-offset-2 col-lg-10">
																					<div class="fileupload btn btn-info btn-anim mr-10"><i class="fa fa-paperclip"></i><span class="btn-text">attachments</span>
																						<input type="file" class="upload">
																					</div>
																					
																					<button class="btn btn-success" type="submit">Send</button>
																				</div>
																			</div>
																		</form>
																	</div>
																</div>
										</div>
									</div>
									<div aria-hidden="true" role="dialog" tabindex="-1" id="myModalx" class="modal fade" style="display: none;">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
																		<h4 class="modal-title">Send SMS</h4>
																	</div>
																	<div class="modal-body">
																		<form role="form" class="form-horizontal" action="views/admin_sms.php" method="POST">
																			<div class="form-group">
																				
																			</div>
																			<div class="form-group">
																				<label class="col-lg-2 control-label">Subject</label>
																				<div class="col-lg-10">
																					<input type="text" placeholder="" id="inputPassword1" class="form-control" name="objet">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="col-lg-2 control-label">Message</label>
																				<div class="col-lg-10">
																					<textarea class=" form-control" rows="15" placeholder="Enter text ..." name="message"></textarea>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-lg-offset-2 col-lg-10">
																					
																					
																					<button class="btn btn-success" type="submit">Send</button>
																				</div>
																			</div>
																		</form>
																	</div>
																</div>
																<!-- /.modal-content -->
															</div>
															<!-- /.modal-dialog -->
														</div>	
								</div>	
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
			</div>
			
		

        <!-- Main Content -->
						<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2018 &copy; Goofy. Pampered by Hencework</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
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