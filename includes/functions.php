<?php 


function getChartData($time_of_day, &$dates, &$aqi_array){
    $servername = "localhost";
	$username = "airquali_admin";
	$password = "P3wi9uiRwBYSTag";
	$dbname = "airquali_data_db";

	// $dates = [];
	// $aqi_array = [];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM shiraz_aqi_table WHERE time_of_day='" . $time_of_day . "' ORDER BY aqi_date ASC";
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

}

?>
    
