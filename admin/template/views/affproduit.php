<?PHP
include "core/ProduitC.php";
$produit1C=new ProduitC();
if(isset($_POST['rechercher']))
{
    $listeproduits=$produit1C->rechercherproduit($_POST['rechercher']);
}
else if(isset($_POST['tri']))
{
    $listeproduits=$produit1C->trierproduit();
}
else
{
    $listeproduits=$produit1C->afficherproduit();

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
					  <h5 class="txt-dark">Data table</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>table</span></a></li>
						<li class="active"><span>Produits</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Liste des Produits</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_1" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>Réference</th>
														<th>Nom</th>
														<th>Catégorie</th>
														<th>Prix</th>
														<th>Description</th>
														<th>Image</th>
														

														
													</tr>

												</thead>
												
												<tbody>
													<?PHP
													foreach($listeproduits as $row){   
        
													?>
													<tr>
														<td><?PHP echo $row['reference']; ?> </td>
														<td><?PHP echo $row['nom']; ?></td>
														<td><?PHP echo $row['categorie']; ?></td>
														<td><?PHP echo $row['prix']; ?></td>
														<td><?PHP echo $row['description']; ?></td>
														<td><?PHP echo $row['image']; ?></td>
																 	<td><form method="POST" action="modifcategorie.php">
																    <input type="hidden" name="referencee" value='<?PHP echo $row['reference']; ?>'>
																    <input type="hidden" name="nomcat" value='<?PHP echo $row['nom']; ?>'>
																    <input type="hidden" name="nomcat" value='<?PHP echo $row['categorie']; ?>'>
																    <input type="hidden" name="nomcat" value='<?PHP echo $row['prix']; ?>'>
																    <input type="hidden" name="nomcat" value='<?PHP echo $row['description']; ?>'>
																    <input type="hidden" name="nomcat" value='<?PHP echo $row['image']; ?>'>
																    <input type="submit" value="Modifier">
																  </form></td>
																  	<form method="POST" action="views/supprimercat.php">
																<td>
																        <input type="hidden" name="referencee" value='<?PHP echo $row['reference']; ?>'>
																        <input type="submit" value='Supprimer'>
																</td>
																</form>

													</tr>
													<?PHP
												}
												?>
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



<?php include "footer.php" ?>