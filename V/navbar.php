<?php
    $name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/user.css">
    <link rel="stylesheet" href="style/userGallery.css">
    <link href="https://fonts.googleapis.com/css2?family=BBH+Hegarty&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">
    <title>PicTree - Your place for photos</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <a class="textfornav navLink" href="/V/user_page.php">Home</a>
            <a class="textfornav navLink" href="/V/explore.php">Explore</a>
            <div class="textfornav dropdownMe">Me
                <div class="dropdownMe-content">
                    <ul>
                        <li><a href="/V/Me/user_gallery.php" class="navLink">My Gallery</a></li>
                        <li><a href="/V/Me/profile.php" class="navLink">Profile</a></li>
                        <li><a href="/index.php" class="navLink">Change accounts</a></li>    
                    </ul>
                </div>
            </div>
            <a class="textfornav navLink" href="/V/about.php">About us</a>
            <a class="textfornav navLink" href="/V/support.php">Support</a>
        </nav>
    </header>
</body>