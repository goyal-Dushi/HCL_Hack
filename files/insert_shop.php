
<?php
$con=mysqli_connect("localhost","root","","myapp")or die('try again in some minutes, please');

	 if(isset($_POST['signup']))
	 {
		 $name=mysqli_real_escape_string($con,$_POST['name']);
		 $loc=mysqli_real_escape_string($con,$_POST['location']);
		 $email=mysqli_real_escape_string($con,$_POST['email']);
		 $cate=mysqli_real_escape_string($con,$_POST['category']);
         $pass=mysqli_real_escape_string($con,$_POST['pass']);
         
		 $insert="INSERT INTO `shop`(`shop_name`,`shop_email`, `shop_location`,`shop_password`,`category`,`zone`) VALUES('$name','$email','$loc', '$pass','$cate','yellow')";
		 if($con->query($insert) === TRUE)
		 {
			 echo"<h3>Welcome $name</h3>";
		 }
		 else
		 {
			 echo "Error: " . $insert . "<br>" . $con->error;
		 }
	 }

?>
