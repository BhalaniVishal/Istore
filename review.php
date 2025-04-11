<?php include("inc/conn.php"); ?>
<?php
if (isset($_SESSION['user'])) {
?>
  <script>
    window.location.assign("login.php");
  </script>
<?php
}
session_start();
if (isset($_POST['ok'])) {
  $review = $_REQUEST['review'];
  $userId = $_SESSION['user']['userId'];
  $reviewDate = date("Y-m-d H:i:s");
  $productId = $_REQUEST['productId'];


  $query = "insert into reviews (reviewDate,userId,productId,review) values ('$reviewDate','$userId','$productId','$review')";
  $result = mysqli_query($con, $query);
  if ($result) {

    echo "<script> windows.location.href='single-product.php?productId=$productId'</script>";
    echo "<script>alert('Review Posted') </script>";
  } else
    echo mysqli_error($con);
}
