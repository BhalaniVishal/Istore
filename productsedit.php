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
                $query = "Select * from products where productId='$_REQUEST[id]'";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_array($result);

                ?>


        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="pductname">productName:</label>
                <input type="text" class="form-control" value="<?php echo $row["productName"]; ?>" id="pductname" name="productName" placeholder="Enter product name">
            </div>


            <div class="form-group">
                <label for="size">size:</label>
                <input type="text" class="form-control" value="<?php echo $row["size"]; ?>" name="size" id="size" min="1">
            </div>


            <label for="exampleColorInput" class="form-label">Color</label>
            <input type="text" class="form-control form-control-color" value="<?php echo $row["color"]; ?>" name="color" id="exampleColorInput" title="Choose your color">


            <div class="form-group">
                <label for="price"> select price:</label>
                <input type="text" class="form-control" id="price" name="price" value="<?php echo $row["price"]; ?>" placeholder="Enter price">
            </div>


            <div class="form-group">
                <label for="features"> features:</label><br>
                <textarea name="features" id="features"   cols="152"   rows="10"><?php echo $row["features"]; ?></textarea>
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
                <script>
                    document.getElementById("categoryId").value="<?php echo $row["categoryId"]; ?>";
                </script> 
            </div>

            <div>
                <label for="formFileLg" class="form-label">ADD IMAGE</label>
                <input class="form-control form-control-lg"  name="productImage"  id="formFileLg" type="file">
                <input type="hidden" name="productImageOld" value="<?php echo $row["productImage"]; ?>">
            </div> 
            <br>
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <?php

    if (isset($_POST['submit'])) {
        $productName = $_POST['productName'];
        // $size = $_POST['size'];
        $size = mysqli_real_escape_string($con,$_POST["size"]);
        $color = mysqli_real_escape_string($con,$_POST["color"]);

        // $color = $_POST['color'];
        $price = $_POST['price'];
        $features = mysqli_real_escape_string($con,$_POST["features"]);

        // $features = $_POST['features'];
        $categoryId = $_POST['categoryId'];
        $productImage = mysqli_real_escape_string($con,$_FILES['productImage']["name"]);

        // $productImage = $_FILES['productImage']["name"];
        $productImageOld = mysqli_real_escape_string($con,$_POST["productImageOld"]);

        // $productImageOld = $_POST["productImageOld"];

        // echo "$productImageOld,$productImage";
        if($productImage == "")
        {
            $cmd = "update products set productName = '$productName' , size = '$size' , color = '$color' , price = '$price' , features = '$features' , categoryId = '$categoryId' , productImage = '$productImageOld' where productId = '$_REQUEST[id]'";
            // echo "1";
        }
        else
        {
            move_uploaded_file($_FILES["productImage"]["tmp_name"],"images/products/" . $productImage);
            $cmd = "update products set productName = '$productName' , size = '$size' , color = '$color' , price = '$price' , features = '$features' , categoryId = '$categoryId' , productImage = '$productImage' where productId = '$_REQUEST[id]'";
            // echo "2";
        }
        $result = mysqli_query($con,$cmd);
        if($result)
        {
            echo "<script>alert('Record Updated 👍👍')</script>";
        }
        // echo mysqli_error($con);
       
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