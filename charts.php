<?php 
	require_once 'includes/header.php';
	require_once 'includes/functions.php';
?>

<div class="jumbotron">
<div height="400px" width="600px" class="col-8 mx-auto">

<?php 
	$dates = [];
	$aqi_array = [];
	getChartData("Morning", $dates, $aqi_array); 

?>


<canvas id="morning_chart" width="600px" height="400px"></canvas>

<script>
var ctx = document.getElementById('morning_chart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
		labels: <?php echo "[";
				foreach($dates as $date){
					echo "'" . $date . "'" . ",";
				}
				echo "]";
		
		?>,

        datasets: [{
            label: 'Shiraz Morning',
            data: <?php echo "[";
				foreach($aqi_array as $aqi){
					echo $aqi . ",";
				}
				echo "]";
		
		?>,
            fill: false,
            borderColor: [
                'rgba(85, 239, 200, 1)',
            ],
            backgroundColor: ['rgba(85, 239, 200, 1)'],
            borderWidth: 1
        }]
    },
    options: {
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
</div>
<br>


<div height="400px" width="600px" class="col-8 mx-auto">

<?php 
	$dates = [];
	$aqi_array = [];
	getChartData("Noon", $dates, $aqi_array); 

?>


<canvas id="noon_chart" width="600px" height="400px"></canvas>

<script>
var ctx = document.getElementById('noon_chart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
		labels: <?php echo "[";
				foreach($dates as $date){
					echo "'" . $date . "'" . ",";
				}
				echo "]";
		
		?>,

        datasets: [{
            label: 'Shiraz Noon',
            data: <?php echo "[";
				foreach($aqi_array as $aqi){
					echo $aqi . ",";
				}
				echo "]";
		
		?>,
            fill: false,
            borderColor: [
                'rgba(255, 100, 150, 1)',
            ],
            backgroundColor: ['rgba(255, 100, 150, 1)'],
            borderWidth: 1
        }]
    },
    options: {
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
</div>

<br>

<div height="400px" width="600px" class="col-8 mx-auto">

<?php 
	$dates = [];
	$aqi_array = [];
	getChartData("Afternoon", $dates, $aqi_array); 

?>


<canvas id="afternoon_chart" width="600px" height="400px"></canvas>

<script>
var ctx = document.getElementById('afternoon_chart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
		labels: <?php echo "[";
				foreach($dates as $date){
					echo "'" . $date . "'" . ",";
				}
				echo "]";
		
		?>,

        datasets: [{
            label: 'Shiraz Afternoon',
            data: <?php echo "[";
				foreach($aqi_array as $aqi){
					echo $aqi . ",";
				}
				echo "]";
		
		?>,
            fill: false,
            borderColor: [
                'rgba(80, 150, 140, 1)',
            ],
            backgroundColor: ['rgba(40, 150, 140, 1)'],
            borderWidth: 1
        }]
    },
    options: {
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
</div>
</div>
<br><br>


<?php 

	require_once 'includes/footer.php';

?>