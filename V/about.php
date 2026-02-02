<?php
    session_start();

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $role = $_SESSION['role'];

    if(!isset($_SESSION['email'])){ //Separate verifications, seeing if all is right with session
        header('Location: ../../index.php');
    } else if(!isset($_SESSION['role'])){
        header('Location: ../../index.php');
    } else if(!isset($_SESSION['name'])){
        header('Location: ../../index.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/user.css">
    <link rel="stylesheet" href="../style/userGallery.css">
    <link rel="stylesheet" href="style/about.css">
    <link href="https://fonts.googleapis.com/css2?family=BBH+Hegarty&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">
    <title>PicTree - Your place for photos</title>
</head>
<body>
    <?php
        include 'navbar.php'
    ?>
    <div id="aboutPage">
        <session>
            <div class="boxTitle">
                        <h1 id="title">About us</h1>
    </div>
        </session>
        <session id="textSess">
            <div class="textBox">
                <p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PicTree is a web picture repository developed with Php and Javascript intercom. It uses database technology to store images filepaths
and just enough Javascript to store and display said images. With PicTree, users can store, share and display any image they want. All it takes is a quick file input available
at the <a href="user_page.php">Home page</a>.</p>
    <br>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;But it doesn't stop there, PicTree also keeps track of an image's relevance through its core value, allowing users to filter
and search their own images database. PicTree also has an explore system, where you can hover around other users images, as long as they are not private.
                </p>
                <br>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For all intents and purposes, PicTree strives to reivent image storage and rescue the feeling of looking for a picture in an old album.
PicTree wants your pictures to become more than files, they need to be memories, and to do that, they need to be treated well.
                 
                </p>
            </div>
        </session>
    </div>
</body>
</html>