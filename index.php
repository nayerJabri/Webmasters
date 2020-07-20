<?php

session_start();
   include_once "config.php"; 

include_once "core/produitC.php"; 
$produit=new produitC();
$listeR=$produit->recent();
$listeM=$produit->top();
$listeV=$produit->afficherproduits();
include_once "entities/wishlist.php";
include_once "core/wishlistC.php";    
$wishlist1c=new wishlistc();
if(isset($_SESSION['username'])){
$wishlist=$wishlist1c->afficherid($_SESSION['username']);
$wish=array_column($wishlist,'id');	
}

$pos='';

 include_once "index_sub/header.php"; ?>
	<!-- mt-mainslider4 add end here -->
	<?php include_once "index_sub/home_banner.php"; ?>
	
			<!-- mt main start here -->
			<main id="mt-main">
				<!-- product area start here -->
			<?php include_once "index_sub/vedette.php"; ?>	
				<div class="container wow fadeInUp" data-wow-delay="0.4s">
					<div class="row">
						<div class="col-xs-12">
							<!-- banner frame start here -->
							<div class="banner-frame nospace">
								<!-- banner 9 start here -->
								<div class="banner-9">
									<img src="assets/images/produit/couffin.png" alt="111111558">
									<div class="holder">
										<h2><span>Couffin</span><strong>Paille</strong></h2>
										<a class="btn-shop" href="product-detail.php?reference=111111558">
											<span>VOIR</span>
											<i class="fa fa-angle-right"></i>
										</a>
									</div>
								</div><!-- banner 9 end here -->
								<!-- banner 10 start here -->
								<div class="banner-10">
									<img src="assets/images/produit/chapeau.png" alt="image description">
									<div class="holder">
										<h2><span>Chapeau</span><strong>Paille</strong></h2>
										<a class="btn-shop" href="product-detail.php?reference=111111559">
											<span>VOIR</span>
											<i class="fa fa-angle-right"></i>
										</a>
									</div>
								</div><!-- banner 10 end here -->
								<!-- banner 11 start here -->
								<div class="banner-11">
									<img src="assets/images/produit/Sac.png" alt="image description">
									<div class="holder">
										<h2><span>Sac à main</span><strong>Cuir</strong></h2>
										<a class="btn-shop"  href="product-detail.php?reference=111111560">
											<span>VOIR</span>
											<i class="fa fa-angle-right"></i>
										</a>
									</div>
								</div><!-- banner 11 end here -->
							</div><!-- banner frame end here -->

							<!-- mt producttabs start here -->
							<div class="mt-producttabs style4">
								<!-- producttabs start here -->
								<ul class="producttabs">
									<li><a href="#mt-tab2" class="active">RECENT</a></li>
									<li><a href="#mt-tab1">EN VENTE</a></li>
									<li><a href="#mt-tab3">MEILLEUR VENTE </a></li>
								</ul>
								<!-- producttabs end here -->
								<div class="tab-content text-center">
		<!-- ************************** EN VENTE *********************************-->
		
		<?php include_once "index_sub/recent.php"; ?>
		<!-- ************************** RECENT *********************************-->
<?php include_once "index_sub/en vente.php"; ?>
		<!-- ************************** TOP *********************************-->
		<?php include_once "index_sub/meilleur.php"; ?>

								</div>
							</div>
							<!-- mt producttabs end here -->
						</div>
					</div>									
									
				</div>
			</main>
			<?php if(!isset($_SESSION['NW'])){ ?>	
			<a id="newsletter-hiddenlink" href="#popup2" class="lightbox" style="display: none;">NEWSLETTER</a>
	<!-- Popup Holder of the Page -->
	
	<div class="popup-holder">
		<!-- Popup of the Page -->
		
		<div id="popup2" class="lightbox">
			<!-- Mt Newsletter Popup of the Page -->
			<section class="mt-newsletter-popup">
				<span class="title">NEWSLETTER</span>
				<div class="holder">
					<div class="txt-holder">
						<h1>REJOIGNER NOTRE NEWSLETTER</h1>
						<span class="txt">Ajoutez votre adresse mail et on se charge du reste!</span>
						<!-- Newsletter Form of the Page -->
						<form action="views/ajouter_NL.php" method='POST' class="newsletter-form">
							<fieldset>
								<input type="email" name="email" class="form-control" placeholder="Enter your e-mail">
								<button type="submit">s'inscrire</button>
							</fieldset>
						</form><!-- Newsletter Form of the Page -->
					</div>
					<div class="img-holder">
						<img src="assets/images/khomsa.png" alt="image description">
					</div>
				</div><!-- Popup Form of the Page -->
				
			</section><!-- Mt Newsletter Popup of the Page -->
		</div><!-- Popup of the Page end -->
		
	</div><!-- Popup Holder of the Page end -->
	<?php } else { if($_SESSION['NW']==='1'){  ?>
		<a id="newsletter-hiddenlink" href="#popup2" class="lightbox" style="display: none;">NEWSLETTER</a>
	<!-- Popup Holder of the Page -->
	<div class="popup-holder">
		<!-- Popup of the Page -->
		
		<div id="popup2" class="lightbox">
			<!-- Mt Newsletter Popup of the Page -->
			<section class="mt-newsletter-popup">
				<span class="title">NEWSLETTER</span>
				<div class="holder">
					<div class="txt-holder">
						<h1>Merci de vous être abonné à notre newsletter</h1>
						<span class="txt">Vous recevrez un mail de confirmation!</span>
						<!-- Newsletter Form of the Page -->						 
					</div>
					<div class="img-holder">
						<img src="assets/images/khomsa.png" alt="image description">
					</div>
				</div><!-- Popup Form of the Page -->
				
			</section><!-- Mt Newsletter Popup of the Page -->
		</div><!-- Popup of the Page end -->
		
	</div><!-- Popup Holder of the Page end -->
	<?php } } $_SESSION['NW']='2'; ?>
			<!-- footer of the Page -->
			<?php include_once "index_sub/footer.php"; ?>
