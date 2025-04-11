<?php include("inc/conn.php");
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
    <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:5h500,200,300,700,600' rel='stylesheet' type='text/css'> -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'> -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'> -->
    <link href='fonts/titillium' rel='stylesheet' type='text/css'>
    <link href='fonts/RobotoCondensed' rel='stylesheet' type='text/css'>
    <link href='fonts/raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/login.css">
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
    <?php include("inc/header.php"); ?>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <section class="ftco-section ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method='post'>
                        <table class="table w-100 mh-25">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th colspan=2>Order Detail</th>
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

                                $id = $_SESSION['user']['userId'];
                                $sql = "select o.*,p.* from orders o , products p  where p.productId=o.productId and  o.userId='$id'";
                                $result = mysqli_query($con, $sql);
                                $total = 1;
                                $gtotal = 0;
                                while ($row = mysqli_fetch_array($result)) {


                                ?>

                                    <tr class="bg-success">
                                        <td>Product-Name:</td>
                                        <td><?php echo $row['productName'] ?> </td>
                                    </tr>


                                    <tr class="bg-success">
                                        <td>Quantity</td>
                                        <td><?php echo $row['quantity']; ?></td>
                                    </tr>

                                    <tr class="bg-success">
                                        <td>Date Of Order </td>
                                        <td><?php echo $row['orderDate']; ?></td>
                                    </tr>

                                    <tr class="bg-success">
                                        <td>Order Status</td>
                                        <td><?php echo $row['orderStatus']; ?></td>
                                    </tr>

                                    <tr class="bg-primary">

                                        <td>Total</td>
                                        <td class="bg-primary"><?php echo $row['total']; ?></td>
                                    </tr>

                                <?php } ?>


                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>


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