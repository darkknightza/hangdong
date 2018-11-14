<?php 
     include "connect.php";
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $sql = "DELETE FROM `news_information` WHERE NEWS_ID = $id";
    $query = mysqli_query($objCon,$sql);
    if($query){
        echo "Success";
    }else{
        echo "Fail";
    }
?>