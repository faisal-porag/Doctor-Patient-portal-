<?php include_once('session-active.php'); ?>
<!--dashboard options -->
<?php include("admindashboard.php");?>
<?php include_once('admin-add-new-doctor-handler-new.php');?>

<title>index</title>
<style>
input[type=text], select {
    width: 100%;
    padding: 8px 20px;
    margin: 2px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}
input[type=password] {
    width: 100%;
    padding: 8px 20px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div #regdiv{
  align: center;
    border-radius: 4px;
    background-color: #ECEDED;
    padding: 20px;
    width: 360px;
    margin-left: 250px;
}
.redmassage{
  color:red;
}
</style>






  <hr style="color:red;" />
  <div id="main" align="center">
      <div id="Registration">
       <h3 style="color:blue;">DOCTOR REGISTRATION FORM</h3>
       <hr style="color:red" />
       </div>
     </div>


     <div id="regdiv">
        <div align="center">
          <h3 style="color:#4CAF50">Doctor Registration Form</h3>
          <hr/>
        </div>

          <div align="center">
            <label style="color:green;"><?php echo $successmess;?></label>
          </div>

        
      <form method="post" action="admin-add-new-doctor.php">
      
        <label>First Name<span style="color:red">*</span><span style="color:red;"></span></label>
        <input type="text" id="fname" name="firstname" value="<?= $firstname; ?>" placeholder="first name">
        <span id='firstname' class="redmassage"><?php echo $firstnameErr;?></span></br>

          <label>Last Name<span style="color:red">*</span></label>
        <input type="text" id="lname" name="lastname" value="<?= $lastname; ?>" placeholder="last name">
        <span id='lastname' class="redmassage"><?php echo "$lastnameErr";?></span></br>

        <label>Username<span style="color:red">*</span></label>
        <input type="text" id="username" name="username" value="<?= $username; ?>" placeholder="username">
        <span id='username' class="redmassage"><?php echo "$usernameErr";?></span></br>

        <label>Password<span style="color:red">*</span></label>
        <input type="password" id="password" name="password" placeholder="password">
        <span id='password' class="redmassage"><?php echo "$passwordErr";?></span></br>

        <label>Confirm-Password<span style="color:red">*</span></label>
        <input type="password" id="re_password" name="re_password" placeholder="confirm-password">
        <span id='repassword' class="redmassage"><?php echo "$re_passwordErr";?></span></br>

        <label>Gender</label>
        <select id="gender" name="gender">
           <option value="Male">Male</option>
           <option value="Female">Female</option>
        </select>

        <label>E-mail Address<span style="color:red">*</span></label>
        <input type="text" id="email" name="email" placeholder="e-mail address" value="<?= $email; ?>">
        <span id='email' class="redmassage"><?php echo "$emailErr";?></span></br>

        <label>Specialty</label>
        <select id="specialty" name="specialty">
           <option>Anesthesiologist</option>
           <option>Cardiologist</option>
           <option>Dentist</option>
           <option>Diabetologist</option>
           <option>Emergency physician</option>
           <option>Gynaecologist</option>
           <option>Neurologist</option>
           <option>Serologist</option> 
        </select>

        <label>Address<span style="color:red">*</span></label>
        <input type="text" id="address" name="address" placeholder="address" value="<?= $address; ?>">
        <span id='address' class="redmassage"><?php echo "$addressErr";?></span></br>

        <label>Contact Number<span style="color:red">*</span></label>
        <input type="text" id="contact" name="contact" value="<?= $contact; ?>" placeholder="contact number">
        <span id='contact' class="redmassage"><?php echo "$contactErr";?></span>

        <br/>
        <input type="submit" id="submitbtn" name="submitbtn" value="Apply">


      </form>
      
  </div>

      



<!--Bottom options -->
<?php //include("bottomfotor.php");?>