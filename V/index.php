<?php
    session_start();
    session_unset();

    $errors = [
        'login' => $_SESSION['login_error'] ?? '',
        'register' => $_SESSION['register_error'] ?? ''
    ];
    $activeForm = $_SESSION['active_form'] ?? 'nLogin';

    session_unset();

    function showError($error) {
        return !empty($error) ? "<p class='error-message'>$error</p>" : '';
    }

    function isActiveForm($formName, $activeForm) {
        return $formName  !== $activeForm ? 'hidden' : '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PicTree - Your place for photos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Hegarty&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/index.css">
    <script src="js/index.js"></script>
</head>
<body>
    <section class="boxes">
        <div id="login" class="divForm <?= isActiveForm('nLogin', $activeForm)?>">
            <h1 class="title">Login</h1>
            <form method="POST" action="../C/login.php">
                <div class="formBox">
                    <?= showError($errors['login'])?>
                    <label for="nName">E-mail:</label>
                    <input class="formInput" type="text" id="nName" placeholder="Email" name="nLoginEmail">
                    <label for="nLoginPassword">Password:</label>
                    <input class="formInput" id="nLoginPassword" type="password" name="nLoginPassword" placeholder="Password">
                    <button type="submit" name="nLogin" class="button">Get in</button>
                    <p>Don't have an account? <a onclick="signUp()">Sign up</a></p>
                </div>
            </form>
        </div>    
        
        <div id="register" class="divForm <?= isActiveForm('nRegister', $activeForm)?>">
            <form method="POST" action="../C/login.php">
            <h1 class="title">Registro</h1>
            <div class="formBox">
                    <?= showError($errors['register'])?>
                    <label for="nName">Username:</label>
                    <input class="formInput" id="nName" type="text" name="nName" placeholder="User name">
                    <label for="nEmail">E-mail:</label>
                    <input class="formInput" id="nEmail" type="text" name="nEmail" placeholder="E-mail">
                    <label for="nPassword">Password:</label>
                    <input class="formInput" id="nPassword" type="password" name="nPassword" placeholder="Password">
                    <button name="nRegister" type="submit" class="button">Sign Up</button>
                    <p>Already have an account?<a onclick="signUp()">Log in</a></p>
                </div>    
            </form>
        </div>
    </section>
</body>
</html>