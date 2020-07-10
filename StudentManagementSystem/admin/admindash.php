<?php
	session_start();
	if($_SESSION['uid'])
	{
		echo "";
	}
	else
	{
		header('location: ../login.php');
	}
?>
<?php
	include'header.php';
?>
<div class="admintitle" align="center">	
	<h6><a href="logout.php" style="float: right;margin-right: 30px;color: #006400;font-size: 20px">logout</a></h6>
	<h1>Welcome To Admin Dashboard</h1>
</div>
		<table align="center" style="padding: 1px;margin-top: 60px;height: 160px;width: 280px;background-color: #FFA500;color: #8B008B;font-size: 23px">
			<tr>
				<td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td>
			</tr>
			<tr>
				<td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
			</tr>
			<tr>
				<td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td>
			</tr>
		</table>
	</body>
</html>
