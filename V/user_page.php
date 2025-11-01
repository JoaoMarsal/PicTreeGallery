<?php
    session_start();

    $user = $_SESSION['name'];
    $email = $_SESSION['email']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PicTree - Your place for photos</title>
    <?php
        echo 'Oi ', $user; 
    ?>
</head>
<body>
    
</body>
</html>
