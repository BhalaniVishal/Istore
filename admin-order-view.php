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
    <h1 style="color:#5A88CA">ORDER VIEW</h1>
    <table class="table">

        

        <thead>
            <tr>
                <th scope="col">ORDER ID</th>
                <th scope="col">USER</th>
                <th scope="col">PRODUCT</th>
                <th scope="col">QUANTITY</th>
                <th scope="col">ORDER DATE</th>
                <th scope="col">ORDER STATUS</th>
                <th scope="col">CONTROLS</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $query="Select o.*,u.userName,u.mobileNo,p.productName from orders o,registeredusers u,products p 
                    where o.productid=p.productid and o.userid=u.userid ";
            $result=mysqli_query($con,$query);
            while($row=mysqli_fetch_array($result))
            {
            ?>
            <tr>


                <td><?php echo $row['orderId']  ?></td>
                <td>
                    <?php echo $row['userName']    ?>
                    <br> <?php echo $row['mobileNo']    ?>
            
            </td>
                <td><?php echo $row['productName']    ?></td>
                <td><?php echo $row['quantity']    ?></td>
                <td><?php echo $row['orderDate']    ?></td>
                <td><?php echo $row['orderStatus']    ?></td>
                
                <td>
                            <a  href="order-edit.php?id=<?php echo $row['orderId'] ?>"><button type="button" class="btn btn-primary ">Update Order Status</button></a>
                 </td>
            </tr>
            <?php
            }
           ?>
        </tbody>
    </table>
    </div>
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