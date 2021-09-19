<?php
header("Location:index.php");
?>

<?php include 'connecation.php';?>

<?php
    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
     $gender = $_POST['gender'];
     $classc = $_POST['classc'];
     $subjects = $_POST['subjects'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $city = $_POST['city'];
     $cityarea = $_POST['cityarea'];
     $studenthome = $_POST['studenthome'];
     $tutorplace = $_POST['tutorplace'];
     $online = $_POST['online'];
     $groupinsti = $_POST['groupinsti'];
     $twoseessos = $_POST['twoseessos'];
     $threseessos = $_POST['threseessos'];
     $fourseesion = $_POST['fourseesion'];
     $fiveseesson = $_POST['fiveseesson'];
     $requirment = $_POST['requirment'];
     $state = $_POST['state'];
     $inzip = $_POST['inzip'];



//$conn = mysqli_connect("localhost", "root", "", "tutorcrm") or die ("connection failed");

 //$sql = "insert into treatment SET symptoms = '{$symptoms}', medicines ='{$medicines}' WHERE id = {$patient_id}";
$insertquery = "insert into studprof(fullname,mobile,gender,classc,subjects,email,password,city,cityarea,studenthome,tutorplace,online,groupinsti,twoseessos,threseessos,fourseesion,fiveseesson,requirment,state,inzip)
 VALUES ('$fullname','$mobile','$gender','$classc','$subjects','$email','$password','$city','$cityarea','$studenthome','$tutorplace','$online','$groupinsti','$twoseessos','$threseessos','$fourseesion','$fiveseesson','$requirment','$state','$inzip')";
$res = mysqli_query($conn, $insertquery) or die("Query Unsuccessful."); 
    if($res){
        ?>

        <script>
            alert("data inserted properly");
        </script>

        <?php 
    }else{
        ?>

         <script>
            alert("data not inserted properly");
        </script>

        <?php
    }
    
?>

<?php


mysqli_close($conn);
  
?>

