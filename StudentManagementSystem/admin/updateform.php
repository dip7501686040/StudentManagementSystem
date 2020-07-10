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
	include'titlehead.php';
	include'../dbcon.php';
	$sid=$_GET['sid'];
	$query="select * from student where id='$sid'";
	$result=mysqli_query($con,$query);
	$data=mysqli_fetch_assoc($result);
?>
	<form action="updatedata.php" method="post" enctype="multipart/form-data">
		<table align="center" style="padding: 2px;width: 350px;margin-top: 30px;background-color: #FFA500;color: #8B008B;height: 150px;font-size: 18px">
			<tr>
				<th>Roll No.</th>
				<td><input type="text" name="rollno" value="<?php echo $data['rollno']; ?>" required></td>
			</tr>
			<tr>
				<th>Full Name</th>
				<td><input type="text" name="name" value="<?php echo $data['name']; ?>" required></td>
			</tr>
			<tr>
				<th>City</th>
				<td><input type="text" name="city" value="<?php echo $data['city']; ?>" required></td>
			</tr>
			<tr>
				<th>Contact No.</th>
				<td><input type="text" name="pcon" value="<?php echo $data['pcont']; ?>" required></td>
			</tr>
			<tr>
				<th>Standerd</th>
				<td><input type="number" name="std" value="<?php echo $data['standerd']; ?>" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" name="simg" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
					<input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>