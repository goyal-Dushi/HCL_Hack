
<?php
include('connection.php');
	if(isset($_POST['submit']))
	{
        $owner=mysqli_real_escape_string($con,$_POST['owner_name']);
        $id=mysqli_real_escape_string($con,$_POST['id']);
        $contact=mysqli_real_escape_string($con,$_POST['contact']);
		$category=mysqli_real_escape_string($con,$_POST['category']);
		$shopname=mysqli_real_escape_string($con,$_POST['shop_name']);
		$address=mysqli_real_escape_string($con,$_POST['address']);
		$loc=mysqli_real_escape_string($con,$_POST['city']);
        $insert="update `shop` set `shop_name`='$shopname',`category` = '$category', `shop_location` = '$loc',`shop_address` = '$address',`owner_name` = '$owner',`owner_contact` = '$contact' where shop_id = $id";
		if($con->query($insert) === TRUE)
		{
		echo "<script>alert('profile updated!')</script>";
		// header("Location: index.html");
	}
		else
		{
			echo "Error: " . $insert . "<br>" . $con->error;
		}
	}
    else{
        echo"what you doin?";
    }
?>
