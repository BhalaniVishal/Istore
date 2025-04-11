<?php
include("inc/conn.php");
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
    <?php include("inc/header.php"); ?>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class="container"><br><br>
        <center><h1 class="text-primary"> EDIT PROFILE </h1></center>
        <?php

        $id = $_SESSION['user']['userId'];
        
        $query = "Select * from registeredusers where userId='$id'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);

        ?>


        <form action="#" method="post" enctype="multipart/form-data">



            <div class="form-group">
                <label for="userName">USER NAME:</label>
                <input type="text" class="form-control" value="<?php echo $row["userName"]; ?>" name="userName" id="userName">
            </div>


            <div class="form-group">
                <label for="gender"> GENDER:</label>
                <input type="text" class="form-control" value="<?php echo $row["gender"]; ?>" name="gender" id="gender">
            </div>


            <div class="form-group">
                <label for="birthDate">BIRTH-DATE:</label>
                <input type="text" class="form-control" value="<?php echo $row["birthDate"]; ?>" id="birthDate" name="birthDate">
            </div>

            <div class="form-group">
                <label for="mobileNo">CONTACT NO:</label>
                <input type="text" class="form-control" value="<?php echo $row["mobileNo"]; ?>" name="mobileNo" id="mobileNo">
            </div>


            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" class="form-control" value="<?php echo $row["email"]; ?>" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="city">CITY:</label>
                <input type="text" class="form-control" value="<?php echo $row["city"]; ?>" name="city" id="city">
            </div>

            <div class="form-group">
                <label for="address">ADDRESS</label>
                <input type="text" class="form-control" value="<?php echo $row["address"]; ?>" name="address" id="address">
            </div>

            <div class="form-group">
                <label for="password">PASSWORD:</label>
                <input type="text" class="form-control" value="<?php echo $row["password"]; ?>" id="password" name="password">
            </div>



            <br>
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <?php

    if (isset($_POST['submit'])) {
        $userName = $_POST['userName'];
        $mobileNo = $_POST['mobileNo'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $birthDate = $_POST['birthDate'];


        $cmd = "update  registeredusers set  userName='$userName', mobileNo='$mobileNo',gender='$gender', email='$email',city='$city',address='$address',password='$password',birthDate='$birthDate' where userId='$id'";

        $result = mysqli_query($con, $cmd);
        if ($result) {
            echo "<script>alert('Record Updated 👍👍')</script>";
        }
    }
    ?>
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