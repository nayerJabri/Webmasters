<?php 
        include "config.php";
        include "entities/avis.php";
        include "core/avisc.php";
        if (isset($_POST['modifier'])){
            $avisc=new avisc();
            $avis=new avis($_POST['nom'],$_POST['email'],$_POST['review'],$_POST['idproduit'],$_POST['note']);
            $avisc->modifieravis($avis,$_POST['id_ini']);
    
header("Location: product-detail.php?reference=".$_POST['idproduit']);
        }
        include "index_sub/header.php";
    

    
    if (isset($_POST['id']))
    {
        $avisc=new avisc();
        $result=$avisc->recupereravis($_POST['id']);
        foreach($result as $row)
        {
            $id=$row['id'];
            $nom=$row['nom'];
            $email=$row['email'];
            $review=$row['review'];
            $datea=$row['datea'];
        
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


         
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"></link>
<body>
    
			<!-- mt main start here -->
			<main id="mt-main">
				<!-- Mt Product Detial of the Page -->
				<div class="product-detail-tab wow fadeInUp" data-wow-delay="0.4s">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
							
								<div class="tab-content">
											
										<div class="product-comment">
											<div class="mt-box">
												<div class="mt-hold">																					
												</div>	
											</div>
											<form method="POST" action="modifier1.php" class="p-commentform">
												<fieldset>
													<h2>Edit  Comment</h2>
													<div class="mt-row">
														<label>Rating</label>
														<ul class="mt-star">
														<fieldset class="rating">	
															<input type="radio" id="star5" name="note" value="5" /><label for="star5" title="Rocks!">5 stars</label>
    														<input type="radio" id="star4" name="note" value="4" /><label for="star4" title="Pretty good">4 stars</label>
    														<input type="radio" id="star3" name="note" value="3" /><label for="star3" title="Meh">3 stars</label>
    														<input type="radio" id="star2" name="note" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
															<input type="radio" id="star1" name="note" value="1" /><label for="star1" title="Sucks big time">1 star</label>
														</fieldset>
														</ul>
													</div>
													<div class="mt-row">
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
                                                    <input type="hidden" name="id_ini" value="<?php echo $row['id']; ?>">
                                                    <input type="hidden" name="idproduit" value="<?php echo $_POST['idproduit'] ;?>">
                                                    <input type="submit"  name="modifier" class="btn-type4" value="ADD REVIEW"></input>
												</fieldset>
                                            </form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
</body>
                                            <?php 
        }
    }
    
    
    ?>
	  <?php include "index_sub/footer.php"; ?>