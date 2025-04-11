
<?php include("inc/conn.php");
 $productId = $_REQUEST["productId"];

$q="DELETE FROM addtocart WHERE productId = '$productId' ";
$all="DELETE * from addtocart";
$result = mysqli_query($con,$q);

       
          if($result)
        {
            echo "<script>window.location.href = 'cart.php'</script>";
        }
        
?>