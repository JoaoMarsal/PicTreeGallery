<?php
session_start();
require_once '../M/configImage.php';
require_once '../M/config.php';

if(isset($_POST['imageInsert'])){
    $description = $_POST['imgDescription'];
    $email = $_SESSION['email'];
    $core = $_POST['imgType'];
    $name = $_POST['imgName'];
    
    //Image manipulation
    $img = $_FILES['imgFile']['tmp_name']; //Getting the input from the input element
    $imgExt = pathinfo($_FILES['imgFile']['name'], PATHINFO_EXTENSION); //Get image extension

    //Checking for inputs values
    if($_FILES['imgFile']['error'] === UPLOAD_ERR_NO_FILE){
        $_SESSION['insuficientInput'] = 'imageNotUploaded';
        header('Location: ../V/user_page.php');
        exit();
    } else if(!($imgExt == 'png' or $imgExt == 'jpeg' or $imgExt == 'jpg')){
        $_SESSION['insuficientInput'] = 'invalidFileType';
        header('Location: ../V/user_page.php');
        exit();
    } else if($name === ''){
        $_SESSION['insuficientInput'] = 'nameNotUploaded';
        header('Location: ../V/user_page.php');
        exit();
    } else if($email === ''){
        $_SESSION['insuficientInput'] = 'unregisteredEmail';
        header('Location: ../V/user_page.php');
        exit();
    } else if(!($core == "0" or $core == "1")){
        $_SESSION['insuficientInput'] = 'coreNotUploaded';
        header('Location: ../V/user_page.php');
        exit();
    } 
    //Email used exists
    $emailCheck = $conn->query("SELECT * FROM `users` where email = '$email';");
    if($emailCheck->num_rows < 1){
        $_SESSION['insuficientInput'] = 'unregisteredEmail';
        header('Location: ../V/user_page.php');
        exit();
    }
    
    //Saving image
    $imgURL = 'images/'.$name.'.'.$imgExt;
    move_uploaded_file($img, "../$imgURL"); //Moving the input to a folder
    
    $connImages->query("INSERT INTO images(name, description, user_email, type, path) VALUES ('$name', '$description', '$email', '$core', '$imgURL')"); //Added url column in table
    $_SESSION['alertImage'] = 'Image insertion successfull';
    header('Location: ../V/user_page.php');
    exit();
}
?>