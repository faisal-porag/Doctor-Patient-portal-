<?php include_once('session-active.php'); ?>
<!--dashboard options -->
<?php include("admindashboard.php");?>

<?php include("../../service/admin_service.php");?>
<title>index</title>
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
<style>
input[type=text] {
    width: 120px;
    box-sizing: border-box;
    border: 1px solid #999;
    border-radius: 4px;
    font-size: 14px;
    background-color: white;
    background-image: url('img/search.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 8px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 50%;
}
input[type=submit] {
    width: 13%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    margin-left: 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
</style>

	<hr/>
	
	 <div id="main" align="center">
      <div id="Registration">
       <h3 style="color:blue;">ALL DOCTOR LIST</h3>
       <hr/>
       </div>

     <div align="center">

     	<div id="searchdonardiv">
          
        <form method="post" action="admin-view-all-doctor.php">
            Search &nbsp;<input type="text" name="allsearch" placeholder="Search..">
            <input type="submit" value="Search">
        </form>
       </div>


       <!--Show the search result -->
     <?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $searchall=$_POST['allsearch'];
          $result = search_doctor($searchall,$searchall,$searchall,$searchall,$searchall); 
  if(mysqli_num_rows($result) > 0){

  echo '<table  style="border-collapse: collapse; width: 100%;">';
  echo '<tr id="maintr">
        <td id="maintd">Doctor ID</td>
        <td id="maintd">First name</td>
        <td id="maintd">Last name</td>
        <td id="maintd">Gender</td>
        <td id="maintd">E-Mail</td>
        <td id="maintd">Specialty</td>
        <td id="maintd">Address</td>
        <td id="maintd">Contact No</td>
      </tr>';   
  while($row = mysqli_fetch_assoc($result)){        
      echo '<tr id="datatr">
        <td id="datatd">'.$row['id'].'</td>
        <td id="datatd">'.$row['first_name'].'</td>
        <td id="datatd">'.$row['last_name'].'</td>
        <td id="datatd">'.$row['gender'].'</td>
        <td id="datatd">'.$row['email'].'</td>
        <td id="datatd">'.$row['specialty'].'</td>
        <td id="datatd">'.$row['address'].'</td>
        <td id="datatd">'.$row['contact_no'].'</td>
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

  ?>
       	
       <!--Show the result using get method-->		
<?php
	if($_SERVER['REQUEST_METHOD']=="GET"){
	$result = get_all_doctor();	
	if(mysqli_num_rows($result) > 0){

	echo '<table  style="border-collapse: collapse; width: 100%;">';
	echo '<tr id="maintr">
				<td id="maintd">Doctor ID</td>
				<td id="maintd">First name</td>
				<td id="maintd">Last name</td>
				<td id="maintd">Gender</td>
				<td id="maintd">E-Mail</td>
				<td id="maintd">Specialty</td>
				<td id="maintd">Address</td>
				<td id="maintd">Contact No</td>
			</tr>';		
	while($row = mysqli_fetch_assoc($result)){				
			echo '<tr id="datatr">
				<td id="datatd">'.$row['id'].'</td>
				<td id="datatd">'.$row['first_name'].'</td>
				<td id="datatd">'.$row['last_name'].'</td>
				<td id="datatd">'.$row['gender'].'</td>
				<td id="datatd">'.$row['email'].'</td>
				<td id="datatd">'.$row['specialty'].'</td>
				<td id="datatd">'.$row['address'].'</td>
				<td id="datatd">'.$row['contact_no'].'</td>
			</tr>';		
	}
	echo '</table>';
	}
	else{
		echo '<p style="color:red">No data found</p>';
	}
  }

?>
       </div>
       <br><br><br>
     </div>





<!--Bottom options -->
<?php //include("bottomfotor.php");?>