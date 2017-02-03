<?php include_once('session-active.php'); ?>
<?php include("../../service/admin_service.php");?>
<title>index</title>

<?php 

      $name=$email=$address=$contact="";
      $nameErr=$emailErr=$addressErr=$contactErr=$orgErr="";

       $successmess="";

    if($_SERVER['REQUEST_METHOD']=="POST"){

        $gender = $_POST['gender'];
        $bloodgroup = $_POST['bloodgroup'];
        $organ_id=$_POST['organ_id'];

          $res = get_all_organ_by_id($organ_id); 
          $row1 = mysqli_fetch_assoc($res);
          $organ_name=$row1['organ_name'];

        $name_valid = name_validation();
        $email_valid = email_validation();
        $address_valid = address_validation();
        $contact_valid = contact_validation();
        $organ_valid = organ_validation();


        if($name_valid==true && $email_valid==true && $address_valid==true && 
          $contact_valid==true && $organ_valid==true){
            //to do
           //add_new_donar($organ_id, $name, $gender, $email, $bloodgroup, 
                //$address, $contact, $organ_name);

            $successmess="Registration Confirmed";
        echo "<script>setTimeout(\"location.href = 'admin-add-new-donar.php';\",1500);</script>";

        }
    }
?>

<?php 

  //select organ 
  function organ_validation(){
      if($organ_id!="Select organ"){
        return true;
      }
      else{
        $orgErr="Select organ";
        return false;
      }
  }

  
  //name validation
     function name_validation(){
    global $name,$nameErr;
    $name=$_POST['namefield'];
    if($name==""){
      $nameErr="Name Required";
      return false;
    }
    else{
      if(preg_match("/^[a-zA-Z. ]*$/",$name)){
        return true;
      }
      else{
        $nameErr="Invalid Name";
        return false;
      }
      
    }
  }


   //method for mail validation
  function email_validation(){
    global $email,$emailErr;
    $email=$_POST['email'];
    if($email==""){
      return true;
    }
    else{
      if(preg_match("/^[a-z][a-zA-Z_0-9]*@[a-zA-Z]*\.[a-z]{2,6}$/",$email)){
        return true;
      }
      else{
        $emailErr="Invalid Email";
        return false;
      }
    }
  }


  //method for addess validation 
  function address_validation(){
    global $address,$addressErr;
    $address=$_POST['address'];
    if($address==""){
      $addressErr="Address Required";
      return false;
    }
    else{
      return true;
    }
  }


  //method for contact no validation
  function contact_validation(){
    global $contact,$contactErr;
    $contact=$_POST['contact'];
    if($contact==""){
      $contactErr="Phone No Required";
      return false;
    }
    else{
      if(preg_match("/^[0-9]{1,12}$/",$contact)){
        return true;
      }
      else{
        $contactErr="Please Check Phone No";
        return false;
      }
    }
  }
 

?>