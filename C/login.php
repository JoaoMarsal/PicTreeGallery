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
        $password = $_POST['nPassword'];

        $checkUser = $conn->query("SELECT * FROM users WHERE name = '$name' AND password = '$password'");
        if($checkUser->num_rows > 0){
            $user = $checkUser->fetch_assoc();
            if(password_verify($password, $user['name'])){
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                if($user['role'] === 'admin'){
                    header('Location: admin_page.php');
                } else {
                    header('Location: user_page.php');
                }
            }
        } else {
            $_SESSION['login_malfunction'] = "Account doesn't exists";
            $_SESSION['active_form'] = "nLogin";
        }
    }
?>