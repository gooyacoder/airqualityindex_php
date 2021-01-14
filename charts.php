<?php 
	require_once 'includes/header.php';
    require_once 'includes/functions.php';

?>

<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){     
    $from = $_POST['fromdate'];
    $to = $_POST['todate'];
?>

<!-- class="col-4 my-5" -->
<div  id="datepicker">
    <p>Please select the charts interval:</p>
    <form action="/charts.php" method="POST"> 
        
        <div class="mb-3">
            <label for="fromdate" class="form-label">From</label>
            <input type="date" name="fromdate" class="form-control" 
            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['fromdate'];?>">
        </div>
        <div class="mb-3">
            <label for="todate" class="form-label">To</label>
            <input type="date" class="form-control" name="todate"
            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['todate'];?>">
        </div>
        <input type="submit" value="Submit" class="btn btn-success">
    </form>
</div>





<div class="jumbotron">
<div height="400px" width="600px" class="col-8 mx-auto">

<?php 
	$dates = [];
	$aqi_array = [];
	getChartData("Morning", $from, $to, $dates, $aqi_array); 

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
	getChartData("Noon", $from, $to, $dates, $aqi_array); 

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
	getChartData("Afternoon", $from, $to, $dates, $aqi_array); 

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

<?php }else { ?>

    <div id="datepicker">
    <p>Please select the charts interval:</p>
    <form action="/charts.php" method="POST"> 
        
        <div class="mb-3">
            <label for="fromdate" class="form-label">From</label>
            <input type="date" name="fromdate" class="form-control" 
            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['fromdate'];?>">
        </div>
        <div class="mb-3">
            <label for="todate" class="form-label">To</label>
            <input type="date" class="form-control" name="todate"
            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['todate'];?>">
        </div>
        <input type="submit" value="Submit" class="btn btn-success">
    </form>
</div>

<?php } ?>

<?php 

	require_once 'includes/footer.php';


?>