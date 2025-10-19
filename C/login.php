<?php 
    session_start();
    require_once '../M/config.php';
    
    if(isset($_POST['nRegister'])){
        $name = $_POST['nName'];
        $email = $_POST['nEmail'];
        $password = password_hash($_POST['nPassword'], PASSWORD_DEFAULT);

        $checkEmail = $conn->query("SELECT email FROM users WHERE email = '$email'");
        if($checkEmail->num_rows > 0){
            $_SESSION['register_error'] = 'Email is already registered';
            $_SESSION['active_form'] = 'nRegister';
        } else {
            $conn->query("INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', 'user')");
        }

        header("Location: ../V/index.php");
        exit();
    }


//    
//     if($checkEmail->num_rows == 0){
//      }
?>