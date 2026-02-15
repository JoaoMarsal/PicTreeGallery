<?php
    session_start();
    require_once '../../C/imgSet.php';

    if(!isset($_SESSION['email'])){ //Separate verifications, seeing if all is right with session
        header('Location: ../../index.php');
    } else if(!isset($_SESSION['role'])){
        header('Location: ../../index.php');
    } else if(!isset($_SESSION['name'])){
        header('Location: ../../index.php');
    }

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $role = $_SESSION['role'];

    if(!isset($_SESSION['edit']['name'])){ //Separate verifications, seeing if all is right with selected image for editing
        header('Location: user_gallery.php');
    } else if(!isset($_SESSION['edit']['description'])){
        header('Location: user_gallery');
    } else if(!isset($_SESSION['edit']['type'])){
        header('Location: user_gallery.php');
    } else if(!isset($_SESSION['edit']['privacy'])){
        header('Location: user_gallery.php');
    }

    $imgName = $_SESSION['edit']['name'];
    $imgDescription = $_SESSION['edit']['description'];
    $imgType = $_SESSION['edit']['type'];
    $imgPrivacy = $_SESSION['edit']['privacy'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/user.css">
    <link rel="stylesheet" href="../style/userGallery.css">
    <link rel="stylesheet" href="../style/edit.css">
    <link href="https://fonts.googleapis.com/css2?family=BBH+Hegarty&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">
    <title>PicTree - Your place for photos</title>
</head>
<body>
    <?php
        include '../navbar.php';
    ?>
    <session>
        <div>
            <form action="../../C/confirmEdit.php" method="POST" id="editForm">
                <div class="margin inputEdit">
                    <label for="name">Image's name:</label>
                    <div>
                    <input type="text" id="name" name="fImgName">
                    <button type="button" class="cancelButton" onclick="recallValueName()">X</button>
                    </div>
                </div>
                <div class="inputEdit margin">     
                    <label for="description">Image's Description:</label>
                    <div>
                        <textarea id="description" name="fImgDescription"></textarea>
                        <button type="button" class="cancelButton" onclick="recallValueDescription()">X</button>
                    </div>    
                </div>
                <div class="margin inputEdit">
                    <label>Image's type:</label>
                    <div>
                        <input type="radio" name="fImgType" value="0" id="type0">
                        <label for="type0">Non-core</label>
                        <input type="radio" name="fImgType" value="1" id="type1">
                        <label for="type1">Core</label>
                        <button type="button" class="cancelButton" onclick="recallValueType()">X</button>
                    </div>    
                </div>
                <div class="margin inputEdit">
                    <label>Privacy:</label>
                    <div>
                        <input type="radio" name="fImgPrivacy" value="0" id="privacy0">
                        <label for="privacy0">Public</label>
                        <input type="radio" name="fImgPrivacy" value="1" id="privacy1">
                        <label for="privacy1">Private</label>
                        <button type="button" class="cancelButton" onclick="recallValuePrivacy()">X</button>
                    </div>    
                </div>
                <div class="margin" id="button">
                    <a id="cancel" href="user_gallery.php">Cancel</a>
                    <button id="confirm" type="submit">Confirm</button>    
                </div>
            </form>
        </div>
    </session>
    <script>
        var imgName = '<?php echo $imgName ?>';
        var imgDescription = '<?php echo $imgDescription ?>';
        var imgType = '<?php echo $imgType ?>';
        var imgPrivacy = '<?php echo $imgPrivacy ?>';
    </script>
    <script src="../js/edit.js">

    </script>
</body>
 
