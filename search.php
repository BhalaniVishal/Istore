<?php include("inc/conn.php");?>
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
<br><br>

<?php
if (isset($_REQUEST['searchproduct'])) {
    $searchproduct = $_REQUEST['searchproduct'];
    $query = "select p.*,c.* from products p,categories c where p.categoryId = c.categoryId and productName = '$searchproduct'";

    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result)) {
?>

<div class="container">
    
<table border="3px double" style="width:500px;">

<tr><td style="width: 350px;">PRODUCT-NAME</td>   <td style="width: 700px;"><?php echo $row['productName']?></td></tr>
<tr><td>PRODUCT-IMAGE</td>   <td><img class="img-thumbnail" height="150px" width="150px" src="<?php echo "images/products/" . $row['productImage']; ?>" alt="<?php echo $row['productImage']; ?>" /></td></tr>
<tr><td>PRICE</td>   <td><?php echo $row['price']?></td></tr>
<tr><td>CATEGORY</td>   <td> <?php echo $row["categoryName"]; ?> </td></tr>
<tr><td>PRODUCT-SIZE</td>   <td><?php echo $row['size']?></td></tr>
<tr><td>COLOR</td>   <td><?php echo $row['color']?></td></tr>
<tr><td>FEATURES</td>   <td><?php echo $row['features']?></td></tr>
<tr><td colspan="2"> <a href="addcart.php?productId=<?php echo $row['productId']; ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
</td></tr>


</table>
    </div>
    <?php
    }
    ?>

<?php
    }
    ?>

</html>