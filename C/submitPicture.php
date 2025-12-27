<?php
session_start();
require_once '../M/configImage.php';

if(isset($_POST['imageInsert'])){
    $description = $_POST['imgDescription'];
    $email = $_SESSION['email'];
    $core = $_POST['imgType'];
    $name = $_POST['imgName'];
    
    $img = $_FILES['imgFile']['tmp_name']; //Getting the input from the input element
    $imgExt = pathinfo($_FILES['imgFile']['name'], PATHINFO_EXTENSION); //Get image extension
    $imgURL = 'images/'.$name.'.'.$imgExt;
    move_uploaded_file($img, "../$imgURL"); //Moving the input to a folder
    
    $conn->query("INSERT INTO images(name, description, user_email, type, path) VALUES ('$name', '$description', '$email', '$core', '$imgURL')"); //Added url column in table
    $_SESSION['alertaImagem'] = 'Image insertion successfull';
    echo $_SESSION['alertaImagem'];
}
?>