<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Trirong:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Di Mart</title>
</head>
<body style="background: linear-gradient(to right, #3399ff -9%, #ffffff 61%);">

    <div class="d-flex">
        <div class="container text-center back">
            
            <div class="row pt-4 pr-3 pl-3">
                <div class="col-lg-6 col-md-12 col-sm-12 pb-4">
            
                    <img src="images/logo.png" alt="Logo" height="200px" width="200px">
                    <p style="font-size:25px;width:70%;margin-left:15%;margin-top:80px;font-family: 'Trirong', serif;">
                    A place where you can scale up your business by building your customers online as well as get ease of access to goods and services near you.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center pb-4">
                    <img src="images/seller.jpg" alt="seller inage" width="100%" height="300px" style="padding-bottom: 10%;">
                    <h4 class="pt-3" style="text-align: center;font-family: 'Times New Roman', Times, serif;letter-spacing: 4px;">SELLER LOGIN</h4>
                    <small>If you are a businessman and want to establish your business online.</small>
                    <form action="files/login_seller.php" method="POST" class="pb-4 pt-4">
                        <div class="form-group">
                            <input type="email" name="seller_email" class="form-control form-control-md" placeholder="Your Email ID">
                        </div>
                        <div class="form-group">
                            <input type="password" name="seller_pwd" class="form-control form-control-md" placeholder="Password">
                            <small class="form-text text-muted">Must be min of 6 char in length</small>
                        </div>
                        <button class="btn btn-outline-primary btn-md" name='login' type="submit">Login</button>
                    </form>
                    Not a Member ? <a href="./signup_shop.php" style="text-decoration: none;"> Register Here!</a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2 text-center pb-4">
                    <img src="images/custLogin.jpg" height="300px" width="85%" alt="buyer image" style="padding-bottom: 10%; padding-left:3%;">
                    <h4 class="pt-2" style="text-align: center;font-family: 'Times New Roman', Times, serif;letter-spacing: 4px;">BUYER LOGIN</h4>
                    <small>If you are looking for goods and services available near you.</small>
                    <form action="files/login_user.php" method="POST" class="pb-4 pt-4">
                        <div class="form-group">
                            <input type="email" name="buyer_email" class="form-control form-control-md" placeholder="Your Email ID">
                        </div>
                        <div class="form-group">
                            <input type="password" name="buyer_pwd" class="form-control form-control-md" placeholder="Password">
                            <small class="form-text text-muted">Must be min of 6 char in length</small>
                        </div>
                        <button type="submit" name='login' class="btn btn-md btn-outline-primary">Login</button>
                    </form>
                    Not a Member ? <a href="./signup_user.php" style="text-decoration: none;"> Register Here!</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>