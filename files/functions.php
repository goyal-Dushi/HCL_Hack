<?php
include("connection.php");

function category($loc,$type){
    global $con;
    $topic="select * from category";
    $run= mysqli_query($con,$topic);
    while($row=mysqli_fetch_array($run))
    {
        $id=$row['id'];
        $title=$row['name'];

        echo"<a href='listMarket.php?loc=$loc&id=$id&type=$type' class='list-group-item list-group-item-action bg-light'>$title</a>";
    }
}
function postcategory(){
    global $con;
    $topic="select * from category";
    $run= mysqli_query($con,$topic);
    while($row=mysqli_fetch_array($run))
    {
        $id=$row['id'];
        $title=$row['name'];
        
        echo" <option value='$title'>$title</option>";
    }
}
function shoplocations(){
    global $con;
    $topic="select DISTINCT shop_location from shop;";
    $run= mysqli_query($con,$topic);
    while($row=mysqli_fetch_array($run))
    {
        $title=$row['shop_location'];
        echo" <option value='$title'>$title</option>";
    }
    echo"</select>";
}
function shop($loc,$category,$type){
    global $con;
    $topic="select * from shop where shop_location='$loc' and category='$category';";
    $run= mysqli_query($con,$topic);
    while($row=mysqli_fetch_array($run))
    {
        $id=$row['shop_id'];
        $name=$row['shop_name'];
        $owner=$row['shop_email'];
        $zone=$row['zone'];
        echo"
        <div class='col-lg-4 col-md-6'>

            ";
            if($zone == "ff0000"){
                echo"<a href='store.php?id=$id&type=$type' class='list-group-item list-group-item-action list-group-item-danger mb-2'>
              ";
            }
            else{
                echo"<a href='store.php?id=$id&type=$type' class='list-group-item list-group-item-action list-group-item-success mb-2'>
              ";
            }
            echo"
              <div class='d-flex justify-content-center'>
                    <h5 class='mb-2'>$name</h5>
                </div>
                <div class='row'>
                  <div class='col-lg-8 col-md-8 col-sm-8'>
                      <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>$loc</li>
                        <li class='list-group-item'>Contact Number</li>
                        <li class='list-group-item'>$owner</li>
                      </ul>
                  </div>
                  <div class='col-lg-4 col-md-4 col-sm-4'>
                    <img src='images/javascript.png' alt='Image' height='90%' width='100%' >
                  </div>
                </div>
              </a>
            </div>";
    }
}
function getcategory($id){
    global $con;
    $topic="select * from category where id=$id";
    $run= mysqli_query($con,$topic);
    while($row=mysqli_fetch_array($run))
    {
        $title=$row['name'];
    }
    echo"$title";
}
function getid($mail){
    global $con;
    $topic="select * from shop where shop_email='$mail' ";
    $run= mysqli_query($con,$topic);
    while($row=mysqli_fetch_array($run))
    {
        $id=$row['shop_id'];
    }
    return $id;
}
function getuser($mail){
    global $con;
    $topic="select * from user where user_email='$mail' ";
    $run= mysqli_query($con,$topic);
    if($con->query($topic) == TRUE){
        while($row=mysqli_fetch_array($run))
        {
            $uname=$row['user_name'];
            $umail=$row['user_email'];
            $uid=$row['user_id'];
            $uphone=$row['phone'];
            $loc=$row['location'];
        }
        return array($uid,$uname,$uphone,$loc,$umail);
    }
}
function getuserby($id){
    global $con;
    $topic="select * from user where user_id='$id' ";
    $run= mysqli_query($con,$topic);
    while($row=mysqli_fetch_array($run))
    {
        $uname=$row['user_name'];
        $umail=$row['user_email'];
        $uid=$row['user_id'];
        $uphone=$row['phone'];
        $password=$row['user_password'];
        $loc=$row['location'];
    }
    return array($uid,$uname,$uphone,$loc,$umail,$password);
}
function getreq($id){
    global $con;
    $topic="select * from requirment where sid='$id' ";
    $run= mysqli_query($con,$topic);
    echo"<h5>Click to Mark Done</h5>";
    echo"<br>";
    while($row=mysqli_fetch_array($run))
    {
        $name=$row['name'];
        $rid=$row['rid'];
        $content=$row['content'];
        $uphone=$row['phone'];
        echo"
        <a href='files/deletereq.php?id=$rid' class='list-group-item list-group-item-action list-group-item-primary mb-2'>
            <div class='d-flex justify-content-between'>
                <h5 class='mb-2'>$name</h5>
            </div>
            <p>$content</p>
            <p>$uphone</p>
        </a>";
    }
}
function getreqby($id){
    global $con;
    $topic="select * from requirment,shop where requirment.uid='$id' and requirment.sid= shop.shop_id; ";
    $run= mysqli_query($con,$topic);
    while($row=mysqli_fetch_array($run))
    {
        $name=$row['name'];
        $shop=$row['shop_name'];
        $add=$row['shop_address'];
        $loc=$row['shop_location'];
        $content=$row['content'];
        $oc=$row['owner_contact'];
        echo"
        <a href='#' class='list-group-item list-group-item-action list-group-item-warning mt-2'>
            <div class='d-flex w-100 justify-content-center'>
                <h5 class='mb-1'>$shop</h5>
            </div>
            <p class='mb-1'>
                <ul style='text-align: justify;'>
                    <li>ordered by: $name</li>
                    <li>$content</li>
                    <li>$loc, $add</li>
                    <li>$oc</li>
                </ul>
            </p>
        </a>";
    }
}
function shop_items($sid){
    global $con;
    $topic="select * from products where sid='$sid'";
    $run= mysqli_query($con,$topic);
    while($row=mysqli_fetch_array($run))
    {
        $id=$row['id'];
        $name=$row['name'];
        $desc=$row['desc'];
        $price=$row['price'];
        $quantity=$row['quantity'];
        echo"
        <tr>
            <td>$name</td>
            <td>$price</td>
            <td>$desc</td>
            <td>$quantity</td>
            <td><button type='submit' class='btn btn-sm btn-warning' data-toggle='modal' data-table='Edit Item' data-target='#ItemModal'>Edit</button></td>
            <td><a href='files/deletereq.php?pid=$id'><button type='submit' class='btn btn-sm btn-danger'>Delete</button></a></td>
        </tr>
        ";
    }
}
?>