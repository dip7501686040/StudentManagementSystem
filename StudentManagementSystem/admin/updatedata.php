<?php  
	include'../dbcon.php';
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcon=$_POST['pcon'];
	$std=$_POST['std'];
	$id=$_POST['sid'];
	$imagename=$_FILES['simg']['name'];
	$tempname=$_FILES['simg']['tmp_name'];
	move_uploaded_file($tempname,"../dataimage/$imagename");
	$query="UPDATE student SET rollno='$rollno', name='$name', city='$city', pcont='$pcon', standerd='$std', image='$imagename' where id=$id";
	$result = mysqli_query($con,$query);
	if($result==true)
	{
		?>
		<script>
			alert('Data Updated Successfuly');
			window.open('updatestudent.php?sid=<?php echo $id;?>','_self');
		</script>
		<?php
	}
?>
	