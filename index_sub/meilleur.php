<div id="mt-tab3">
<ul class="mt-productrow">
										<?php 

											foreach ($listeM as $row) { 
											$pos='meilleur';
												?>
											<li>
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.php?reference=<?php echo $row['reference'] ;?>"><img src="<?php echo $row['image'] ; ?>" alt="<?php $row['nom'] ;  ?>"></a>
																 														
																	<ul class="links">
																	<?php include "views/WPicon.php"; ?>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.php?reference=<?php echo $row['reference'] ; ?>" ><?php echo $row['nom'] ; ?></a></strong>
														<span class="price"> <span>DT <?php echo $row['prix'] ; ?></span></span>
													</div>
												</div><!-- mt product1 center end here -->
											</li>
											
											
											<?php } ?>

											
										</ul>										
</div>
