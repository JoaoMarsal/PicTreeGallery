<?php
    session_start();
    require_once '../../C/imgSet.php';

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
    <link href="https://fonts.googleapis.com/css2?family=BBH+Hegarty&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">
    <title>PicTree - Your place for photos</title>
</head>
<body onload="callImages()">
    <?php
        include '../navbar.php';
    ?>
    <div class="hoverBox hidden" onclick="showMetaData()">
        <div class="cardStyle">
            <div>
                <label>Picture's name: </label>
                <span id="imgName"></span> 
            </div>
            <div>
                <label>Picture's type: </label>
                <span id="imgType"></span>
            </div>
            <div>
                <label>Picture's privacy status: </label>
                <span id="imgPrivacy"></span>
            </div>
        </div>
    </div>
    <div id="pageGallery">
        <session>
            <div class="boxTitle">
                <hr id="line">
                <h1 id="title">Explore your saved pictures!</h1>
            </div>
            <div>
                <form method="POST" action="../../C/ImgSet.php">
                    <div id="filterBox">
                        <h1 id="filterTitle">Filter: </h1>
                        <div>
                            <label for="type">
                                Core: 
                            </label>
                            <select name="nType" id="type" onchange="callImages()">
                                <option value="null">...</option>
                                <option value="1">Core pictures</option>
                                <option value="0">Non core pictures</option>
                            </select>
                        </div>
                        <div>
                            <label for="typePrivacy">
                                Privacy: 
                            </label>
                            <select name="nPrivacy" id="typePrivacy" onchange="callImages()">
                                <option value="null">...</option>
                                <option value="1">Public</option>
                                <option value="0">Private</option>
                            </select>
                        </div>
                        <div id="searchBox">
                            <img id="lupa" src="https://cdn-icons-png.flaticon.com/512/54/54481.png" width="10px">
                            <input type="text" id="nameSearch" placeholder="Filtrar por nome..." onkeyup="callImages()">
                        </div>
                    </div>
                </form>
            <div id="UserImages">

            </div>
            </div>
            <hr id="line">
        </session>
    </div>
    <script>
        var paths = [
            <?php 
            foreach($getImgs as $key => $value){
                echo '"'.$getImgs[$key]['path'].'", ';
            }
            ?>
        ];
        var types = [
            <?php
            foreach($getImgs as $key => $value){
                echo '"'.$getImgs[$key]['type'].'", ';
            }
            ?>
        ];
        var names = [
            <?php
            foreach($getImgs as $key => $value){
                echo '"'.$getImgs[$key]['name'].'", ';
            }
            ?>
        ];
        var privacies = [
            <?php
            foreach($getImgs as $key => $value){
                echo '"'.$getImgs[$key]['privacy'].'", ';
            }
            ?>
        ];        
        var imgSize = <?php echo $imgsSize ?>;
    </script>
    <script src="../js/userGallery.js"></script>
</body>
</html>