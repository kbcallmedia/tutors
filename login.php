<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','u466492238_kbcall','Aryatutors07*','u466492238_kiran') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:dataview.php");
    }
?>
<html>
<head>
<title>User Login</title>

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
    
 
    
    
<form name="frmUser" method="post" action="" align="center">
<div class="message" style="color:red;" ><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>

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