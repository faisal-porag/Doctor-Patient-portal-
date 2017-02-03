<?php include_once('session-active.php'); ?>

<?php include_once('../../service/admin_service.php');?>
<!--dashboard options -->
<?php include("admindashboard.php");?>
<title>index</title>

<style>
input[type=text], select {
    width: 100%;
    padding: 8px 15px;
    margin: 2px 0;
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
       <h3 style="color:blue;">ADD DOCTOR SCHDULE</h3>
       <hr style="color:red" />
       </div>
     </div>


     <div id="regdiv">
        <div align="center">
          <h3 style="color:#4CAF50">Add New Schedule</h3>
          <hr/>
        </div>

        <?php
              $errormsg1="";
              $errormsg2="";

            if(isset($_POST['submitbtn'])){

              $doctor_id=$_POST['doctor_select'];
              $appoint_date=$_POST['date'];
              $appoint_time=$_POST['time'];
              $status=$_POST['status'];
              

              if($doctor_id =="Select doctor" && empty($appoint_date)){
                  $errormsg1="Select doctor";
                  $errormsg2="Enter date";
              }

              else if($doctor_id!="Select doctor" && empty($appoint_date)){
                  $errormsg2="Enter date";
              }
              else if($doctor_id =="Select doctor" && !empty($appoint_date)){
                  $errormsg1="Select doctor";
              }

              else{
                    $date=$appoint_date;
                   if(preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)){

                        $opening_date = new DateTime($date);
                        $current_date = new DateTime();
                        if ($opening_date >= $current_date){
                                  //to do
                           add_schedule($doctor_id,$appoint_date,$appoint_time,$status);
                           echo '<div align="center">
                           <label style="color:green">Schedule Successfully Added</label>
                           </div>'; 
                        }
                        else{
                            echo '<div align="center">
                           <label style="color:red">Please enter a future date</label>
                           </div>'; 
                        }   

                   }
                   else{
                        $errormsg2="Invalid date";
                   }

               
              }


            }
              
        ?>

        
      <form method="post" action="admin-add-schedule.php">
      
        <label>Select Doctor<span style="color:red">*</span></label>
        <select id="doctor_select" name="doctor_select">
           <option>Select doctor</option>
           <?php
                 $result = get_all_doctor(); 
                 while($row = mysqli_fetch_assoc($result)){        
                 echo '<option value="'.$row['id'].'">'.$row['first_name'].'</option>';
           }
          ?>

          </select><span style="color:red"><?=$errormsg1?></span><br/>

        <label>Date<span style="color:red">*</span></label>
        <input type="text" id="date" name="date" placeholder="yyyy-mm-dd">
        <span style="color:red"><?=$errormsg2?></span><br/>
      
        <label>Time<span style="color:red">*</span></label>
        <select id="time" name="time">
           <option>9:00  am</option>
           <option>10:00 am</option>
           <option>11:00 am</option>
           <option>12:00 pm</option>
           <option>1:00  pm</option>
           <option>3:00  pm</option>
           <option>4:00  pm</option>
           <option>5:00  pm</option>
           <option>6:00  pm</option>
        </select>

        <label>Status</label>
        <select id="status" name="status">
           <option value="available">available</option>
           <option value="not available">not available</option>
        </select>
        

        
        <input type="submit" id="submitbtn" name="submitbtn" value="Add Schedule">


      </form>
      
  </div>



<!--Bottom options -->
<?php //include("bottomfotor.php");?>