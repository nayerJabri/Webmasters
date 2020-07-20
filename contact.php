<?php include "index_sub/header.php";
include"config.php";
include "core/localisationC.php";
$localisation1C=new localisationC();
$liste=$localisation1C->afficherlocalisations();
 ?>

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />

      <!-- Main of the Page -->
      <main id="mt-main">
      <div class="mt-map-holder wow fadeInUp">
          <div id="map" style='width:100%; height:100%;'></div>
      </div>
        </div> 
        <section class="mt-map-descrp wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 text-center">
                <h1>Nos points de vente</h1>
                <p>SoukElMedina est toujours heureux de recevoir ses clients dans ces points de ventes  </p>
              </div>
            </div>
          </div>
        </section>
        <!-- Mt Contact Detail of the Page -->
        <div class="mt-contact-detail wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-4 mt-paddingbottomxs text-center">
                <span class="icon"><i class="fa fa-map-marker"></i></span>
                <strong class="title">ADDRESSE</strong>
                <address>Ariana Essoghra, Ariana <br>Tunisie</address>
              </div>
              <div class="col-xs-12 col-sm-4 mt-paddingbottomxs text-center">
                <span class="icon"><i class="fa fa-phone"></i></span>
                <strong class="title">TELEPHONE</strong>
                <a href="#">+1 (555) 333 22 11</a>
              </div>
              <div class="col-xs-12 col-sm-4 mt-paddingbottomxs text-center">
                <span class="icon"><i class="fa fa-envelope"></i></span>
                <strong class="title">E_MAIL</strong>
                <a href="#">SoukElMedina@gmail.com</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Mt Contact Detail of the Page end -->
        <!-- Mt Form Section of the Page -->
        <section class="mt-form-sec wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
            <div class="row">
              <header class="col-xs-12 text-center header">
                <h2>Vous avez une question?</h2>
                <p> n'hesitez pas à nous contacter en remplissant ce formulaire.</p>
              </header>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <!-- Contact Form of the Page -->
                <form action="views/ajouter_reclamation.php" method="POST" class="contact-form">
                  <fieldset>
                    <input type="text" name="nom" class="form-control" placeholder="Votre nom">
                    <input type="text" name="tel" class="form-control" placeholder="Votre numèro de téléphone">
                    <input type="email" name="email" class="form-control" placeholder="Votre E-Mail">
                    <input type="text" name="objet" class="form-control" placeholder="Objet">
                    <textarea class="form-control" name="message"  placeholder="Message"></textarea>
                    <button class="btn-type3" type="submit">Envoyer</button>
                  </fieldset>
                </form>
                <!-- Contact Form of the Page end -->
              </div>
            </div>
          </div>
        </section>
        <!-- Mt Form Section of the Page -->
      </main>
            <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>

       <script>
        var myMap = L.map('map');
        myMap.setView([34.00330478501385, 9.535186703174595], 6);
        L.tileLayer('https://tile.jawg.io/jawg-sunny/{z}/{x}/{y}.png?access-token=BKtmGRtY1OYcjzZSz7n1jKKVUdqLS4RhQWg7ZRgmTh1W6oGTrpbjLkjGgaS6Tej2', {
          attribution: '<a href="https://www.jawg.io" target="_blank">&copy; Jawg</a> | <a href="https://www.openstreetmap.org" target="_blank">&copy; OpenStreetMap</a>&nbsp;contributors',
          maxZoom: 22
        }).addTo(myMap);
                 var layerGroup = L.layerGroup().addTo(myMap); 
     <?php  foreach ($liste  as $row) { ?>
          var marker = L.marker([<?php echo $row['lat']; ?>,<?php echo $row['lng']; ?>]);
          marker.bindPopup("<?php echo $row['description']; ?>").openPopup();
          marker.addTo(layerGroup);
     <?php } ?>
 

    </script>
          <?php include "index_sub/footer.php"; ?>
