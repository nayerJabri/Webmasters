<?PHP
		include "config.php";

include "core/livraison_core.php";
$livraisonC=new livraison_core();
if (isset($_POST["recherch"]))	
	{
$liste_livraison=$livraisonC->rechercher($_POST["le_mot"]);
	}
	else if (isset($_GET['trie']))
{
if($_GET['trie']=="referance")
{
	$liste_livraison=$livraisonC->trie_refrence();
}
else if ($_GET['trie']=="livreur")
{
	$liste_livraison=$livraisonC->trie_livreur();

}else if ($_GET['trie']=="date")
{
	$liste_livraison=$livraisonC->trie_date();

}
else if ($_GET['trie']=="id")
{
	$liste_livraison=$livraisonC->trie_id();

}}
else
{
	$liste_livraison=$livraisonC->retour_client();
}
?>
<?php include"header.php"; ?>
<?php include "menu.php" ?>

<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Livreurs</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>Livreur</span></a></li>
							<li class="active"><span>Afficher le tableau des livreurs</span></li>
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
									<div  class="panel-wrapper collapse in">
											<div  class="panel-body">
												<div class="button-list mt-25">
													<div class="btn-group">
														<div class="dropup">
															<input type="hidden"  aria-expanded="false" data-toggle="dropdown" class="btn btn-danger dropdown-toggle " type="button"></button>
															<ul role="menu" class="dropdown-menu">
																<li><a href="afficher_livraison.php?trie=referance">identifient</a></li>
																
																<li><a href="afficher_livraison.php?trie=date">date de naissance</a></li>
																
															</ul>
														</div>
													</div>
												</div>
										
										<div class="col-sm-1">
											<form method="POST" action="afficher_livraison.php">
											<input type="hidden" name="le_mot" class="form-control" placeholder="Search"><span class="input-group-btn">
											
											</span>
											</form>

										</div>

	
												</div>
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display responsive product-overview mb-30" id="myTable">
												<thead>
													<tr>
													<th>La referance  commande</th>
													<th>La referance du client</th>
													<th>la CIN du livreur </th>
													<th>Date de livraison</th>
													<th>Adresse livraison</th>

														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<?php 
											foreach ($liste_livraison as $row) { 

												?>
													<tr>
														<td class="txt-dark"><?PHP echo $row['referance']; ?></td>
														<td class="txt-dark"><?PHP echo $row['client']; ?></td>
														<td class="txt-dark"><?PHP echo $row['livreur']; ?></td>
														<td class="txt-dark"><?PHP echo $row['date']; ?></td>
														<td class="txt-dark"><?PHP echo $row['adresselivraison']; ?></td>
														
														<td>
														<form id="modifier" action="modifier_livraison.php" method="POST">

															<input type="hidden" value="<?PHP echo $row['referance']; ?>" name="referance">
															<input type="hidden" value="<?php echo $row['client']; ?>" name="client">
															<input type="hidden" value="<?PHP echo $row['livreur']; ?>" name="livreur">
															<input type="hidden" value="<?PHP echo $row['date']; ?>" name="date">
															<input type="hidden" value="<?PHP echo $row['adresselivraison']; ?>" name="adresselivraison">
															<a  onclick="$(this).closest('form').submit();return false;" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a>
														</form>
														
															<form action="Views/supprimer_livraison.php" id="supprimer" method="POST">
																<input type="hidden" value="<?php echo $row['referance']; ?>" name="referance">
															<a onclick="$(this).closest('form').submit();return false;" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a>
																
															</form>

														</td>
													</tr>
													<?php } ?>
												</tbody>
											</table>
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
	
 

<?php include "footer.php" ?>
