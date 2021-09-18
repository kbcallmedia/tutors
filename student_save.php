<?php
//header("Location:index.php");
?>

<?php
    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
     $birthdate = $_POST['birthdate'];
     $experience = $_POST['experience'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $yourqualific = $_POST['yourqualific'];
     $address = $_POST['address'];
     $studenthome = $_POST['studenthome'];
     $tutorplace = $_POST['tutorplace'];
     $online = $_POST['online'];
     $groupinsti = $_POST['groupinsti'];
     $city = $_POST['city'];
     $inzip = $_POST['inzip'];



     $conn = mysqli_connect("localhost", "root", "", "tutorcrm") or die ("connection failed");

 //$sql = "insert into treatment SET symptoms = '{$symptoms}', medicines ='{$medicines}' WHERE id = {$patient_id}";
$insertquery = "insert into studprof(fullname,mobile,birthdate,experience,email,password,yourqualific,address,studenthome,tutorplace,online,groupinsti,city,inzip)
 VALUES ('$fullname','$mobile','$birthdate','$experience','$email','$password','$yourqualific','$address','$studenthome','$tutorplace','$online','$groupinsti','$city','$inzip')";
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

