<?php
include "config.php"; 
include "core/commandeC.php";
$commande=new commandeC();
$liste1=$commande->afficherstat();

$month = array_column($liste1, 'month');
$total = array_column($liste1, 'total');


$dataPoints1 = array(	
		array("label"=> $month[0], "y"=>  $total[0] ),
		array("label"=> $month[1], "y"=>  $total[1] ),	
		array("label"=> $month[2], "y"=>  $total[2] ),	
		array("label"=> $month[3], "y"=>  $total[3] ),
		array("label"=> $month[4], "y"=>  $total[4] ),
		array("label"=> $month[5], "y"=>  $total[5] ),
		array("label"=> $month[6], "y"=>  $total[6] ),
		array("label"=> $month[7], "y"=>  $total[7] ),
		array("label"=> $month[8], "y"=>  $total[8] ),
		array("label"=> $month[9], "y"=>  $total[9] ),
		array("label"=> $month[10], "y"=>  $total[10] ),
		array("label"=> $month[11], "y"=>  $total[11] )	

);
$dataPoints2 = array(
		array("label"=> $month[0], "y"=>  $total[0] ),
		array("label"=> $month[1], "y"=>  $total[1] ),	
		array("label"=> $month[2], "y"=>  $total[2] ),	
		array("label"=> $month[3], "y"=>  $total[3] ),
		array("label"=> $month[4], "y"=>  $total[4] ),
		array("label"=> $month[5], "y"=>  $total[5] ),
		array("label"=> $month[6], "y"=>  $total[6] ),
		array("label"=> $month[7], "y"=>  $total[7] ),
		array("label"=> $month[8], "y"=>  $total[8] ),
		array("label"=> $month[9], "y"=>  $total[9] ),
		array("label"=> $month[10], "y"=>  $total[10] ),
		array("label"=> $month[11], "y"=>  $total[11] )	
);

	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "comparaison des revenues entre 2019 et 2020"
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "2019",
		indexLabel: "{y}",
		yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "2020",
		indexLabel: "{y}",
		yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>  