<?php
	function get_db_connection(){
		$servername = "localhost";
		$username = "root";
		$password = "";
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

<?php
	//method for doctors 
	function get_doctor_profile($username){
	$query = "SELECT * FROM doctors WHERE user_name like '$username'";
		return mysqli_query(get_db_connection(), $query);
	}

	function edit_doctor_password($username, $password){
		$query = "UPDATE doctors SET password ='$password' WHERE user_name = '$username'";
		return mysqli_query(get_db_connection(), $query);
	}

	function edit_doctor_profile($username, $first_name, $last_name, $gender, $email, $specialty,
		$address, $contact_no){
		$query = "UPDATE doctors SET first_name ='$first_name', last_name ='$last_name',
				gender = '$gender', email = '$email', specialty = '$specialty',
				address= '$address', contact_no= '$contact_no' WHERE user_name = '$username'";
		return mysqli_query(get_db_connection(), $query);
	}



	//method donors 
	function get_all_donar(){
		$query = "SELECT * FROM organ_donar ORDER BY name";
		return mysqli_query(get_db_connection(), $query);
	}

	function get_donar_by_blood_group($blood_group){
	$query = "SELECT * FROM organ_donar WHERE blood_group like '$blood_group'";
		return mysqli_query(get_db_connection(), $query);
	}

	function get_donar_by_organ_name($organname){
	$query = "SELECT * FROM organ_donar WHERE organname like '$organname'";
		return mysqli_query(get_db_connection(), $query);
	}

	//Search donar
	function search_donar($name, $blood_group, $organname, $contact_no){
		$query="SELECT * FROM organ_donar where name like '%$name%' 
		or blood_group like '%$blood_group%' or organname like '%$organname%' or
		contact_no like '%$contact_no%' ORDER BY name";
		return mysqli_query(get_db_connection(), $query);
		
	}

	

	//add treatement history 
	function doctor_add_treatment_history($patient_id, $doctor_id, $treatment_for, $treatment, $note){
		$query = "INSERT INTO  treatment_history (patient_id, doctor_id, treatment_for, treatment, note) VALUES ('$patient_id', '$doctor_id', '$treatment_for', '$treatment', '$note')";
		return mysqli_query(get_db_connection(), $query);
	}

	function doctor_add_treatment_history_one($patient_id, $doctor_id, $treatment_for, $treatment, $note, $dname){
		$query = "INSERT INTO  treatment_history (patient_id, doctor_id, treatment_for, treatment, note, dname) VALUES ('$patient_id', '$doctor_id', '$treatment_for', '$treatment', '$note', $dname)";
		return mysqli_query(get_db_connection(), $query);
	}

	

	function search_patient_by_doctor_id($patient_id,$doctor_id){
			$query="SELECT * FROM treatment_history WHERE patient_id like '%$patient_id%' and 
			doctor_id like '%$doctor_id%'";
			return mysqli_query(get_db_connection(),$query);
	}



	//View Appointment schedule
	function get_my_appontment($doctor_id){
			$query="SELECT * FROM appointment WHERE doctor_id = $doctor_id";
			return mysqli_query(get_db_connection(),$query);
	}


	//add appointment schedule 
	function add_schedule($doctor_id,$appoint_date,$appoint_time,$status){
		$query="INSERT INTO appointment (doctor_id, appoint_date, appoint_time, status)
		VALUES ('$doctor_id', '$appoint_date', '$appoint_time', '$status')";
		return mysqli_query(get_db_connection(),$query);
	}


	//-------------- Join query -------------
	function get_my_appontment_by_name($doctor_id){
		
	}


?>
