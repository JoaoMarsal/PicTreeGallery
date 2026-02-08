<?php
    require_once "../M/configImage.php";

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $id = $_POST['nImgId'];
    $email = $_SESSION['email'];
    
    
?>