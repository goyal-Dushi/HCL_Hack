<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
</head>
<body style=" background: linear-gradient(to left, #ff9933 0%, #cc99ff 100%);">
    <div class="d-flex">
        <div class="container text-center p-2">

            <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Site Name</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Visit Shops</a>
                    </li>
                    <li class="nav-item">
                        <!-- This option is for business owner and customer both depending upon who signed in! -->
                      <a class="nav-link" href="#">My Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Log Out</a>
                    </li>
                  </ul>
                </div>
    </nav>

            <div class="row mt-5">
                <div class="col-lg-7 col-md-6 col-sm-12 p-3 mt-3">
                    <h2>About Me</h2>
                    <hr style="border-width: 2px;border-style:solid;">
                    <p style="margin-top: 30px;">
                        <ul style="text-align: justify;">
                            <li>Customer Name</li>
                            <li>Customer Contact info </li>
                            <li>Customer Location </li>
                            <li>Whatever else u wanna add !! </li>
                        </ul>
                    </p>
                    <div class="mt-2 p-4">
                        <h3 class="mb-2">Edit Your Details</h3>
                        <hr style="border-width: 2px;border-style:solid;">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input class="form-control form-control-md input" type="text" name="edit_name" placeholder="Edit Name" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-md input" type="email" name="edit_email" placeholder="Edit Email" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-md input" type="tel" name='edit_contact' placeholder="Edit Contact no." required>
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-md input" type="text" name="edit_loc" placeholder="Edit City" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-md input" type="password" name="pass" placeholder="Edit Password" required>
                            </div>
                            <button class="btn btn-warning btn-md form-btn" name="signup" type="submit">Submit</button>
                        </form>
                    </div>

                </div>

                <div class="col-lg-5 col-md-6 col-sm-12 p-3 mt-2">
       
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action list-group-item-warning">
                            <div class="d-flex w-100 justify-content-center">
                                <h5 class="mb-1">Shop's Name</h5>
                            </div>
                            <p class="mb-1">
                                <ul style="text-align: justify;">
                                    <li>What was the order , all the user requirements.</li>
                                    <li>Owner's shop location</li>
                                    <li>Owner's Contact Number</li>
                                </ul>
                            </p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-warning mt-2">
                            <div class="d-flex w-100 justify-content-center">
                                <h5 class="mb-1">Shop's Name</h5>
                            </div>
                            <p class="mb-1">
                                <ul style="text-align: justify;">
                                    <li>What was the order , all the user requirements.</li>
                                    <li>Owner's shop location</li>
                                    <li>Owner's Contact Number</li>
                                </ul>
                            </p>
                        </a>
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