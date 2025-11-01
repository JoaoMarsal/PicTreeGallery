<?php
    session_start();

    $user = $_SESSION['name'];
    $email = $_SESSION['email']
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/user.css">
    <title>PicTree - Your place for photos</title>
</head>
<body>
    <header>
        <nav id="navbar">
                <a class="textfornav">Home</a>
                <a class="textfornav">Explore</a>
                <a class="textfornav">Me</a>
                <a class="textfornav">About us</a>
                <a class="textfornav">Support</a>
        </nav>
    </header>
    <session></session>
    <session></session>
    <footer></footer>
</body>
</html>
