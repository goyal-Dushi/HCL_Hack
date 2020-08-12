
<?php
include('connection.php');
if(isset($_POST['submit']))
{
	$name=mysqli_real_escape_string($con,$_POST['cust_name']);
	$phone=mysqli_real_escape_string($con,$_POST['cust_phone']);
	$uid=mysqli_real_escape_string($con,$_POST['user_id']);
	$sid=mysqli_real_escape_string($con,$_POST['shop_id']);
	$content=mysqli_real_escape_string($con,$_POST['requirements']);
	
	$insert="INSERT INTO `requirment`(`uid`, `sid`,`content`,`name`,`phone`) VALUES('$uid','$sid','$content','$name','$phone')";
	if($con->query($insert) === TRUE)  
	{  
		echo "<script>alert('Post added')</script>";
	}
	else
	{
		echo "Error: " . $insert . "<br>" . $con->error;
	}


	$delete="DELETE FROM `cart` WHERE `sid`=$sid";
	if($con->query($delete) === TRUE)  
	{  
	 echo "<script>window.open('../user_cart.php?id=$uid','_self')</script>";
	}
	else
	{
		echo "Error: " . $insert . "<br>" . $con->error;
	}
	// send_mail($content,$uid,$sid);
}

?>
