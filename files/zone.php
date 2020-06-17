<?php
include("connection.php");
$one=$_GET['zone'];
$id = $_GET['id'];
$update = "UPDATE `shop` SET `zone`='$one' WHERE `shop_id`='$id'";
$run = mysqli_query($con,$update);
if($run){
    echo"
        <script>alert('Zone updated');
        window.location = '../store.php?id=$id&type=shop';
    
    </script>";
}
?>