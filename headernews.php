<?php 
    include "connect.php";
    $sql = "SELECT * FROM `news_information` ORDER BY NEWS_ID DESC";
    $query=mysqli_query($objCon,$sql);

    $sql1 = "SELECT * FROM `news_information` ORDER BY NEWS_ID DESC LIMIT 2";
    $query1=mysqli_query($objCon,$sql1);

?>