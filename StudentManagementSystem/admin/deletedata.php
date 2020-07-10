<?php  
	include'../dbcon.php';
	$id=$_REQUEST['sid'];
	$query="DELETE FROM student where id=$id";
	$result = mysqli_query($con,$query);
	if($result==true)
	{
		?>
		<script>
			alert('Data Delete Successfuly');
			window.open('deletestudent.php','_self');
		</script>
		<?php
	}
?>