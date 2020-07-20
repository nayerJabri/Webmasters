<?php
session_start();
if(!isset($_POST['total'])){
header('Location: index.php'); 
}

$_SESSION['tot']=$_POST['total'];
 include "index_sub/header.php"; ?>
      <!-- Main of the Page -->
      <main id="mt-main">
       

        <!-- Mt Process Section of the Page -->
        <div class="mt-process-sec wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <!-- Process List of the Page -->
                <ul class="list-unstyled process-list">
                  <li class="active">
                    <span class="counter">01</span>
                    <strong class="title">Shopping Cart</strong>
                  </li>
                  <li class="active">
                    <span class="counter">02</span>
                    <strong class="title">Check Out</strong>
                  </li>
                  <li>
                    <span class="counter">03</span>
                    <strong class="title">Order Complete</strong>
                  </li>
                </ul>
                <!-- Process List of the Page end -->
              </div>
            </div>
          </div>
        </div><!-- Mt Process Section of the Page end -->
        <!-- Mt Detail Section of the Page -->
        <section class="mt-detail-sec toppadding-zero wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
            <div class="row">
              
              <div class="col-xs-12 ">
                <div class="holder">
                  <h2>YOUR ORDER</h2>
                  <ul class="list-unstyled block">
                    <li>
                      <div class="txt-holder">
                        
                       
                    </li>
                    <li>
                      <div class="txt-holder">
                        <strong class="title sub-title pull-left">TOTAL PANIER</strong>
                        <div class="txt pull-right">
                          <span><i class="fa fa-eur"></i> <?php echo $_POST['total']; ?></span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="txt-holder">
                        <strong class="title sub-title pull-left">SHIPPING</strong>
                        <div class="txt pull-right">
                          <span><?php echo $_POST['shipping']; ?></span>
                        </div>
                      </div>
                    </li>
                    <li style="border-bottom: none;">
                      <div class="txt-holder">
                        <strong class="title sub-title pull-left">TOTAL COMMANDE</strong>
                        <div class="txt pull-right">
                          <span><i class="fa fa-eur"></i> <?php echo ($_POST['total']+=$_POST['shipping']); ?></span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  
                    <!-- Panel Panel Default of the Page end -->
                    <!-- Panel Panel Default of the Page -->
                  
                    <!-- Panel Panel Default of the Page end -->
                  </div>
                  <!-- Panel Group of the Page end -->
                </div>
                </div>
                <div class="paypal" id="paypal-button"></div>
                
                  <form action="views/ajoutercommande.php" method="POST">
                  <input type="hidden" value="<?php echo $_POST['total']  ; ?>" name="total">
                   <?php  foreach ($_SESSION['panier'] as $keys => $row) {  ?>
                      
                      <input type="hidden" value="<?php echo $row['reference'] ; ?>" name="idproduit[]">
                      <input type="hidden" value="<?php echo $row['quantite'] ; ?>" name="quantite[]">

                <?php } ?>
                                <a onclick="$(this).closest('form').submit();return false;"  class="process-btn">Payer a la livraison<i class="fa fa-check"></i></a>

                 </form>
               

              </div>
            </div>
          </div>
        </section>
        <!-- Mt Detail Section of the Page end -->
      </main><!-- Main of the Page end here -->
     <footer id="mt-footer" class="style3 wow fadeInUp" data-wow-delay="0.4s">
        <div class="footer-holder">
          <div class="container divider">
            <div class="row">
              <div class="col-xs-12 col-sm-4 mt-paddingbottomsm">
                <!-- F Widget About of the Page -->
                <div class="f-widget-about">
                  <div class="logo">
                    <a href="homepage3.html"><img src="assets/images/mt-logo.png" alt="Schon"></a>
                  </div>
                  <p>plateforme de vente en ligne des produits traditionnels tunisiens<br> toutes les categories</p>
                  <ul class="list-unstyled address-list">
                    <li><i class="fa fa-map-marker"></i><address>Ariana essoghra<br>Tunisie</address></li>
                    <li><i class="fa fa-phone"></i><a href="tel:15553332211">+1 (216) 55 555 555</a></li>
                    <li><i class="fa fa-envelope-o"></i><a href="#">SOUKELMEDINA@GMAIL.COM</a></li>
                  </ul>
                </div>
                <!-- F Widget About of the Page end -->
              </div>
              <nav class="col-xs-12 col-sm-8 col-md-5 mt-paddingbottomsm">
                <!-- Footer Nav of the Page -->
                <div class="nav-widget-1">
                  <h3 class="f-widget-heading">Categories</h3>
                  <ul class="list-unstyled f-widget-nav">
                    <li><a href="#">Accessoire</a></li>
                    <li><a href="#">Tapis</a></li>
                    <li><a href="#">Habit Traditionnel</a></li>
                    <li><a href="#">Bijoux</a></li>
                    <li><a href="#">Poterie</a></li>
                  </ul>
                </div>
                <!-- Footer Nav of the Page end -->
                <!-- Footer Nav of the Page -->
                <div class="nav-widget-1">
                  <h3 class="f-widget-heading">Information</h3>
                  <ul class="list-unstyled f-widget-nav">
                    <li><a href="#">A propos</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Blog</a></li>
                    
                  </ul>
                </div>
                <!-- Footer Nav of the Page end -->
                <!-- Footer Nav of the Page -->
                <div class="nav-widget-1">
                  <h3 class="f-widget-heading">compte</h3>
                  <ul class="list-unstyled f-widget-nav">
                    <li><a href="#">Mon compte</a></li>
                    <li><a href="#">Favories</a></li>
                    <li><a href="#">Panier</a></li>
                    <li><a href="#">Checkout</a></li>
                  </ul>
                </div>
                <!-- Footer Nav of the Page end -->
              </nav>
              <div class="col-xs-12 col-md-3 text-right hidden-sm">
                <!-- F Widget Newsletter of the Page -->
                <div class="f-widget-newsletter">
                  <h3 class="f-widget-heading">inscription Newsletter</h3>
                  <p>recevez toutes nouveauté<br>sur tout les produits</p>
                  <div class="holder">
                    <!-- Newsletter Form of the Page -->
                    <form action="#" class="newsletter-form">
                      <fieldset>
                        <input type="email" placeholder="Votre Email" class="form-control">
                        <button type="submit"><i class="fa fa-angle-right"></i></button>
                      </fieldset>
                    </form>
                    <!-- Newsletter Form of the Page end -->
                  </div>
                  <h4 class="f-widget-heading follow">Suivez nous</h4>
                  <!-- Social Network of the Page -->
                  <ul class="list-unstyled social-network">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                  </ul>
                  <!-- Social Network of the Page end -->
                </div>
                <!-- F Widget Newsletter of the Page end -->
              </div>
            </div>
          </div>
        </div>
        <!-- Footer Area of the Page -->
        <div class="footer-area">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <p>© <a href="homepage3.html">SoukElMedina.</a> - All rights Reserved</p>
              </div>
              <div class="col-xs-12 col-sm-6 text-right">
                <div class="bank-card-2">
                  <img src="assets/images/bank-card2.png" alt="Bank Card">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer Area of the Page end -->
      </footer><!-- footer of the Page end -->
    </div>
    <!-- W1 end here -->
    <span id="back-top" class="fa fa-arrow-up"></span>
  </div>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>


<script>
  paypal.Button.render({
    env: 'sandbox',
    commit: true, 
    payment: function() {
       
      return paypal.request.post('payment.php')
        .then(function(data) {
          // 3. Return res.id from the response
          console.log(data);
          return data.id;
                    console.log(data.id);


        });
    },
    // Execute the payment:
    // 1. Add an onAuthorize callback
    onAuthorize: function(data, actions) {
      // 2. Make a request to your server
      return paypal.request.post('pay.php', {
        paymentID: data.paymentID,
        payerID:   data.payerID
      })
        .then(function(data) {
          console.log(data);
          alert('Merci pour votre achat');
          //window.location.href = 'index.php';
        }).catch(function (err) {
           console.log('erreur',err);
        });
    },
     style: {
    layout:  'horizontal',
    color:   'blue',
    shape:   'rect',
    label:   'paypal',
    size: 'large',
    tagline: 'false'
  }
  }, '#paypal-button');
</script>
  <!-- include jQuery -->
  <script src="/assets/js/jquery.js"></script>
  <!-- include jQuery -->
  <script src="/assets/js/plugins.js"></script>
  <!-- include jQuery -->
  <script src="/assets/js/jquery.main.js"></script>
  <script src="/assets/js/aj.js"></script>
</body>
</html>