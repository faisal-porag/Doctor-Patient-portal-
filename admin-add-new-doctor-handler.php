<?php include_once('session-active.php'); ?>
<?php include("../../service/admin_service.php");?>
<title>index</title>
<?php

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $contact = $_POST['contact'];

  $gender = $_POST['gender'];
  $specialty = $_POST['specialty'];

  //pass the password as encrypted format
  //$encryptpassword=md5($password);
  $error='';
  if(empty($firstname)){
    $error='required';
    echo $error;
    //header('location: admin-add-new-doctor.php');

}else{
  add_doctor($firstname, $lastname, $username, $password, $gender, $email, $specialty,
    $address, $contact);

    echo "Successfully Added";
}

  

 

?>