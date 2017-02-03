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
<style type="text/css">
	input[type=text] {
    width: 120px;
    box-sizing: border-box;
    border: 1px solid #999;
    border-radius: 4px;
    font-size: 14px;
    background-color: white;
    background-image: url('../img/search.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 8px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 50%;
}
</style>
<link rel="stylesheet" type="text/css" href="admin_css/searchcss.css">

  <hr/>
  
  <div id="main" align="center">
      <div id="Registration">
       		<h3 style="color:blue;">ALL DONOR LIST</h3>
       		<hr/>
       </div>

       <div align="center">

       			<div id="searchdonardiv">
          
        <form method="post" action="admin-view-all-donar.php">
            Search &nbsp;<input type="text" name="searchdonar" placeholder="Search..">
            <input type="submit" value="Search">
        </form>
       </div> 


     <?php
       	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		  
		  $searchtext=$_POST['searchdonar'];
		  	if(!empty($searchtext)){
		  		$result = search_donar($searchtext,$searchtext,$searchtext,$searchtext);
		  		if(mysqli_num_rows($result) > 0){	
	
	echo '<table  style="border-collapse: collapse; width: 100%;">';
	echo '<tr id="maintr">
				<td id="maintd">Full name</td>
				<td id="maintd">Gender</td>
				<td id="maintd">E-Mail</td>
				<td id="maintd">Blood group</td>
				<td id="maintd">Donated organ</td>
				<td id="maintd">Address</td>
				<td id="maintd">Contact No</td>
			</tr>';		
	while($row = mysqli_fetch_assoc($result)){			
			echo '<tr id="datatr">
				<td id="datatd">'.$row['name'].'</td>
				<td id="datatd">'.$row['gender'].'</td>
				<td id="datatd">'.$row['email'].'</td>
				<td id="datatd">'.$row['blood_group'].'</td>
				<td id="datatd">'.$row['organname'].'</td>
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
       		
  		}

   ?>

       	<?php
       	if($_SERVER['REQUEST_METHOD'] == 'GET'){
	$result = get_all_donar();
	if(mysqli_num_rows($result) > 0){	
	
	echo '<table  style="border-collapse: collapse; width: 100%;">';
	echo '<tr id="maintr">
				<td id="maintd">Full name</td>
				<td id="maintd">Gender</td>
				<td id="maintd">E-Mail</td>
				<td id="maintd">Blood group</td>
				<td id="maintd">Donated organ</td>
				<td id="maintd">Address</td>
				<td id="maintd">Contact No</td>
			</tr>';		
	while($row = mysqli_fetch_assoc($result)){				
			echo '<tr id="datatr">
				<td id="datatd">'.$row['name'].'</td>
				<td id="datatd">'.$row['gender'].'</td>
				<td id="datatd">'.$row['email'].'</td>
				<td id="datatd">'.$row['blood_group'].'</td>
				<td id="datatd">'.$row['organname'].'</td>
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


   </div>

<!--Bottom options -->
<?php //include("bottomfotor.php");?>