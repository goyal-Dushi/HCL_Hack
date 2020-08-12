<?php
include("connection.php");
    $id = $_GET['uid'];
    $pid = $_GET['pid'];
    $sid = $_GET['sid'];
	$insert="INSERT INTO `cart`(`uid`, `pid`,`sid`) VALUES($id,'$pid','$sid')";
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