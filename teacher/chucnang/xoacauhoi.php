<?php
    $idch=$_GET['id'];
    $sql="DELETE FROM `bai_tap` WHERE `bai_tap`.`id` = $idch";
    mysqli_query($conn,$sql);
    header('locatin: index.php?page_layout=Luyentap');
?>
