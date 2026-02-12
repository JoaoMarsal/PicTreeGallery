<?php
    require_once "../M/configImage.php";

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $newName = $_POST['fImgName'];
    $newDescription = $_POST['fImgDescription'];
    $newType = $_POST['fImgType'];
    $newPrivacy = $_POST['fImgPrivacy'];
    $id = $_SESSION['edit']['id'];

    $testId = $connImages->query("SELECT * FROM images where id = $id");
    if($testId->num_rows == 1){
        $editQuery = $connImages->query("UPDATE images SET name = '$newName', description = '$newDescription', type = $newType, privacy = '$newPrivacy' WHERE id = $id");
        header('Location: ../V/Me/user_gallery.php');
    } else {
        $_SESSION ['error']['edit'] = "Couldn't find image in database";
        header('Location: ../V/Me/edit.php');
    }
?>