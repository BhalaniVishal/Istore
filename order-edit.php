<?php include("inc/conn.php"); ?>
<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apple</title>
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:5h500,200,300,700,600' rel='stylesheet' type='text/css'> -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'> -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'> -->
    <link href='fonts/titillium' rel='stylesheet' type='text/css'>
    <link href='fonts/RobotoCondensed' rel='stylesheet' type='text/css'>
    <link href='fonts/raleway' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="css/login.css"> -->

<body>

    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <?php include("inc/adminheader.php"); ?>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <br><br>

    <div class="container">
    <?php
                $query = "Select * from orders where orderId='$_REQUEST[id]'";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_array($result);

                ?>
	

        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="userId">USER ID:</label>
                <input type="text" class="form-control" value="<?php echo $row["userId"]; ?>" id="userId" name="userId" >
            </div>


            <div class="form-group">
                <label for="productId">PRODUCT ID:</label>
                <input type="text" class="form-control" value="<?php echo $row["productId"]; ?>" name="productId" id="productId" >
            </div>

            
            <div class="form-group">
                <label for="quantity">QUANTITY:</label>
                <input type="text" class="form-control" value="<?php echo $row["quantity"]; ?>" name="quantity" id="quantity" >
            </div>

            
            <div class="form-group">
                <label for="orderDate">ORDER DATE:</label>
                <input type="text" class="form-control" value="<?php echo $row["orderDate"]; ?>" name="orderDate" id="orderDate" >
            </div>

            
            <div class="form-group">
                <label for="orderStatus">ORDER STATUS:</label>
                <input type="text" class="form-control" value="<?php echo $row["orderStatus"]; ?>" name="orderStatus" id="orderStatus" >
            </div>


            <br>
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <?php

   
if (isset($_POST['submit'])) {
    $userId= $_POST['userId'];
    $quantity=$_POST['quantity'];
    $productId=$_POST['productId'];
    $orderDate=$_POST['orderDate'];
    $orderStatus=$_POST['orderStatus'];
    
    
        $cmd = "update  orders set userId='$userId',quantity='$quantity',productId='$productId', orderDate=' $orderDate',orderStatus='$orderStatus' where orderId='$_REQUEST[id]'";
    
    $result = mysqli_query($con,$cmd);
    if($result)
    {
        echo "<script>alert('Record Updated 👍👍')</script>";
    }
   
}
?>
<br><br>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <?php include("inc/footer.php"); ?>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>






</body>


</html>