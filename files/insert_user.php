
<?php
include("connection.php");

	if(isset($_POST['signup']))
	{
		$name=mysqli_real_escape_string($con,$_POST['name']);
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$pass=mysqli_real_escape_string($con,$_POST['pass']);
		$phone=mysqli_real_escape_string($con,$_POST['user_contact']);
		$loc=mysqli_real_escape_string($con,$_POST['user_loc']);
		
		$insert="INSERT INTO `user`(`user_name`, `user_email`,`user_password`,`phone`,`location`) VALUES('$name','$email','$pass','$phone','$loc')";
		if($con->query($insert) === TRUE)
		{	
			echo "<script>alert('Welcome $name!')</script>";
			header("Location: ../index.php");
		}
		else
		{
			echo "Error: " . $insert . "<br>" . $con->error;
		}
	}

?>
