
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
</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Student Data</td>
      <td> <a href="student_view.php" tite="View"> View </a> </td>
    
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tutors Data</td>
      <td><a href="tutors_viwe.php" tite="View"> View </a> </td>
    
    </tr>
    
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