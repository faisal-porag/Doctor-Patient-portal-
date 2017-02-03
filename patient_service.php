<!-- <?php include("../data/db_conn.php"); ?> -->

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
	
	function get_all_doctor(){
		$query = "SELECT * FROM doctors";
		return mysqli_query(get_db_connection(), $query);
	}
	//Search doctor by using firstname,lastname,email,specialty,or contact no
	function search_doctor($first_name, $last_name, $email, $specialty, $contact_no){
		$query="SELECT * FROM doctors where first_name like '%$first_name%' 
		or last_name like '%$last_name%' or email like '%$email%' 
		or specialty like '%$specialty%' or contact_no like '%$contact_no%' ";
		return mysqli_query(get_db_connection(), $query);
		
	}

	function get_doctor_by_specialty($specialty){
	$query = "SELECT * FROM doctors WHERE specialty like '$specialty'";
		return mysqli_query(get_db_connection(), $query);
	}




	//Appointment booking method
	function search_appointment($doctor_id){
		$query = "SELECT * FROM appointment WHERE doctor_id = $doctor_id AND status LIKE 
		'available'";
		return mysqli_query(get_db_connection(), $query);
	}

	

	//get all appoint 
	function get_all_appointment($id){
		$query = "SELECT * FROM appointment WHERE id = $id";
		return mysqli_query(get_db_connection(), $query);
	}

	function add_appoint_list($appointment_id, $patient_id, $doctor_id, $ap_date, $ap_time){
		$query = "INSERT INTO appoint_list(appointment_id, 	patients_id, doctor_id, 
		  ap_date, ap_time) VALUES('$appointment_id', '$patient_id',
		 '$doctor_id', '$ap_date', '$ap_time')";
		return mysqli_query(get_db_connection(), $query);
	}

	function view_appointment_list(){
		$query = "SELECT * FROM appoint_list";
		return mysqli_query(get_db_connection(), $query);
	}

	function view_appointment_list_by_patient_id($patient_id){
		$query = "SELECT * FROM appoint_list WHERE patients_id = $patient_id";
		return mysqli_query(get_db_connection(), $query);
	}

	function book_appointment($id){
		$query = "UPDATE appointment SET status ='booked' WHERE id = $id";
		return mysqli_query(get_db_connection(), $query);
	}

	function book_appointment_by_patient($id,$patient_id){
		$query = "UPDATE appointment SET status ='booked', patient_id = $patient_id WHERE id = $id";
		return mysqli_query(get_db_connection(), $query);
	}

	//cancel appointment and update the status in appointment table
	function cancel_appointment_update($appointment_id,$patient_id){
		$query = "UPDATE appointment SET status ='available' WHERE id = $appointment_id AND patient_id = $patient_id";
		return mysqli_query(get_db_connection(), $query);
	}

	//cancel appointment and delete the appointment from appoint_list table
	function remove_appointment_list($appointment_id,$patient_id){
		$query = "DELETE FROM appoint_list WHERE appointment_id = $appointment_id AND 
		patients_id = $patient_id";
		return mysqli_query(get_db_connection(), $query);
	}



	

	//method for donor 

	function get_all_donar(){
		$query = "SELECT * FROM organ_donar";
		return mysqli_query(get_db_connection(), $query);
	}

	function get_donar_by_blood_group($blood_group){
	$query = "SELECT * FROM organ_donar WHERE blood_group like '%$blood_group%'";
		return mysqli_query(get_db_connection(), $query);
	}

	function get_donar_by_organ_name($organname){
	$query = "SELECT * FROM organ_donar WHERE organname like '%$organname%'";
		return mysqli_query(get_db_connection(), $query);
	}


	function add_donar($organ_id, $name, $gender, $email, $blood_group, $address, $contact_no){
		$query = "INSERT INTO organ_donar(organ_id, name, gender, 
		email, blood_group, address, contact_no) VALUES('$organ_id', '$name',
		'$gender', '$email', '$blood_group', '$address', '$contact_no')";
		return mysqli_query(get_db_connection(), $query);
	}

	//new method
	function add_new_donar($organ_id, $name, $gender, $email, $blood_group, $address, $contact_no,$organname){
		$query = "INSERT INTO organ_donar(organ_id, name, gender, 
		email, blood_group, address, contact_no, organname) VALUES('$organ_id', '$name',
		'$gender', '$email', '$blood_group', '$address', '$contact_no', '$organname')";
		return mysqli_query(get_db_connection(), $query);
	}


	//method for patient

	function get_patient_profile($username){
	$query = "SELECT * FROM patients WHERE user_name like '$username'";
		return mysqli_query(get_db_connection(), $query);
	}

	function edit_patient_password($username, $password){
		$query = "UPDATE patients SET password ='$password' WHERE user_name = '$username'";
		return mysqli_query(get_db_connection(), $query);
	}

	//method for patient registration
	function add_patients($name, $user_name, $password, $gender, $email, $blood_group, $address, $contact_no){
		$query = "INSERT INTO patients (name, user_name, password, gender, 
		email, blood_group, address, contact_no) VALUES('$name', '$user_name', '$password',
		'$gender', '$email', '$blood_group', '$address', '$contact_no')";
		return mysqli_query(get_db_connection(), $query);
	}


	//get all organ methdo
	function get_all_organ(){
		$query="SELECT * FROM organ";
		return mysqli_query(get_db_connection(), $query);
	}

	function get_all_organ_by_id($id){
		$query="SELECT * FROM organ where id=$id";
		return mysqli_query(get_db_connection(), $query);
	}




	//method for view treatment history
	function get_treatment_history($patient_id){
		$query = "SELECT * FROM treatment_history WHERE patient_id = $patient_id ";
		return mysqli_query(get_db_connection(), $query);
	} 



	//-------------- join query ----------------
	/*function get_doctor_name(){
		$query = "SELECT first_name FROM  doctors JOIN treatment_history on  treatment_history.doctor_id = doctors.id ";
		return mysqli_query(get_db_connection(), $query);
	}*/


?>
