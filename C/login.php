<?php 
    $userName = $_POST['nName'];
    $userPass = $_POST['nPass'];

    session_start();
    require_once '../M/config.php';
    
    if(isset($_POST['register']))   {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $checkEmail = $conn->query("SELECT email FROM users WHERE email = '$email'");
        if($checkEmail -> num_rows > 0){
            $_SESSION['register_error'] = 'This email is aleady in use!';
            $_SESSION['active_form'] = 'register';
        } else {
            $conn->query("INSERT INTO users(name, email, password, role) VALUES ('$name', '$email', '$password', 'user')");
        }

        header('Location: index.php');
        exit();
    }

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $checkEmail = $conn->query("SELECT * FROM users WHERE email = '$email'");
        if($checkEmail -> num_rows > 0){
            
        }
    }
?>