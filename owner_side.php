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
    
?>

<body style='background: linear-gradient(to bottom, #<?php echo"$zone";?> 0%, #9966ff 100%);'>

    <div class='d-flex'>
        <div class='container text-center p-4'>

        <?php 
        
        $imgSrc = 'images/logo.png';
        $heightImage = '40px';
        $widthImage = '40px';
        
        if($mail==$user){
            
            echo"
            <nav class='navbar navbar-expand-lg fixed-top navbar-light bg-light'>
            <a class='navbar-brand' href='listMarket.php?loc=$location&id=$cid&type=shop'><img src=$imgSrc height=$heightImage width=$widthImage></a>
                    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                      <span class='navbar-toggler-icon'></span>
                    </button>
                    <div class='collapse navbar-collapse' id='navbarNav'>
                      <ul class='navbar-nav'>
                        <li class='nav-item'>
                          <a class='nav-link' href='listMarket.php?loc=$location&id=$cid&type=shop'>Visit Shops</a>
                        </li>
                        <li class='nav-item'>
                          <a class='nav-link' href='store.php?id=$id&type=shop'>Your Shop</a>
                        </li>
                        <li class='nav-item'>
                          <a class='nav-link' href='logout.php'>Log Out</a>
                        </li>
                      </ul>
                    </div>
                </nav>


            <div class='row mt-5'>
                
                <div class='col-lg-7 col-md-6 col-sm-12 p-3 mt-2'>
                    
                    <h4 style='font-family:Verdana, Geneva, Tahoma, sans-serif;font-weight: 500;border-bottom-style:solid;border-bottom-width: 1px;padding-bottom: 10px;'>Provide Info Of Shop You Own</h4>

                    <form action='files/update_shop.php' method='post'>
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
                                <input type='hidden' name='id' value='$id'>
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
                        <button type='submit' name='submit' class='btn btn-lg btn-outline-dark'>Submit</button>
                    </form>
                    <div class='text-center pt-3' style='margin-top: 45px;'>
                        <a href='files/zone.php?zone=66ff66&id=$id'><button type='submit' class='btn btn-lg btn-success mt-2'>In Green Zone</button></a>
                        <a href='files/zone.php?zone=ff0000&id=$id'><button type='submit' class='btn btn-lg btn-danger mt-2 ml-3'>In Red Zone</button></a>
                    </div>
                </div>

                <div class='col-lg-5 col-md-6 col-sm-12 p-3 mt-2'>
                    <div class='list-group'>";
                        getreq($id);
                        echo"
                    </div>
                </div>
            </div>
                ";}
                    else{
                        echo"User Not Found";
                    }
                ?>

            
            <!-- <div class='container text-center pt-4 pb-3 mr-4'> -->

                <h3 style='font-family:Franklin Gothic Medium, Arial Narrow, Arial, sans-serif; margin-top:15px;'>PRODUCTS I SELL</h3>

                <!-- <div class='container text-center pt-3 pb-3'> -->
                <div class='table-responsive-sm mt-3'>
                    <table class='table table-striped table-dark'>
                    <!-- Headings of table  -->
                        <thead>
                            <tr>
                                <th scope='col'>Item Name</th>
                                <th scope='col'>MRP</th>
                                <th scope='col'>description</th>
                                <th scope='col'>Quantity</th>
                                <th scope='col' colspan='2'>Operation</th>
                            </tr>
                        </thead>
                        <tbody>

                        <!-- Input data form the added items db -->
                        <?php
                        shop_items($id)
?>
                        </tbody>
                    </table>
                </div>

                    <button type='submit' class='btn btn-md btn-dark' data-table='Add Item' data-toggle='modal' data-target='#ItemModal'>+ Add Items</button>
            
                <div class='modal fade' id='ItemModal' tabindex='-1' role='dialog' aria-labelledby='ItemLabel' aria-hidden='true'>
                    <div class='modal-dialog modal-lg'>
                        <div class='modal-content'>
                        <div class='modal-header'>
                            <h4 class='modal-title' id='ItemLabel'>Table</h4>
                        </div>
                        <div class='modal-body'>

                            <form action='files/add_item.php?id=<?php echo"$id"; ?>' method='post'>
                                <div class='form-group'>
                                    <input class='form-control' type='text' name='name' placeholder='Name of Product' required>
                                </div>
                                <div class='form-group'>
                                    <textarea class='form-control' name='desc' id='' cols='20' rows='3' placeholder='Describe Your Product'></textarea>
                                </div>
                                <div class='form-group'>
                                    <input class='form-control' name='price' type='number' placeholder='Price' required>
                                </div>
                                <div class='form-group'>
                                    <input class='form-control' name='quantity' type='number' min='1' placeholder='Quantity' required>
                                </div>
                                <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                <button type='submit' name='add' class='btn btn-outline-success'>Submit</button>
                        </div>
                            </form>
                        
                        </div>

                        
                        </div>
                    </div>
                </div>
                <div class='modal fade' id='edit' tabindex='-1' role='dialog' aria-labelledby='ItemLabel' aria-hidden='true'>
                    <div class='modal-dialog modal-lg'>
                        <div class='modal-content'>
                        <div class='modal-header'>
                            <h4 class='modal-title' id='ItemLabel'>EDIT</h4>
                        </div>
                        <div class='modal-body'>

                            <form action='files/add_item.php?id=<?php echo"$id"; ?>' method='post'>
                                <div class='form-group'>
                                    <input class='form-control' type='text' name='name' placeholder='Name of Product' required>
                                </div>
                                <div class='form-group'>
                                    <textarea class='form-control' name='desc' id='' cols='20' rows='3' placeholder='Describe Your Product'></textarea>
                                </div>
                                <div class='form-group'>
                                    <input class='form-control' name='price' type='number' placeholder='Price' required>
                                </div>
                                <div class='form-group'>
                                    <input class='form-control' name='quantity' type='number' min='1' placeholder='Quantity' required>
                                </div>
                                <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                <button type='submit' name='add' class='btn btn-outline-success'>Submit</button>
                        </div>
                            </form>
                        
                        </div>

                        
                        </div>
                    </div>
                </div>
        </div>
    </div>

                <!-- to display the heading of popup opened -->
                <script>
                    $('#ItemModal').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget)
                        var tableName = button.data('table') 
                        var modal = $(this)
                        modal.find('.modal-title').text('Table to ' + tableName)
                    })
                </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>