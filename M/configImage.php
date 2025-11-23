<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "images_db";

    $conn = new mysqli($host, $user, $password, $database);

    if($conn -> connect_error){
        die("Connection faliled: ". $conn->connect_error);
    } else {
        echo 'connection successful';
    }
?>