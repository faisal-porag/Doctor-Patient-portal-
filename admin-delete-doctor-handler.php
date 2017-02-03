<?php include_once('session-active.php'); ?>
<?php include_once('../../service/admin_service.php'); ?>
  <title>index</title>
<?php
	$doctor_id=$_GET['id'];
	//echo $doctor_id;
	remove_doctor($doctor_id);
	header("Location:admin-delete-doctor.php");
    
?>