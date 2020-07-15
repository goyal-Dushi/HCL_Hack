<?php
session_start();
include("files/connection.php");
include("files/functions.php");
$user=$_SESSION['umail'];
$myid = getuser($user);
$id=$_GET['id'];
$details = getuserby($id);
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Hello <?php $details[1]?></title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
</head>

<body style=' background: linear-gradient(to left, #ff9933 0%, #cc99ff 100%);'>
    <div class='d-flex'>
        <div class='container text-center p-2'>
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
                    <li class='nav-item'>
                      <a class='nav-link' href='logout.php'>Log Out</a>
                    </li>
                  </ul>
                </div>
    </nav>";
    ?>

            <div class='row mt-5'>
                <div class='col-lg-7 col-md-6 col-sm-12 p-3 mt-3'>
                    
                <?php 
                    
                        echo"<h2>About $details[1]</h2>
                    
                    <hr style='border-width: 2px;border-style:solid;'>
                    <p style='margin-top: 30px;'>
                        <ul style='text-align: justify;'>
                            <li>Customer Name: $details[1]</li>
                            <li>Customer email: $details[4]</li>
                            <li>Customer phone: $details[2]</li>
                            <li>Customer Location: $details[3] </li>
                        </ul>
                    </p>";
                    if($user==$details[4]){
                        echo"
                    <div class='mt-2 p-4'>
                        <h3 class='mb-2'>Edit Your Details</h3>
                        <hr style='border-width: 2px;border-style:solid;'>
                        <form action='files/update_buyer_profile.php?id=$details[0]' method='post'>
                            <div class='form-group'>
                                <input class='form-control form-control-md input' value='$details[1]' type='text' name='edit_name' placeholder='Edit Name' required>
                            </div>
                            <div class='form-group'>
                                <input class='form-control form-control-md input' value='$details[4]' type='email' name='edit_email' placeholder='Edit Email' required>
                            </div>
                            <div class='form-group'>
                                <input class='form-control form-control-md input' value='$details[2]' type='tel' name='edit_contact' placeholder='Edit Contact no.' required>
                            </div>
                            <div class='form-group'>
                                <input class='form-control form-control-md input' value='$details[3]' type='text' name='edit_loc' placeholder='Edit City' required>
                            </div>
                            <div class='form-group'>
                                <input class='form-control form-control-md input' value='$details[5]' type='password' name='pass' placeholder='Edit Password' required>
                            </div>
                            <button class='btn btn-warning btn-md form-btn' name='signup' type='submit'>Submit</button>
                        </form>
                    </div>";
                    }?>

                </div>

                <div class='col-lg-5 col-md-6 col-sm-12 p-3 mt-2'>
       
                    <div class='list-group'>
                    <?php getreqby($myid[0])?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js' integrity='sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI' crossorigin='anonymous'></script>
</body>
</html>