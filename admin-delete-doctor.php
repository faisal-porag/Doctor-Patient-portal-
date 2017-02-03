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
    margin-top: 0px;
}
</style>
</style>
<style type="text/css">
    tr#maintr{
      /*background-color: #4CAF50;*/
      color: white;
      background-color: #024E81;
    }

    td#maintd{
      border: 0.2px solid #dddddd;
      text-align: center;
      padding: 5px;

    }

    tr#datatr:nth-child(even){
     background-color: #B9CEDC;
    }

    td#datatd{
      border: 0.2px solid #dddddd;
      text-align: left;
      padding: 6px;
    }

</style>


  <hr style="color:red;" />
  <div id="main" align="center">
      <div id="Registration">
       <h3 style="color:blue;">DELETE DOCTOR FROM DOCTOR LIST</h3>
       <hr/>
       </div>
     </div>


     <div id="regdiv">
        <div align="center">
          <h3 style="color:#4CAF50">Delete Doctor</h3>
          <hr/>
        </div>

       
        <div>
        
      <form method="post" action="admin-delete-doctor.php">

        <label>Enter Doctor's ID</label>
        <input type="text" id="doctorid" name="doctorid" placeholder="doctor id">

        <br/>
        <input type="submit" name="submitbtn" value="Search ID">
      </form>

      </div>
  </div>

      <div align="center">

         
           <?php
  
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $doctor_id=$_POST['doctorid'];
      if(empty($doctor_id)){

        echo '<span style="color:red;">please enter a valid id</span>';
     }
     else{
          if($doctor_id> '0' && $doctor_id < '9999')
          {
              $result = get_doctor_by_id($doctor_id); 
  if(mysqli_num_rows($result) > 0){

  echo '<table  style="border-collapse: collapse; width: 100%;">';
  echo '<tr id="maintr">
        <td id="maintd">Doctor ID</td>
        <td id="maintd">First name</td>
        <td id="maintd">E-Mail</td>
        <td id="maintd">Specialty</td>
        <td id="maintd">Contact No</td>
        <td id="maintd">Option</td>
      </tr>';   
  while($row = mysqli_fetch_assoc($result)){        
      echo '<tr id="datatr">
        <td id="datatd">'.$row['id'].'</td>
        <td id="datatd">'.$row['first_name'].'</td>
        <td id="datatd">'.$row['email'].'</td>
        <td id="datatd">'.$row['specialty'].'</td>
        <td id="datatd">'.$row['contact_no'].'</td>
        <td id="datatd"><a href="admin-delete-doctor-handler.php?id=' . $_POST['doctorid'] . '" onclick="">Delete</a></td>
      </tr>';   
  }
  echo '</table>';
  }
  else{
    echo '<div align="center">
         <p style="color:red">No data found</p>
    </div>'  ;
   
  }
          }
          else{
            echo '<span style="color:red;">ID should be number</span>';
          }
       }
     }

  ?>

      </div>


  

  

<!--Bottom options -->
<?php //include("bottomfotor.php");?>