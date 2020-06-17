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
    $location=$row['shop_location'];
    $user=$row['shop_email'];
    $cid=$row['category'];
    $zone=$row['zone'];
    $user=$_SESSION['umail'];
    $uname = getuser($user);
    
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


            <div class='row mt-4'>
                <div class='col-lg-7 col-md-6 col-sm-12 p-3 mt-2'>
                    <h4 style='font-family:Verdana, Geneva, Tahoma, sans-serif;font-weight: 500;border-bottom-style:solid;border-bottom-width: 1px;padding-bottom: 10px;'>Provide Info Of Shop You Own</h4>
                    <?php echo"
                    <form action='#' method='post'>
                        <div class='form-row pt-2'>
                            <div class='form-group col'>
                                <input type='text' value='$name' class='form-control form-control-lg' name='owner_name' id='owner_name' placeholder='Your Name' required>
                            </div>
                            <div class='form-group col'>
                                <input type='tel' value='$name' name='contact' id='contact' class='form-control form-control-lg' placeholder='Your Contact no.' required>
                            </div>
                        </div>
                        <div class='form-row pt-2'>
                            <div class='custom-file mb-3'>
                                <input type='file' name='shopImage' id='shopImage' placeholder='Upload image of Shop' class='custom-file-input form-control-lg'>
                                <label for='shopImage' class='custom-file-label'>Upload Your Shop's Image</label>
                            </div>
                            <div class='form-group col'>
                                <label for='category'><small>Type of shop you Own</small></label>
                                <select class='custom-select form-control-lg' name='category' id='category' required>
                                    <option value='General'>General Store</option>
                                    <option value='Pharmacy'>Pharmacy</option>
                                    <option value='Mechanic'>Mechanic</option>
                                    <option value='plumbing'>Plumber</option>
                                    <option value='grocery'>Grocery Store</option>
                                    <option value='Other options'>Will be available</option>
                                </select>
                            </div>
                        </div>
                        <div class='form-row pt-2'>
                            <div class='form-group col'>
                                <input type='text' value='$name' name='shop_name' id='shop_name' placeholder='Your Shop's Name' class='form-control form-control-lg'>
                            </div>
                        </div>
                        <div class='form-row pt-2 pb-3'>
                            <div class='form-group col'>
                                <input type='text' value='$name' name='address' id='address' placeholder='Your Shop's Address' class='form-control form-control-lg'>
                            </div>
                            <div class='form-group col'>
                                <input type='text' value='$location' name='city' id='city' placeholder='City' class='form-control form-control-lg' required>
                            </div>
                        </div>
                        <button type='submit' class='btn btn-lg btn-outline-dark'>Submit</button>
                    </form>";
                    ?>
                    <div class='text-center pt-4' style='margin-top: 60px;'>
                        <a href='./listMarket.php'><button class='btn btn-lg btn-primary mt-2'>Visit Shops</button></a>
                        <button type='submit' class='btn btn-lg btn-success mt-2 ml-3'>In Green Zone</button>
                        <button type='submit' class='btn btn-lg btn-danger mt-2 ml-3'>In Red Zone</button>
                    </div>
                </div>
                <div class='col-lg-5 col-md-6 col-sm-12 p-3 mt-2'>
                    <div class='list-group'>
                        <?php getreq($id);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>