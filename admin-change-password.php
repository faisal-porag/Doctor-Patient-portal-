<?php include_once('session-active.php'); ?>
<?php include("../../service/admin_service.php");?>
<!--dashboard options -->
<?php include("admindashboard.php");?>
<title>index</title>
<style>
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
       <h3 style="color:blue;">CHANGE PASSWORD OPTION</h3>
       <hr/>
       </div>
     </div>


     <div id="regdiv">
        <div align="center">
          <h3 style="color:#4CAF50">Change Password</h3>
          <hr/>
        </div>

          <div>
      <?php

          $errormesg1="";
          $errormesg3="";
          $errormesg2="";


          if(isset($_POST['submit'])){
            $oldpassword=$_POST['oldpassword'];
            $newpassword=$_POST['newpassword'];
            $confirm_pass=$_POST['re_password'];

              if(empty($oldpassword) && empty($newpassword) && empty($confirm_pass)){
                 $errormesg1="The old Password field is required." ;
                 $errormesg2="The new Password field is required." ;
                 $errormesg3="The confirm Password field is required." ;
              }
              else if(!empty($oldpassword) && empty($newpassword) && empty($confirm_pass)){
                 $errormesg2="The new Password field is required." ;
                 $errormesg3="The confirm Password field is required." ;
              }
               else if(!empty($oldpassword) && !empty($newpassword) && empty($confirm_pass)){
                 $errormesg3="The confirm Password field is required." ;
              }
              
              else{
                    /*echo '<script type="text/javascript">
                    alert("Successsfully done")
                    </script>';*/

                    $username=$_SESSION['user_name'];
                    $result = get_admin_profile($username);
                    $row = mysqli_fetch_assoc($result);
                    $dbpassword = $row['password'];

                    if($newpassword == $confirm_pass){
                        if($oldpassword == $dbpassword ){
                            edit_admin_password($username, $newpassword);
                            echo '<script type="text/javascript">
                                  alert("Successsfully done")
                                  </script>';
                        }
                        else{
                            $errormesg1="Incorrect Password" ;
                        }
                    }
                    else{
                          $errormesg3="Confirm password not matched";
                        }
              }
            
          }

      ?>
    </div>

          

        
      <form action="admin-change-password.php" method="post">

        <label>Old Password<span style="color:red">*</span></label>
        <input type="password" id="oldpassword" name="oldpassword" placeholder="old password">
          <span style="color:red;"><?php echo $errormesg1;echo '<br/>'?></span>

        <label>New Password<span style="color:red">*</span></label>
        <input type="password" id="newpassword" name="newpassword" placeholder="new password">
        <span style="color:red;"><?php echo $errormesg2;echo '<br/>'?></span>

        <label>Confirm-Password<span style="color:red">*</span></label>
        <input type="password" id="re_password" name="re_password" placeholder="confirm-password">
        <span style="color:red;"><?php echo $errormesg3;echo '<br/>'?></span>

        <br/>
        <input type="submit" name="submit" value="Confirm">
      </form>
  </div>



<!--Bottom options -->
<?php //include("bottomfotor.php");?>