<?php
    require_once '../M/configImage.php';

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }


    $_SESSION['imgNumbers'] = 5;
    $set = $connImages->query("SELECT id FROM images WHERE privacy='1';");
    $arrayBrute = array_column($set->fetch_all(MYSQLI_ASSOC), 'id');
    shuffle($arrayBrute);
    $sets = array_chunk($arrayBrute, $_SESSION['imgNumbers']);
    if(($set -> num_rows) > $_SESSION['imgNumbers']){
        $paths = [];
        for($i = 0; $i < $_SESSION['imgNumbers']; $i++){
            $path = $connImages->query("SELECT path FROM images WHERE id='".$sets[0][$i]."';");
            $paths[$i] = $path->fetch_object()->path;
        }
        $_SESSION['approved'] = "true";
        $_SESSION['imgsPath'] = $paths;
    } else {
        $paths = [];
        $_SESSION['approved'] = "false";
        $_SESSION['imgsPath'] = $paths;    
    }
?>