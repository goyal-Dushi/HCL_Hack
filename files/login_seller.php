<?php
session_start();

$con=mysqli_connect("localhost","root","","myapp")or die('try again in some minutes, please');

	 if(isset($_POST['login'])){

		$c_email = $_POST['seller_email'];
		$c_pass = $_POST['seller_pwd'];

		$sel_c ="select * from shop where shop_email='$c_email' AND shop_password='$c_pass'";

		$run_c = mysqli_query($con, $sel_c);

		$check_customer = mysqli_num_rows($run_c);

		if($check_customer==0){

		echo "<script>alert('Password or email is incorrect, plz try again!')</script>";
		exit();
		}
		else {
		$_SESSION['umail']=$c_email;
		header("Location: ../store.php");
		}
	}
?>