<?php
	session_start();
	if(isset($_SESSION['uid']));
	{
		header('loaction:admin/admindash.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Admin login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body bgcolor="#008080">
	<div class="admintitle" align="center">	
		<h3><a href="index.php" style="float: left;margin-left: 30px;color: #006400;font-size: 20px">Back To Home</a></h6>
		<h1>Admin Login</h1>
	</div>
	<form action="login.php" method="post">
		<table align="center" style="width: 30%;margin-top: 50px;padding: 1px;background-color: #FFF8DC;color: #8B008B;height: 150px;font-size: 20px">
			<tr bgcolor="#FFA500">
				<td align="center">UserName</td>
				<td align="center">
					<input type="text" name="uname" required>
				</td>
			</tr>
			<tr bgcolor="#FFA500">
				<td align="center">Password</td>
				<td align="center">
					<input type="password" name="pass" required="">
				</td>
			</tr>
			<tr bgcolor="#FFA500">
				<td colspan="2" align="center">
					<input type="submit" name="login" value="Login">				
				</td>
			</tr>
		</table>
	</form>

</body>
</html>

<?php
	require_once('dbcon.php');
	if(isset($_POST['login']))
	{
		$username=$_POST['uname'];
		$password=$_POST['pass'];

		$query="select id,username,password from admin where username='$username' and password='$password'";
		$resultset=mysqli_query($con,$query);
		$row=mysqli_num_rows($resultset);
		if($row<1)
		{
			?>
			<script>
				alert('username password incorrect');
				window.open('login.php','_self');
			</script>
			<?php
		}
		else
		{
			$data=mysqli_fetch_assoc($resultset);
			$id=$data['id'];
			$_SESSION['uid']=$id;
			header('location:admin/admindash.php');
		}
	}
?>