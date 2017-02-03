 <?php
	function get_db_connection(){
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "doctorpatientportal";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn) {
		    die("Ops! Something wrong has happened!" . mysqli_connect_error());
		}
		
		return $conn;
	}
?>
