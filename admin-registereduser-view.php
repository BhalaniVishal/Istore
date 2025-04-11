<?php
 include("inc/conn.php"); 
 if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];
    $qdelete = "delete from registeredusers where userId=$userId";
    $result = mysqli_query($con, $qdelete);
  }
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
    <?php include("inc/adminheader.php"); ?>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <br><br>

    <div class="container">
    <h1 style="color:#5A88CA">REGISTERED USER VIEW</h1>
    <table class="table">



        <thead>
            <tr scope="row">
                <th scope="col">USER ID</th>
                <th scope="col">USER NAME</th>
                <th scope="col">CONTACT NO.</th>
                <th scope="col">GENDER</th>
                <th scope="col">DOB</th>
                <th scope="col">ADDRESS</th>
                <th scope="col">CITY</th> 
                <th scope="col">EMAIL</th>
                <th scope="col">PASSWORD</th>
                <th scope="col">CONTROLS</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $query="Select * from registeredusers ";
            $result=mysqli_query($con,$query);
            while($row=mysqli_fetch_array($result))
            {
            ?>
             <tr class="w-100 p-3">


                <td><?php echo $row['userId']  ?></td>
                <td><?php echo $row['userName']    ?></td>
                <td><?php echo $row['mobileNo']    ?></td>
                <td><?php echo $row['gender']    ?></td>
                <td><?php echo $row['birthDate']    ?></td>
                <td><?php echo $row['address']    ?></td>
                <td><?php echo $row['city']    ?></td>
                <td><?php echo $row['email']    ?></td> 
                <td><?php echo $row['password']    ?></td>


<td>
    <!-- <a  href="regusers-edit.php?id=<?php echo $row['userId'] ?>"><button type="button" class="btn btn-primary ">EDIT</button></a> -->
    <a onclick='return confirm(" DO YOU WANT TO DELETE THIS RECORD PERMENENTLY???")' href="admin-registereduser-view.php?userId=<?php echo $row['userId'] ?>"> <button type="button" class="btn btn-danger "> REMOVE USER</button></a>
</td>
</tr>
<?php
}
?>
        </tbody>
    </table>
    </div>
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