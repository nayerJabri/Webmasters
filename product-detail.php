
<?php
   session_start();
  include "config.php"; 
  $pos='pd';

if (isset($_GET['reference'])) {
    include "core/produitC.php";
   $produit=new produitC();
   $prod=$produit->afficher1($_GET['reference']);
 }
 include "core/avisc.php"; 

		$avis=new avisc();
		$listeavis=$avis->afficheravis($_GET['reference']);
		if(isset($_SESSION['username'])){
		include "entities/wishlist.php";
include "core/wishlistC.php";    
$wishlist1c=new wishlistc();
$wishlist=$wishlist1c->afficherid($_SESSION['username']);
$wish=array_column($wishlist,'id');}
		include "index_sub/header.php";


		$nb5=$avis->moyenne5($_GET['reference']);
		$nb4=$avis->moyenne4($_GET['reference']);
		$nb3=$avis->moyenne3($_GET['reference']);
		$nb2=$avis->moyenne2($_GET['reference']);
		$nb1=$avis->moyenne1($_GET['reference']);
  ?>




 <style>
	 
        .rating {
    float:left;
	
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
   .rating:not(:checked) > input {
        position: absolute;
        /* top: -9999px; */
        clip: rect(0, 0, 0, 0);
        height: 0;
        width: 0;
        overflow: hidden;
        opacity: 0;
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}

.bouton {
	width: 25px;
	height:25px;
	float: right;
	background-color: #fff;
}
a{
	float: right;
}
</style>
 <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</link>
			<!-- mt main start here -->
			<main id="mt-main">
				<!-- Mt Product Detial of the Page -->
				<section class="mt-product-detial wow fadeInUp" data-wow-delay="0.4s">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<!-- Slider of the Page -->
								<div class="slider">
									<!-- Comment List of the Page -->
									<ul class="list-unstyled comment-list">
										
									</ul>
									<!-- Comment List of the Page end -->
									<!-- Product Slider of the Page -->
									<div class="product-slider">
										<div class="slide">
											<img src="<?php echo $prod['image']; ?>" alt="image descrption">
										</div>
										<div class="slide">
											<img src="http://placehold.it/610x490" alt="image descrption">
										</div>
										<div class="slide">
											<img src="http://placehold.it/610x490" alt="image descrption">
										</div>
										<div class="slide">
											<img src="http://placehold.it/610x490" alt="image descrption">
										</div>
									</div>
									<!-- Product Slider of the Page end -->
									<!-- Pagg Slider of the Page -->
									<ul class="list-unstyled slick-slider pagg-slider">
										<li><div class="img"><img src="<?php echo $prod['image']; ?>" alt="image description"></div></li>
										<li><div class="img"><img src="<?php echo $prod['image']; ?>" alt="image description"></div></li>
										<li><div class="img"><img src="<?php echo $prod['image']; ?>" alt="image description"></div></li>
										<li><div class="img"><img src="<?php echo $prod['image']; ?>" alt="image description"></div></li>
										<li><div class="img"><img src="<?php echo $prod['image']; ?>" alt="image description"></div></li>
									</ul>
									<!-- Pagg Slider of the Page end -->
								</div>
								<!-- Slider of the Page end -->
								<!-- Detail Holder of the Page -->
								<div class="detial-holder">
									<!-- Breadcrumbs of the Page -->
									<ul class="list-unstyled breadcrumbs">
										<li><a href="index.php">Acceuil <i class="fa fa-angle-right"></i></a></li>
										<li>Produits</li>
									</ul>
									<!-- Breadcrumbs of the Page end -->
									<h2><?php echo $prod['nom']; ?></h2>
									<!-- Rank Rating of the Page -->
									<div class="rank-rating">
										<ul class="list-unstyled rating-list">
											<li><a href="assets/#"><i class="fa fa-star"></i></a></li>
											<li><a href="assets/#"><i class="fa fa-star"></i></a></li>
											<li><a href="assets/#"><i class="fa fa-star"></i></a></li>
											<li><a href="assets/#"><i class="fa fa-star-o"></i></a></li>
										</ul>
										<span class="total-price">Reviews (12)</span>
									</div>
									<!-- Rank Rating of the Page end -->
									<ul class="list-unstyled list">
										<li><a target="_blank" rel="noopener noreferrer" href="views/imprimer_produit.php?reference=<?php echo $prod['reference'] ;?>"><i class="fa fa-print"></i> Imprimer</a></li>
										<?php if (isset($_SESSION['username'])) { 
          if ($key=array_search($prod['reference'], $wish)===false) { 
           $selected='';
             
          }
          else
          {
             $selected='selected';
          }
  ?>

                  <li><a class="addwish" href="views/wishlist.php?id=<?php echo $prod['reference'] ;?>&pos=<?php echo $pos; ?>"><i id="<?php echo $pos.$prod['reference'];?>" class="fas fa-heart <?php echo $selected; ?>"></i><span>Wish</span></a></li>
                  
               <?php }   
                else { ?> 
                   <li><a  href="loginpage.php"><i class="fas fa-heart"></i><span>Wish</span></a></li>
                <?php } ?>
               
										
									</ul>
									<div class="txt-wrap">
										<p><?php echo $prod['description']; ?></p>
									</div>
									<div class="text-holder">
										<span class="price"><?php echo $prod['prix']; ?> TND</span>
									</div>
									<!-- Product Form of the Page -->
									<form action="#" class="product-form">
										<fieldset>
											
											<div class="row-val">
												<button class="addpanier" href="views/panier.php?reference=<?php echo $prod['reference'] ;?>" >ADD TO CART</button>
											</div>
										</fieldset>
									</form>
									<br>
									<div id="e_chart_2" class="" style="height:330px;"></div>
    <script src="js_dhia/jquery.min.js"></script>
	<script src="js_dhia/echarts-en.min.js"></script>
	<script src="js_dhia/echarts-liquidfill.min.js"></script>	
 	<script >/*Dashboard Init*/
 
 "use strict"; 
 
 /*****E-Charts function start*****/
 var echartsConfig = function() { 
	  
	 if( $('#e_chart_2').length > 0 ){
		 var eChart_2 = echarts.init(document.getElementById('e_chart_2'));
		 var option1 = {
			 animation: true,
			 tooltip: {
				 trigger: 'axis',
				 backgroundColor: 'rgba(33,33,33,1)',
				 borderRadius:0,
				 padding:10,
				//  axisPointer: {
				// 	 type: 'cross',
				// 	 label: {
				// 		 backgroundColor: 'rgba(33,33,33,1)'
				// 	 }
				//  },
				 textStyle: {
					 color: '#fff',
					 fontStyle: 'normal',
					 fontWeight: 'normal',
					 fontFamily: "'Open Sans', sans-serif",
					 fontSize: 12
				 }	
			 },
			 color: ['#0fc5bb'],	
			 grid: {
				 top: 60,
				 left:50,
				 bottom: 30
			 },
			 xAxis: {
				 type: 'value',
				//  position: 'top',
				 axisLine: {
					 show:false
				 },
				//  axisLabel: {
				// 	 textStyle: {
				// 		 color: '#868686'
				// 	 }
				//  },
				 splitLine: {
					 show:false
				 },
			 },
			 yAxis: {
				 splitNumber: 25,
				 type: 'category',
				 axisLine: {
					 show:false
				 },
				 axisLabel: {
					 textStyle: {
						 color: '#868686'
					 }
				 },
				 axisTick: {
					 show: false
				 },
				 splitLine: {
					 show:false
				 },
				 data: ['1 star', '2 stars', '3 stars', '4 stars', '5 stars']
			 },
			 series: [{
				 name: '',
				 type: 'bar',
				 barGap: '-100%',
				 label: {
					 normal: {
						 textStyle: {
							 color: '#F6b01e'
						 },
						 position: 'left',
						 show: false,
						 formatter: '{b}'
					 }
				 },
				 itemStyle: {
					 normal: {
						 color: '#F6b01e',
						 
					 }
				 },
				 data: [<?php echo $nb1?>, <?php echo $nb2?>, <?php echo $nb3?>, <?php echo $nb4?>, <?php echo $nb5?>]
			 }
 
			 ]
		 }
		 eChart_2.setOption(option1);
		 eChart_2.resize();
	 }
	  
	  
 }
 /*****E-Charts function end*****/
 
 /*****Resize function start*****/
 var echartResize;
 $(window).on("resize", function () {
	 /*E-Chart Resize*/
	 clearTimeout(echartResize);
	 echartResize = setTimeout(echartsConfig, 200);
 }).resize(); 
 /*****Resize function end*****/
 
 /*****Function Call start*****/
 echartsConfig();
 /*****Function Call end*****/</script>
									<!-- Product Form of the Page end -->
								</div>
								<!-- Detail Holder of the Page end -->
							</div>
						</div>
					</div>
				</section><!-- Mt Product Detial of the Page end -->
				<div class="product-detail-tab wow fadeInUp" data-wow-delay="0.4s">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<ul class="mt-tabs text-center text-uppercase">
									<li><a href="#tab1" class="active">Avis</a></li>
									 
								</ul>
								<div class="tab-content">
									
									<div id="tab1">
											<?php
													foreach ($listeavis as $prod)
													{
											?>
										<div class="product-comment">
											<div class="mt-box">
												<div class="mt-hold">
													<ul class="mt-star">
														<?php 
															for ($i=0;$i<$prod['note'];$i++)
															{
																?>
																<li><span style="font-size:100%;color:orange;">&starf;</span></li>
															<?php
															}
															
														?>
														<?php 
															for ($i=0;$i<(5-$prod['note']);$i++)
															{
																?>
																<li><span style="font-size:100%;color:gray;">&starf;</span></li>
															<?php
															}
														?>

													</ul>
													<span class="name"> <?php echo $prod['nom'];?> </span>
													<time datetime="2016-01-01"> <?php echo $prod['datea'];?> </time>									
												</div>
												<p><?php echo $prod['review'] ?></p>
												<form action="views/supprimeravis.php" method="POST">
													<input type="hidden" name="id" value="<?php echo $prod['id'];?>">
 													<a  onclick="$(this).closest('form').submit();return false;"><i class="fas fa-trash-alt"></i></a>
												</form>
												<form action="modifier1.php" method="POST" id="myform">
													<input type="hidden" value="<?PHP echo $_GET['reference'] ;?>" name="idproduit" >
													<input type="hidden" name="note" value="<?php echo $prod['note']; ?>">
 													<input type="hidden" name="id" value="<?php echo $prod['id']; ?>">	
													<a  onclick="$(this).closest('form').submit();return false;"><i class="fas fa-edit"></i></a>
												</form>
											</div>
											<?php
													}
											?>				
                                            <?php if (isset($_SESSION['username'])) {
                                               $url='views/ajouteravis.php'	;
                                            } else
                                            {
                                            	$url='loginpage.php';
                                            } ?>
											<form method="POST" action="<?php echo $url; ?>" class="p-commentform">
												<fieldset>
													<h2>Add  Comment</h2>
													<div class="mt-row">
														<label>Rating</label>
														<ul class="mt-star">
														<div class="rating rating2">
														<fieldset class="rating">	
    														<input type="radio" id="star5" name="note" value="5" /><label for="star5" title="Rocks!">5 stars</label>
    														<input type="radio" id="star4" name="note" value="4" /><label for="star4" title="Pretty good">4 stars</label>
    														<input type="radio" id="star3" name="note" value="3" /><label for="star3" title="Meh">3 stars</label>
    														<input type="radio" id="star2" name="note" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
    														<input type="radio" id="star1" name="note" value="1" /><label for="star1" title="Sucks big time">1 star</label>
														</fieldset>
    													</div>
														</ul>
													</div>
													<div class="mt-row">
														<br><br>
 														<label>Name</label>
														<input type="text" name="nom" class="form-control">
													</div>
													<div class="mt-row">
														<label>E-Mail</label>
														<input type="text" name="email"  class="form-control">
													</div>
													<div class="mt-row">
														<label>Review</label>
														<textarea name="review" class="form-control"></textarea>
													</div>
													<input type="hidden" value="<?PHP echo $_GET['reference'] ;?>" name="idproduit" >
													<input type="submit" class="btn-type4" value="ADD REVIEW"></input>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
	  <?php include "index_sub/footer.php"; ?>