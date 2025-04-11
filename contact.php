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
  <link href='/fonts//titillium' rel='stylesheet' type='text/css'>
  <link href='/fonts//Roboto' rel='stylesheet' type='text/css'>

  <link href='/fonts/raleway' rel='stylesheet' type='text/css'>


  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/contact.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <link rel="stylesheet" href="css/contact.css" />
  <!-- <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'/> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->




</head>

<body>
  <?php include("inc/header.php"); ?>
  <br><br>
<h3 style="text-align: center; font-size:xx-large; border:10px solid  #5A88CA; padding:2px; background-color:#5A88CA ;color:white">CONTACT US</h3>

  <center><img src="images\slider\contactus.jpg" ></center>
  <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
  <div style="padding-top: 10px;">
   <center style="color:#5A88CA; font-size:x-large; font-weight: bolder;"> Contact Form</center>
  </div>

  <div class="container">
    <form action="" method="post">
      <label for="fname">Your Name</label>
      <input type="text" id="fname" name="name" placeholder="Your name..">
      
      <label for="email">Your Email</label>
      <input type="email" id="email" name="email" style="width:100%;margin-bottom:10px;" placeholder="Your Email">
      

      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

      <input type="submit" name="submit" value="Submit">
    </form>
  </div>
<?php
  if(isset($_POST["submit"]))
  {
    // echo "<script>alert('hi')</script>";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg = $_POST["subject"];
    // echo $name . $email . $msg;
    $cmd = "insert into inquiry(name,email,msg) values('$name','$email','$msg')";
    $result = mysqli_query($con,$cmd);
  }

?>
  <br><br>
  <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

  <?php include("inc/footer.php"); ?>

  <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>
  <!-- <script src="js/jquery.min.js"></script> -->
  <!-- Bootstrap JS form CDN -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <!-- <script src="/BOOTSTRAP//js/bootstrap.min.js"></script> -->

  <!-- jQuery sticky menu -->
  <script src="../Istore/js/owl.carousel.min.js"></script>
  <script src="../Istore/js/jquery.sticky.js"></script>

  <!-- jQuery easing -->
  <script src="../Istore/js/jquery.easing.1.3.min.js"></script>

  <!-- Main Script -->
  <script src="../Istore/js/main.js"></script>

  <!-- Slider -->
  <script type="text/javascript" src="js/bxslider.min.js"></script>
  <script type="text/javascript" src="js/script.slider.js"></script>

</body>

</html>