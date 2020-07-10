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
?>
	<form action="addstudent.php" method="post" enctype="multipart/form-data">
		<table align="center" style="padding: 2px;width: 350px;margin-top: 30px;background-color: #FFA500;color: #8B008B;height: 200px;font-size: 18px">
			<tr>
				<th>Roll No.</th>
				<td align="center"><input type="text" name="rollno" placeholder="Enter Roll No" required></td>
			</tr>
			<tr>
				<th>Full Name</th>
				<td align="center"><input type="text" name="name" placeholder="Enter Full Name" required></td>
			</tr>
			<tr>
				<th>City</th>
				<td align="center"><input type="text" name="city" placeholder="Enter City" required></td>
			</tr>
			<tr>
				<th>Contact No.</th>
				<td align="center"><input type="text" name="pcon" placeholder="Enter Contact No" required></td>
			</tr>
			<tr>
				<th>Standerd</th>
				<td align="center"><input type="number" name="std" placeholder="Enter Standerd" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td align="center"><input type="file" name="simg" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		include'../dbcon.php';
		$rollno=$_POST['rollno'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$pcon=$_POST['pcon'];
		$std=$_POST['std'];
		$imagename=$_FILES['simg']['name'];
		$tempname=$_FILES['simg']['tmp_name'];
		move_uploaded_file($tempname,"../dataimage/$imagename");
		$query="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standerd`, `image`) VALUES ('$rollno','$name','$city','$pcon','$std','$imagename')";
		$result = mysqli_query($con,$query);
		if($result==true)
		{
			?>
			<script>
				alert('Data Inserted Successfuly');
			</script>
			<?php
		}
	}
?>




