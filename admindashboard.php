<?php include_once('session-active.php'); ?>
<title>index</title>
<style type="text/css">
body{
	background-color: #eee;
	
}

.profile_option_div{
    background: #004ea8;
    height:40px;
    text-align: right;
    padding: 10px;
    font-family: Helvetica,Arial,sans-serif;
    font-size: 13px;
	position:fixed;
	left:0;
	top:0;
	width:100%;
	z-index: 999;	
}
div a.menu{
	color:#fff;
}
div a.menu:hover{
	color:#000;
}
a{
	text-decoration: none;
	color: blue;
	align: center;
}
a:hover{
	color: #000;	
}

div.leftmenu{
	background-color: #eee;
	color : #0572B4;
	float: left;
	width: 15%;
	padding: 5px;
	text-align: center;
	table-layout: inherit;
	text-decoration: none;
	position:fixed;
    border-right: 1px solid #333;
    border-radius: 5px;
	left:0;
	top:80;
}
.tablediv a:hover{
    background-color: #22587D;
    color: #ff9900;
    padding: 5px;
    border-radius: 5px;
}


</style>
	

		<div class="profile_option_div">
		<br/>
			<a href="adminhome.php" style="font-size:22;color:white;position:fixed;left:10%; font-family:none; text-decoration:none;">
			DOCTOR PATIENT PORTAL</a>
			<a class="menu" href="adminhome.php">Home</a>&nbsp;
			<a class="menu" href="admin-profile.php">Profile</a>&nbsp;
			<a class="menu" href="admin-change-password.php">Change Password</a>&nbsp;
			<a class="menu" href="logout.php">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
		
		</div>

	</div>
	<br/>
	</div>
	

	<div class="optionmenudiv">
		<div class="leftmenu">
			<label style="color:green;font-size:18px;">
			DASHBOARD
			<hr/>
			</label>
		<br/><br/><br/>
			<table class="tablediv">
				<tr>
					<td>
						&nbsp;&nbsp;<img src="img/icon.png" alt="logo">
					</td>
					<td>
						<a href="admin-add-new-doctor.php"> Add doctor</a>
						<hr/>
					</td>
				</tr>

				<tr>
					<td>
						&nbsp;&nbsp;<img src="img/icon.png" alt="logo">
					</td>
					<td>
						<a href="admin-add-schedule.php"> Add doctor schedule</a>
						<hr/>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;&nbsp;<img src="img/icon.png" alt="logo">
					</td>
					<td>
						<a href="admin-view-all-doctor.php"> View doctor</a>
						<hr/>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;&nbsp;<img src="img/icon.png" alt="logo">
					</td>
					<td>
						<a href="admin-search-doctor.php"> Search doctor</a>
						<hr/>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;&nbsp;<img src="img/icon.png" alt="logo">
					</td>
					<td>
						<a href="admin-delete-doctor.php"> Delete doctor</a>
						<hr/>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;&nbsp;<img src="img/icon.png" alt="logo">
					</td>
					<td>
						<a href="admin-add-new-donar.php"> Add donor</a>
						<hr/>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;&nbsp;<img src="img/icon.png" alt="logo">
					</td>
					<td>
						<a href="admin-view-all-donar.php"> View donor</a>
						<hr/>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;&nbsp;<img src="img/icon.png" alt="logo">
					</td>
					<td>
						<a href="admin-search-donar.php"> Search donor</a>
						<hr/>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;&nbsp;<img src="img/icon.png" alt="logo">
					</td>
					<td>
						<a href="logout.php"> Logout</a>
						<hr/>
					</td>
				</tr>
			</table>
			<br/><br/>
			
		</div>

	</div>
	
	<div style="background-color: #eee;position :absolute;left :240px; top :80px; width :900px";/>