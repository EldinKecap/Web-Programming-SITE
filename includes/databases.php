<?php
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "Shop";
    $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    if (!$conn) {
        die("Database connection failed");
    }else {
        // echo "<h1> IT WORKS </h1>";
    }
?>