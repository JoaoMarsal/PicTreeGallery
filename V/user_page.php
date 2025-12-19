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
    <div id="page">
        <session id="addPhoto">
            <div id="photo">
            <form id="fileInput" method="POST" action="../../C/submitPicture.php">
                    <div>
                        <input type="file" name="imgFile" id="inputImage" accept=".png, .jpeg, .jpg">
                        <div id="diagnosis">
                        </div>
                    </div>
                    <label for="imgNameId">Image's name:</label>
                    <input type="text" id="imgNameId" name="imgName" placeholder="Ex: Pretty sunset">
                    <label for="imgDescriptionId">Image's description:</label>                
                    <textarea placeholder="Ex: The first sunset we saw together" name="imgDescription" id="imgDescriptionId" type="text"></textarea>
                    <label>Core memory?</label>
                    <div><input name="imgType" type="radio" value="1" id="core"><label for="core">Yes, core indeed.</label></div>
                    <div><input name="imgType" type="radio" value="0" id="trivial"><label for="trivial">No, trivial.</label></div>
                    <input type="submit" value="Submit" name="imageInsert">
                </form>
            </div>
        </session>
        <session id="photos"></session>
    </div>
    <footer></footer>
    <script src="js/user.js"></script>
</body>
</html>
