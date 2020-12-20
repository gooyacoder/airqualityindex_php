<?php 
	require_once 'includes/header.php';
?>

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
  <tbody>

<?php
	$servername = "localhost";
	$username = "airquali_admin";
	$password = "P3wi9uiRwBYSTag";
	$dbname = "airquali_data_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM shiraz_aqi_table WHERE time_of_day='Afternoon' ORDER BY aqi_date DESC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row["aqi"] . "</td>";
		echo "<td>" . $row["time_of_day"] . "</td>";
		echo "<td>" . $row["aqi_date"] . "</td>";
	}
	} else {
	echo "0 results";
	}
	$conn->close();
?> 

		</tbody>
	</table>
</div>

<?php 

	require_once 'includes/footer.php';

?>