 <?php
	/*

	-------------------------------------------------------------------------------------------------------------------
	////////////// Adding Data /////////////////////////////////////

	
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

	$city = 'shiraz';
	$url = 'http://api.waqi.info/feed/' . $city . '/?token=e6089546a3dc14e1fe3d717777e9c7df3e7e5f99';
	$json = file_get_contents($url);
	$result = json_decode($json, true);
	$aqi = $result['data']['aqi'];
	$time_of_day = "Afternoon";
	$aqi_date = date('Y-m-d');

	$sql = "INSERT INTO shiraz_aqi_table (aqi, time_of_day, aqi_date) VALUES ($aqi, '$time_of_day', '$aqi_date')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();


-----------------------------------------------------------------------------------------------------------------------------


	Chart Library : https://www.chartjs.org/docs/latest/


-------------------------------------------------------------------------------------------------------------------------------



	*/
?>  



