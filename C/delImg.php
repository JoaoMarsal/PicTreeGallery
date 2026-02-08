<?php
    require_once "../M/configImage.php";

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $id = $_POST['nImgId'];
    $email = $_SESSION['email'];
    
    $delQuery = $connImages->query("DELETE FROM images WHERE id = $id AND user_email = '$email'");
    $delQuery;
    header('Location: ../V/Me/user_gallery.php');
?>