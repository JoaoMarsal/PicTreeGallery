<?php
    session_start();
    $user = $_SESSION['name'];
    $email = $_SESSION['email'];
    if(isset($_SESSION['insuficientInput'])){
        $error = $_SESSION['insuficientInput'];
    } else {
        $error = '';
    } 
    
    if(isset($_SESSION['alertImage'])){
        $result = $_SESSION['alertImage'];
    }

    //Function for showing errors of input

    function inputError($error){
        return !empty($error) ? "<div id='errorBox'><p>You didn't properly fill in your image data. <br> Error: $error.</p></div>" : '';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/user.css">
    <link href="https://fonts.googleapis.com/css2?family=BBH+Hegarty&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">
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
        <?= inputError($error)?>
        <div id="photo">
            <form id="fileInput" method="POST" action="../../C/submitPicture.php" enctype="multipart/form-data">
                    <div id="flex-img">
                        <div id="imgDiv">
                            <label for="inputImage" id="imgInputStraw">Insert image to be stored here</label>
                            <input type="file" name="imgFile" id="inputImage" accept=".png, .jpeg, .jpg" required>
                        <div id="diagnosis"></div>
                        </div>
                    </div>
                    <div id="flex-rest">
                        <div for="imgNameId">Image's name:
                                <input class="insert" type="text" id="imgNameId" name="imgName" placeholder="Ex: Pretty sunset" required>
                        </div>
                    <div>
                        <label for="imgDescriptionId">Image's description:</label>                
                        <textarea class="insert" placeholder="Ex: The first sunset we saw together" name="imgDescription" id="imgDescriptionId" type="text"></textarea>
                    </div>
                    <div>
                        <label>Core memory?</label>
                        <div><input name="imgType" type="radio" value="1" id="core" required><label for="core">Yes, core indeed.</label></div>
                        <div><input name="imgType" type="radio" value="0" id="trivial" required><label for="trivial">No, trivial.</label></div>
                    </div>
                    <input class="insert" type="submit" value="Submit" name="imageInsert">
                    </div>
                </form>
            </div>
        </session>
        <session id="photos"></session>
    </div>
    <footer></footer>
    <script src="js/user.js">
    </script>
</body>
</html>
