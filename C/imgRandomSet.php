<?php
    require_once '../M/configImage.php';

    $_SESSION['imgNumbers'] = 5;
    $set = $connImages->query("SELECT id FROM images WHERE type='0';");
    $arrayBrute = array_column($set->fetch_all(MYSQLI_ASSOC), 'id');
    shuffle($arrayBrute);
    $sets = array_chunk($arrayBrute, $_SESSION['imgNumbers']);
    for($i = 0; $i < $_SESSION['imgNumbers']; $i++){
        $path = $connImages->query("SELECT path FROM images WHERE id='".$sets[0][$i]."';");
        $paths[$i] = $path->fetch_object()->path;
    }
    $_SESSION['imgsPath'] = $paths;
?>