<?php

include("inc/conn.php");
?>
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
    <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'> -->

    <link href="fonts//titillium">
    <link href="fonts/Roboto/">
    <link href="fonts/raleway/">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php include("inc/header.php"); ?>
    <!-- End mainmenu area -->

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <a href="products.php" class="btn btn-primary <?= isset($_REQUEST['cat']) ? '' : 'active'; ?>">All
                Product</a>

            <?php
            $cmd = "select * from categories";
            $result = mysqli_query($con, $cmd);
            while ($row_cat = mysqli_fetch_array($result)) {
            ?>
                <a href="products.php?cat=<?= $row_cat["categoryId"] ?>" class="btn btn-primary <?= isset($_REQUEST['cat']) && $row_cat["categoryId"] == $_REQUEST['cat'] ? 'active' : ''; ?>"><?= $row_cat["categoryName"] ?></a>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="single-product-area">

        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <?php

                if (!isset($_REQUEST["cat"])) {
                    $query = "Select p.*,c.categoryName from products p,categories c where c.categoryId = p.categoryId";

                    $result = mysqli_query($con, $query);

                    while ($row = mysqli_fetch_array($result)) {
                ?>


                        <div class="col-md-3 col-sm-6 productBox">
                            <div class="single-shop-product">
                                <div class="product-upper">

                                    <img style="height:200px;" src="<?php echo "images/products/" . $row['productImage']; ?>" alt="">
                                </div>
                                <a href="single-product.php?productId=<?php echo $row['productId']; ?> " class="view-details-link">
                                    <h5 class="productName" style="font-size:20px;min-height:100px;padding-top:15px;"><?php echo $row['productName'] ?></h5>
                                </a>
                                <div class="product-carousel-price">
                                    <ins>₹ <?php echo $row['price'] ?>/-</ins>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" href="addcart.php?productId=<?php echo $row['productId']; ?>">Add to cart</a>
                                </div>
                            </div>
                        </div>


                    <?php }
                } else {
                    $query = "Select p.*,c.categoryName from products p,categories c where c.categoryId = p.categoryId and p.categoryId='$_REQUEST[cat]'";

                    $result = mysqli_query($con, $query);

                    while ($row = mysqli_fetch_array($result)) {
                    ?>

                        <div class="col-md-3 col-sm-6 productBox" style="overflow:hidden;">
                            <div class="single-shop-product">
                                <div class="product-upper">

                                    <img style="height:200px;" src="<?php echo "images/products/" . $row['productImage']; ?>" alt="">
                                </div>
                                <a href="single-product.php?productId=<?php echo $row['productId']; ?> " class="view-details-link">
                                    <h5 class="productName" style="font-size:20px;min-height:100px;padding-top:15px;"><?php echo $row['productName'] ?></h5>
                                </a>
                                <div class="product-carousel-price">
                                    <ins>₹ <?php echo $row['price'] ?>/-</ins>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" href="addcart.php?productId=<?php echo $row['productId']; ?>">Add to cart</a>
                                </div>
                            </div>
                        </div>


                <?php }
                }
                ?>

            </div>

        </div>
    </div>

    <script>
        function search(txt) {
            pbox = document.getElementsByClassName("productBox");
            pname = document.getElementsByClassName("productName");
            for (i = 0; i < pbox.length; i++) {
                // alert(pname[i].innerText.toLowerCase());
                if (pname[i].innerText.toLowerCase().match(txt.value.toLowerCase())) {
                    pbox[i].style.display = "";
                } else {
                    pbox[i].style.display = "none";
                }
            }
        }
    </script>


    <?php include("inc/footer.php"); ?>

    <!-- Latest jQuery form server -->
    <!-- <script src="https://code.jquery.com/jquery.min.js"></script> -->
    <script src="js\jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    <script src="BOOTSTRAP//js//bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>
</body>

</html>