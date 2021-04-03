<?php
    $host ="localhost";
    $userhost= "root";
    $passwordhost="0916707156";
    $db = "bai3";

    $conn = new mysqli($host,$userhost,$passwordhost,$db);

    if($conn->connect_error)
    {
        die("Connect Fail");
    }
    // da xoa dong nay
?>