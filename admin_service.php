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
	
	//Create method for the doctor
	function add_doctor($first_name, $last_name, $user_name, $password, $gender, $email, $specialty, $address, $contact_no){
		$query = "INSERT INTO doctors(first_name, last_name, user_name, password, gender, 
		email, specialty, address, contact_no) VALUES('$first_name', '$last_name', '$user_name', '$password','$gender', '$email', '$specialty', '$address', '$contact_no')";
		return mysqli_query(get_db_connection(), $query);
	}


	/*function edit_doctor($id, $name){
		$query = "UPDATE doctors SET name='$name' WHERE id=$id";
		return mysqli_query(get_db_connection(), $query);
	}*/

	
	function remove_doctor($id){
		$query = "DELETE FROM doctors WHERE id=$id";
		return mysqli_query(get_db_connection(), $query);
	}
	function get_all_doctor(){
		$query = "SELECT * FROM doctors";
		return mysqli_query(get_db_connection(), $query);
	}
	function get_doctor_by_id($id){
	$query = "SELECT * FROM doctors WHERE id=$id";
		return mysqli_query(get_db_connection(), $query);
	}

	function get_doctor_by_specialty($specialty){
	$query = "SELECT * FROM doctors WHERE specialty like '%$specialty%'";
		return mysqli_query(get_db_connection(), $query);
	}

	//Search doctor by using firstname,lastname,email,specialty,or contact no
	function search_doctor($first_name, $last_name, $email, $specialty, $contact_no){
		$query="SELECT * FROM doctors where first_name like '%$first_name%' 
		or last_name like '%$last_name%' or email like '%$email%' 
		or specialty like '%$specialty%' or contact_no like '%$contact_no%' ";
		return mysqli_query(get_db_connection(), $query);
		
	} 


	//Create method for the donar

	function add_donar($organ_id, $name, $gender, $email, $blood_group, $address, $contact_no){
		$query = "INSERT INTO organ_donar(organ_id, name, gender, 
		email, blood_group, address, contact_no) VALUES('$organ_id', '$name',
		'$gender', '$email', '$blood_group', '$address', '$contact_no')";
		return mysqli_query(get_db_connection(), $query);
	}

	function add_new_donar($organ_id, $name, $gender, $email, $blood_group, $address, $contact_no,$organname){
		$query = "INSERT INTO organ_donar(organ_id, name, gender, 
		email, blood_group, address, contact_no, organname) VALUES('$organ_id', '$name',
		'$gender', '$email', '$blood_group', '$address', '$contact_no', '$organname')";
		return mysqli_query(get_db_connection(), $query);
	}

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

	//Search donar
	function search_donar($name, $blood_group, $organname, $contact_no){
		$query="SELECT * FROM organ_donar where name like '%$name%' 
		or blood_group like '%$blood_group%' or organname like '%$organname%' or
		contact_no like '%$contact_no%' ";
		return mysqli_query(get_db_connection(), $query);
		
	}


	//create method for admin
	function get_admin_profile($username){
	$query = "SELECT * FROM admin WHERE user_name like '$username'";
		return mysqli_query(get_db_connection(), $query);
	}

	function edit_admin_password($username, $password){
		$query = "UPDATE admin SET password ='$password' WHERE user_name= '$username'";
		return mysqli_query(get_db_connection(), $query);
	}


	//get all organ methdo
	function get_all_organ(){
		$query="SELECT * FROM organ";
		return mysqli_query(get_db_connection(), $query);
	}

	//method for get all organ by id
	function get_all_organ_by_id($id){
		$query="SELECT * FROM organ where id=$id";
		return mysqli_query(get_db_connection(), $query);
	}
 

 	//method for count total patient 
		function get_total_patient(){
			$query="SELECT * FROM patients";
			return mysqli_query(get_db_connection(),$query);
		}

 	//method for count total doctor 
		function get_total_doctor(){
			$query="SELECT * FROM doctors";
			return mysqli_query(get_db_connection(),$query);
		}

 	//method for count total donar
		function get_total_donor(){
			$query="SELECT * FROM organ_donar";
			return mysqli_query(get_db_connection(),$query);
		}

	//add appointment schedule 
	function add_schedule($doctor_id,$appoint_date,$appoint_time,$status){
		$query="INSERT INTO appointment (doctor_id, appoint_date, appoint_time, status)
		VALUES ('$doctor_id', '$appoint_date', '$appoint_time', '$status')";
		return mysqli_query(get_db_connection(),$query);
	}



?>