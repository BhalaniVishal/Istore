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
    <link rel="stylesheet" href="css/slider.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <?php include("inc/header.php"); ?>

    <div class="slideshow-container">

        <div class="mySlides ">
            <img src="../Istore//images/slider//1.jpg" style="width:100%">
        </div>

        <div class="mySlides ">
            <img src="../Istore//images/slider/2.jpg" style="width:100%">
        </div>

        <div class="mySlides ">
            <img src="../Istore//images/slider/3.jpg" style="width:100%">
        </div>

        <div class="mySlides ">
            <img src="../Istore//images/slider/4.jpg" style="width:100%">
        </div>

        <div class="mySlides ">
            <img src="../Istore//images/slider/5.jpg" style="width:100%">
        </div>

        <div class="mySlides ">
            <img src="../Istore//images/slider/6.jpg" style="width:100%">
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <!-- ./Slider -->
    <!-- End slider area -->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                <a href="products.php?cat=1" style="text-decoration:none;">
                    <div class="single-promo promo1">
                        <img src="images/iphone_scroll_img.png">
                        <h1>iPhones</h1>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                <a href="products.php?cat=2" style="text-decoration:none;">

                    <div class="single-promo promo2">
                        <img src="images/ipad_scroll_img.png">
                        <h1>iPads</h1>
                    </div>
    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                <a href="products.php?cat=4" style="text-decoration:none;">

                    <div class="single-promo promo3">
                        <img src="images/applewatch_scroll_img.png">
                        <h1>Apple Watches</h1>
                    </div>
    </a>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <img src="images/bag.png">
                        <a class="caption button-radius" href="products.php"><span class="icon"></span>View more...</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-- <center>
        <video autoplay="true" loop>
            <source src="images/bts-header-video-202306.mp4" type="video/mp4">
        </video>"C:\wamp64\www\Istore\images\iPhone 15.mp4"
    </center> -->

    <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">



                <div class="col-md-12" >
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>

                        
<div class="container">
<img src="images/iP.png" alt="x" style="height: 500px; width: 1500px;">
        </div>

  
                        <div class="product-carousel" >

                        
                            <?php

                            $query = "Select p.*,c.categoryName from products p,categories c where c.categoryId =1  order by productId desc LIMIT 5";

                            $result = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($result)) {
                            ?>

                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img style="height:300px; width:400px" src="<?php echo "images/products/" . $row['productImage']; ?>" alt="">

                                        <div class="product-hover">
                                            <a href="addcart.php?productId=<?php echo $row['productId']; ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="single-product.php?productId=<?php echo $row['productId']; ?> " class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href=""><?php echo $row['productName'] ?></a></h2>
                                    <div class="product-carousel-price">
                                        <ins>₹ <?php echo $row['price'] ?>/-</ins>


                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- End main content area -->

    <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">IPAD</h2>
                        <a href="products.php" class="wid-view-more">View All</a>
                        <?php

                        $query = "Select p.*,c.categoryName from products p,categories c where p.categoryId =2 LIMIT 3";

                        $result = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($result)) {
                        ?>

                            <div class="single-wid-product">

                                <a href="single-product.php?productId=<?php echo $row['productId']; ?> " class="view-details-link"><img class="product-thumb" src="<?php echo "images/products/" . $row['productImage']; ?>" alt=""></a>
                                <h2><a href=""><?php echo $row['productName'] ?></a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>₹ <?php echo $row['price'] ?>/-</ins>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="products-widget">
                        <h2 class="product-wid-title">WATCHES</h2>
                        <a href="products.php" class="wid-view-more">View All</a>
                        <?php

                        $query = "Select p.*,c.categoryName from products p,categories c where p.categoryId =4 LIMIT 3";

                        $result = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($result)) {
                        ?>

                            <div class="single-wid-product">
                                <a href="single-product.php?productId=<?php echo $row['productId']; ?> " class="view-details-link"><img class="product-thumb" src="<?php echo "images/products/" . $row['productImage']; ?>" alt=""></a>
                                <h2><a href=""><?php echo $row['productName'] ?></a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>₹ <?php echo $row['price'] ?>/-</ins>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="products-widget">
                        <h2 class="product-wid-title">ACCESSORIES</h2>
                        <a href="products.php" class="wid-view-more">View All</a>
                        <?php

                        $query = "Select p.*,c.categoryName from products p,categories c where p.categoryId =7 LIMIT 3";

                        $result = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($result)) {
                        ?>

                            <div class="single-wid-product">
                                <a href="single-product.php?productId=<?php echo $row['productId']; ?> " class="view-details-link"><img class="product-thumb" src="<?php echo "images/products/" . $row['productImage']; ?>" alt=""></a>
                                <h2><a href=""><?php echo $row['productName'] ?></a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>₹ <?php echo $row['price'] ?>/-</ins>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <?php include("inc/footer.php"); ?>

    <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Latest jQuery form server -->
    <!-- <script src="https://code.jquery.com/jquery.min.js"></script> -->
    <script src="js\try.js"></script>
    <!-- <script src="js\jquery.min.js"></script> -->
    <!-- Bootstrap JS form CDN -->
    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    <!-- <script src="/BOOTSTRAP//js/bootstrap.min.js"></script> -->
    <script src="BOOTSTRAP\js\bootstrap.min.js"></script>
    <!-- jQuery sticky menu -->
    <script src="../Istore/js/owl.carousel.min.js"></script>
    <script src="../Istore/js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="../Istore/js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="../Istore/js/main.js"></script>

    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
    <script type="text/javascript" src="js/script.slider.js"></script>
</body>

</html>