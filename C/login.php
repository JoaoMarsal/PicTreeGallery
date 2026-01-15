<?php 
    session_start();
    require_once '../M/config.php';
    
    require_once 'imgRandomSet.php';



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
        $email = $_POST['nLoginEmail'];
        $password = $_POST['nLoginPassword'];

        $checkUser = $conn->query("SELECT * FROM users WHERE email = '$email'");
        if($checkUser->num_rows > 0){
            $user = $checkUser->fetch_assoc();
            if(password_verify($password, $user['password'])){
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role'] = $user['role'];
                if($_SESSION['role'] === 'admin'){
                    header('Location: ../../V/admin_page.php');
                } else {
                    header('Location: ../../V/user_page.php');
                }
            }
        } else {
            $_SESSION['login_malfunction'] = "Account doesn't exists";
            $_SESSION['active_form'] = "nLogin";
            header('Location: ../V/index.php');
            exit();
        }
    }
?>