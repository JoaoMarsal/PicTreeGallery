<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PicTree - Your place for photos</title>
    <link rel="stylesheet" href="index.css">
    <script src="js/index.js"></script>
</head>
<body>
    <section class="boxes">
        <div id="login" class="divForm">
            <h1 class="title">Login</h1>
            <form method="POST" action="../C/login.php">
                <input class="formInput" type="text" placeholder="Email" name="nLoginEmail">
                <input class="formInput" type="password" name="nLoginPassword" placeholder="Password">
                <button type="submit" name="nLogin">Get in</button>
            </form>
            <p>Don't have an account? <a onclick="signUp()">Sign up</a></p>
        </div>    
        
        <div id="register" class="divForm hidden">
            <h1 class="title">Registro</h1>
            <form method="POST" action="../C/login.php">
                <input class="formInput" type="text" name="nName" placeholder="User name">
                <input class="formInput" type="text" name="nEmail" placeholder="E-mail">
                <input class="formInput" type="password" name="nPassword" placeholder="Password">
                <button name="nRegister" type="submit">Sign Up</button>
            </form>
            <p>Already have an account? <a onclick="signUp()">Log in</a></p>
        </div>
    </section>
</body>
</html>