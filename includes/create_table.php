<!-- <?php
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

	// sql to create table
	$sql = "CREATE TABLE IF NOT EXISTS shiraz_aqi_table (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	aqi INT(4) NOT NULL,
	time_of_day VARCHAR(30) NOT NULL,
	aqi_date DATE)";

	if ($conn->query($sql) === TRUE) {
		echo "Table \"shiraz_aqi_table\" created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>  -->