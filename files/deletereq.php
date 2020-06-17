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
?>