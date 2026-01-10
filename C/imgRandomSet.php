<?php
    session_start();
    require '../M/configImage.php';

    $GLOBALS['imgNumbers'] = 5;
    $set = $connImages->query("SELECT id, path FROM images where type='0';");
    $arrayBrute = range(1, $set->num_rows);
    shuffle($arrayBrute);
    $sets = array_chunk($arrayBrute, $GLOBALS['imgNumbers']);

?>