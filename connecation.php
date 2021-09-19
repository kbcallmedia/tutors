<?php

$username = "u466492238_kbcall";
$password = "Aryatutors07*";
$server = "localhost";
$database = "u466492238_kiran";


$conn = mysqli_connect($server,$username,$password);
$db = mysqli_select_db($conn,$database);


if($db){
    //echo "Connection Successfull";
    ?>
    <script>
        alert('connection successful');
    </script>
    <?php
}else{
    //echo "No Connection";  next fucation is Advanced
    die("No conencetion" . mysqli_connect_error());
}

?>