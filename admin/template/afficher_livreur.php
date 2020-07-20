<?PHP
include "config.php";
include "core/livreur_core.php";
$livreurC=new livreur_core();

if (isset($_POST["recherch"]))	
	{
	$liste_livreur=$livreurC->rechercher($_POST["le_mot"]);
}
else if (isset($_GET['trie']))
{
if ($_GET['trie']=="date")
{
$liste_livreur=$livreurC->trie_date();

}
else if ($_GET['trie']=="referance")
{
$liste_livreur=$livreurC->trie_id();

}}
else
{
$liste_livreur=$livreurC->afficher_liste_livreur();
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
																<li><a href="afficher_livreur.php?trie=referance">identifient</a></li>
																
																<li><a href="afficher_livreur.php?trie=date">date de naissance</a></li>
																
															</ul>
														</div>
													</div>
												</div>
										
										<div class="col-sm-1">
											<form method="POST" action="afficher_livreur.php">
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
														<th>Identifiant</th>
													<th>Nom</th>
													<th>Prenom</th>
													<th>Date de naissance</th>
													<th>Adresse d'd'habitation </th>
													<th>Numero de telephone</th>
													<th>Adresse mail</th>

														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<?php 
											foreach ($liste_livreur as $row) { 

												?>
													<tr>
														<td class="txt-dark"><?PHP echo $row['identifiant']; ?></td>
														<td class="txt-dark"><?PHP echo $row['nom']; ?></td>
														<td class="txt-dark"><?PHP echo $row['prenom']; ?></td>
														<td class="txt-dark"><?PHP echo $row['datenaissance']; ?></td>
														<td class="txt-dark"><?PHP echo $row['adresse']; ?></td>
														<td class="txt-dark"><?PHP echo $row['telephone']; ?></td>
														<td class="txt-dark"><?PHP echo $row['adressemail']; ?></td>
														
														<td>
														<form id="modifier" action="modifier_livreur.php" method="POST">

															<input type="hidden" value="<?PHP echo $row['identifiant']; ?>" name="identifiant">
															<input type="hidden" value="<?php echo $row['nom']; ?>" name="nom">
															<input type="hidden" value="<?PHP echo $row['prenom']; ?>" name="prenom">
															<input type="hidden" value="<?PHP echo $row['datenaissance']; ?>" name="datenaissance">
															<input type="hidden" value="<?PHP echo $row['adresse']; ?>" name="adresse">
															<input type="hidden" value="<?PHP echo $row['telephone']; ?>" name="telephone">
															<input type="hidden" value="<?PHP echo $row['adressemail']; ?>" name="adressemail">


															<a  onclick="$(this).closest('form').submit();return false;" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a>
														</form>
														
															<form action="views/supprimer_livreur.php" id="supprimer" method="POST">
																<input type="hidden" value="<?php echo $row['identifiant']; ?>" name="identifiant">
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
