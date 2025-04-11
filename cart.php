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
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>

                        <input type="text" name="searchproduct" id="searchproduct" placeholder="Search products...">
                        <input type="submit" onclick="sitem(searchproduct)">
                        <script>
                            function sitem(ser) {
                                window.location.href = "search.php?searchproduct=" + ser.value;
                            }
                        </script>
                    </div>

                    <div class="single-sidebar">
                        <img src="../Istore//images/sidecart.jpg" alt="" style=" width: 500px;">
                    </div>

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            <li><a href="products.php">iphone 13</a></li>
                            <li><a href="products.php">iphone 12</a></li>
                            <li><a href="products.php">Back Cover</a></li>
                            <li><a href="products.php">Apple Watch Series 8</a></li>
                            <li><a href="products.php">Watch Charger</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">image</th>
                                            <th class="product-name"> Name</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!isset($_SESSION['user'])) {
                                        ?>
                                            <script>
                                                window.location.assign("login.php");
                                            </script>
                                        <?php
                                        }
                                        $userId = $_SESSION['user']['userId'];
                                        $total = 1;
                                        $gtotal = 0;
                                        $cmd = "select a.*,p.* from addtocart a,products p where a.productId = p.productId and a.userId = '$userId'";
                                        $result = mysqli_query($con, $cmd);

                                        while ($row = mysqli_fetch_array($result)) {
                                            $total =  $row['price'] * $row['quantity'];
                                            $gtotal = $gtotal + $total;
                                        ?>
                                            <tr class="cart_item">
                                                <td class="product-remove">
                                                    <a title="Remove this item"  class="remove" href="closeitem.php?productId=<?php echo $row['productId']; ?>">×</a>
                                                </td>

                                                <td class="product-thumbnail">
                                                    <a href="single-product.php"><img class="img-thumbnail" height="150px" width="150px" src="<?php echo "images/products/" . $row['productImage']; ?>" alt="<?php echo $row['productImage']; ?>" /></a>
                                                </td>

                                                <td class="product-name">
                                                    <a href="single-product.php"><?php echo $row['productName']; ?></a>
                                                </td>

                                                <td class="product-price">
                                                    <span class="amount"><?php echo $row['price']; ?></span>
                                                </td>

                                                <td class="product-quantity">
                                                    <div class="quantity buttons_added">

                                                        <form action="" method="post">
                                                            <input type="button" class="minus" value="-" onClick='decreaseCount(event, this)'>
                                                            <input type="number" size="4" class="input-text qty text" id="qty" name="qty" title="Qty" value="<?php echo $row['quantity']; ?>">
                                                            <input type="button" class="plus" value="+" onClick='increaseCount(event, this)'>
                                                            <input type="hidden" value="<?= $row["cartId"] ?>" name="catId">
                                                            
                                                            <br>
                                                            <input type="submit" value="submit" name="add"></input>
                                                        </form>
                                                    </div>
                                                </td>


                                                <td class="product-subtotal">
                                                    <span class="amount"><?php print $total; ?></span>
                                                </td>
                                            </tr>

                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if (isset($_POST["add"])) {
                                            
                                            if(isset($_POST["catId"]) && isset($_POST['qty']))
    {
        $cartid = $_POST["catId"];
                                            $qty = $_POST["qty"];
        $uid = $_SESSION["user"]["userId"];
        $cmd = "update addtocart set quantity = '$qty' where cartId = '$cartid' and userId = '$uid'";
        $result = mysqli_query($con,$cmd);
        if($result)
        {
            echo "<script>window.location.href = 'cart.php'</script>";
        }
        else
        {
            echo mysqli_error($con);
        }
    }
                                        }
                                        ?>
                                        <tr>
                                            <td colspan="5" align="right">
                                            </td>
                                            <td><?php print $gtotal; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"><a href="order_code.php" class="btn btn-primary ">ORDER NOW</a></td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">


                                <div class="cross-sells">
                                    <h2>You may be interested in...</h2>
                                    <?php

                                    $query = "Select p.*,c.categoryName from products p,categories c where p.categoryId =2 LIMIT 2";

                                    $result = mysqli_query($con, $query);

                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <ul class="products">
                                            <li class="product">
                                                <a href="single-product.php?productId=<?php echo $row['productId'];?> ">
                                                    <img width="325" height="325" src="<?php echo "images/products/" . $row['productImage']; ?>" alt="">

                                                    <h3>Ship Your Idea</h3>
                                                    <span class="price"><span class="amount">₹ <?php echo $row['price'] ?>/-</span></span>
                                                </a>
                                                <a href="single-product.php?productId=<?php echo $row['productId'];?> " class="add_to_cart_button" >View Product💁💁</a>
                                            </li>
                                        </ul>
                                    <?php } ?>
                                </div>


                                <div class="cart_totals ">
                                    <h2>Cart Totals</h2>

                                    <table cellspacing="0">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount"><?php print $gtotal; ?></span></td>
                                            </tr>

                                            <tr class="shipping">
                                                <th>Shipping and Handling</th>
                                                <td>Free Shipping</td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount"><?php print $gtotal; ?></span></strong> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function increaseCount(a, b) {
            var input = b.previousElementSibling;
            var value = parseInt(input.value, 10);
            var gtoto
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;

        }

        function decreaseCount(a, b) {
            var input = b.nextElementSibling;
            var value = parseInt(input.value, 10);
            if (value > 1) {
                value = isNaN(value) ? 0 : value;
                value--;

                input.value = value;
            }
        }
    </script>

    <?php include("inc/footer.php") ?>

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