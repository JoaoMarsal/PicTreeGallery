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
    <link href="https://fonts.googleapis.com/css2?family=BBH+Hegarty&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">
    <title>PicTree - Your place for photos</title>
</head>
<body onload="loadInputs()">
    <?php
        include '../navbar.php';
    ?>
    <session>
        <div>
            <form>
                <input type="text" id="name" name="fImgName">
                <input type="text" id="description" name="fImgDescription">
                <input type="radio" name="fImgType" value="0" id="type">
                <input type="radio" name="fImgType" value="1" id="type">
                <input type="radio" name="fImgPrivacy" value="0" id="type">
                <input type="radio" name="fImgPrivacy" value="1" id="type">
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
 
