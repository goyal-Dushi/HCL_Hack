<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
</head>
<body>

    <div class="d-flex">
        <div class="container text-center p-3">


            <nav class='navbar navbar-expand-lg fixed-top navbar-light bg-light'>
                <a class='navbar-brand' href='./listMarket.php'><img src='images/logo.png' alt='Logo' height='40px' width='40px' ></a>
                    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                    </button>
                <div class='collapse navbar-collapse' id='navbarNav'>
                  <ul class='navbar-nav'>
                    <li class='nav-item'>
                      <a class='nav-link' href='#'>My Profile<span class='sr-only'>(current)</span></a>
                    </li>
                    <li class='nav-item'>
                      <a class='nav-link' href='#'>Visit Shops</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">My Cart</a>
                    </li>
                    <li class='nav-item'>
                      <a class='nav-link' href='#'>Log Out</a>
                    </li>
                  </ul>
                </div>
            </nav>
        
            <div class='container'>

                <div class='list-group mt-5'>
                    
                    <!-- SHOP 1 ITEMS -->
                    <a href='#' class='list-group-item list-group-item-action mt-2'>
                        
                        <h5 style="font-family:Verdana, Geneva, Tahoma, sans-serif;">SHOP NAME | SHOP CONTACT</h5>
                        <button class='btn btn-md btn-success mt-2'>Proceed to Pay</button>
                        
                        <!-- start of products row  -->
                        <div class='row row-cols-2 mt-3'>

                            <!-- #product 1 -->
                            <div class='col-lg-3 col-md-4 mt-'>
                                <div class='card'>
                                    <img src='images/logo.png' alt='product image' class='card-img-top'>
                                    <div class='card-body'>
                                        <ul class='list-group list-group-flush'>
                                            <li class='list-group-item'>Product name</li>
                                            <li class='list-group-item'>Quantity</li>
                                            <li class='list-group-item'>Price</li>
                                        </ul>
                                    </div>
                                    <div class='card-body'>
                                        <button class='btn btn-danger btn-md' type="submit">Remove</button>
                                    </div>
                                </div>
                            </div>
                            <!-- #end of product 1 -->

                            <!-- #product 2 -->
                            <div class='col-lg-3 col-md-4'>
                                <div class='card'>
                                    <img src='images/logo.png' alt='product image' class='card-img-top'>
                                    <div class='card-body'>
                                        <ul class='list-group list-group-flush'>
                                            <li class='list-group-item'>Product name</li>
                                            <li class='list-group-item'>Quantity</li>
                                            <li class='list-group-item'>Price</li>
                                        </ul>
                                    </div>
                                    <div class='card-body'>
                                        <button class='btn btn-danger btn-md' type='submit'>Remove</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end of product 2 -->
        
                        </div>
                        <!-- #end of products row -->

                        <span class='badge badge-pill badge-info p-3 mt-3' style='font-size: 13px;'>Total Amount : </span>
                        <span class='badge badge-pill badge-info p-3 mt-3' style='font-size: 13px;'>Total Items : </span>
                        
                        </a>
                        <!-- #End of SHOP 1 ITEMS -->

                        <!-- SHOP 2 ITEMS -->
                        <a href='#' class='list-group-item list-group-item-action mt-2'>
                        
                            <h5 style='font-family:Verdana, Geneva, Tahoma, sans-serif;'>SHOP NAME | SHOP CONTACT</h5>
                            <button class='btn btn-md btn-success mt-2'>Proceed to Pay</button>
                            
                            <!-- start of products row  -->
                            <div class='row row-cols-2 mt-3'>
    
                                <!-- #product 1 -->
                                <div class='col-lg-3 col-md-4 mt-'>
                                    <div class='card'>
                                        <img src='images/logo.png' alt='product image' class='card-img-top'>
                                        <div class='card-body'>
                                            <ul class='list-group list-group-flush'>
                                                <li class='list-group-item'>Product name</li>
                                                <li class='list-group-item'>Quantity</li>
                                                <li class='list-group-item'>Price</li>
                                            </ul>
                                        </div>
                                        <div class='card-body'>
                                            <button class='btn btn-danger btn-md' type='submit'>Remove</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- #end of product 1 -->
    
                                <!-- #product 2 -->
                                <div class='col-lg-3 col-md-4'>
                                    <div class='card'>
                                        <img src='images/logo.png' alt='product image' class='card-img-top'>
                                        <div class='card-body'>
                                            <ul class='list-group list-group-flush'>
                                                <li class='list-group-item'>Product name</li>
                                                <li class='list-group-item'>Quantity</li>
                                                <li class='list-group-item'>Price</li>
                                            </ul>
                                        </div>
                                        <div class='card-body'>
                                            <button class='btn btn-danger btn-md' type='submit'>Remove</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of product 2 -->    
    
                            </div>
                            <!-- #end of products row -->
    
                            <span class='badge badge-pill badge-info p-3 mt-3"' style='font-size: 13px;'>Total Amount : </span>
                            <span class='badge badge-pill badge-info p-3 mt-3' style='font-size: 13px;'>Total Items : </span>
    
                            </a>
                            <!-- #END OF SHOP 2 ITEMS -->
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