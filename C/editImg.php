<?php
    require_once '../M/configImage.php';

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $id = $_POST['nImgId'];
    $email = $_SESSION['email'];
    
    $editComponentsQuery = $connImages->query("SELECT * FROM images WHERE id = $id AND user_email = '$email'");
    $getComponents = $editComponentsQuery->fetch_assoc();
    $_SESSION['edit']['name'] = $getComponents['name'];
    $_SESSION['edit']['description'] = $getComponents['description'];
    $_SESSION['edit']['name'] = $getComponents['name'];
    $_SESSION['edit']['type'] = $getComponents['type'];
    $_SESSION['edit']['privacy'] = $getComponents['privacy'];
    $_SESSION['edit']['id'] = $getComponents['id'];
    if($editComponentsQuery->num_rows > 0){
        header('Location: ../V/Me/edit.php');
    } else {
        header("Location: ../V/Me/user_gallery.php");
    }
?>