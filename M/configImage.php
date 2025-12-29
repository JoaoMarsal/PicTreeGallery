<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "images_db";

    $connImages = new mysqli($host, $user, $password, $database);

    if($connImages -> connect_error){
        die("Connection faliled: ". $connImages->connect_error);
    } else {
        echo 'connection successful';
    }
?>