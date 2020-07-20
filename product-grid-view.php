<?php 		
session_start();
include_once "index_sub/header.php"; 
if (isset($_GET['referencee'])) {
	 
   include_once "config.php"; 

include_once "core/produitC.php"; 
$produit=new produitC();
$liste=$produit->affichagecat($_GET['referencee']);

}
?>
			<!-- mt main start here -->
			<main id="mt-main">
				<!-- Mt Contact Banner of the Page -->
				
				<div class="container">
					<div class="row">
						<!-- sidebar of the Page start here -->
						<aside id="sidebar" class="col-xs-12 col-sm-4 col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
							<!-- shop-widget filter-widget of the Page start here -->
							
							<!-- shop-widget of the Page start here -->
							<section class="shop-widget">
								<h2>CATEGORIES</h2>
								<!-- category list start here -->
								<ul class="list-unstyled category-list">
									<li>
										<a href="product-grid-view.php?referencee=bijoux">
											<span class="name">Bijoux</span>
										</a>
									</li>
									<li>
										<a href="product-grid-view.php?referencee=habit traditionnels">
											<span class="name">Habit traditionnel</span>
										</a>
									</li>
									<li>
										<a href="product-grid-view.php?referencee=poterie">
											<span class="name">Poterie</span>
										</a>
									</li>
									<li>
										<a href="product-grid-view.php?referencee=tapis">
											<span class="name">Tapisserie</span>
										</a>
									</li>
									<li>
										<a href="product-grid-view.php?referencee=accessoire">
											<span class="name">Accessoires</span>
										</a>
									</li>
								</ul><!-- category list end here -->
							</section><!-- shop-widget of the Page end here -->
							
						</aside><!-- sidebar of the Page end here -->
						<div class="col-xs-12 col-sm-8 col-md-9 wow fadeInRight" data-wow-delay="0.4s">
							<!-- mt shoplist header start here -->
							<header class="mt-shoplist-header">
								<!-- btn-box start here -->
							 
								
							</header><!-- mt shoplist header end here -->
							<!-- mt productlisthold start here -->
							<ul class="mt-productlisthold list-inline">
								 
									
								<?php 
											foreach ($liste as $row) { 	

												?>
								<li>
									<!-- mt product1 large start here -->
									<div class="mt-product1">
										<div class="box">
											<div class="b1">
												<div class="b2">
													<a href="product-detail.php?reference=<?php echo $row['reference'] ;?>"><img src="<?php echo $row['image'] ; ?>" alt="<?php $row['nom'] ;?>"></a>
													<ul class="links add">
														<li><a class="addpanier" href="views/panier.php?reference=<?php echo $row['reference'] ;?>"><i class="icon-handbag"></i></a></li>
 														<?php if (isset($_SESSION['username'])) { ?>
                  										<li><a class="addwish" href="views/wishlist.php?id=<?php echo $row['reference'] ;?>"><i class="icomoon icon-heart-empty"></i></a></li>
                  
               											<?php }   
                											else { ?> 
                   											<li><a  href="loginpage.php"><i class="icomoon icon-heart-empty"></i></a></li>
                											<?php } ?>
													</ul>
												</div>
											</div>
										</div>
										<div class="txt">
											<strong class="title"><a href="product-detail.php?reference=<?php echo $row['reference']; ?>"><?php echo $row['nom']; ?></a></strong>
											<span class="price"><i class="fa fa-eur"></i> <span><?php echo $row['prix']; ?></span></span>
										</div>
										<br>
									</div><!-- mt product1 center end here -->
								</li>
							<?php } ?>
							</ul><!-- mt productlisthold end here -->
							<!-- mt pagination start here -->
							<nav class="mt-pagination">
								<ul class="list-inline">
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
								</ul>
							</nav><!-- mt pagination end here -->
						</div>
					</div>
				</div>
			</main><!-- mt main end here -->
			<?php 		include_once "index_sub/footer.php";
 ?>