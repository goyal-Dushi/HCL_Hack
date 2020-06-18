<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consumer SignUp</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
<body style="background: linear-gradient(to left, #99ff66 0%, #ccffff 100%)">
    <div class="d-flex">
        <div class="container text-center p-4">
            <p style="letter-spacing: 4px;font-family:'Times New Roman', Times, serif;font-size: 30px;border-bottom-width:2px; border-bottom-style:double;">CONSUMER REGISTRATION</p>
            <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 15px; margin-top: 8px; letter-spacing: 3px;font-weight:500">You can register here to get access to all the shops and services nearby</p>
            <div class="row p-4">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="images/buyer.jpg" alt="consumer here" height="80%" width="100%" style="border-radius: 100%;padding-right: 12%;">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pt-5 pb-3">
                    <form class="form pb-4" action="files/insert_user.php" method="post">
                        <div class="form-group">
                            <input class="form-control form-control-md input" type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-md input" type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-md input" type="tel" name='user_contact' placeholder="Your Contact no." required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-md input" type="text" name="user_loc" placeholder="Your City" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-md input" type="password" name="pass" placeholder="Your Password" required>
                        </div>
                        <button class="btn btn-outline-success btn-md form-btn" name="signup" type="submit">Submit</button>
                    </form>
                    <p style="text-align: center;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 17px;margin-top: 100px;">Already Registered ? <a href="./index.html" style="text-decoration: none;">Login here!</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
