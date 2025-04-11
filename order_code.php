<?php include("inc/conn.php"); ?>

<?php
session_start();
$userId= $_SESSION['user']['userId'];
$q="select a.*,p.price from addtocart a,products p where a.productId=p.productId and userId='$userId'" ;
$rs= mysqli_query($con,$q);
$orderDate=date("Y-m-d");
$orderStatus = 'pending';

while($row=mysqli_fetch_array($rs))
{
        $productId = $row['productId'];
        $quantity = $row['quantity'];
        $total = $row["price"] * $row["quantity"];
$q="insert into orders (userId,productId,quantity,orderDate,orderStatus,total) values('$userId','$productId','$quantity','$orderDate','$orderStatus','$total')";
mysqli_query($con,$q);
}
$qd="delete from addtocart where userId= $userId";
mysqli_query($con,$qd);
header("location:thanx.php");
?>