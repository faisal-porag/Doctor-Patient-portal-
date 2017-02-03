<?php include_once('session-active.php'); ?>
<?php include("../../service/admin_service.php");?>
<!--dashboard options -->
<?php include("admindashboard.php");?>
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
</style>

  <hr style="color:red;" />
  <div id="main" align="center">
      <div id="Registration">
       <h3 style="color:blue;">DONOR REGISTRATION FORM</h3>
       <hr/>
       </div>
     </div>


     <div id="regdiv">
        <div align="center">
          <h3 style="color:#4CAF50;margin-top:0px;">Registration Form</h3>
          <hr/>
        </div>

         <div align="center">

      <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $name=$_POST['namefield'];
          $gender=$_POST['gender'];
          $email=$_POST['email'];
          $blood_group=$_POST['bloodgroup'];
          $address=$_POST['address'];
          $contact_no=$_POST['contact'];
          $organ_id=$_POST['organ_id'];
         // echo $organ_name;

          if(!empty($name) && !empty($address) && !empty($contact_no) && 
            $organ_id!="Select organ"){
            
          $res = get_all_organ_by_id($organ_id); 
          $row1 = mysqli_fetch_assoc($res);
          $organ_name=$row1['organ_name'];

          add_new_donar($organ_id, $name, $gender, $email, $blood_group, 
                $address, $contact_no, $organ_name);
              echo '<label style="color:green">Successfully added.</label>';
          }

          else{
            echo '<label style="color:red">Fill all the Fields</label>';
          }


        }

        ?>
      </div>


      <form action="admin-add-new-donar.php" method="post">
        <label>Name<span style="color:red">*</span></label>
        <input type="text" id="name" required name="namefield" placeholder="full name">

        <label>Gender</label>
        <select id="gender" name="gender">
           <option value="Male">Male</option>
           <option value="Female">Female</option>
          </select>

          <label>E-mail Address<span style="color:red">(if any)</span></label>
        <input type="text" id="email" name="email" placeholder="e-mail address">

        <label>Blood Group</label>
        <select id="bloodgroup" name="bloodgroup">
           <option>AB+</option>
           <option>AB-</option> 
           <option>B+</option>
           <option>A+</option>
           <option>O+</option>
           <option>B-</option>
           <option>A-</option>
           <option>O-</option>
           
          </select>

          <label>Address<span style="color:red">*</span></label>
        <input type="text" id="address" name="address" placeholder="address">

        <label>Contact Number<span style="color:red">*</span></label>
        <input type="text" id="contact" name="contact" placeholder="contact number">

        <label>Select organ<span style="color:red">*</span></label>
        <select id="organ_id" name="organ_id">
           <option>Select organ</option>
           <?php
                 $result = get_all_organ(); 
                 while($row = mysqli_fetch_assoc($result)){        
                 echo '<option value="'.$row['id'].'">'.$row['organ_name'].'</option>';
           }
          ?>
          </select>

        <br/>
        <input type="submit" value="Apply">
      </form>
  </div>
     

<!--Bottom options -->
<?php //include("bottomfotor.php");?>