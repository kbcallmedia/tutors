<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas Basic -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="description" content="Arya Tutors - Education Services School Template"/>
    <meta name="keywords" content="Landing Page, Services, Learning"/>
    <meta name="author" content="Ioan Drozd"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>Arya Tutors-Find Home Tutors and Coaching Center Near You</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/LogoATR1.png" type="image/x-icon">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    
    <!-- owl carousel theme default CSS file -->
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- owl carousel CSS file -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Main Custom CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Slick  -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- jQuery Fancybox  -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="css/magnific-popup.css">
</head>
<body>
<!-- header area start -->

<?php echo $login_session; ?>

<?php include 'header.php';?>

<?php

include 'connecation.php';

$sql = "SELECT * FROM tutorprof ORDER BY id DESC";

$result = mysqli_query($conn, $sql) or die ("Query Failed");

//$row = mysqli_fetch_assoc($result);
//echo "<pre>";
//print_r($row);
//echo"</pre>";

?>

<!-- header area start -->
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">
    
    <?php
if($_SESSION["name"]) {
?>

Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.



<table class="table table-bordered">
  <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Exprince</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Qualification</th>
      <th scope="col">Address</th>
      <th scope="col">Teaching Mode</th>
      <th scope="col">City</th>
      <th scope="col">Zip Code</th>
    </tr>
  </thead>

  <?php

while($row = mysqli_fetch_assoc($result)){
 // echo $row['firstName'] . " " . $row['middleName']. "<br>";
?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id']; ?> </th>
      <td><?php echo $row['fullname']; ?></td>
      <td><?php echo $row['mobile']; ?></td>
      <td><?php echo $row['experience']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['password']; ?></td>
      <td><?php echo $row['yourqualific']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['studenthome']; ?> <br><?php echo $row['tutorplace']; ?>
      
       <br><?php echo $row['online']; ?>  <br><?php echo $row['groupinsti']; ?>  </td>
       <td><?php echo $row['city']; ?></td>
       <td><?php echo $row['inzip']; ?></td>
      
    </tr>


 <?php

}

?>
  </tbody>
</table>



<?php
}else echo "<h1>Please login first .</h1>";
?>


<!-- #footer area end -->

<?php include 'footer.php';?>

<!-- #footer area end -->

    <!-- JavaScript File -->
    <!-- jQuery -->
    <script src='js/jquery-3.4.1.min.js'></script>
    <!-- Main -->
    <script src='js/main.js'></script>
    <!-- Bootstrap -->
    <script src='js/bootstrap.min.js'></script>
    <!-- Slick -->
    <script src='js/slick.min.js'></script>
    <!-- Fancybox -->
    <script src='js/jquery.fancybox.pack.js'></script>
    <!-- Magnific Popup core JS file -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Waypoints -->
    <script src='js/waypoints.min.js'></script>
    <!-- Counterup -->
    <script src='js/jquery.counterup.min.js'></script>
    <!-- owl carousel -->
    <script src='js/owl.carousel.min.js'></script>
    <!-- Typed Animation Library -->
    <script src="js/typed.min.js"></script>
    <!-- Cursor Library -->
    <script src="js/cursor.js"></script>

</body>
</html>