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

    <h1 style="color:#5A88CA">PRODUCT ADD</h1>

        <form action="admin-product-add.php" method="post" enctype="multipart/form-data"> 
            <div class="form-group">
                <label for="pductname">productName:</label>
                <input type="text" class="form-control" id="pductname" name="productName" placeholder="Enter product name">
            </div>


            <div class="form-group">
                <label for="size">size:</label>
                <input type="text" class="form-control" name="size" id="size" min="1">
            </div>


            <label for="exampleColorInput" class="form-label">Color</label>
            <input type="text" class="form-control form-control-color" name="color" id="exampleColorInput" title="Choose your color">


            <div class="form-group">
                <label for="price"> select price:</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
            </div>


            <div class="form-group">
                <label for="features"> features:</label><br>
                <textarea name="features" id="features"   cols="152"   rows="10"></textarea>
            </div>


            
            <div class="form-group">
                <label for="category"> category:</label>
                <select class="form-select form-control" name="categoryId" id="categoryId">
                    <option value="">Select Category</option>
                    <?php
                            $cmd = "Select * from categories";
                            $result = mysqli_query($con,$cmd);
                            while($cat = mysqli_fetch_array($result))
                            {
                                ?>
                                    <option value="<?php echo $cat["categoryId"]; ?>"><?php echo $cat["categoryName"]; ?></option>
                                <?php
                            }

                    ?>
                </select>
            </div>
            <div>
                <label for="formFileLg" class="form-label">ADD IMAGE</label>
                <input class="form-control form-control-lg" name="productImage"  id="productImage" type="file">
            </div>
            <br>
            <button type="submit" name="submit" id="submit" class="btn btn-primary">ADD PRODUCT</button>
        </form>
    </div>
                            
    <?php

    if (isset($_POST['submit'])) {
        $productName = $_POST['productName'];
        $size = $_POST['size'];
        $color = $_POST['color'];
        $price = $_POST['price'];
        $features = $_POST['features'];
        $categoryId = $_POST['categoryId'];
        $productImage = $_FILES["productImage"]["name"];
        // echo $productImage;
        $query="insert into products(productName,size,color,price,features,categoryId,productImage) values
        ('$productName','$size','$color','$price','$features','$categoryId','$productImage')";

        move_uploaded_file($_FILES["productImage"]["tmp_name"],"images/products/" . $productImage);

        $result= mysqli_query($con,$query);
        if($result)
        {
            echo"<script>alert('Record Inserted') </script>";
        }
        else
            echo mysqli_error($con);
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