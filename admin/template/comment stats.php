<?php include"header.php";
include "core/CommentC.php";

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
 		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<?php include "menu.php" ?>
		<!-- /Left Sidebar Menu -->
		
			 

        <!-- Main Content -->
				<div class="page-wrapper">
            <div class="container-fluid pt-25">
				
				<!-- Row -->
				<div class="row">
                        <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Comments per Month</h6>
								</div>
								 
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
                                <div class="panel-body">
																<canvas id="line-chart" width="1200" height="450"></canvas>
      <?php
      
      $dates ='';
      $coms='';
     $sql = mysqli_query($conn, "SELECT monthname( date ) AS
     date , count(*) AS com
     FROM `comments`
     WHERE year( date ) = '2020'
     GROUP BY monthname( date )
     ORDER BY monthname( date ) DESC");
     while($row = mysqli_fetch_array($sql)){
       $date = date('M', strtotime($row['date']));
       $dates = $dates.'"'.$date.'",';
       $com = $row['com'];
       $coms = $coms.$com.',';
     }
     $dates = trim($dates,",");
     $coms = trim($coms,",");
      ?>
								</div>
							</div>
                        </div>
                    </div>
				
                    </div>
				
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->	
     <script>


			new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: [<?php echo ($dates) ?>],
    datasets: [{ 
        data: [<?php echo ($coms) ?>],
        borderColor: "#3e95cd",
        fill: false
      },
    ]
  },
  options: {
    legend: {
            display: false
         },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
	 </script>
			<?php include "footer.php" ?>

			</body>

</html>