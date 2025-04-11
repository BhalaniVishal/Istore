<?php
include("inc/conn.php");
session_start();
if (isset($_REQUEST["productId"]) && isset($_SESSION["user"])) {
    $productId = $_REQUEST["productId"];
    $userId = $_SESSION["user"]["userId"];
    $qty = 1;
    $cmd = "select * from addtocart where productId = '$productId' and userId = '$userId'";
    $result = mysqli_query($con, $cmd);
    if (mysqli_num_rows($result) == 0) {
        $cmd_insert = "insert into addtocart(productId,userId,quantity) values('$productId','$userId','$qty')";
        $result_insert = mysqli_query($con, $cmd_insert);
        if ($result_insert) {
            echo "<script>alert('Item Is Added In Cart')</script>";
            echo "<script>window.location.href = 'products.php'</script>";
        } else {
            echo mysqli_error($con);
        }
    } else {
        echo "<script>alert('Item Is Alredy Available In Cart')</script>";
        echo "<script>window.location.href = 'products.php'</script>";
    }
}
