<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>My Shop</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
</head>

<?php 
session_start();
include('files/connection.php');
include('files/functions.php');
    $id=$_GET['id'];
    $getuser="select * from shop where shop_id='$id';";
    $runuser= mysqli_query($con,$getuser);
    $row=mysqli_fetch_array($runuser);
	$shopid=$row['shop_id'];
    $name=$row['shop_name'];
    $mail=$row['shop_email'];
    $location=$row['shop_location'];
    $oname=$row['owner_name'];
	$ophone=$row['owner_contact'];
    $adress=$row['shop_address'];
    $cid=$row['category'];
    $zone=$row['zone'];
    $user=$_SESSION['umail'];
    $uname = getuser($ueser);
    
?>

<body style='background: linear-gradient(to bottom, #ffffff 0%, #9966ff 100%);'>

    <div class='d-flex'>
        <div class='container text-center p-4'>

        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
                    <a class="navbar-brand" href="#">Site Name</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="#">Visit Shops <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <!-- This option is only for business owner , since it will direct him to his purple page -->
                          <a class="nav-link" href="#">My Profile</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Log Out</a>
                        </li>
                      </ul>
                    </div>
                </nav>


            <div class='row mt-4'>
                <div class='col-lg-7 col-md-6 col-sm-12 p-3 mt-2'>
                    <h4 style='font-family:Verdana, Geneva, Tahoma, sans-serif;font-weight: 500;border-bottom-style:solid;border-bottom-width: 1px;padding-bottom: 10px;'>Provide Info Of Shop You Own</h4>
                    <?php 
                    if($mail==$user){
                        echo"
                    <form action='#' method='post'>
                        <div class='form-row pt-2'>
                            <div class='form-group col'>
                                <input type='text' value='$oname' class='form-control form-control-lg' name='owner_name' id='owner_name' placeholder='Your Name' required>
                            </div>
                            <div class='form-group col'>
                                <input type='tel' value='$ophone' name='contact' id='contact' class='form-control form-control-lg' placeholder='Your Contact no.' required>
                            </div>
                        </div>
                        <div class='form-row pt-2'>
                            <div class='custom-file mb-3'>
                                <input type='file' name='shopImage' id='shopImage' placeholder='Upload image of Shop' class='custom-file-input form-control-lg'>
                                <label for='shopImage' class='custom-file-label'>Upload Your Shop's Image</label>
                            </div>
                            <div class='form-group col'>
                                <label for='category'><small>Type of shop you Own</small></label>
                                <select class='custom-select form-control-lg' name='category' id='category' required>";
                                postcategory();
                                echo"</select>
                            </div>
                        </div>
                        <div class='form-row pt-2'>
                            <div class='form-group col'>
                                <input type='text' value='$name' name='shop_name' id='shop_name' placeholder='Your Shop's Name' class='form-control form-control-lg'>
                            </div>
                        </div>
                        <div class='form-row pt-2 pb-3'>
                            <div class='form-group col'>
                                <input type='text' value='$adress' name='address' id='address' placeholder='Your Shop's Address' class='form-control form-control-lg'>
                            </div>
                            <div class='form-group col'>
                                <input type='text' value='$location' name='city' id='city' placeholder='City' class='form-control form-control-lg' required>
                            </div>
                        </div>
                        <button type='submit' class='btn btn-lg btn-outline-dark'>Submit</button>
                    </form>
                    <div class='text-center pt-4' style='margin-top: 60px;'>
                        <a href='./listMarket.php?loc=$location&id=&type=shop'><button class='btn btn-lg btn-primary mt-2'>Visit Shops</button></a>
                        <a href='files/zone.php?zone=66ff66&id=$id'><button type='submit' class='btn btn-lg btn-success mt-2 ml-3'>In Green Zone</button></a>
                        <a href='files/zone.php?zone=ff0000&id=$id'><button type='submit' class='btn btn-lg btn-danger mt-2 ml-3'>In Red Zone</button></a>
                    </div>";
                    }
                    else{
                        echo"User Not Found";
                    }
                    ?>
                </div>
                <div class='col-lg-5 col-md-6 col-sm-12 p-3 mt-2'>
                    <div class='list-group'>
                        <?php getreq($id);?>
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