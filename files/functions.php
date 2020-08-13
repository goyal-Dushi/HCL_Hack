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
        
        echo" <option value='$id'>$title</option>";
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
        $contact=$row['owner_contact'];
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
                        <li class='list-group-item'>$contact</li>
                        <li class='list-group-item'>$owner</li>
                      </ul>
                  </div>
                  <div class='col-lg-4 col-md-4 col-sm-4'>
                    <img src='images/user/store.png' alt='Image' width='100%'>
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
        $string = "123,46,78,000"; 
        $content_array = explode (",", $content);
        echo"
        <a href='files/deletereq.php?id=$rid' class='list-group-item list-group-item-action list-group-item-primary mb-2'>
            <div class='d-flex justify-content-between'>
                <h5 class='mb-2' style='font-family:Franklin Gothic Medium, Arial Narrow, Arial, sans-serif;'>$name</h5>
                <small style='font-size:15px;'>$uphone</small>
            </div><ul>";
            foreach($content_array as $item){
                echo"<li style='font-family: Lucida Console, Courier, monospace;'>$item</li>";
            }
            echo"</ul>
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
                <h6>Owner Details</h6>
                <ul style='text-align: justify;'>
                    <li>Ordered By : $name</li>
                    <li>Items : $content</li>
                    <li>Address : $loc $add</li>
                    <li>Contact : $oc</li>
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
        $available=$row['available'];
        echo"
        <tr>
            <td>$name</td>
            <td>$price</td>
            <td>$desc</td>
            <td>$available</td>
            <td><button type='submit' class='btn btn-sm btn-warning' data-toggle='modal' data-table='Edit Item' data-target='#edit'>Edit</button></td>
            <td><a href='files/deletereq.php?pid=$id'><button type='submit' class='btn btn-sm btn-danger'>Delete</button></a></td>
        </tr>
        ";
    }
}
function shop_products($sid,$uid,$type){
    global $con;
    echo"<h3 style='font-family:Franklin Gothic Medium, Arial Narrow, Arial, sans-serif;'>PRODUCTS</h3>
    <div class='row row-cols-2 mt-3'>";
    $topic="select * from products where sid='$sid'";
    $run= mysqli_query($con,$topic);
    while($row=mysqli_fetch_array($run))
    {
        $id=$row['id'];
        $name=$row['name'];
        $desc=$row['desc'];
        $price=$row['price'];
        $available=$row['available'];
        echo"
        <div class='col-lg-3 col-md-4 mt-2'>
        <div class='card text-white bg-dark rounded-bottom'>
            <img src='images/user/product.png' class='card-img-top products' alt='logo'>
          <div class='card-body'>
            <div class='d-flex w-100 justify-content-between'>
              <h4 class='mb-1 card-title'>$name</h4>
              <small style='font-size:18px;'>Rs. $price</small>
            </div>
              <div class='card-text'>
              $desc
              </div>
          </div>
          <div class='card-footer'>
            available : $available
          </div>";
          if($type=='user'){
              echo"
          <a href='files/add_cart.php?method=add&uid=$uid&sid=$sid&pid=$id' class='btn btn-success'>Add</a>";
          }
          echo"
        </div>
    </div>
        ";
    }
}
function cart($id){
    global $con;
    $topic="select DISTINCT(sid),shop_name,shop_location from cart, shop WHERE shop.shop_id=cart.sid and uid=$id";
    $run= mysqli_query($con,$topic);
    while($row=mysqli_fetch_array($run)){
        $sid = $row['sid'];
        $name=$row['shop_name'];
        $location =$row['shop_location'];
    echo"
    <div class='list-group mt-5'>
        <div href='#' class='list-group-item list-group-item-action mt-2'>
            <h5 style='font-family:Verdana, Geneva, Tahoma, sans-serif;'>$name | $location</h5>
           <div class='row row-cols-2 mt-3'>";
            
        cart_items($id,$sid);
        echo"</div>
    </div>";
}}
function cart_items($uid,$sid){
    global $con;
    $total_price = 0;
    $count=0;
    $req = '';
    $topic="select * from cart, shop, products where uid='$uid' and cart.sid=$sid and cart.pid=products.id and shop.shop_id=products.sid";
    $run= mysqli_query($con,$topic);
    while($row=mysqli_fetch_array($run))
    {   $total = 0;
        $id=$row['cid'];
        $product_id =$row['pid'];
        $shop_id = $row['shop_id']; 
        $name =$row['name'];
        $zone =$row['zone'];
        $price =$row['price'];
        $quantity=$row['quantity'];
        $available =$row['available'];
        $total = $price*$quantity+$total;
        $count =$count+1;
        $req = $name.'('.$quantity.'),'.$req;
        echo"
            <div class='col-lg-3 col-md-4 mt-'>
                <div class='card'>
                    <div class='card-body'>
                        <ul class='list-group list-group-flush'>
                            <li class='list-group-item'>Name: $name</li>
                            
                            <li class='list-group-item'>Rs: $price</li>
                            <li class='list-group-item'>total: $total</li>

                            <li class='list-group-item'>Qnty: 
                            <form action='files/req.php' method='post'>
                            <input type='hidden' name='cart_id' value='$id'>
                            <input type='hidden' name='user_id' value='$uid'>
                            <input type='number' name='q' value='$quantity' min='1' max='$available'>
                            <button name='save' style='background:#$zone'>Save</button></form></li>
                        </ul>
                    </div>
                    <div class='card-body'>
                        <a href='files/add_cart.php?method=del&id=$id&uid=$uid' class='btn btn-danger btn-md' type='submit'>Remove</a>
                    </div>
                </div>
            </div>
        ";
        $total_price = $total + $total_price;
    }
    $uname = getuserby($uid);
    echo" </div>
    <span class='badge badge-pill badge-info p-3 mt-3' style='font-size: 13px;'>Total Amount : $total_price</span>
    <span class='badge badge-pill badge-info p-3 mt-3' style='font-size: 13px;'>Total Items : $count</span><br>
    <form action='files/place_order.php' method='post'>
        <div class='form-group'>
            <input type='hidden' class='form-control' value='$uname[1]' name='cust_name' >
            <input type='hidden' class='form-control' value='$shop_id' name='shop_id' >
            <input type='hidden' class='form-control' value='$uname[0]' name='user_id' >
            <input type='hidden' class='form-control' value='$req rs $quantity' name='requirements' >
        </div>
        <div class='form-group'>
            <input type='hidden' class='form-control' value='$uname[2]' name='cust_phone' placeholder='Contact Number' required>
        </div>
        <button type='submit' name='submit' class='btn btn-md btn-success mt-2'>Place Order</button>
    </form>";
}
?>

