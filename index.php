<!DOCTYPE html>
<html>
<head>
	<title>Portal</title>

	<style type="text/css">
	body{
		/*background-color: #254E6A;*/
		background-image: url(img/pic.png);

	}

		.titile_div{
			/*border: 1px solid gold;*/
			border-radius: 6px;
			background-image: url(img/pic.png);
			padding: 8px;
			color:#fff;
			
		}
		#title_underline{
			width: 350px;
		}
		.signin_div{
			margin-left: 300px;
			margin-top: 40px;
			width:50%;
			height: auto;
			padding: 10px;
			border-radius: 8px;
			border: 1px solid gold;
		}

		input[type=text]{
    		width: 40%;
    		padding: 8px 10px;
    		margin-right: 80px;
    		margin: 2px 0;
    		border: 1px solid #ccc;
    		border-radius: 4px;
		}

		select{
    		width: 44%;
    		padding: 8px 10px;
    		margin-right: 80px;
    		margin: 2px 0;
    		border: 1px solid #ccc;
    		border-radius: 4px;
		}

		input[type=password] {
    		width: 40%;
    		padding: 8px 10px;
    		margin: 8px 0;
    		border: 1px solid #ccc;
    		border-radius: 4px;
}

input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    margin-left: 110px;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
	.create_account{
		margin-top: 10px;
		text-decoration: none;
		color: gold;
		border: 1px solid green;
		border-radius: 5px;
		padding: 6px;
	}
	.create_account:hover{
		border: 1px solid green;
		color: #fff;
	}

	.hrtitle{
		border: 1px solid gold;
		padding: 12px;
		border-radius: 4px;
		color: #fff;
	}

	</style>




</head>
<body>
	<div class="titile_div" align="center">
				
				<h2 class="title_header">WELCOME TO DOCTOR PATIENT PORTAL</h2>
				<div id="title_underline">
					<hr/>
				</div>
		
	</div>

	<div align="center" class="signin_div">
		<div class="signin">
  			<form action="index_validation.php" method="post">
  				<div align="center">
  					<label style="color: #13E5B8;font-size:20px">SIGN IN YOUR ACCOUNT</label>
  				</div>
  						<br/>
  					 <label style="color:#26FC08;margin-left:0px;">LOGIN OPTION</label>
       			 	<select id="who_log_in" name="who_log_in">
       			 		<option value="Select_option">Select option</option>
          		 		<option value="Admin">Admin</option>
          		 		<option value="Doctor">Doctor</option>
          		 		<option value="Patient">Patient</option>
          			</select>
  			<br/><br/>
   		 		<label style="color:#fff">&nbsp;&nbsp;&nbsp;USERNAME&nbsp;&nbsp;&nbsp;</label>
    			<input type="text" id="username" name="username" placeholder="Username">
    				<br/><br/>

    			<label style="color:#fff">&nbsp;&nbsp;&nbsp;PASSWORD&nbsp;&nbsp;&nbsp;</label>
    			<input type="password" id="password" name="password" placeholder="Password">
			 		<br/>
  
    			<input type="submit" name="Submit" value="Sign in">
  			</form>

  				<div>
  				<br/>
  					<label style="color:#fff;margin-left:80px;">Create Account&nbsp;&nbsp;</label>
  			 <a class="create_account" href="patient/patient-reg-form.php">Create patient account</a>
  					<br/><br/>
  				</div>
		</div>
		
	</div>
	<br/><br/><br/>
	<div align="center">
		<label class="hrtitle">&copy;2015-2016 | Doctor Patient Portal | American International University-Bangladesh(AIUB) | All right reserved | Designed By : Faisal Porag</label>
	</div>
	


</body>
</html>