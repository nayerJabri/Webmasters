
<?php 
session_start();
 
 if(isset($_SESSION['total']))
 {
  if ($_SESSION['total']==0) header('Location: index.php');
 }
include "index_sub/header.php";
  ?>

      <main id="mt-main">
        <section class="mt-contact-banner mt-banner-22 wow fadeInUp" data-wow-delay="0.4s" style="background-image: url(assets/images/cart.jpg);">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <h1 class="text-center">SHOPPING CART</h1>
                <!-- Breadcrumbs of the Page -->
                <nav class="breadcrumbs">
                  <ul class="list-unstyled">
                    <li><a href="assets/index.html">Home <i class="fa fa-angle-right"></i></a></li>
                    <li>Shopping Cart</li>
                  </ul>
                </nav>
                <!-- Breadcrumbs of the Page end -->
              </div>
            </div>
          </div>
        </section>
         <?php if(isset($_SESSION['panier'])) { ?>            

        <!-- Mt Process Section of the Page -->
        <div class="mt-process-sec wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <ul class="list-unstyled process-list">
                  <li class="active">
                    <span class="counter">01</span>
                    <strong class="title">Shopping Cart</strong>
                  </li>
                  <li>
                    <span class="counter">02</span>
                    <strong class="title">Check Out</strong>
                  </li>
                  <li>
                    <span class="counter">03</span>
                    <strong class="title">Order Complete</strong>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div><!-- Mt Process Section of the Page end -->
        <!-- Mt Product Table of the Page -->
        <div class="mt-product-table wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
            <div class="row border">
              <div class="col-xs-12 col-sm-6">
                <strong class="title">PRODUCT</strong>
              </div>
              <div class="col-xs-12 col-sm-2">
                <strong class="title">PRICE</strong>
              </div>
              <div class="col-xs-12 col-sm-2">
                <strong class="title">QUANTITY</strong>
              </div>
              <div class="col-xs-12 col-sm-2">
                <strong class="title">TOTAL</strong>
              </div>
            </div>
            <!-- affichage p -->
            <?php 
                      foreach ($_SESSION['panier'] as $keys => $row) { 
                      if (isset($tot)) {
                        $tot+=($row['quantite'] * $row['prix'])  ;
                      }
                      else $tot=($row['quantite'] * $row['prix'])  ;
                        ?>
            <div class="row border">
              <div class="col-xs-12 col-sm-2">
                <div class="img-holder">
                  <img src="<?php echo $row['image'] ; ?>" alt="imageXdescription">
                </div>
              </div>
              <div class="col-xs-12 col-sm-4">
                <strong class="product-name"><?php echo $row['nom'] ; ?></strong>
              </div>
              <div class="col-xs-12 col-sm-2">
                <strong class="price">DT <?php echo $row['prix'] ; ?></strong>
              </div>
              <div class="col-xs-12 col-sm-2" >
               <strong class="price" id="q<?php echo $row['reference'] ; ?>" ><?php echo $row['quantite'] ; ?></strong>

              </div>
              <div class="col-xs-12 col-sm-2">
                <strong class="price" id="tps<?php echo $row['reference'] ; ?>">DT <?php echo $row['prix']*$row['quantite'] ; ?></strong>
                <a href="views/test.php?reference=<?php echo $row['reference'] ; ?>" class="supp_panier" ><i class="fa fa-close"></i></a>
                <a href="views/panier.php?reference=<?php echo $row['reference'] ; ?>" class="plus_panier" ><i class="fa fa-plus"></i></a>             
              </div>
               
            </div>
            <?php } ?>
            <!-- coupon****************** -->
            <!-- <div class="row">
              <div class="col-xs-12">
                <form action="#" class="coupon-form">
                  <fieldset>
                    <div class="mt-holder">
                      <input type="text" class="form-control" placeholder="Your Coupon Code">
                      <button type="submit">APPLY</button>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div> -->
          </div>
        </div><!-- Mt Product Table of the Page end -->
        <!-- Mt Detail Section of the Page -->
        <?PHP         include "config.php";
                     include "core/commandeC.php";
      $adresseC=new commandeC();
      $liste_commande=$adresseC->liste_adresse();    
      ?>
        <section class="mt-detail-sec style1 wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
            <div class="row">
               <?php if(!isset($_GET['adresse'])){ ?>
              <div class="col-xs-12 col-sm-6">
                <h2>CALCULATE SHIPPING</h2>
                <form action="order-shopping-cart.php" class="bill-detail" method="GET">
                  <fieldset>
                    <div class="form-group">
                      <select name="adresse"class="form-control">
                                <?PHP
                                  foreach($liste_commande as $row){
                                ?>
                                  <option  value="<?PHP echo $row['prix']; ?>"><?PHP echo $row['adresse']; ?>
                                  </option>
                                    <?PHP } ?>
                                  </select> 
                    </div>
                    <div class="form-group">
                      <button class="update-btn" type="submit">UPDATE TOTAL <i class="fa fa-refresh"></i></button>
                    </div>
                  </fieldset>
                </form>
              </div>

                            <?php } if(isset($_GET['adresse'])){ ?>

              <div class="col-xs-12 col-sm-6">
                <h2>CART TOTAL</h2>
                <ul class="list-unstyled block cart">
                  <li>
                    <div class="txt-holder">
                      <strong class="title sub-title pull-left">CART SUBTOTAL</strong>
                      <div class="txt pull-right">
                        <span>DT <?php echo $tot  ; ?></span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="txt-holder">
                      <strong class="title sub-title pull-left">SHIPPING</strong>
                      <div class="txt pull-right">
                        <span>DT <?php echo  $_GET['adresse']; ?></span>
                      </div>
                    </div>
                  </li>
                  <li style="border-bottom: none;">
                    <div class="txt-holder">
                      <strong class="title sub-title pull-left">TOTAL PANIER</strong>
                      <div class="txt pull-right">
                        <span>DT <?php    echo  $tot+$_GET['adresse']  ; ?></span>
                      </div>
                    </div>
                  </li>
                </ul>
                <?php if (isset($_SESSION['username'])) {
                  $u="order-checkout.php";
                  
                } 
                else { 
                  $_SESSION['previous']='order-shopping-cart.php';
                  $u="loginpage.php"; }
                  ?>
                <form action="<?php echo $u; ?>" method="POST">
                  <input type="hidden" value="<?php echo $tot  ; ?>" name="total">
                  <input type="hidden" value="<?php echo $_GET['adresse']; ?>" name="shipping" >
                   <?php  foreach ($_SESSION['panier'] as $keys => $row) {  ?>
                      
                      <input type="hidden" value="<?php echo $row['reference'] ; ?>" name="idproduit[]">
                      <input type="hidden" value="<?php echo $row['quantite'] ; ?>" name="quantite[]">

                <?php } ?>
                
                  <button class="process-btn" type="submit"> Passer la commande <i class="fa fa-check"></i></button>
                </form>
              </div>
                              <?php } ?>

            </div>
          </div>
        </section>
      <?php } ?>
        <!-- Mt Detail Section of the Page end -->
      </main><!-- Main of the Page end here -->
      <!-- footer of the Page -->
          <?php  include "index_sub/footer.php"; ?>