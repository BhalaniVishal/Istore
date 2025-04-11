<?php
    session_start();
    include("inc/conn.php");
    $cartid = $_REQUEST["catId"];
        $qty = $_POST["qty"];
        $uid = $_SESSION["user"]["userId"];
        echo $uid ."<br>";
        echo $cartid."<br>";
        echo $qty."<br>";
    /*if(isset($_REQUEST["cid"]) && isset($_REQUEST['qty']))
    {
        $cartid = $_REQUEST["cid"];
        $qty = $_REQUEST["qty"];
        $uid = $_SESSION["user"]["userId"];
        // echo $cartid . " <br> " . $qty;
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
    }*/



?>