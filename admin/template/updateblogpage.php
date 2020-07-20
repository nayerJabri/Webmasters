<?php
require_once"config.php";
	include 'views/updateblog.php';
	?> 
	<?php include"header.php"; ?>
		<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
</script>
	
	
		
			
								 		<?php include "menu.php" ?>

			
			
			
			<!-- Main Content -->
			<div class="page-wrapper" style="min-height: 977px;">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Edit-Blog</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>e-commerce</span></a></li>
							<li class="active"><span>Edit-Blog</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
						<!-- /alert -->
						<?php if(count($errors) > 0): ?>
					<div class="alert alert-danger alert-dismissable">
						<?php foreach ($errors as $error): ?>
						<li><?php echo $error; ?> </li>
			<?php endforeach; ?>
					</div>
		     	<?php endif; ?>
					<!-- /Title -->
					<?php
if (isset($_GET['id'])){
	$eC=new blogC();
    $result=$eC->fetchblog($_GET['id']);
	foreach($result as $row){
    $titre= $row['titre'];
         $author= $row['author']; 
        $category= $row['category'];
        $postdate= $row['postdate'];
         $picture= $row['picture'];
         $text= $row['text'];
	}
}
					?>
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form method="POST" action="" enctype="multipart/form-data">
											<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" />
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>about Blog</h6>
												<hr class="light-grey-hr">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Blog Title</label>
															<input type="text" name="titre" value="<?php echo $row['titre'];?>" id="firstName" class="form-control" placeholder="sales">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Sub text</label>
															<input type="text" name="author" value="<?php echo $row['author'];?>" id="lastName" class="form-control" placeholder="john wick">
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Category</label>
															<select class="form-control" name="category" value="<?php echo $row['category'];?>" data-placeholder="Choose a Category" tabindex="1">
																<option value="Category 1">Category 1</option>
																<option value="Category 2">Category 2</option>
																<option value="Category 3">Category 5</option>
																<option value="Category 4">Category 4</option>
															</select>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														
													<div class="form-group">
																		<label class="control-label mb-10">Date</label>
																		<input type="date" name="postdate" value="<?php echo $row['postdate'];?>" class="form-control" placeholder="dd/mm/yyyy">
																	</div></div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													
													<!--/span-->
													
													<!--/span-->
												</div>
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Blog text</h6>
												<hr class="light-grey-hr">
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<textarea class="form-control" name="text" rows="4" ><?php echo $row['text'];?></textarea>
														</div>
													</div>
												</div>
												<!--/row-->
												<div class="row">
													
													<!--/span-->
													
												</div>
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-collection-image mr-10"></i>upload image</h6>
												<hr class="light-grey-hr">
												<div class="row">
													<div class="col-lg-12">
													<div class="mt-40">
											<div class="dropify-wrapper"><div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" name="picture" value="<?php echo $row['picture'];?>" id="input-file-now" class="dropify"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
										</div>
													</div>
												</div>
												<div class="seprator-block"></div>
												
												<hr class="light-grey-hr">
												
												<div class="row">
													
													
												</div>
												<div class="row">
													
													
												</div>
												<div class="row">
													
													
												</div>
												<div class="row">
													
													
												</div>
												<div class="row">
													
													
												</div>
												<div class="row">
													
													
												</div>
												<div class="row">
													
													
												</div>
												<div class="form-actions">
													<input type="submit" name="Update" value="Update" class="btn btn-warning pull-left">
													<button type="button" class="btn btn-warning pull-left">Cancel</button>
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