<!DOCTYPE html>
<html lang="en_US">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Student Management System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body bgcolor="#008080">
	<div class="admintitle" align="center">	
		<h3><a href="login.php" style="float: right;color: #006400;font-size: 20px">Admin Login</a></h6>
		<h1>Welcome To Student Management System</h1>
	</div>
	<form method="post" action="index.php">
			<table align="center" style="width: 30%;margin-top: 20px;padding: 1px;background-color: #FFF8DC;color: #8B008B;height: 150px;font-size: 20px">
				<tr bgcolor="#FFA500">
					<td colspan="2" align="center">Student Information</td>
				</tr>
				<tr bgcolor="#FFA500">		
					<td align="center">ChooseStanderd</td>
					<td align="center">
						<select name="std" required>
							<option value="1">1st</option>
							<option value="2">2nd</option>
							<option value="3">3rd</option>
							<option value="4">4th</option>
							<option value="5">5th</option>
							<option value="6">6th</option>
							<option value="7">7th</option>
							<option value="8">8th</option>
							<option value="9">9th</option>
							<option value="10">10th</option>
							<option value="11">11th</option>
							<option value="12">12th</option>
						</select>
					</td>
				</tr>
				<tr bgcolor="#FFA500">
					<td align="center">EnterRollno</td>
					<td align="center">
						<input type="text" name="rollno" required>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="#FFA500">
						<input type="submit" name="submit" value="Show Info">
					</td>
				</tr>
			</table>
	</form>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$standerd=$_POST['std'];
		$rollno=$_POST['rollno'];
		include'dbcon.php';
		include'showdetails.php';
		showdetails($standerd,$rollno);
	}
?>