<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Name</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="./styles.css" rel="stylesheet">
</head>
<?php 
session_start();
include("files/connection.php");
include("files/functions.php");
    $id=$_GET['id'];
    $type=$_GET['type'];

    $getuser="select * from shop where shop_id='$id';";
    $runuser= mysqli_query($con,$getuser);
    $row=mysqli_fetch_array($runuser);
    $shopid=$row['shop_id'];
    $name=$row['shop_name'];
    $location=$row['shop_location'];
    $shop_email=$row['shop_email'];
    $cid=$row['category'];
    $zone=$row['zone'];
    $address=$row['shop_address'];
    $contact=$row['owner_contact'];

    $user=$_SESSION['umail'];

    if($type=='user'){
      $uname = getuser($user);
    }
    elseif($type=='shop'){
      $uname = getid($user);
    }
    else{
      $uname=[0,'',''];
    }
?>
<body style=<?php echo"'background:linear-gradient(to left, #$zone 0%, #ffffff 100%);'";?>>
  
  <div class="d-flex">
    <div class="container text-center p-2">

<?php
if($type=='shop'){
echo"
      <nav class='navbar navbar-expand-lg fixed-top navbar-light bg-light'>
        <a class='navbar-brand' href='./listMarket.php?loc=$location&id=$cid&type=$type'><img src='images/logo.png' alt='Logo' height='40px' width='40px' ></a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarNav'>
          <ul class='navbar-nav'>
            <li class='nav-item'>
              <a class='nav-link' href='./listMarket.php?loc=$location&id=$cid&type=$type'>Visit Shops <span class='sr-only'>(current)</span></a>
            </li>
            <li class='nav-item'>
                <!-- This option is only for business owner , since it will direct him to his purple page -->
              <a class='nav-link' href='./owner_side.php?id=$uname[0]&type=shop'>My Profile</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='logout.php'>Log Out</a>
            </li>
          </ul>
        </div>
      </nav>";
}
else{
  echo"
      <nav class='navbar navbar-expand-lg fixed-top navbar-light bg-light'>
        <a class='navbar-brand' href='./listMarket.php?loc=$location&id=$cid&type=$type'><img src='images/logo.png' alt='Logo' height='40px' width='40px' ></a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarNav'>
          <ul class='navbar-nav'>
            <li class='nav-item'>
              <a class='nav-link' href='./listMarket.php?loc=$location&id=$cid&type=$type'>Visit Shops <span class='sr-only'>(current)</span></a>
            </li>
            <li class='nav-item'>
                <!-- This option is only for business owner , since it will direct him to his purple page -->
              <a class='nav-link' href='./cust_profile.php?id=$uname[0]'>My Profile</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='logout.php'>Log Out</a>
            </li>
          </ul>
        </div>
      </nav>";
}
?>

      <div class="row pt-5">

        <div class="col-lg-7">
          
            <div class="row pt-3">
              <div class="col-lg-8 mt-2">
                <h3><?php echo"$name | "; getcategory($cid);echo"</h3>
                <br>
                <ul class='list-group list-group-flush'>
                  <li class='list-group-item'>Address : $location , $address</li>
                  <li class='list-group-item'>Email : $shop_email</li>
                  <li class='list-group-item'>Mobile : $contact</li>
                </ul>";?>
              </div>
              
              <div class="col-lg-4 p-2">
                <!-- image of shop to be displayed here !!!  -->
                  <img src="images/user/store.png" alt="Shop Image" height="70%" width="70%">
              </div>
            </div>
            
            <div class="text-center pt-3 pb-3">
                <?php
                if($type=='shop'){
                  
                  echo"<a href='owner_side.php?id=$uname[0]&type=shop' style='font-size:23px;text-decoration:none;font-family:Helvatica;'><b>Check orders</b></a>";

                }
                else{
                  echo"
                <h3>Get in Touch</h3>
                <p>These details are required so that the owner can contact you as soon as possible to meet your requirements.</p>
                <form action='files/req.php' method='post'>
                    <div class='form-group'>
                        <input type='text' class='form-control' value='$uname[1]' name='cust_name' placeholder='Your Name' required>
                        <input type='hidden' class='form-control' value='$id' name='shop_id' placeholder='Your Name' required>
                        <input type='hidden' class='form-control' value='$uname[0]' name='user_id' placeholder='Your Name' required>
                    </div>
                    <div class='form-group'>
                        <input type='tel' class='form-control' value='$uname[2]' name='cust_phone' placeholder='Contact Number' required>
                    </div>
                    <div class='form-group'>
                        <textarea name='requirements' class='form-control' id='cust_require' cols='30' rows='5' placeholder='Your Requirements'></textarea>
                    </div>
                    <button type='submit' name='submit' class='btn btn-outline-success btn-md'>Send</button>
                </form>"
                ;}
                ?>
            </div>
        </div>
        
        <div class='col-lg-5'>
            <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 100vh; width:100%;">
                <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" style="height: 85%; width: 100%;" class="pt-3" frameborder="0"
                  style="border:0" allowfullscreen></iframe>
              </div>              
        </div>
      </div>
      <div class='container'>
            <?php 
            {shop_products($shopid,$uname[0],$type);}
            ?>

        </div>
        
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
</body>
</html>