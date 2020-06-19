<?php
  session_start();
  include("files/connection.php");
  include("files/functions.php");
  $user=$_SESSION['umail'];
  $loc = $_GET['loc'];
  $type = $_GET['type'];
  $cate = $_GET['id'];
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markets</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
</head>
<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Category</div>
      <div class="list-group list-group-flush">
        <?php category($loc,$type);?>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Markets</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="logout.php">logout<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <?php 
                if($type=='shop'){
                  $id=getid($user);
                  echo"<a class='nav-link' href='store.php?id=$id&type=shop'>$user</a>";
                } 
                else{
                  $id=getuser($user);
                  echo"<a class='nav-link' href='cust_profile.php?id=$id[0]'>$user</a>";
                }
              ?>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Search Bar -->
      <div class="container">
        <div class="active-cyan-4 mb-4 pt-3 text-center">
          <form action="">
            <div class="form-group">
              <?php echo"<select class='form-control' name='loc' type='text' placeholder='Enter Location' aria-label='Search'>";
              shoplocations();?>
            </div>
              <button type="submit" name="search" class="btn btn-outline-info ml-4">Search</button>
          </form> 
        </div>
        
        
        <div class="list-group">
          <div class="row">
            <?php shop($loc, $cate,$type);?>
          </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  </div>          
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    

    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
</body>
</html>