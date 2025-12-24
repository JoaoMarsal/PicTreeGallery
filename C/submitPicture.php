<?php
session_start();
require_once '../M/configImage.php';

if(isset($_POST['imageInsert'])){
    $description = $_POST['imgDescription'];
    $email = $_SESSION['email'];
    $core = $_POST['imgType'];
    $img = $_FILES['imgFile']['tmp_name'];
    $imgBlob = file_get_contents($img);
    
    $conn->query("INSERT INTO images(description, type, user) VALUES ('$description', '$core', '$email')"); //Added url column in table
    $_SESSION['alertaImagem'] = 'Image insertion successfull';
    echo $_SESSION['alertaImagem'];
}
?>