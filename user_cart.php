<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
</head>
<?php 
session_start();
include("files/connection.php");
include("files/functions.php");
    $id=$_GET['id'];
    $user=$_SESSION['umail'];
    $myid = getuser($user);
    $details = getuserby($id);
?>
<body>

    <div class="d-flex">
        <div class="container text-center p-3">
        <?php 

echo"
            <nav class='navbar navbar-expand-lg fixed-top navbar-light bg-light'>
                <a class='navbar-brand' href='listMarket.php?loc=$details[3]&id=1&type=user'><img src='images/logo.png' height='40px' width='40px' ></a>
                <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                  <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse' id='navbarNav'>
                  <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <!-- This option is for business owner and customer both depending upon who signed in! -->
                      <a class='nav-link' href='./cust_profile.php?id=$myid[0]'>My Profile</a>
                    </li>
                    <li>
                        <a class='nav-link' href='listMarket.php?loc=$details[3]&id=1&type=user'>Visit Shops</a>
                    </li>
                    <li>
                        <a class='nav-link' href='user_cart.php?id=$myid[0]'>My Cart</a>
                    </li>
                    <li class='nav-item'>
                      <a class='nav-link' href='logout.php'>Log Out</a>
                    </li>
                  </ul>
                </div>
    </nav>";
    ?>
            <div class='container'>
                <?php cart($id)?>
                <?php if(isset($_POST['save'])){
                  $cid=mysqli_real_escape_string($con,$_POST['cart_id']);
                  $quan=mysqli_real_escape_string($con,$_POST['q']);
                  echo"$cid, $quan";
                  $insert="update `cart` set `quantity`='$quan' where cid=$cid";
                  if($con->query($insert) === TRUE)
                  {
                      echo "<script>alert('saved!')</script>";
                      header("user_cart.php?id=$id");
                  }
                  else
                  {
                      echo "Error: " . $insert . "<br>" . $con->error;
                  }
                }?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>