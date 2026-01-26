<?php 
    require_once '../M/configImage.php';
    
    $exploreImgQuery = $connImages->query(query: "SELECT * FROM images where type=0;");
    $exploreGetImgs = $exploreImgQuery->fetch_all(MYSQLI_ASSOC);
    $exploreImgsSize = $exploreImgQuery->num_rows;
?>