
<?php
session_start();
 if (isset($_SESSION['admin'])){
	
 ?>

<?php include"header.php";
include "config.php"; 
include "core/commandeC.php";
include "core/produitC.php";
include "entities/livraison.php";
include "core/livraison_core.php";
$commande=new commandeC(); 
$produit=new produitC(); 
$livraisonC=new livraison_core();
$stat=$livraisonC->stat();
$dataPoints = array( 
);
foreach($stat as $t){
    array_push($dataPoints,array("label"=>$t['nom'], "y"=>$t['nombre']));
}
	 	
		
		$liste1=$commande->afficherstat( date("Y"));
		$liste2=$commande->afficherstat( date("Y")-1);
		$month = array_column($liste1, 'month');
		$total = array_column($liste1, 'total');
 		$total2 = array_column($liste2, 'total');
 		$LP=$produit->stat();
 		$cat=array_column($LP, 'categorie');
 		$nb_cat=array_column($LP, 'n');

	 	 

?>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<?php include "menu.php" ?>
		<!-- /Left Sidebar Menu -->
		
		

        <!-- Main Content -->
			<?php include "dashbord.php" ?>	
					
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->	
     <script>
	 	
	 	 

	 	 var echartsConfig = function() { 
	 		 if( $('#flot_pie_chart').length > 0 ){
	 var couleurs=['rgba(248, 179, 45,1)','rgba(139,195,74,1)','rgba(15, 197, 187,1)','rgba(243, 57, 35,1)','#92F2EF'];
	 		 	var pie_data = [];
		<?php $x=count($nb_cat); ?>
		var n = <?php echo json_encode($x); ?>;
		var jnb=<?php echo json_encode($nb_cat) ; ?>;
		var jcat=<?php echo json_encode($cat) ; ?>;

		for (var i = 0; i < n; i++) {
		pie_data.push({
			label: jcat[i],
			data: jnb[i] ,
			color: couleurs[i],
		});
		}
		// var pie_data = [{
		// 	label: "Series 0",
		// 	data: 10,
		// 	color: "rgba(248, 179, 45,1)",
			
		// }, {
		// 	label: "Series 1",
		// 	data: 1,
		// 	color: "rgba(139,195,74,1)",
		// }, {
		// 	label: "Series 2",
		// 	data: 3,
		// 	color: "rgba(15, 197, 187,1)",
		// }, {
		// 	label: "Series 3",
		// 	data: 1,
		// 	color: "rgba(243, 57, 35,1)",
		// }];

		var pie_op = {
			series: {
				pie: {
					innerRadius: 0.5,
					show: true,
					stroke: {
						width: 0,
					}
				}
			},
			legend : {
				backgroundColor: 'transparent',
			},
			grid: {
				hoverable: true
			},
			color: null,
			tooltip: true,
			tooltipOpts: {
				content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
				shifts: {
					x: 20,
					y: 0
				},
				defaultTheme: false
			},
		};
		$.plot($("#flot_pie_chart"), pie_data, pie_op);
	}
		if( $('#e_chart_1').length > 0 ){
		var eChart_1 = echarts.init(document.getElementById('e_chart_1'));
		var option = {
			color: ['#0FC5BB','	#4B0082'],		
			tooltip: {
				trigger: 'axis',
				backgroundColor: 'rgba(33,33,33,1)',
				borderRadius:0,
				padding:10,
				axisPointer: {
					type: 'cross',
					label: {
						backgroundColor: 'rgba(33,33,33,1)'
					}
				},
				textStyle: {
					color: '#fff',
					fontStyle: 'normal',
					fontWeight: 'normal',
					fontFamily: "'Open Sans', sans-serif",
					fontSize: 12
				}	
			},
			toolbox: {
				show: true,
				orient: 'vertical',
				left: 'right',
				top: 'center',
				showTitle: false,
				feature: {
					mark: {show: true},
					magicType: {show: true, type: ['line', 'bar', 'stack', 'tiled']},
					restore: {show: true},
				}
			},
			grid: {
				left: '3%',
				right: '10%',
				bottom: '3%',
				containLabel: true
			},
			xAxis : [
				{
					type : 'category',
					data : <?php echo json_encode($month) ; ?>,
					axisLine: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#878787',
							fontFamily: "'Open Sans', sans-serif",
							fontSize: 8
						}
					},
				}
			],
			yAxis : [
				{
					type : 'value',
					axisLine: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#878787',
							fontFamily: "'Open Sans', sans-serif",
							fontSize: 12
						}
					},
					splitLine: {
						show: false,
					}
				}
			],
			series : [
				{
					name:'2020',
					type:'bar',
					data:<?php echo json_encode($total) ; ?>
				},
				{
					name:'2019',
					type:'line',
					stack: 'st1',
					data:<?php echo json_encode($total2) ; ?>
				}
				
			]
		};

		eChart_1.setOption(option);
		eChart_1.resize();
	}
	 
	 
}



	 </script>
	 <script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	
	data: [{
		type: "pyramid",
		indexLabel: "{label} - {y}",
		yValueFormatString: "#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
	 			<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

			<?php include "footer.php" ?>

			</body>

</html>
<?php }
else  {
 	header('Location: login.php');
 } ?>