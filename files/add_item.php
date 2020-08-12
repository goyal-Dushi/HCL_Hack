<?php
include("connection.php");
    $id = $_GET['id'];
	if(isset($_POST['add']))
	{
		$name=mysqli_real_escape_string($con,$_POST['name']);
		$desc=mysqli_real_escape_string($con,$_POST['desc']);
		$price=mysqli_real_escape_string($con,$_POST['price']);
		$quantity=mysqli_real_escape_string($con,$_POST['quantity']);

		$insert="INSERT INTO `products`(`sid`,`name`, `desc`,`price`,`available`) VALUES($id,'$name','$desc', '$price','$quantity')";
		if($con->query($insert) === TRUE)
		{
		echo "<script>alert('product added')</script>";
		header("Location: ../owner_side.php?id=$id&type=shop");
	}
		else
		{
			echo "Error: " . $insert . "<br>" . $con->error;
		}
	}

?>