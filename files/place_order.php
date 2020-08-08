
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

?>
