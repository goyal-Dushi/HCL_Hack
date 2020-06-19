<?php
include("connection.php");
    $id = $_GET['id'];
	if(isset($_POST['signup']))
	{
		$name=mysqli_real_escape_string($con,$_POST['edit_name']);
		$email=mysqli_real_escape_string($con,$_POST['edit_email']);
		$pass=mysqli_real_escape_string($con,$_POST['pass']);
		$phone=mysqli_real_escape_string($con,$_POST['edit_contact']);
		$loc=mysqli_real_escape_string($con,$_POST['edit_loc']);
		
		$insert="UPDATE `user` SET `user_name`='$name',`user_email`='$email',`user_password`='$pass',`phone`='$phone',`location`='$loc' WHERE `user_id`=$id";
		if($con->query($insert) === TRUE)
		{	
			echo "<script>alert('profile updated')</script>";
			header("Location: ../cust_profile.php?id=$id");
		}
		else
		{
			echo "Error: " . $insert . "<br>" . $con->error;
		}
	}

?>
