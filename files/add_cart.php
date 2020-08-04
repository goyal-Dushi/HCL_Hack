<?php
include("connection.php");
    $id = $_GET['id'];
    $pid = $_GET['item'];
	$insert="INSERT INTO `cart`(`uid`, `pid`) VALUES($id,'$pid')";
    if($con->query($insert) === TRUE)
    {
    echo "<script>alert('added to cart')</script>";
    header("Location: ../store.php?id=$id&type=user");
}
else
{
    echo "Error: " . $insert . "<br>" . $con->error;
}

?>