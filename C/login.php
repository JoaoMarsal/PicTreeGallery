<?php 
    session_start();
    require_once '../M/config.php';
    
    require_once 'imgRandomSet.php';

    if(isset($_POST['nRegister'])){
        $name = $_POST['nName'];
        $email = $_POST['nEmail'];
        $password = password_hash($_POST['nPassword'], PASSWORD_DEFAULT);

        emailCheck($email);
        passwordVerify($_POST['nPassword']);

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
        $_SESSION['active_form'] = "nLogin";

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
            } else {
                $_SESSION['login_malfunction'] = "Wrong password or e-mail.";
                header('Location: ../V/index.php');
            }
        } else {
            $_SESSION['login_malfunction'] = "Account doesn't exists";
            header('Location: ../V/index.php');
            exit();
        }
    }

    function emailCheck($email){
        $pattern = '/^[a-zA-Z0-9._%+-]+@(?!tempmail\.com$|guerrillamail\.com$|10minutemail\.com$)[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    
        if(!preg_match($pattern, $email)){
            $_SESSION['register_error'] = "E-mail inserted isn't valid";
            $_SESSION['active_form'] = 'nRegister';
            header('Location: ../V/index.php');    
            exit();    
        }     
    }

    function passwordVerify($password){
        $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[#?!@$%^&*-])[A-Za-z\d#?!@$%^&*-]{8,}$/';
    
        if(!preg_match($pattern, $password)){
            $_SESSION['register_error'] = "Something went wrong with password";
            $_SESSION['active_form'] = "nRegister";
            header('Location: ../V/index.php');    
            exit();    
        }     
    }
?>