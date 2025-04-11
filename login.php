<?php
session_start();
?>
<?php include("inc/conn.php"); ?>
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

    <center>
        <h2>Login Form</h2>
    </center>
    <div class="formarea">
        <form action="login.php" method="post">

            <div class="container">
                <label for="uname"><b>Email Id</b></label>
                <input type="text" placeholder="someone@gmail.com" name="email" id="email" required><br>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="password" required>

                <button type="submit" name="Login">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container">
             <a href="index.php" style="color:white">   <button type="button" class="cancelbtn">Cancel  </button></a>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>

            <center>
                <p>Not Having Account <a href="register.php">REGISTER</a>.</p>
            </center>


        </form>
    </div>
    <br><br>
    <?php

    if(isset($_POST["Login"]))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $fetchsql="select * from registeredusers where email='$email'";
        $result=mysqli_query($con,$fetchsql);
        $urow = mysqli_num_rows($result);
        $arow = 0;
        if($row=mysqli_fetch_array($result))
        {
            $upass=$row['password'];
            if($upass==$password)
            {
                $_SESSION['user']=$row;
                echo"<script> window.location.href='index.php'</script>";
            }
            else
            {
                echo"<script>alert('Password Incorrect')</script>";
            }
        }
        else
        {
            $query="select * from admin where name='$email' and password='$password' ";
            $resultadmin=mysqli_query($con,$query);
            $arow = mysqli_num_rows($resultadmin);
            if($rowAdmin=mysqli_fetch_array($resultadmin))
            {
                $_SESSION['admin']=$rowAdmin;
                echo"<script>window.location.href='admin-home.php'</script>";
            }
            else
            {
                echo"<script>alert('invalid email id)</script>";
            }
        }
        if($urow == 0 && $arow == 0)
        {
            echo "<script>alert('Your email Is Not Registered')</script>";
        }
    }
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