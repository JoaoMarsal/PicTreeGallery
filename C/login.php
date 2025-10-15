<?php 
    $userName = $_POST['nName'];
    $userPass = $_POST['nPass'];

    session_start();
    require_once '../M/config.php';
    
    if(isset($_POST['register']))   {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $checkEmail = $conn->query("SELECT email FROM users WHERE email = '$email'"){
            
        }
    }
?>