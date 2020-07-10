<?php
	function showdetails($standerd,$rollno)
		{
		include'dbcon.php';
		$query="select * from student where standerd='$standerd' and rollno='$rollno'";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			$data=mysqli_fetch_assoc($result);
			?>
				<table border="1" align="center" width="40%" style="padding: 1px;margin-top: 10px;background-color: #E9967A;height: 230px;font-size: 18px">
					<tr>
						<th colspan="3">Student Details</th>
					</tr>
					<tr>
						<td align="center" rowspan="5"><img src="dataimage/<?php echo $data['image']; ?>" style="max-height: 180px;max-width: 150px"></td>
						<th>Roll No.</th>
						<td><?php echo $data['rollno']; ?></td>
					</tr>
					<tr>
						<th>Full Name</th>
						<td><?php echo $data['name']; ?></td>	
					</tr>
					<tr>
						<th>Standerd</th>
						<td><?php echo $data['standerd']; ?></td>	
					</tr>
					<tr>
						<th>City</th>
						<td><?php echo $data['city']; ?></td>	
					</tr>
					<tr>
						<th>Contact No.</th>
						<td><?php echo $data['pcont']; ?></td>	
					</tr>
				</table>
			<?php
		}
		else
		{
			echo "<script>alert('NO Data Found')</script>";
		}
	}
?>