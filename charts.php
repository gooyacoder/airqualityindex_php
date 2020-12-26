<?php 
	require_once 'includes/header.php';
?>

<!-- 

<div class="col-5 mx-auto">
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">AQI</th>
      <th scope="col">Time of Day</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody> -->

<?php
	$servername = "localhost";
	$username = "airquali_admin";
	$password = "P3wi9uiRwBYSTag";
	$dbname = "airquali_data_db";

	$dates = [];
	$aqi_array = [];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM shiraz_aqi_table WHERE time_of_day='Morning' ORDER BY aqi_date ASC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		// echo "<tr>";
		// echo "<td>" . $row["aqi"] . "</td>";
		// echo "<td>" . $row["time_of_day"] . "</td>";
		// echo "<td>" . $row["aqi_date"] . "</td>";
		array_push($dates, $row["aqi_date"]);
		array_push($aqi_array, $row["aqi"]);
	}
	} else {
	echo "0 results";
	}
	$conn->close();
?> 

		<!-- </tbody>
	</table>
</div> -->
<div class="jumbotron">
<div height="400px" width="600px" class="col-8 mx-auto">


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

<?php
	$servername = "localhost";
	$username = "airquali_admin";
	$password = "P3wi9uiRwBYSTag";
	$dbname = "airquali_data_db";

	$dates = [];
	$aqi_array = [];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM shiraz_aqi_table WHERE time_of_day='Noon' ORDER BY aqi_date ASC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		// echo "<tr>";
		// echo "<td>" . $row["aqi"] . "</td>";
		// echo "<td>" . $row["time_of_day"] . "</td>";
		// echo "<td>" . $row["aqi_date"] . "</td>";
		array_push($dates, $row["aqi_date"]);
		array_push($aqi_array, $row["aqi"]);
	}
	} else {
	echo "0 results";
	}
	$conn->close();
?> 

		<!-- </tbody>
	</table>
</div> -->
<div height="400px" width="600px" class="col-8 mx-auto">


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

<?php
	$servername = "localhost";
	$username = "airquali_admin";
	$password = "P3wi9uiRwBYSTag";
	$dbname = "airquali_data_db";

	$dates = [];
	$aqi_array = [];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM shiraz_aqi_table WHERE time_of_day='Afternoon' ORDER BY aqi_date ASC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		// echo "<tr>";
		// echo "<td>" . $row["aqi"] . "</td>";
		// echo "<td>" . $row["time_of_day"] . "</td>";
		// echo "<td>" . $row["aqi_date"] . "</td>";
		array_push($dates, $row["aqi_date"]);
		array_push($aqi_array, $row["aqi"]);
	}
	} else {
	echo "0 results";
	}
	$conn->close();
?> 

		<!-- </tbody>
	</table>
</div> -->
<div height="400px" width="600px" class="col-8 mx-auto">


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