<?php 

	include "../../core/ReclamationC.php";
	include "config.php";

	$reclamation= new ReclamationC();
	if (isset($_POST['objet']))	
	{
		$listerec=$reclamation->recherche($_POST['objet']);
		
	}else
	{
		$listerec=$reclamation->afficherReclamations();
	}

	$reclamation1 = new ReclamationC();
	$nb=$reclamation1->nombredeligne();

	
	include "header.php";
	include "menu.php";



 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Inbox</title>
	</head>
	<body>
			
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"></link>
		

			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">inbox</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>apps</span></a></li>
							<li class="active"><span>inbox</span></li>
						</ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default card-view pa-0">
								<div class="panel-wrapper collapse in">
									<div class="panel-body pa-0">
										<div class="mail-box">
											<div class="row">
												<aside class="col-lg-3 col-md-4 pr-0">
													<div class="mt-20 mb-20 ml-15 mr-15">
														<a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-success btn-block">
														Compose
														</a>
														<a href="#myModalx" data-toggle="modal"  title="Compose"    class="btn btn-success btn-block">
														Send SMS
														</a>
														<!-- Modal -->
														<div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
																		<h4 class="modal-title">Compose</h4>
																	</div>
																	<div class="modal-body">
																		<form role="form" class="form-horizontal" action="views/reclamation_mail.php" method="POST">
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
																<!-- /.modal-content -->
															</div>
															<!-- /.modal-dialog -->
														</div>
														<div aria-hidden="true" role="dialog" tabindex="-1" id="myModalx" class="modal fade" style="display: none;">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
																		<h4 class="modal-title">Send SMS</h4>
																	</div>
																	<div class="modal-body">
																		<form role="form" class="form-horizontal" action="views/reclamation_SMS.php" method="POST">
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
														<!-- /.modal -->
													</div>
													<ul class="inbox-nav mb-30">
														<li class="active">
															<a href="#"><i class="zmdi zmdi-inbox"></i> Inbox <span class="label label-danger ml-10">2</span></a>
														</li>
														<li>
															<a href="#"><i class="zmdi zmdi-email-open"></i> Sent Mail</a>
														</li>
														
													</ul>
													
													
												</aside>
												
												<aside class="col-lg-9 col-md-8 pl-0">
													<div class="panel panel-refresh pa-0">
														<div class="refresh-container">
															<div class="la-anim-1"></div>
														</div>
														<div class="panel-heading pt-20 pb-20 pl-15 pr-15">
															<div class="pull-left">
																<h6 class="panel-title txt-dark">inbox</h6>
															</div>
															<div class="pull-right">
																<form role="search" method="POST" action="inbox.php" class="inbox-search inline-block pull-left mr-15">
																	<div class="input-group">
																		<input name="objet" class="form-control" placeholder="Search" type="text">
																		<span class="input-group-btn">
																		<button  type="submit" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
																		</span>
																	</div>
																</form>
																<a href="#" class="pull-left inline-block refresh">
																	<i class="zmdi zmdi-replay"></i>
																</a>
															</div>
															<div class="clearfix"></div>
														</div>
														<div class="panel-wrapper collapse in">
															<div class="panel-body inbox-body pa-0">
																<div class="mail-option pl-15 pr-15">
																	
																	<ul class="unstyled inbox-pagination">
																		<li><span>1-10 of <?php echo $nb;?></span></li>
																		<li>
																			<a class="pl-15 pr-15" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
																		</li>
																		<li>
																			<a href="#"><i class="fa fa-angle-right pagination-right"></i></a>
																		</li>
																	</ul>
																</div>
																<div class="table-responsive mb-0">
																	<table class="table table-inbox table-hover mb-0">
																		<?php 
																			foreach ($listerec as $row)
																			{
																		?>
																		<tbody>
																			<tr class="unread">
																				<td class="inbox-small-cells">
																					<i class="zmdi zmdi-star inline-block font-16"></i>
																				</td>
																				<form action="inbox_detail.php" method="POST" id="myform">
																				<td class="view-message  dont-show"><a href="inbox_detail.php?id=<?php echo $row['id'];?>"  style="display: block; height:100%; width:100%"><?php echo $row['nom'];?></a><span class="label label-warning pull-right">new</span></td>
																				<td class="view-message "><a href="inbox_detail.php?id=<?php echo $row['id'];?>"  style="display: block; height:100%; width:100%"><?php echo $row['objet'];?></a></td>
																				<td class="view-message "><a href="inbox_detail.php?id=<?php echo $row['id'];?>"  style="display: block; height:100%; width:100%"><?php echo $row['message'];?></a></td>
																				<td class="view-message  text-right">
																				<input type="hidden" name="id" id="id" value="<?php echo $row['id'] ;?>">
																				</form>
																				<form action="views/supprimerrec.php" method="POST">
																					<input type="hidden" id="nom" name="nom" value="<?php echo $row['nom']?>">
																					<button type="submit"><i class="fas fa-trash-alt"></i></button>
																				</form>
																					<span  class="time-chat-history inline-block"><?php echo $row['date'];?></span>
																			</tr>
																			<?php 
																			}
																			?>
																			
																	
																			
																			
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</aside>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
				</div>
				
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
		
		<!-- wysuhtml5 Plugin JavaScript -->
		<script src="../vendors/bower_components/wysihtml5x/dist/wysihtml5x.min.js"></script>
		
		<script src="../vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.js"></script>
		
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Bootstrap Wysuhtml5 Init JavaScript -->
		<script src="dist/js/bootstrap-wysuhtml5-data.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
		
		<!-- Switchery JavaScript -->
		<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	
	</body>

</html>




<a href=""  style="display: block; height:100%; width:100%">
<a href=""  style="display: block; height:100%; width:100%">
<a href=""  style="display: block; height:100%; width:100%">