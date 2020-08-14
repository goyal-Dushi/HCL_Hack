<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<html>
<body style=' background: linear-gradient(to left, #ff9933 0%, #cc99ff 100%);'>

    <div class='d-flex'>
        <div class='container text-center p-3'>

            <?php 
            session_start();
            include('connection.php');
            include('functions.php');
                $id=$_GET['id'];
                $getuser="select * from products,shop where id='$id' and products.sid=shop.shop_id;";
                $runuser= mysqli_query($con,$getuser);
                $row=mysqli_fetch_array($runuser);
                $sid=$row['sid'];
                $name=$row['name'];
                $desc=$row['desc'];
                $price=$row['price'];
                $available=$row['available'];
                $shop=$row['shop_email'];
                if($shop==$_SESSION['umail']){
            echo"
            <h2 style='font-family: Neucha, cursive;letter spacing:3px;'>Edit Your Product Details </h2>
            <div class='text-center pr-5 pl-5 mt-3'>
                <form action='update_shop.php?id='$id' method='post'>
                    <div class='form-group'>
                    <input class='form-control' type='hidden' value='$id' name='id' placeholder='id' required>
                        <input class='form-control' type='text' value='$name' name='name' placeholder='Name of Product' required>
                    </div>
                    <div class='form-group'>
                        <input class='form-control' name='desc' value='$desc' placeholder='Describe Your Product' required>
                    </div>
                    <div class='form-group'>
                        <input class='form-control' name='price' type='number' value='$price' placeholder='Price' required>
                    </div>
                    <div class='form-group'>
                        <input class='form-control' name='quantity' type='number' min='1' value='$available' placeholder='Quantity' required>
                    </div>
                    <button type='submit' name='save' class='btn btn-success'>SAVE</button>
                </form>
            </div>";}
            ?>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    

</body>
</html>