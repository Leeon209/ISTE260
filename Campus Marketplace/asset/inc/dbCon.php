<?php
    $servername = "localhost";
    $uname = "lsn3369";
    $pwd = "Deaf+Gamer209";
    $db = "lsn3369";

    $conn = new mysqli($servername, $uname, $pwd, $db);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
?>