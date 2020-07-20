<div class="product-area wow fadeInUp" data-wow-delay="0.4s">
	<?php $pos='vedette'; ?>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 mt-heading text-uppercase text-center">
								<h2 class="heading">EN VEDETTE</h2>
								<p>FAIT A LA MAIN</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="mt-box borderright borderbottom half">
									<!-- mt product1 large start here -->
									<div class="mt-product1 large">
										<div class="box">
											<div class="b1">
												<div class="b2">
													<a href="product-detail.php?reference=114"><img src="assets/images/produit/tapis.png" alt="image description"></a>
													
													<ul class="links">
														
																<li><a class="addpanier" href="views/panier.php?reference=114"><i class="icon-handbag"></i><span>Panier</span></a></li>



 <?php if (isset($_SESSION['username'])) { 
          if ($key=array_search('114', $wish)===false) { 
           $selected='';
             
          }
          else
          {
             $selected='selected';
          }
  ?>

                  <li><a class="addwish" href="views/wishlist.php?id=114&pos=<?php echo $pos; ?>"><i id="<?php echo $pos.'114'?>" class="fas fa-heart <?php echo $selected; ?>"></i><span>Wish</span></a></li>
                  
               <?php }   
                else { ?> 
                   <li><a  href="loginpage.php"><i class="fas fa-heart"></i><span>Wish</span></a></li>
                <?php } ?>
               
															
													</ul>
												</div>
											</div>
										</div>
										<div class="txt">
											<strong class="title"><a href="product-detail.php?reference=114">Tapis </a></strong>
											<span class="price"> <span>DT 599,00</span></span>
										</div>
									</div><!-- mt product1 center end here -->
								</div>
								<div class="mt-holder">
									<div class="mt-frame">
										<div class="mt-box half borderright">
											<!-- mt product1 large start here -->
											<div class="mt-product1 large">
												<div class="box">
													<div class="b1">
														<div class="b2">
															<a href="product-detail.php?reference=111111556"><img src="assets/images/produit/chaussure305x200.png" alt="n.o"></a>
															 
															<ul class="links">
																<li><a class="addpanier" href="views/panier.php?reference=111111556"><i class="icon-handbag"></i><span>Panier</span></a></li>



 <?php if (isset($_SESSION['username'])) { 
          if ($key=array_search('111111556', $wish)===false) { 
           $selected='';
             
          }
          else
          {
             $selected='selected';
          }
  ?>

                  <li><a class="addwish" href="views/wishlist.php?id=111111556&pos=<?php echo $pos; ?>"><i id="<?php echo $pos.'111111556'?>" class="fas fa-heart <?php echo $selected; ?>"></i><span>Wish</span></a></li>
                  
               <?php }   
                else { ?> 
                   <li><a  href="loginpage.php"><i class="fas fa-heart"></i><span>Wish</span></a></li>
                <?php } ?>
               
														</div>
													</div>
												</div>
												<div class="txt">
													<strong class="title"><a href="product-detail.php?reference=111111556">Balgha à motifs floraux bleu</a></strong>
													<span class="price"> <span>DT 49,00</span></span>
												</div>
											</div><!-- mt product1 center end here -->
										</div>
										<div class="mt-box half">
											<!-- mt product1 large start here -->
											<div class="mt-product1 large">
												<div class="box">
													<div class="b1">
														<div class="b2">
															<a href="product-detail.php?reference=111111557"><img src="assets/images/produit/foulard.png" alt="image description"></a>
															<ul class="links">
																<li><a class="addpanier" href="views/panier.php?reference=111111557"><i class="icon-handbag"></i><span>Panier</span></a></li>



 <?php if (isset($_SESSION['username'])) { 
          if ($key=array_search('111111557', $wish)===false) { 
           $selected='';
             
          }
          else
          {
             $selected='selected';
          }
  ?>

                  <li><a class="addwish" href="views/wishlist.php?id=111111557&pos=<?php echo $pos; ?>"><i id="<?php echo $pos.'111111557'?>" class="fas fa-heart <?php echo $selected; ?>"></i><span>Wish</span></a></li>
                  
               <?php }   
                else { ?> 
                   <li><a  href="loginpage.php"><i class="fas fa-heart"></i><span>Wish</span></a></li>
                <?php } ?>
															</ul>
														</div>
													</div>
												</div>
												<div class="txt">
													<strong class="title"><a href="product-detail.php?reference=111111557">Foulard bleu</a></strong>
													<span class="price"> <span>DT 30,00</span></span>
												</div>
											</div><!-- mt product1 center end here -->
										</div>
									</div>
									<div class="mt-frame borderbottom bordertop">
										<!-- mt product1 large start here -->
										<div class="mt-product1 large">
											<div class="img-box">
												<div class="tab-content">
													<div id="tab1"><img src="assets/images/produit/chachiarouge.png" alt="image description"></div>
													<div id="tab2"><img src="assets/images/produit/chachiableu.png" alt="image description"></div>
													<div id="tab3"><img src="assets/images/produit/chachiamarron.png" alt="image description"></div>
													<div id="tab4"><img src="assets/images/produit/chachiajaune.png" alt="image description"></div>
													
												</div>
											</div>
											<div class="mt-block">
												<div class="txt">
												
													<strong class="title"><a  href="product-detail.php?reference=112">chachia 4 couleurs</a></strong>
													<del> <span>20,00</span></del>
													<span class="price"> <span>DT 15,00</span></span>
												</div>
												<ul class="mt-tabs">
													<li><a href="#tab1"><img src="assets/images/produit/chachiarouge.png" alt="image description"></a></li>
													<li><a href="#tab2"><img src="assets/images/produit/chachiableu.png" alt="image description"></a></li>
													<li><a href="#tab3"><img src="assets/images/produit/chachiamarron.png" alt="image description"></a></li>
													<li><a class="active" href="#tab4"><img src="assets/images/produit/chachiajaune.png" alt="image description"></a></li>
												</ul>
												
												
											</div>
										</div><!-- mt product1 center end here -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- product area end here -->