
<?php
include('connection.php');
	if(isset($_POST['signup']))
	{
		$shopname=mysqli_real_escape_string($con,$_POST['shopname']);
		$loc=mysqli_real_escape_string($con,$_POST['location']);
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$name=mysqli_real_escape_string($con,$_POST['name']);
		$cate=mysqli_real_escape_string($con,$_POST['category']);
		$pass=mysqli_real_escape_string($con,$_POST['pass']);
		
		$insert="INSERT INTO `shop`(`shop_name`,`shop_email`, `shop_location`,`shop_password`,`category`,`owner_name`,`zone`) VALUES('$shopname','$email','$loc', '$pass','$cate','$name','ffee58')";
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
