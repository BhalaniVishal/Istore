<?php
include "inc/conn.php";
session_start();
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
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

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

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <center><img src="../Istore//images//logo.png" alt="" style="height:100px;"></center>
                    </div>

                    <div class="single-sidebar">
                        <img src="../Istore//images/sidecart.jpg" alt="" style=" width: 500px;">
                    </div>
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            <li><a href="products.php">IPHONES</a></li>
                            <li><a href="products.php">IPADS</a></li>
                            <li><a href="products.php">MAC</a></li>
                            <li><a href="products.php">WATCHES</a></li>
                            <li><a href="products.php">ACCESSORIES</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="product-content-right">

                        <?php
                        $pid = $_GET['productId'];
                        $query = "select * from products where productId='$pid' LIMIT 5";
                        $result = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($result)) {
                        ?>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="product-images">
                                        <div class="product-main-img">
                                            <img src="<?php echo "images/products/" . $row['productImage']; ?>" alt="<?php echo $row['productImage']; ?>">
                                        </div>
                                        <h1>Specifications:</h1>
                                        <table>
                                            <tr>
                                                <td style="border: 5px solid; padding:5px">PRODUCT-NAME:</td>
                                                <td style="border: 5px solid;padding:5px"><?php echo $row['productName'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="border: 5px solid; padding:5px">SIZE</td>
                                                <td style="border: 5px solid;padding:5px"><?php echo $row['size'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="border: 5px solid;padding:5px"> COLOR</td>
                                                <td style="border: 5px solid;padding:5px"><?php echo $row['color'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="border: 5px solid;padding:5px">PRICE</td>
                                                <td style="border: 5px solid;padding:5px"><?php echo $row['price'] ?></td>
                                            </tr>
                                        </table>

                                        <br>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="product-inner">
                                        <h2 class="product-name"><?php echo $row['productName'] ?></h2>
                                        <div class="product-inner-price">
                                            <ins>₹ <?php echo $row['price'] ?>/-</ins>
                                        </div>

                                        <form action="" class="cart">
                                            <div class="quantity">
                                                <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" max="5" step="1">
                                            </div>
                                            <a class="add_to_cart_button" href="addcart.php?productId=<?php echo $row['productId']; ?>">Add to cart</a>
                                        </form>



                                        <div role="tabpanel">
                                            <ul class="product-tab" role="tablist">
                                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"> REVIEW </a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                    <h3><?php echo $row['productName'] ?></h3>

                                                    <i>About this item</i>
                                                    <ul>
                                                        <li><?php echo $row['features'] ?></li>

                                                    </ul>

                                                </div>

                                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                                    <h2>Give Your Review About This Product</h2>
                                                    <div class="submit-review">
                                                        <!-- <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                        <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                        <div class="rating-chooser">
                                                            <p>Your rating</p>

                                                            <div class="rating-wrap-post">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
               
                                                        </div> -->
                                                        <form method="post" action="review.php?productId=<?php echo $row['productId']; ?> ">
                                                            <p><label for="review">Your review</label> <textarea name="review" id="review" cols="30" rows="10"></textarea></p>
                                                            <p> <button name="ok" >Submit</button></p>
                                                           
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                                <?php

                                $query = "Select p.*,c.categoryName from products p,categories c where p.categoryId =5 LIMIT 4";
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

                                        <h2><?php echo $row['productName'] ?></h2>

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
    </div>

    <?php include("inc/footer.php"); ?>

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