<?php 
	session_start();
	if(isset($_SESSION['user_name']))	
	{
		header("Location: index.php");
	}
?>

<?php
	include_once("../data/db_conn.php");

	
	if(isset($_POST["Submit"]))
	{
		$logged=1;
		$log=0;
		$who_log_in=$_POST["who_log_in"];
		$user_name=$_POST["username"];
		$password=$_POST["password"];

		//check encrypted pass
		//$checkpass=md5($password);

		if(empty("who_log_in")||empty("user_name")||empty("password"))
		{
			if(empty("who_log_in"))
			{
				echo "<p color='red'>Select One field is empty.</p><br/>";
			}
			if(empty("user_name"))
			{
				echo "<p color='red'>User Name field is empty.</p><br/>";
			}
			if(empty("password"))
			{
				echo "<p color='red'>Password field is empty.</p><br/>";
			}
			
		}
		else
		{
			if($who_log_in =="Admin"){
				$query = "SELECT * FROM admin";
				$result = mysqli_query(get_db_connection(), $query);
				$log=1;
			}
			else if($who_log_in =="Doctor"){
				$query = "SELECT * FROM doctors";
				$result= mysqli_query(get_db_connection(), $query);
				$log=2;	
			}		
			else if($who_log_in =="Patient"){
				$query = "SELECT * FROM patients";
				$result= mysqli_query(get_db_connection(), $query);			
				$log=3;
			}
			while($row = mysqli_fetch_assoc($result))
			{
				if(($user_name==$row["user_name"]) && ($password==$row["password"]))
				{
					$logged=0;
					if($who_log_in =="Admin"){
						$_SESSION["user_name"]=$user_name;   
						header("Location: admin/adminhome.php"); 	  		
					}
					else if($who_log_in =="Doctor"){
						$_SESSION["Duser_name"]=$user_name;   
						header("Location: doctor/doctorhome.php"); 	
					}		
					else if($who_log_in =="Patient"){
						$_SESSION["Puser_name"]=$user_name;   
						header("Location: patient/patienthome.php"); 
					}	
					  
				}
			}
			if($logged==1)
			{
				header("Location: index.php");							
				
			}
		}   
	}
?>