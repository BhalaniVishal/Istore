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


                $query = "Select * from reviews where reviewId='$_REQUEST[id]'";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_array($result);

                ?>
		

        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="reviewDate">REVIEW DATE:</label>
                <input type="date" class="form-control" value="<?php echo $row["reviewDate"]; ?>" id="reviewDate" name="reviewDate" >
            </div>


            <div class="form-group">
                <label for="userId">USER ID:</label>
                <input type="text" class="form-control" value="<?php echo $row["userId"]; ?>" name="userId" id="userId">
            </div>

            <div class="form-group">
                <label for="productId">PRODUCT ID</label>
                <input type="text" class="form-control" value="<?php echo $row["productId"]; ?>" name="productId" id="productId">
            </div>

            <div class="form-group">
                <label for="message">MESSAGE:</label>
                <input type="text" class="form-control" value="<?php echo $row["message"]; ?>" name="message" id="message">
            </div>


           
            
            <br>
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <?php

    if (isset($_POST['submit'])) {
        $reviewDate=$_POST['reviewDate'];
        $userId=$_POST['userId'];
        $productId=$_POST['productId'];
        $message=$_POST['message'];
        
            $cmd = "update  reviews set reviewDate='$reviewDate',userId='$userId',productId='$productId', message=' $message' where reviewId='$_REQUEST[id]'";
        
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