<?php include_once('session-active.php'); ?>
<?php include("../../service/admin_service.php");?>
<!--dashboard options -->
<?php include("admindashboard.php");?>
<title>index</title>
  <hr/>
  
   <div id="main" align="center">
      <div id="Registration">
       <h3 style="color:blue;">MY PROFILE</h3>
       <hr/>
       </div>

       <div>
       		<?php
       			//get the username from session 
       			$username=$_SESSION['user_name'];
       			$result = get_admin_profile($username);	
       			//echo $username;

		
	while($row = mysqli_fetch_assoc($result)){


			echo '<div align="center" style="width:400px;">

					<label style="color:green;">First Name</label> : '.$row['first_name'].
		 '<br/> <hr/>
		 <label style="color:green;">Last Name</label> : '.$row['last_name'].
		 '<br/><hr/>
		 <label style="color:green;">Sex</label> : '.$row['gender'].
		 '<br/><hr/>
		 <label style="color:green;">Designation</label> : '.$row['designation'].
		 '<br/><hr/>
		 <label style="color:green;">E-mail Address</label> : '.$row['email'].
		 '<br/><hr/>
		 <label style="color:green;">Address</label> : '.$row['address'].
		 '<br/><hr/>
		 <label style="color:green;">Contact No</label> : '.$row['contact_no'].
		 '<br/><hr/>
		 <label style="color:green;">Joined At</label> : '.$row['created_at'].
		 '<br/><hr/>

		</div>';





		 			

				
	}
	
	

   ?>

       </div>
     
    </div>

<!--Bottom options -->
<?php //include("bottomfotor.php");?>