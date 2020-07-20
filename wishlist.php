
<?php 
session_start();
include "config.php"; 
include "core/wishlistC.php"; 
$wishlist=new wishlistC();
$liste=$wishlist->afficherwish($_SESSION['username']);
include 'index_sub/header.php'; ?>
      <!-- Main of the Page -->
      <main id="mt-main">
        <section class="mt-contact-banner mt-banner-22 wow fadeInUp" data-wow-delay="0.4s" style="background-image: url(assets/images/wish.jpg);">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <h1 class="text-center">Wish List</h1>
                <!-- Breadcrumbs of the Page -->
                <nav class="breadcrumbs">
                  <ul class="list-unstyled">
                    <li><a href="index.php">Home <i class="fa fa-angle-right"></i></a></li>
                    <li>Wish List</li>
                  </ul>
                </nav>
                <!-- Breadcrumbs of the Page end -->
              </div>
            </div>
          </div>
        </section>
        <div class="paddingbootom-md hidden-xs"></div>
        <!-- Mt Product Table of the Page -->
        <div class="mt-product-table wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
           <?php foreach ($liste as $key => $value) {
             
            ?>
            <div class="row border">
              <div class="col-xs-12 col-sm-2">
                <div class="img-holder">
                  <img src="<?php echo $value['image']; ?>" alt="image description">
                </div>
              </div>
              <div class="col-xs-12 col-sm-5">
                <strong class="product-name"><?php echo $value['nom']; ?></strong>
              </div>
              <div class="col-xs-12 col-sm-2">
                <strong class="price"><i class="fa fa-eur"></i> <?php echo $value['prix']; ?></strong>
              </div>
              <div class="col-xs-12 col-sm-2">
                <form action="views/wishtocart.php" class="coupon-form" method="GET">
                  <fieldset>
                    <input type="hidden" name="reference" value="<?php echo $value['reference']; ?>" >
                    <button type="submit" style="margin-top: 15px;">Acheter</button>
                  </fieldset>
                </form>
              </div>
              <div class="col-xs-12 col-sm-1">
                <a href="views/supprimerwish.php?reference=<?php echo $value['reference']; ?>"><i class="fa fa-close"></i></a>
              </div>
            </div>
            <?php } ?>
          </div>
        </div><!-- Mt Product Table of the Page end -->
        <div class="paddingbootom-md hidden-xs"></div>
      </main><!-- Main of the Page end here -->
     <?php include 'index_sub/footer.php'; ?>