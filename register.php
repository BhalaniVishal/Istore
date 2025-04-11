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
  <link rel="stylesheet" href="css/register.css">

  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/owl.carousel.css">

  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="style.css">
  <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
  <?php include("inc/header.php"); ?>
  <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
  <form action="#" onSubmit="return checkPassword(this)" method="POST">
    <div class="container">
      <h1 style="color: #5A88CA;">REGISTRATION</h1>

      <label for="userName"><b>Enter User-Name:</b></label>
      <input type="text" placeholder="JohnSmits" name="userName" id="userName" class="form-control" required>

      <label for="gender"><b>Select your Gender:</b></label>
      <input type="radio" name="gender" id="gender" value="male" required checked><b>Male</b>
      <input type="radio" name="gender" id="gender" value="Female" required><b>Female</b><br><br>

      <label for="mobileNo"><b>Enter Mobile NO.:</b></label>
      <input type="tel" name="mobileNo" id="mobileNo" placeholder="0123-456-789" class="form-control" required pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}"><br><br>


      <label for="birthDate"><b>Enter your Date Of Birth:</b></label>
      <input type="date" name="birthDate" class="form-control" id="birthDate" value="birthDate" required><br><br>

      <label for="city"><b>Enter your City:</b></label><br>
      <input type="text" placeholder="enter city" class="form-control" name="city" id="city" required><br><br>

      <label for="address"><b>Enter your Address:</b></label><br>
      <textarea name="address" id="address" class="form-control" cols="100" rows="2"></textarea><br><br>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" class="form-control" name="email" id="email" required pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">

      <label for="password">Password: </label>
      <input type="password" name="password" class="form-control" id="password" required />

      <label for="cpassword">Confirm Password: </label>
      <input type="password" name="cpassword" id="cpassword" class="form-control" required pattern=".{8,}" title="Eight or more characters" />
      <hr>
      <input type="checkbox" id="agrrement" name="agrrement" value="account" required>
      <label for="agrrement"> By creating an account you agree to our <a href="#">Terms & Privacy</a>.</label><br>

      <button type="submit" class="registerbtn" name="submit">Register</button>
    </div>

    <div class="container signin">
      <p>Already have an account? <a href="login.php">Log in</a>.</p>

    </div>
    </div>
  </form><br><br>
  <?php

  if (isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $mobileNo = $_POST['mobileNo'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $birthDate = $_POST['birthDate'];
    $address = $_POST['address'];
    $city = $_POST["city"];
    $password = $_POST["password"];
    // echo $city;
    $query = "insert into registeredusers(userName,mobileNo,gender,email,birthDate,address,city,password) values
        ('$userName','$mobileNo','$gender','$email','$birthDate','$address','$city','$password')";



    $result = mysqli_query($con, $query);
    if ($result) {

      echo "<script>alert('Record Inserted')</script>";
    } else
      echo mysqli_error($con);
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


  <script>
    // 👇 pass the form into the function as a parameter
    function checkPassword(form) {
      // 👇 get passwords from the field using their name attribute
      const password = form.password.value;
      const cpassword = form.cpassword.value;

      // 👇 check if both match using if-else condition
      if (password != cpassword) {
        alert("Error! Password did not match.");
        return false;
      } else {

        return true;
      }
    }
  </script>

  </body>


</html>