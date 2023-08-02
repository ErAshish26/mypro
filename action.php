<?php
$conn =mysqli_connect ("localhost","root","","opic");
if($conn == false)
{
die("ERROR:could not connect."
	.mysqli_connect.error());
	
	}
	$username=$_REQUEST['username'];
	$phone=$_REQUEST['phone'];
    $password=$_REQUEST['password'];
    
	$Sql="INSERT INTO opic1(Username,Phone,Password) VALUES('$username','$phone','$password')";
	if(mysqli_query($conn,$Sql))
	{
		echo "Welcome to our Company Page";
	}
	
	mysqli_close($conn);
	?>