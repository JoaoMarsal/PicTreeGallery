<?php
    session_start();

    require_once "../C/exploreSet.php";

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

    $imgSize = $exploreImgsSize;
?>
<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/user.css">
    <link rel="stylesheet" href="../style/userGallery.css">
    <link rel="stylesheet" href="style/explore.css">
    <link href="https://fonts.googleapis.com/css2?family=BBH+Hegarty&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">
    <title>PicTree - Your place for photos</title>
</head>
<body  onload="callImgs()">
    <?php
        include 'navbar.php';
    ?>
    <div class="hoverBox hidden" onclick="showMetaData()">
        <div class="cardStyle">
            <div>
                <label>Picture's name: </label>
                <span id="imgName"></span> 
            </div>
            <div>
                <label id="author">Author: </label>
                <span id="imgAuthor"></span>
            </div>
        </div>
    </div>
    <div id="explorePage">
        <section id="exploreSession">
            <div class="boxTitle">
                    <hr id="line">
                    <h1 id="title">Explore more pictures!</h1>
            </div>
            <div id="showImgs">

            </div>
        </section>
    </div>
    <script>
        const paths = [<?php
            for($i = 0; $i < $imgSize; $i++){
                echo '"'.$exploreGetImgs[$i]['path'].'", ';
            }
        ?>];
        const authors = [<?php
            for($i = 0; $i < $imgSize; $i++){
                echo '"'.$exploreGetImgs[$i]['author'].'", ';
            }
        ?>]; //Author needs implementation on DB
        
        const names = [<?php
            for($i = 0; $i < $imgSize; $i++){
                echo '"'.$exploreGetImgs[$i]['name'].'", ';
            }
        ?>];

        const emails = [<?php
            for($i = 0; $i < $imgSize; $i++){
                echo '"'.$exploreGetImgs[$i]['user_email'].'", ';
            }
        ?>];
        
        var imgsLength = <?php echo $exploreImgsSize ?>;
    </script>
    <script src="js/explore.js"></script>
</body>
</html>