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
                                    <th colspan=2 class="bg-primary">USER DETAILS</th>
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
                                $id =$_SESSION['user']['userId'];
                                $sql = "select * from registeredusers where userId='$id'";
                                $result = mysqli_query($con, $sql);
                                $row = mysqli_fetch_array($result);
                                ?>
                               

                                <tr class="text-dark">
                                    <td>Name</td>
                                    <td><?php echo $row['userName']; ?></td>

                                <tr class="text-dark">
                                    <td>Gender</td>
                                    <td><?php echo $row['gender']; ?></td>

                                <tr class="text-dark">
                                    <td>Date Of Birth </td>
                                    <td><?php echo $row['birthDate']; ?></td>

                                <tr class="text-dark">
                                    <td>Address</td>
                                    <td><?php echo $row['address']; ?></td>

                                <tr class="text-dark">
                                    <td>Mobile Number</td>
                                    <td><?php echo $row['mobileNo']; ?></td>

                                <tr class="text-dark">
                                    <td>Email Address</td>
                                    <td><?php echo $row['email']; ?></td>

                                <tr>
                                    <td colspan=2><a href="user-order-view.php" class="btn btn-warning">My Order</a></td>
                                </tr>

                                <tr class="text-dark">
                                    <td><a href='profile-update.php' class="btn btn-success">Update Profile</a></td>
                                    <td><a href='logout.php' class="btn btn-danger"> Log Out </a></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php





    ?>



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