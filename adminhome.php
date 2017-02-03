<?php include_once('session-active.php'); ?>

<?php include_once('../../service/admin_service.php');?>
<!--dashboard options -->
<?php include("admindashboard.php");?>
<title>index</title>
	
	<style type="text/css">
		.weldiv{
			width: 200px;
			border: 1px solid blue;
			border-radius: 5px;
			padding: 3px;
			font-size: 16px;

		}
		div.profile{
			text-decoration: none;
			
		}
		div .profile:hover{
			color: #9E2357;
		}


	</style>
	<style type="text/css">
		#container1 {
    float:left;
    width:100%;
    margin-left: 40px;
}
#doctordiv {
    float:left;
    width:25%;
    background-image: url(img/pic3.jpg);
    border:1px solid #000;
    border-radius: 12px;
    padding: 10px;
    margin-right: 10px;
}
#patientdiv {
    float:left;
    width:25%;
    background-image: url(img/pic2.jpg);
    border:1px solid #000;
    border-radius: 12px;
    padding: 10px;
    margin-left: 15px;
    margin-right: 15px;
}
#donordiv {
    float:left;
    width:25%;
    background-image: url(img/pic1.jpg);
    border:1px solid #000;
    border-radius: 12px;
    padding: 10px;
    margin-left: 15px;   
}
	</style>
	

	<hr/>
		<div id="welcome" align="center">
       <h3 style="color:blue;">HOME</h3>
       <hr/>
       </div>
	 
	<?php
		$username=$_SESSION['user_name'];
	
		echo '<div class="weldiv" align="center">
				<a class="profile" href="admin-profile.php">Welcome '.$username.
				 '</a> <hr/>
		</div>';
	 ?>
	 	<br/>
	 	<div>

	 	<br/><br/><br/>
	 			
	 	<div id="container1" align="center">
    			<div id="doctordiv">
    					<div style="float:left;width:15%;margin-right:45px;">
    						 <img src="img/doctor.png">
    					</div>

    					<div style="float:left;width:60%">
    						<div align="center">
    							<?php
    							$result = get_total_doctor();
								$rows = mysqli_num_rows($result);
								echo '<label style="color:#fff">
									TOTAL DOCTOR <br/><h1 style="color:#FFC300">'.$rows.'</h1> 
									</label>';
    						?>
    						</div>
    						
    					</div>
    			</div>


    			<div id="patientdiv">
    					<div style="float:left;width:15%;margin-right:45px;">
    						 <img src="img/patient.png">
    					</div>

    					<div style="float:left;width:60%">
    						<div align="center">
    							<?php
    							$result = get_total_patient();
								$rows = mysqli_num_rows($result);
								echo '<label style="color:#fff">
									TOTAL PATIENT <br/><h1 style="color:#FF5733">'.$rows.'</h1>
									</label>';
    						?>
    						</div>
    					</div>
    			</div>


    			<div id="donordiv">
    					<div style="float:left;width:15%;margin-right:45px;">
    						 <img src="img/donor.png">
    					</div>

    					<div style="float:left;width:60%">
    						<div align="center">
    							<?php
    							$result = get_total_donor();
								$rows = mysqli_num_rows($result);
								echo '<label style="color:#fff">
									 TOTAL  DONOR <br/><h1 style="color:#00b300">'.$rows.'</h1>
									</label>';
    						?>
    						</div>
    					</div>
    			</div>
		</div>

	 	<br/><br/><br/><br/><br/><br/>


<!--Bottom options -->
<div>
<br/><br/><br/>
	<?php //include("bottomfotor.php");?>
</div>
