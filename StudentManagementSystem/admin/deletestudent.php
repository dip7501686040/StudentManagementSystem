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
	<form action="deletestudent.php" method="post">
		<table align="center" style="margin-top: 20px;background-color: #FFA500;color: #8B008B;height: 50px;font-size: 20px">
			<tr>
				<th>Roll No.</th>
				<td><input type="text" name="rollno" placeholder="Enter Roll No" required></td>
		
				<th>Full Name</th>
				<td><input type="text" name="name" placeholder="Enter Full Name" required></td>
			
				<th>Standerd</th>
				<td><input type="number" name="std" placeholder="Enter Standerd" required></td>
			
				<td colspan="2" align="center"><input type="submit" name="submit" value="Search"></td>
			</tr>
		</table>
	</form>
	<table align="center" width="90%" style="margin-top: 20px;background-color: #B0E0E6;">
		<tr style="background-color: #E9967A;color: #4B0082;font-size: 20px">
			<th>No.</th>
			<th>Roll No.</th>
			<th>Name</th>
			<th>City</th>
			<th>Contact No.</th>
			<th>Standerd</th>
			<th>Image</th>
			<th>Delete</th>
		</tr>
		<?php
			if(isset($_POST['submit']))
			{
				include'../dbcon.php';
				$rollno=$_POST['rollno'];
				$name=$_POST['name'];
				$std=$_POST['std'];
				$query="SELECT * FROM `student` WHERE rollno=$rollno and name LIKE '%$name%' and standerd=$std";
				$result=mysqli_query($con,$query);
				if(mysqli_num_rows($result)<1)
				{
					echo "<tr align='center' style='background-color: #E9967A;color: #4B0082;font-size: 20px'><td colspan='8'>No Records Found</td></tr>";
				}
				else
				{
					$count=0;
					while($data=mysqli_fetch_assoc($result))
					{
						$count++;
						?>
						<tr align="center" style="background-color: #E9967A;color: #4B0082;font-size: 20px">
							<td><?php echo $count;?></td>
							<td><?php echo $data['rollno'];?></td>
							<td><?php echo $data['name'];?></td>
							<td><?php echo $data['city'];?></td>
							<td><?php echo $data['pcont'];?></td>
							<td><?php echo $data['standerd'];?></td>
							<td><img src="../dataimage/<?php echo $data['image']; ?>" style="max-width: 50px;"></td>
							<td><a href="deletedata.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
						</tr>
						<?php
					}
				}
			}
		?>
	</table>
</body>
</html>