<!DOCTYPE html>
<html lang="en">

<head>
    <title>Business signup</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body style="background: linear-gradient(to left, #99ccff 0%, #ffffff 100%);">
    <div class="d-flex">
        <div class="container p-4 text-center">
            <p style="letter-spacing: 4px;font-family:'Times New Roman', Times, serif;font-size: 30px;border-bottom-width:2px; border-bottom-style:double;">BUSINESS REGISTRATION</p>
            <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 15px; margin-top: 15px; letter-spacing: 3px;font-weight: 500;">Register your Business with us and scale up your business as well as customer base.</p>
            <div class="row p-4">
                <div class="col-lg-6 col-md-12 col-sm-12 pr-3">
                    <img src="images/businessman.jpg" style="border: none; border-radius: 100%; margin-right: 20px;padding-right: 12%;" alt="business img" height="90%" width="100%">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pt-4 pb-2 pr-3" style="text-align: center;">
                    <form class="form pb-3" action="files/insert_shop.php" method="post">
                        <div class="form-group">
                            <input class="form-control form-control-md input" type="text" name="name" placeholder="Shopname" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-md input" type="text" name="location" placeholder="location" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-md input" type="email" name="email" placeholder="email" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-md input" type="email" name="ownernaem  " placeholder="email" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-md input mb-3" name='category' required>

                                <?php include("files/functions.php");postcategory();?>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-md input" type="password" name="pass" placeholder="Password" required>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-md btn-outline-primary form-btn" name="signup" type="submit">Submit</button>
                        </div>
                    </form>
                    <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 17px;margin-top: 100px;">Already Registered ? <a href="./index.php" style="text-decoration: none;">Login here</a> </p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>