<?php include"header.php"; ?>
		
		 		<?php include "menu.php" ?>

		
		
       
		<!-- Main Content -->
		<div class="page-wrapper" style="min-height: 928px;">
            <div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Comments</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="file:///C:/Users/Motaz%20mezrani/Downloads/web/Admin/full-width-light/index.html">Dashboard</a></li>
							<li><a href="file:///C:/Users/Motaz%20mezrani/Downloads/web/Admin/full-width-light/blank.html#"><span>Comments</span></a></li>
							<li class="active"><span>Comments page</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Reported Comments</h6>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							
							<div class="table-wrap mt-40">
								<div class="table-responsive">
									<table class="table table-striped mb-0">
									<thead>
										<tr>
										<th>Comments</th>
										<th>User</th>
										<th class="text-nowrap">Action</th>
										</tr>
										
										<?PHP
									 $conn = mysqli_connect("localhost", "root", "", "projet","3308");
									 if ($conn-> connect_error){
										 die("Connection failed:". $conn-> connect_error);
                   }
                   $state=1;
									 $sql = "SELECT message, uid,cid FROM comments WHERE state='$state'";
									 $result = $conn-> query($sql);
									 if ($result-> num_rows > 0) {
				while ($row = $result-> fetch_assoc()):?>
				<tr>
					<td><?php echo $row["message"];?></td>
					<td><?php echo $row["uid"];?></td>
					<td class="text-nowrap">
            <a href="views/updateCstate.php?cid=<?php echo $row["cid"];?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> 
            <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
            <a href="views/DeleteCadmin.php?cid=<?php echo $row["cid"];?>" data-toggle="tooltip" data-original-title="Close">
            <i class="fa fa-close text-danger"></i> </a> 
          </td>
				</tr>
				<?php endwhile; 
				echo "</table>";
									 }
									 else {
										 echo "No Comment reported";
									 }
				$conn-> Close();
									 ?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php include "footer.php" ?>

			</body>

</html>