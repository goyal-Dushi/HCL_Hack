
<?php
$con=mysqli_connect("localhost","root","","myapp")or die('try again in some minutes, please');

	 if(isset($_POST['signup']))
	 {
		 $name=mysqli_real_escape_string($con,$_POST['name']);
         $email=mysqli_real_escape_string($con,$_POST['email']);
         $pass=mysqli_real_escape_string($con,$_POST['pass']);
         
		 $insert="INSERT INTO `user`(`user_name`, `user_email`,`user_password`) VALUES('$name','$email','$pass')";
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
