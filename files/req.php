
<?php
include('connection.php');

	 if(isset($_POST['submit']))
	 {
		 $name=mysqli_real_escape_string($con,$_POST['cust_name']);
         $phone=mysqli_real_escape_string($con,$_POST['cust_phone']);
         $uid=mysqli_real_escape_string($con,$_POST['user_id']);
         $sid=mysqli_real_escape_string($con,$_POST['shop_id']);
         $content=mysqli_real_escape_string($con,$_POST['requirements']);
         
		 $insert="INSERT INTO `requirment`(`uid`, `sid`,`content`,`name`,`phone`) VALUES('$uid','$sid','$content','$name','$phone')";
		 if($con->query($insert) === TRUE)  
		 {  
             echo "<script>alert('Post added')</script>";
             echo "<script>window.open('../store.php?id=$sid&type=user','_self')</script>";
		 }
		 else
		 {
			 echo "Error: " . $insert . "<br>" . $con->error;
		 }
	 }
	 if(isset($_POST['save'])){
		$cid=mysqli_real_escape_string($con,$_POST['cart_id']);
		$quan=mysqli_real_escape_string($con,$_POST['q']);
		$id=mysqli_real_escape_string($con,$_POST['user_id']);
		$insert="update `cart` set `quantity`='$quan' where cid=$cid";
		if($con->query($insert) === TRUE)
		{
			echo "<script>window.open('../user_cart.php?id=$id','_self')</script>";
		}
		else
		{
			echo "Error: " . $insert . "<br>" . $con->error;
		}
	  }

?>
