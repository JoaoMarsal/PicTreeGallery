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
            $_SESSION['register_success'] = "Your account was created";
            $_SESSION['active_form'] = 'nLogin';
        }

        header("Location: ../V/index.php");
        exit();
    }

    if(isset($_POST["nLogin"])){
        $name = $_POST['nName'];
        $password = password_hash($_POST["nPassword"], PASSWORD_DEFAULT);

        $checkUser = $conn->query("SELECT * FROM users WHERE name = '$name' AND password = '$password'");
        if($checkUser->num_rows == 0){
            $_SESSION['login_malfunction'] = "Account doesn't exists";
            $_SESSION['active_form'] = "nLogin";
        } else {
            //Password_verification
        }
    }
?>