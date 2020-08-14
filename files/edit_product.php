<?php 
session_start();
include('connection.php');
include('functions.php');
    $id=$_GET['id'];
    $getuser="select * from products,shop where id='$id' and products.sid=shop.shop_id;";
    $runuser= mysqli_query($con,$getuser);
    $row=mysqli_fetch_array($runuser);
    $sid=$row['sid'];
    $name=$row['name'];
    $desc=$row['desc'];
    $price=$row['price'];
    $available=$row['available'];
    $shop=$row['shop_email'];
    if($shop==$_SESSION['umail']){
echo"
<div class='modal-body'>
    <form action='update_shop.php?id='$id' method='post'>
        <div class='form-group'>
        <input class='form-control' type='hidden' value='$id' name='id' placeholder='id' required>
            <input class='form-control' type='text' value='$name' name='name' placeholder='Name of Product' required>
        </div>
        <div class='form-group'>
            <input class='form-control' name='desc' value='$desc' placeholder='Describe Your Product' required>
        </div>
        <div class='form-group'>
            <input class='form-control' name='price' type='number' value='$price' placeholder='Price' required>
        </div>
        <div class='form-group'>
            <input class='form-control' name='quantity' type='number' min='1' value='$available' placeholder='Quantity' required>
        </div>
        <div class='modal-footer'>
        <button type='submit' name='save' class='btn btn-outline-success'>save</button>
    </form>
</div>";}
?>