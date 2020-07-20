<?php include ('header.php') ?>
		<!-- Left Sidebar Menu -->
		    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />

		<?php include ('menu.php') ?>

		
       
	    <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				<!-- Title -->					
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Point de vente</h5>
					</div>
					
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li><a href="map.php">map</a></li>
						<li class="active"><span>Point de vente</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
					
				</div>
				<!-- /Title -->
				<div class="row">
					<div class="col-lg-8">
                        <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">world map</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div id="world_map_marker_1" style="height: 450px">    
									<div id="map" style='width:100%; height:100%;'></div>
								</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-lg-4">
                        <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Ajouter un point de vente</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div id="australia" style="height: 450px">
										<form action="views/ajouter_localisation.php" onsubmit="return validateForm()" method="post" id="map" >
											<div class="col-md-12">
												<div class="form-group">															
													<label class="control-label mb-10">Description</label>
													<input type="text" name="description" id="desc" class="form-control" >
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
															
													<label class="control-label mb-10">Latitude</label>
													<input type="text" name="lat" value="" id="lat"  class="form-control"  readonly>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
															
													<label class="control-label mb-10">Longitude</label>
													<input type="text" name="lng" value="" id="lng" class="form-control" readonly id="referencee" >
												</div>
											</div>
											<div class="col-md-9">
												<div class="form-group">
															
												<button class="btn btn-success " > <i class="fa fa-check"></i> <span>Enregistrer</span></button>
												</div>
											</div>
											<div class="col-md-12">
												<div id="erreur"></div>
											</div>
								

    									</form>
									</div>
								</div>
							</div>
						</div>
                    </div>
				</div>  
				
		
			</div>
			<script>


function validateForm() {
	const erreur = document.getElementById('erreur');
	let messages = [];
  var x = document.forms["map"]["desc"].value;
  var lat = document.forms["map"]["lat"].value;
  var lng = document.forms["map"]["lng"].value;
  if (x.length < 10) {
    messages.push("description doit etre superieur à 10 caracteres\n");
     
  }
  if (lat == "") {
    messages.push("cliquer sur la map pour enregistrer une localisation\n");
     
  }
  if (lng == "") {
    messages.push("cliquer sur la map pour enregistrer une localisation\n");
     
  }
  if (messages.length > 0) {
        erreur.innerText = messages.join('')}
        return false;
}
else
{
	return true ;
}

			</script>
			<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
    <script>
        var myMap = L.map('map');
        myMap.setView([34.00330478501385, 9.535186703174595], 6);
        L.tileLayer('https://tile.jawg.io/jawg-sunny/{z}/{x}/{y}.png?access-token=BKtmGRtY1OYcjzZSz7n1jKKVUdqLS4RhQWg7ZRgmTh1W6oGTrpbjLkjGgaS6Tej2', {
          attribution: '<a href="https://www.jawg.io" target="_blank">&copy; Jawg</a> | <a href="https://www.openstreetmap.org" target="_blank">&copy; OpenStreetMap</a>&nbsp;contributors',
          maxZoom: 22
        }).addTo(myMap);
         var layerGroup = L.layerGroup().addTo(myMap);
        myMap.addEventListener("click",function(MouseEvent){ 
                layerGroup.clearLayers();
                 var ll = MouseEvent.latlng;
                 L.marker(ll).addTo(layerGroup);
                
                document.getElementById('lat').value = ll.lat;
                document.getElementById('lng').value = ll.lng;
         });


 

    </script>
			<?php include 'footer.php' ?>