<?php
$conn =mysqli_connect ("localhost","root","","opic");
if($conn == false)
{
die("ERROR:could not connect."
	.mysqli_connect.error());
	
	}
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
    $password=$_REQUEST['password'];
    $password1=$_REQUEST['password1'];
	$Sql="INSERT INTO opic(NAME,EMAIL,PHONE,PASSWORD,PASSWORD1) VALUES('$name','$email','$phone','$password','$password1')";
	if(mysqli_query($conn,$Sql))
	{
		echo "You are  Sucessfully Register with our Company";
        
	}
	
	
	mysqli_close($conn);
	?>