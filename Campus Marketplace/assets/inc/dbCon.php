<?php
    $servername = "localhost";
    $uname = "opa1958";
    $pwd = "Electrotherapist6\$melolonthidae";
    $db = "opa1958";

    $conn = new mysqli($servername, $uname, $pwd, $db);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
?>