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
    <center>  <h2> Student Form </h2></center>

<form class="row g-3" action="student_save.php" method="POST">

<div class="col-md-6">

    <label for="fullname" class="form-label">Full Name</label>
    <input type="text" class="form-control" placeholder="Full Name" id="fullname" name="fullname">

  </div>

  <div class="col-md-6">
    <label for="mobile" class="form-label">Mobile No</label>
    <input type="text" class="form-control" placeholder="Mobile No" id="mobile" name="mobile">
  </div>


  <div class="col-md-4">

    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">

  </div>

<div class="col-md-4">
<label for="classc" class="form-label">Course / Class Category </label>
<input type="text" class="form-control" placeholder="CBSC" id="classc" name="classc">
</div>

<div class="col-md-4">
<label for="subjects" class="form-label">Subjects</label>
<input type="text" class="form-control" placeholder="English" id="subjects" name="subjects">
</div>



<div class="col-md-4">
    <label for="gender" class="form-label">Select Prefered Tutor's Gender</label>
    <br>
    <select id="gender" class="form-select">
    <option selected>Any</option>
      <option selected>Male</option>
      <option>Female</option>
    </select>
  </div>
  

  <div class="col-md-4">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="*****" id="password" name="password">
  </div>

  <div class="col-md-4">
    <label for="reppassword" class="form-label">Repeat Password</label>
    <input type="password" class="form-control" placeholder="*****" id="reppassword" name="reppassword">
  </div>

  <div class="col-md-6">
    <label for="city" class="form-label">Name Of City</label>
    <input type="text" class="form-control" id="city" placeholder="Pune" name="city">
  </div>

  <div class="col-md-6">
    <label for="cityarea" class="form-label">Name Of City Area</label>
    <input type="text" class="form-control" id="cityarea" placeholder="Nirala Bazar" name="cityarea">
  </div>


  
  <div class="col-md-6">

  <div class="form-check">
  <label for="inputAddress2" class="form-label"><b>Select Your Tuition Mode</b></label>
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
  <ul>
  <div class="form-check">
  <label for="inputAddress2" class="form-label"><b>Total No.of Seesion in a week</b></label>
  <br>

  <input class="form-check-input" name="twoseessos" type="checkbox" value="2 Session/classes in a week" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  2 Session/classes in a week
  </label>
 
  <li>
  <input class="form-check-input" type="checkbox" name="threseessos" value="3 Session/classes in a week" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  3 Session/classes in a week
  </label>
 
  </li>

  <li>
    <input class="form-check-input" type="checkbox" name="fourseesion" value="4 Session/classes in a week" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
4 Session/classes in a week

  </label>
  </li>

  <li>
  <input class="form-check-input" type="checkbox" name="fiveseesson" value="5 Session/Classes in a Week" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  5 Session/classes in a week

  </li>
  </label>

<li>
  <input class="form-check-input" type="checkbox" name="sixseesson" value="6 Session/Classes in a Week" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  6 Session/classes in a week
 
  </label>
  </li>


  </div>
  </ul>
  </div>
<br>
  <div class="col-md-6">
    <label for="requirment" class="form-label">Enter Your Requirment</label>
    <input type="text" class="form-control" placeholder="I Need Math Tutor And " name="requirment" id="requirment">
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
    <input type="text" class="form-control" placeholder="43100" id="inzip" name="inzip">
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      You are agred to the terms & condition of AryaTutors.com
      </label>
    </div>
  </div>
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  <div class="col-12">

    <button type="submit" name="submit" class="btn btn-primary">Register Now</button>
  </div>
  
</form>

</div>

&nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;



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