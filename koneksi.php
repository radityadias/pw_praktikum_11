<?php
    $host = "localhost";
    $username = "root";
    $password = ""; // Add your MySQL root password here
    $database = "crud_mhs_4733";

    // Create connection
    $link = mysqli_connect($host, $username, $password, $database);

    // Check connection
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";
?>