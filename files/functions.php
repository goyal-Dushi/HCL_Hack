<?php
include("connection.php");

function category($loc){
    global $con;
    $topic="select * from category";
    $run= mysqli_query($con,$topic);
    while($row=mysqli_fetch_array($run))
    {
        $id=$row['id'];
        $title=$row['name'];
        echo"<a href='listMarket.php?loc=$loc&id=$id' class='list-group-item list-group-item-action bg-light'>$title</a>";
    }
}
function shop($loc,$category){
    global $con;
    $topic="select * from shop where shop_location='$loc' and category='$category';";
    $run= mysqli_query($con,$topic);
    while($row=mysqli_fetch_array($run))
    {
        $id=$row['shop_id'];
        $name=$row['shop_name'];
        $owner=$row['shop_email'];
        echo"
        <div class='col'>
              <a href='#' class='list-group-item list-group-item-action list-group-item-primary mb-2'>
                <div class='d-flex justify-content-center'>
                    <h5 class='mb-2'>$name</h5>
                </div>
                <div class='row'>
                  <div class='col-lg-9 col-md-9 col-sm-9 p-2'>
                      <ul>
                        <li>$loc</li>
                        <li>Contact Number</li>
                        <li>$owner</li>
                      </ul>
                  </div>
                  <div class='col-lg-3 col-md-3 col-sm-3'>
                    <img src='images/javascript.png' alt='Image' height='90%' width='90%' >
                  </div>
                </div>
              </a>
            </div>";
    }
}
?>