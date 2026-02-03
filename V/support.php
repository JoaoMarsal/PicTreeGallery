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
    <link rel="stylesheet" href="style/support.css">
    <link href="https://fonts.googleapis.com/css2?family=BBH+Hegarty&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">
    <title>PicTree - Your place for photos</title>
</head>
<body>
    <?php
        include 'navbar.php'
    ?>
    <div id="supportPage">
        <session>
            <div class="boxTitle">
                 <h1 id="title">Support</h1>
            </div>
        </session>
        <session id="textSess"> 
            <div class="textBox">
                <p>Hello, welcome to the support page! A type of feedback and helping system of the PicTree website!</p>
            </div>
        </session>
        <div id="emailSess">
            <form action="mailto:ja.mv09052007@gmail.com" method="post" enctype="text/plain">
                <div>
                    <label for="name">Name: </label>
                    <input name="name" id="name" type="text">
                </div>
                <div>
                    <label for="email">Email: </label>
                    <input name="email" id="email" type="text">
                </div>   
                <div>
                    <label for="message">Message:</label>
                    <textarea name="comment" id="message"></textarea>
                </div> 
                <input type="submit" value="Send">
            </form>
        </div>      
    </div>
</body>
</html>