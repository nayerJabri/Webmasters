<?php 


	include "../../core/ReclamationC.php";
	include "config.php";


	if(isset($_GET['id']))
	{
		$reclamation= new ReclamationC();
		$listerec=$reclamation->afficherid($_GET['id']);
	}

?>


<?php 	
	include "header.php";
	include "menu.php"; ?>
		
		
		
		

        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">inbox-detail</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>apps</span></a></li>
						<li class="active"><span>inbox-detail</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default card-view  pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="mail-box">
										<div class="row">
											<aside class="col-lg-3 col-md-4 pr-0">
												<div class="mt-20 mb-20 ml-15 mr-15">
													<a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-success btn-block">
													Compose
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
																	<form role="form" class="form-horizontal">
																		<div class="form-group">
																			<label class="col-lg-2 control-label">To</label>
																			<div class="col-lg-10">
																				<input type="text" placeholder="" id="inputEmail1" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Cc / Bcc</label>
																			<div class="col-lg-10">
																				<input type="text" placeholder="" id="cc" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Subject</label>
																			<div class="col-lg-10">
																				<input type="text" placeholder="" id="inputPassword1" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Message</label>
																			<div class="col-lg-10">
																				<textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-lg-offset-2 col-lg-10">
																				<div class="fileupload btn btn-info btn-anim mr-10"><i class="zmdi zmdi-attachment"></i><span class="btn-text">attachments</span>
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
												<h6 class="pl-15 mb-20"></h6>
													<ul class="chat-list-wrap">
													<li class="chat-list">
														<div class="chat-body">
															
															
															
														
														</div>
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
															<form role="search" class="inbox-search inline-block pull-left mr-15">
																<div class="input-group">
																	<input name="example-input1-group2" class="form-control" placeholder="Search" type="text">
																	<span class="input-group-btn">
																	<button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
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
															<div class="heading-inbox">
																<div class="container-fluid">
																	<div class="pull-left">
																		<div class="compose-btn">
																			<a class="btn btn-sm mr-10" href="inbox.php"  title="Retour"><i class="zmdi zmdi-chevron-left"></i></a>
																		</div>
																	</div>
																	<div class="pull-right text-right">
																		<button class="btn btn-sm mr-10" title="" type="button" ><i class="zmdi zmdi-print"></i> </button>
																		<button class="btn btn-sm mr-10" title=""><i class="zmdi zmdi-delete"></i></button>
																		<div class="inline-block dropdown">
																			<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more"></i></a>
																			<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Mark as Unread</a></li>
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Mark as Important</a></li>
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Report Spam</a></li>
																			</ul>
																		</div>
										
																	</div>
																</div>
																<hr class="light-grey-hr mt-10 mb-15"/>
																<?php 

																	foreach ($listerec as $row)
																	{

																?>
																<div class="container-fluid mb-20">																		
																	<h4 class="weight-500"><?php echo $row['objet'];?></h4>
																</div>	
															</div>
															<div class="sender-info">
																<div class="container-fluid">
																	<div class="sender-img-wrap pull-left mr-20">
																		<img class="sender-img" alt="user" src="../img/user1.png">
																	</div>
																	<div class="sender-details   pull-left">
																		<span class="capitalize-font pr-5 txt-dark block font-15 weight-500 head-font"><?php echo $row['nom'];?></span>
																		<span class="block">
																			to
																			<span>Souk El Medina</span>
																		</span>	
																	</div>	
																	<div class="pull-right">
																		<div class="inline-block mr-5">
																			<span class="inbox-detail-time-1 font-12"><?php  echo $row['date'];?></span>
																			<span class="inbox-detail-time-2 font-12 inline-block">(2 hours ago)</span>
																		</div>
																		<div class="inline-block dropdown">
																			<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi   zmdi-more-vert"></i></a>
																			<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Reply</a></li>
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Forward</a></li>
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Delete</a></li>
																			</ul>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>
															</div>
															<div class="container-fluid view-mail mt-20">
																
																<p><?php echo $row['message'];?></p>
															</div>
															<?php 
																	}
															?>
															<hr class="light-grey-hr mt-20 mb-20"/>
															<div class="container-fluid attachment-mail mt-40 mb-40">
																
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
			
			<?php 	
	include "footer.php";
	 ?>