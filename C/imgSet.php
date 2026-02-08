<?php 
    require_once '../../M/configImage.php';

    $email = $_SESSION['email'];
    
    $imgQuery = $connImages->query(query: "SELECT * FROM images WHERE user_email='$email'");
    $getImgs = $imgQuery->fetch_all(MYSQLI_ASSOC);
    $imgsSize = $imgQuery->num_rows;
?>