<?php
include('connection.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $del="delete from `requirment` where rid=$id";
    $run=mysqli_query($con,$del);
    if($run){
        echo "<script>alert('order Deleted')</script>";
        header("Location:{$_SERVER['HTTP_REFERER']}");
    }
    else
    {
    echo "Error: " . $con->error;
    }
}
if(isset($_GET['pid'])){
    $id=$_GET['pid'];
    $del="delete from `products` where id=$id";
    $run=mysqli_query($con,$del);
    if($run){
        echo "<script>alert('order Deleted')</script>";
        header("Location:{$_SERVER['HTTP_REFERER']}");
    }
    else
    {
    echo "Error: " . $con->error;
    }
}
?>