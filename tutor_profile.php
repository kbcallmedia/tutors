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

<!-- header area start -->
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">

<center>  <h2> Tutor Form </h2></center>

<form class="row g-3" action="tutor_save.php" method="POST">

<div class="col-md-6">

    <label for="fullname" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="fullname" name="fullname">

  </div>

  <div class="col-md-6">
    <label for="mobile" class="form-label">Mobile No</label>
    <input type="text" class="form-control" id="mobile" name="mobile">
  </div>


  <div class="col-md-4">
    <label for="gender" class="form-label">Gender</label>
    <br>
    <select id="gender" class="form-select">
      <option selected>Male</option>
      <option>Female</option>
    </select>
  </div>


<div class="col-md-4">
<label for="birthdate" class="form-label">Year Of Birth</label>
<input type="text" class="form-control" id="birthdate" name="birthdate">
</div>

<div class="col-md-4">
<label for="experience" class="form-label">Experience</label>
<input type="text" class="form-control" id="experience" name="experience">
</div>


  <div class="col-md-6">

    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">

  </div>

  <div class="col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>

  <div class="col-md-6">
    <label for="yourqualific" class="form-label">Your Qualifications</label>
    <input type="text" class="form-control" id="yourqualific" placeholder="BA" name="yourqualific">
  </div>

  <div class="col-md-6">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address">
  </div>

  <div class="col-md-12">

  <div class="form-check">
  <label for="inputAddress2" class="form-label">Teaching Mode</label>
  <br>
  <input class="form-check-input" name="studenthome" type="checkbox" value="Students Home" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Students Home
  </label>
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  <input class="form-check-input" type="checkbox" name="tutorplace" value="Tutors Place" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Tutors Place
  </label>
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  <input class="form-check-input" type="checkbox" name="online" value="Online" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Online
  </label>

  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  <input class="form-check-input" type="checkbox" name="groupinsti" value="Group/Institute" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Group/Institute
  </label>

  </div>
  </div>



  <div class="col-md-6">
    <label for="city" class="form-label">City</label>
    <input type="text" class="form-control" name="city" id="city">
  </div>

  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <br>
    <select id="inputState" name="state" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>

  <div class="col-md-2">
    <label for="inzip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inzip" name="inzip">
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>

  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>

</div>




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