<?php
include("connection.php");
    $method = $_GET['method'];
    $id = $_GET['uid'];
    if($method=='add'){
        $pid = $_GET['pid'];
        $sid = $_GET['sid'];
        $insert="INSERT INTO `cart`(`uid`, `pid`,`sid`) VALUES($id,'$pid','$sid')";
        if($con->query($insert) === TRUE)
        {
        echo "<script>alert('added to cart')</script>";
        header("Location: ../store.php?id=$sid&type=user");
        }
        else
        {
            echo "Error: " . $insert . "<br>" . $con->error;
        }
    }
    else{
        $cid = $_GET['id'];
        $insert="DELETE FROM `cart` WHERE cid=$cid";
        if($con->query($insert) === TRUE)
        {
        echo "<script>alert('item removed')</script>";
        header("Location: ../user_cart.php?id=$id");
        }
        else
        {
            echo "Error: " . $insert . "<br>" . $con->error;
        }
    }
?>