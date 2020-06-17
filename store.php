<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Name</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
</head>
<?php 
session_start();
include("files/connection.php");
include("files/functions.php");
    $id=$_GET['id'];
    $getuser="select * from shop where shop_id='$id';";
    $runuser= mysqli_query($con,$getuser);
    $row=mysqli_fetch_array($runuser);
	$shopid=$row['shop_id'];
	$name=$row['shop_name'];
    $location=$row['shop_location'];
    $user=$row['shop_email'];
    $cid=$row['category'];
    $zone=$row['zone'];
?>
<body style=<?php echo"'background:linear-gradient(180deg, $zone, white);'";?>>
    <div class="d-flex">
        <div class="container text-center p-2">

        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
                    <a class="navbar-brand" href="#">Site Name</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown link
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                            </div>
                          </li>
                      </ul>
                    </div>
                </nav>


            <div class="row pt-3">
                <div class="col-lg-7">
                    <div class="text-center pt-3">
                        <h3><?php echo"$name | "; getcategory($cid);?></h3>
                        <br>
                        <ul>
                          <li><?php echo"$location"; ?></li>
                          <li>Contact details</li>
                          <li>Address</li>
                        </ul>
                    </div>
                    <div class="text-center pt-3 pb-3">
                        <h3>Get in Touch</h3>
                        <p>These details are required so that the owner can contact you as soon as possible to meet your requirements.</p>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="cust_name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="cust_phone" placeholder="Contact Number" required>
                            </div>
                            <div class="form-group">
                                <textarea name="requirements" class="form-control" id="cust_require" cols="30" rows="5" placeholder="Your Requirements"></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-success btn-md">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 100vh; width:100%;">
                        <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" style="height: 85%; width: 100%;" class="pt-3 pb-3" frameborder="0"
                          style="border:0" allowfullscreen></iframe>
                      </div>              
                </div>
            </div>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
</body>
</html>