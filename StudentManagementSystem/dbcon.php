<?php
//$server='';
//$user='root';
//$password='NCSDsaha@12345';
//$database='studentdb';

$con = mysqli_connect('localhost:3307','root','NCSDsaha@12345','studentdb');

if($con==false)
{
	echo "connection failed";
}
?>